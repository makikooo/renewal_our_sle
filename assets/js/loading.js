window.addEventListener('DOMContentLoaded', () => {

  const loading = document.getElementById('loading');

  // loadingが無いページは終了
  if (!loading) return;

  // トップページだけ
  const isHome = location.pathname === '/' ||
                 location.pathname === '/index.html';

  if (!isHome) {
    loading.remove();
    return;
  }

  const today = new Date().toLocaleDateString();
  const savedDate = localStorage.getItem('sleLoadingDate');

  // 今日すでに表示済み
  if (savedDate === today) {
    loading.remove();
    return;
  }

  // 今日の日付保存
  localStorage.setItem('sleLoadingDate', today);

  window.addEventListener('load', () => {

    setTimeout(() => {

      loading.style.opacity = '0';
      loading.style.visibility = 'hidden';

      setTimeout(() => {
        loading.remove();
      }, 1500);

    }, 3500);

  });

});