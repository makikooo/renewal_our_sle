'use strict'

/*******************************************
 * ハンバーガーメニューの開閉
 * 
 *******************************************/
const hamburger = document.getElementById('hambergar');
const menu = document.querySelector('.hambergar__menu');
const closeBtns = document.querySelectorAll('.close_hambergar');

// メニューを開く
hamburger.addEventListener('click',() => {
  menu.style.transform = 'translateX(0)';
  hamburger.style.right = '450px';
});

// メニューを閉じる
closeBtns.forEach(closeBtn => {
  closeBtn.addEventListener('click', ()=> {
    menu.style.transform ='translateX(100%)';
    hamburger.style.right = '0';
  });
});