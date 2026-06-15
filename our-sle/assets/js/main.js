'use strict'

/*******************************************
 * ハンバーガーメニューの開閉
 *******************************************/
const hamburger = document.getElementById('hambergar');
const spHamburger = document.querySelector('.sp__header');
const menu = document.querySelector('.hambergar__menu');
const closeBtns = document.querySelectorAll('.close_hambergar');
const container = document.querySelector('.container');

const openMenu = () => {
  menu.style.transform = 'translateX(0)';
  hamburger.classList.add('active');
  container.style.overflow = 'hidden';
}

const closeMenu = () => {
  menu.style.transform = 'translateX(100%)';
  hamburger.classList.remove('active');
  container.style.overflow = '';
}

const toggleMenu = () => {
  if (menu.style.transform === 'translateX(0px)' || menu.style.transform === 'translateX(0)') {
    closeMenu();
  } else {
    openMenu();
  }
}

//pc ハンバーガー
hamburger.addEventListener('click',toggleMenu);

// spハンバーガー
spHamburger.addEventListener('click',toggleMenu);

// 閉じるボタン
closeBtns.forEach(closeBtn => {
  closeBtn.addEventListener('click',closeMenu);
})


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