/* ------- copyright year ------- */
const year = document.querySelector('#year');
const date = new Date();
year.textContent = date.getFullYear();

/* ------- media query mv change------- */

document.addEventListener('DOMContentLoaded', function () {
  const video = document.querySelector('.mv__video');

  function updateVideoSource() {
    if (window.matchMedia('(max-width: 480px)').matches) {
      video.src = '/assets/video/spmv.mp4';
    } else {
      video.src = '/assets/video/pcmv.mp4';
    }
  }

  // ページロード時とウィンドウサイズ変更時にビデオソースを更新
  const mediaQueryList = window.matchMedia('(max-width: 767px)');
  mediaQueryList.addListener(updateVideoSource); // メディアクエリの状態が変化したときに実行
  updateVideoSource();
});

/* ------- navigation画面外タップで閉じる ------- */
document.addEventListener('DOMContentLoaded', function () {
  document.addEventListener('click', function (e) {
    const navToggleCheckbox = document.querySelector('.site-nav-checkbox');
    const navToggleLabel = document.querySelector('.site-nav-toggle');
    const clickedElement = e.target;

    // チェックボックスまたはラベルがクリックされた場合は、イベント処理をスキップ
    if (clickedElement === navToggleCheckbox || navToggleLabel.contains(clickedElement)) {
      return;
    }

    // ナビゲーションメニュー以外の場所をクリックした場合にチェックを外す
    if (navToggleCheckbox.checked && !document.querySelector('.site-nav').contains(clickedElement)) {
      navToggleCheckbox.checked = false;
    }
  });
});
