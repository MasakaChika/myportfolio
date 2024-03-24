/* ------- copyright year ------- */
const year = document.querySelector('#year');
const date = new Date();
year.textContent = date.getFullYear();

/* ------- media query mv change------- */

document.addEventListener('DOMContentLoaded', function () {
  const video = document.querySelector('.mv__video');

  function updateVideoSource() {
    if (window.matchMedia('(max-width: 767px)').matches) {
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
