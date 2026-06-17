'use strict'

/*******************************************
 * いま、気になること：あなたへのおすすめ
 *
 * 1) すべてのページで、見たページ（URLのスラッグ）を
 *    ブラウザに記録する（localStorage の閲覧履歴）。
 * 2) トップページでは、その「閲覧履歴」と「人気ページ順
 *    （サーバー集計の閲覧数 data-views）」を合わせてスコアを計算し、
 *    上位のタグをやさしく強調する（光彩＋ほかを少し控えめに）。
 *
 * このセクションは各タグがCSSで散らばして絶対配置されているため、
 * 並べ替えではなく「強調」でおすすめを表現する。
 *
 * 体調のすぐれない方も見るサイトのため、強い点滅は避け、
 * prefers-reduced-motion 指定時は動き（ゆらぎ）を止める。
 *******************************************/

;(function () {
  var STORAGE_KEY = 'oursle_history'
  var HISTORY_MAX = 20 // 記録しておく直近の閲覧ページ数
  var HIGHLIGHT_COUNT = 2 // 履歴や人気から判断できるときに強調する数
  var HIGHLIGHT_COUNT_DEFAULT = 4 // 初回・閲覧数ゼロなど判断材料がないときに強調する数
  var HISTORY_WEIGHT = 2 // 履歴で見たページへの加点（人気より優先させる）

  // 現在ページのスラッグを取得（/symptoms/ → symptoms）
  function currentSlug () {
    var parts = window.location.pathname.split('/').filter(Boolean)
    return parts.length ? parts[parts.length - 1] : ''
  }

  function readHistory () {
    try {
      var arr = JSON.parse(window.localStorage.getItem(STORAGE_KEY))
      return Array.isArray(arr) ? arr : []
    } catch (e) {
      return []
    }
  }

  function saveHistory (arr) {
    try {
      window.localStorage.setItem(STORAGE_KEY, JSON.stringify(arr))
    } catch (e) {
      /* localStorage が使えない環境では何もしない */
    }
  }

  // --- 1) 閲覧履歴を記録（全ページ） ---
  var slug = currentSlug()
  if (slug) {
    var history = readHistory().filter(function (s) {
      return s !== slug // 同じページは末尾（最新）に入れ直す
    })
    history.push(slug)
    if (history.length > HISTORY_MAX) {
      history = history.slice(history.length - HISTORY_MAX)
    }
    saveHistory(history)
  }

  // --- 2) トップページのおすすめ強調 ---
  var wrapper = document.querySelector('.concern__wrapper')
  if (!wrapper) {
    return // トップページ以外では強調しない
  }

  var links = Array.prototype.slice.call(
    wrapper.querySelectorAll('.concern__link')
  )
  if (!links.length) {
    return
  }

  var visited = readHistory()

  // 履歴スコア：見たページほど高い（末尾＝最新ほど 1 に近い重み）
  function historyScore (target) {
    var idx = visited.lastIndexOf(target)
    if (idx === -1) {
      return 0
    }
    var recency = (idx + 1) / visited.length // 0より大きく1以下
    return HISTORY_WEIGHT * recency
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
    return { link: link, score: historyScore(target) + popularity, order: i }
  })

  // スコア降順（同点は元の並び順を保持）。
  // 初回訪問・閲覧数ゼロのときは全員スコア0となり、先頭から既定で選ばれる。
  scored.sort(function (a, b) {
    return b.score !== a.score ? b.score - a.score : a.order - b.order
  })

  // 履歴も閲覧数も無く全員スコア0のとき（初回・閲覧数ゼロ）は、
  // 判断材料がないので強調する数を増やす。
  var count = scored[0].score > 0 ? HIGHLIGHT_COUNT : HIGHLIGHT_COUNT_DEFAULT
  var recommended = scored.slice(0, count).map(function (s) {
    return s.link
  })

  // 必要なスタイルを自己完結で注入（CSSファイルは編集しない）。
  // 強調は控えめに、静かな光彩のみ（点滅や他タグの減光はしない）。
  var style = document.createElement('style')
  style.textContent =
    '.concern__link.is-recommend .concern__tag{filter:drop-shadow(0 0 9px rgba(113,147,109,.9));}'
  document.head.appendChild(style)

  wrapper.classList.add('has-recommend')
  recommended.forEach(function (link) {
    link.classList.add('is-recommend')
  })
})()
