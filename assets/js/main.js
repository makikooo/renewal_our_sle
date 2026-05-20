'use strict'

/*******************************************
 * ハンバーガーメニューの開閉
 *******************************************/
const hamburger = document.getElementById('hambergar');
const menu = document.querySelector('.hambergar__menu');
const closeBtns = document.querySelectorAll('.close_hambergar');
const container = document.querySelector('.container');

// メニューを開く
hamburger.addEventListener('click',() => {
  if (hamburger.classList.contains('active')) {
    // 閉じる
    menu.style.transform = 'translateX(100%)';
    hamburger.style.right = '0';
    hamburger.classList.remove('active');
    container.style.overflow = ''; // 他の要素をスクロールを止める
  } else {
    // 開く
    menu.style.transform = 'translateX(0)';
    hamburger.style.right = '450px';
    hamburger.classList.add('active');
    container.style.overflow = 'hidden';
  }
});

// メニューを閉じる
closeBtns.forEach(closeBtn => {
  closeBtn.addEventListener('click', ()=> {
    menu.style.transform ='translateX(100%)';
    hamburger.style.right = '0';
    hamburger.classList.remove('active');
    container.style.overflow = '';
  });
});

/*******************************************
 * アコーディオンメニューの開閉
 *******************************************/
const accordionBtns = document.querySelectorAll('.accordion__button');

accordionBtns.forEach((accordionBtn, index) => {
  const ul = accordionBtn.closest('.nav__category-header').nextElementSibling;
  
  // ulの実際の高さを取得するためのヘルパー関数
  const openUI = () => {
    ul.style.maxHeight = ul.scrollHeight + 'px';
    ul.style.marginBottom = '25px';
  };
  const closeUI = () => {
    ul.style.maxHeight = '0';
    ul.style.marginBottom = '0';
  }

  // 最初のul(index=0)だけ初期表示、それ以外は非表示
  if(index === 0) {
    accordionBtn.classList.add('active');
    openUI();
  } else {
    closeUI();
  }

  accordionBtn.addEventListener('click', ()=> {
    accordionBtn.classList.toggle('active');
    if (accordionBtn.classList.contains('active')) {
      openUI();
    } else {
      closeUI();
    }
  });
});