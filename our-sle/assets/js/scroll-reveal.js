'use strict'

/*******************************************
 * スクロール時のフェードアップ表示
 * 各 section 内の見出し（h1〜h6）を最初は透明・少し下に配置し、
 * 画面内に入ったら下から上へ移動しながら表示する。
 * （見出しのみ対象。段落やリスト等は動かさず、背景色も保つ）
 *
 * 体調のすぐれない方も閲覧するサイトのため、
 * ・移動量は控えめ
 * ・時間は長めにとり、最後はゆっくり減速して止まる
 * ・同じ section 内の要素を少しずつ遅らせて穏やかに連続表示
 * チカチカした強い動きを避け、なめらかな表示を優先する。
 * 全ページ共通で適用。
 *******************************************/

// フェードイン対象は「見出し」だけ（段落・リスト等は対象外）
const TEXT_SELECTOR = 'h1, h2';

// アニメーションを適用しない要素（トップページの導線ボタン内テキストなど）
const EXCLUDE_SELECTOR = '.support__button, .support-info__button';

// 同じ section 内で要素ごとにずらす遅延（秒）と、その上限
const STAGGER_STEP = 0.08;
const STAGGER_MAX = 0.4;

// モーション軽減設定の場合はアニメーションさせない
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const sections = document.querySelectorAll('section:not(.center__wrapper)');

if (sections.length && !prefersReducedMotion) {
  // 必要なスタイルを動的に注入（CSSファイルを編集せず自己完結させる）
  const style = document.createElement('style');
  style.textContent = `
    .reveal {
      opacity: 0;
      transform: translateY(20px);
      /* ease-out 系のカーブでゆっくり減速して止まる（なめらかさ重視） */
      transition: opacity 1.1s cubic-bezier(0.22, 0.61, 0.36, 1),
                  transform 1.1s cubic-bezier(0.22, 0.61, 0.36, 1);
      will-change: opacity, transform;
    }
    .reveal.is-visible {
      opacity: 1;
      transform: translateY(0);
    }
  `;
  document.head.appendChild(style);

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        // 一度表示したら監視を解除（再スクロールで再アニメーションさせない）
        obs.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -8% 0px',
  });

  sections.forEach(section => {
    const targets = section.querySelectorAll(TEXT_SELECTOR);
    let index = 0;
    targets.forEach(target => {
      // 除外対象（導線ボタン）内のテキストはアニメーションさせない
      if (target.closest(EXCLUDE_SELECTOR)) {
        return;
      }
      // section 内で少しずつ遅らせて、ふわっと連続的に表示する
      const delay = Math.min(index * STAGGER_STEP, STAGGER_MAX);
      index++;
      target.style.transitionDelay = delay + 's';
      target.classList.add('reveal');
      observer.observe(target);
    });
  });
}
