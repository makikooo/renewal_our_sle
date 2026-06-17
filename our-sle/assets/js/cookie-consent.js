'use strict'

/*******************************************
 * Cookie利用の同意バナー（トップページ）
 *
 * 未選択のときだけバナーを表示し、「同意する／拒否する」を
 * Cookie `oursle_consent`（1=同意 / 0=拒否）に保存する。
 * この値は全ページの記録処理（閲覧数の集計・おすすめ用の閲覧履歴）が
 * 参照し、同意したときだけ記録する。拒否時は保存済みの履歴も消す。
 *******************************************/

;(function () {
  var COOKIE = 'oursle_consent'
  var MAX_AGE_DAYS = 180

  // Cookie値を取得（'1' / '0' / '' = 未選択）
  function getConsent () {
    var m = document.cookie.match(/(?:^|;\s*)oursle_consent=([01])/)
    return m ? m[1] : ''
  }

  function setConsent (value) {
    var d = new Date()
    d.setTime(d.getTime() + MAX_AGE_DAYS * 24 * 60 * 60 * 1000)
    document.cookie =
      COOKIE + '=' + value + ';expires=' + d.toUTCString() + ';path=/;samesite=lax'
  }

  var banner = document.getElementById('cookie-consent')
  if (!banner) {
    return
  }

  // すでに選択済みなら何もしない（バナーは出さない）
  if (getConsent() !== '') {
    return
  }
  banner.hidden = false

  var agree = banner.querySelector('.cookie-consent__agree')
  var reject = banner.querySelector('.cookie-consent__reject')

  if (agree) {
    agree.addEventListener('click', function () {
      setConsent('1')
      banner.hidden = true
    })
  }

  if (reject) {
    reject.addEventListener('click', function () {
      setConsent('0')
      banner.hidden = true
      // 同意前に保存された可能性のある閲覧履歴を消す
      try {
        window.localStorage.removeItem('oursle_history')
      } catch (e) {
        /* localStorage が使えない環境では何もしない */
      }
    })
  }
})()
