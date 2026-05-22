window.addEventListener('load', () => {

  const loading = document.getElementById('loading');
  const today = new Date().toLocaleDateString();

  // 保存されてる日付取得
  const savedDate = localStorage.getItem('sleLoadingDate');

  // 今日すでに表示済み
  if (savedDate === today) {
    loading.remove();
    return;
  }

  // 今日の日付を保存
  localStorage.setItem('sleLoadingDate', today);

  // ローディング表示時間
  setTimeout(() => {

    loading.style.opacity = '0';
    loading.style.visibility = 'hidden';

    setTimeout(() => {
      loading.remove();
    }, 1500);

  }, 3500);

});