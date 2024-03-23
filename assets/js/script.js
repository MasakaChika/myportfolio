/* ------- copyright year ------- */
const year = document.querySelector('#year');
const date = new Date();
year.textContent = date.getFullYear();

/* ------- media query mv change------- */

document.addEventListener('DOMContentLoaded', function () {
  const video = document.querySelector('.mv__pc');

  function updateVideoSource() {
    if (window.innerWidth < 768) {
      video.src = '/assets/video/spmv.mp4';
    } else {
      video.src = '/assets/video/pcmv.mp4';
    }
  }

  // ページロード時とウィンドウサイズ変更時にビデオソースを更新
  window.addEventListener('resize', updateVideoSource);
  updateVideoSource();
});
