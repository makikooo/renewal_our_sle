'use strict'

/*******************************************
 * いま、気になること：あなたへのおすすめ
 *
 * 1) すべてのページで、見たページ（URLのスラッグ）を
 *    ブラウザに記録する（localStorage の閲覧履歴）。
 * 2) 各ページの「タグ：」に並ぶ #ハッシュタグも記録する。
 *    タグ文字列を TAG_SLUG_MAP でスラッグに読み替え、
 *    「タグ閲覧履歴」として localStorage に貯める。
 * 3) タグは「候補プール」（多めに）出力しておき、
 *    「閲覧履歴」「見たタグ（スラッグ一致）」「人気ページ順
 *    （サーバー集計の閲覧数 data-views）」を合わせて点数化する。
 *    その人向けの上位 DISPLAY_COUNT 個だけを表示し、残りは隠す。
 *    表示した中の上位を「おすすめ」として強調する。
 *    初回・判断材料が無いときは、プール先頭の既定タグが表示される。
 *
 * 強調は静かな光彩のみ（点滅なし）。体調のすぐれない方にも配慮。
 *******************************************/

;(function () {
  var STORAGE_KEY = 'oursle_history'
  var TAG_STORAGE_KEY = 'oursle_tag_interest'
  var HISTORY_MAX = 20 // 記録しておく直近の閲覧ページ数
  var TAG_MAX = 40 // 記録しておく直近の「見たタグ」スラッグ数
  var DISPLAY_COUNT = 7 // 候補プールから実際に表示するタグ数
  var HIGHLIGHT_COUNT = 2 // 履歴や人気から判断できるときに強調する数
  var HIGHLIGHT_COUNT_DEFAULT = 4 // 初回・閲覧数ゼロなど判断材料がないときに強調する数
  var HISTORY_WEIGHT = 2 // 履歴で見たページへの加点（人気より優先させる）
  var TAG_WEIGHT = 1.5 // 見たタグ（スラッグ一致）への加点

  // 各ページの「タグ：」に並ぶ #ハッシュタグ → いま気になることのスラッグ。
  // ここは編集して構いません（タグ語を増減・付け替えるだけ）。
  // 左辺は表示ラベルから先頭の「#」と前後の空白を除いた文字列。
  // 対応するページが無いタグ（#仲間さがし 等）は載せなければ無視されます。
  var TAG_SLUG_MAP = {
    // SLEとは
    'SLEとは': 'about-sle',
    'SLEについて': 'about-sle',
    '免疫': 'about-sle',
    '膠原病': 'about-sle',
    // 症状
    'SLEの症状': 'symptoms',
    '症状': 'symptoms',
    '全身': 'symptoms',
    '皮膚': 'symptoms',
    '皮疹': 'symptoms',
    '粘膜': 'symptoms',
    '筋肉': 'symptoms',
    '関節': 'symptoms',
    '関節痛': 'symptoms',
    '腎臓': 'symptoms',
    '肺': 'symptoms',
    '心臓': 'symptoms',
    '心臓・肺': 'symptoms',
    '神経': 'symptoms',
    '中枢神経': 'symptoms',
    '血液': 'symptoms',
    '発熱': 'symptoms',
    // 治療
    'SLEの治療': 'treatment',
    '治療方法': 'treatment',
    'お薬': 'treatment',
    'ステロイド': 'treatment',
    'グリオコルチコイド': 'treatment',
    '免疫抑制剤': 'treatment',
    '免疫調整剤': 'treatment',
    '生物学的製剤': 'treatment',
    'ベンリスタ': 'treatment',
    'プラケニル': 'treatment',
    '外用薬': 'treatment',
    // 検査結果
    '検査結果': 'results',
    '血液検査': 'results',
    '尿検査': 'results',
    '免疫学的検査': 'results',
    '炎症反応': 'results',
    '補体': 'results',
    // 合併症
    '合併症': 'complications',
    'ループス腎炎': 'complications',
    '骨': 'complications',
    '骨粗しょう症': 'complications',
    '血栓': 'complications',
    '感染症': 'complications',
    // 受診の目安
    '再燃': 'care-guide',
    '再燃の指標': 'care-guide',
    '受信サイン': 'care-guide',
    // 妊娠・出産
    '妊娠': 'pregnancy',
    '出産': 'pregnancy',
    // こころ
    'こころ': 'kokoro-care',
    'メンタル': 'kokoro-care',
    // 学校・仕事
    '学校': 'school-job',
    '仕事': 'school-job',
    // 生活のコツ
    'くらし': 'sle-life-tips',
    '生活のコツ': 'sle-life-tips',
    'SLEと付き合う': 'sle-life-tips',
    // 医師
    '医師との信頼関係': 'doctor',
    '通院': 'doctor',
    // 受給者票・登録証
    '特定疾患受給者票': 'jukyuusyahyou',
    '受給者票': 'jukyuusyahyou',
    '難病登録証': 'tourokusyou',
    '難病': 'tourokusyou',
    // 医療費の制度
    '制度': 'system',
    '高額療養費': 'system',
    '医療費控除': 'system',
    '確定申告': 'system',
    '自立支援医療': 'system',
    '減免': 'system',
    '指定難病の医療費助成': 'system',
    '市区町村': 'system',
    // 手当
    '難病手当': 'nanbyouteate',
    '傷病手当': 'nanbyouteate',
    // よくある質問
    'よくある質問': 'faq'
  }

  // 現在ページのスラッグを取得（/symptoms/ → symptoms）
  function currentSlug () {
    var parts = window.location.pathname.split('/').filter(Boolean)
    return parts.length ? parts[parts.length - 1] : ''
  }

  function readList (key) {
    try {
      var arr = JSON.parse(window.localStorage.getItem(key))
      return Array.isArray(arr) ? arr : []
    } catch (e) {
      return []
    }
  }

  function saveList (key, arr) {
    try {
      window.localStorage.setItem(key, JSON.stringify(arr))
    } catch (e) {
      /* localStorage が使えない環境では何もしない */
    }
  }

  // Cookie利用に同意済みか（同意バナーで '1' を保存）。未選択・拒否なら記録しない。
  function hasConsent () {
    return /(?:^|;\s*)oursle_consent=1(?:;|$)/.test(document.cookie)
  }

  // このページの「タグ：」に並ぶ #ハッシュタグ → スラッグ配列に変換。
  function pageTagSlugs () {
    var slugs = []
    var anchors = document.querySelectorAll('.category a')
    Array.prototype.forEach.call(anchors, function (a) {
      var label = (a.textContent || '').replace(/^#/, '').trim()
      var mapped = TAG_SLUG_MAP[label]
      if (mapped && slugs.indexOf(mapped) === -1) {
        slugs.push(mapped)
      }
    })
    return slugs
  }

  var consented = hasConsent()

  // --- 1) 閲覧履歴を記録（同意した閲覧者のみ・全ページ） ---
  var slug = currentSlug()
  if (slug && consented) {
    var history = readList(STORAGE_KEY).filter(function (s) {
      return s !== slug // 同じページは末尾（最新）に入れ直す
    })
    history.push(slug)
    if (history.length > HISTORY_MAX) {
      history = history.slice(history.length - HISTORY_MAX)
    }
    saveList(STORAGE_KEY, history)
  }

  // --- 2) このページの「見たタグ」を記録（同意した閲覧者のみ） ---
  if (consented) {
    var seenTags = pageTagSlugs()
    if (seenTags.length) {
      var tagHist = readList(TAG_STORAGE_KEY).filter(function (s) {
        return seenTags.indexOf(s) === -1 // 同じタグは末尾（最新）に入れ直す
      })
      tagHist = tagHist.concat(seenTags)
      if (tagHist.length > TAG_MAX) {
        tagHist = tagHist.slice(tagHist.length - TAG_MAX)
      }
      saveList(TAG_STORAGE_KEY, tagHist)
    }
  }

  // --- 3) おすすめ7個の選定と強調（このセクションがあるページ） ---
  var wrapper = document.querySelector('.concern__wrapper')
  if (!wrapper) {
    return // このセクションが無いページでは何もしない
  }

  var links = Array.prototype.slice.call(
    wrapper.querySelectorAll('.concern__link')
  )
  if (!links.length) {
    return
  }

  var visited = readList(STORAGE_KEY)
  var tagInterest = readList(TAG_STORAGE_KEY)

  // 末尾（＝最新）ほど 1 に近い重みでスコア化する共通関数。
  function recencyScore (arr, target, weight) {
    var idx = arr.lastIndexOf(target)
    if (idx === -1) {
      return 0
    }
    return weight * ((idx + 1) / arr.length) // 0より大きく1以下 × 重み
  }

  // 履歴スコア：見たページほど高い
  function historyScore (target) {
    return recencyScore(visited, target, HISTORY_WEIGHT)
  }

  // タグスコア：見たタグ（スラッグ一致）ほど高い
  function tagScore (target) {
    return recencyScore(tagInterest, target, TAG_WEIGHT)
  }

  // 人気スコア：閲覧数を最大値で正規化（0〜1）
  var maxViews = 0
  links.forEach(function (link) {
    var v = parseInt(link.getAttribute('data-views'), 10) || 0
    if (v > maxViews) {
      maxViews = v
    }
  })

  var scored = links.map(function (link, i) {
    var target = link.getAttribute('data-target') || ''
    var views = parseInt(link.getAttribute('data-views'), 10) || 0
    var popularity = maxViews > 0 ? views / maxViews : 0
    return {
      link: link,
      score: historyScore(target) + tagScore(target) + popularity,
      order: i
    }
  })

  // スコア降順（同点は元の並び順を保持）。
  // 初回訪問・閲覧数ゼロのときは全員スコア0となり、プール先頭（既定）から選ばれる。
  scored.sort(function (a, b) {
    return b.score !== a.score ? b.score - a.score : a.order - b.order
  })

  var hasSignal = scored.length > 0 && scored[0].score > 0

  // 候補プールのうち上位 DISPLAY_COUNT 個だけ表示し、残りは隠す（flexで詰まる）。
  var shown = scored.slice(0, DISPLAY_COUNT)
  for (var j = DISPLAY_COUNT; j < scored.length; j++) {
    scored[j].link.style.display = 'none'
  }

  // 表示した中の上位を「おすすめ」として強調。判断材料が無いときは多めに。
  var highlightCount = hasSignal ? HIGHLIGHT_COUNT : HIGHLIGHT_COUNT_DEFAULT
  var recommended = shown.slice(0, highlightCount)

  // 必要なスタイルを自己完結で注入（静かな光彩のみ）。
  var style = document.createElement('style')
  style.textContent =
    '.concern__link.is-recommend .concern__tag{filter:drop-shadow(0 0 9px rgba(113,147,109,.9));}'
  document.head.appendChild(style)

  wrapper.classList.add('has-recommend')
  recommended.forEach(function (s) {
    s.link.classList.add('is-recommend')
  })
})()
