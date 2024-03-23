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

/* ------- mv vertical-text 追従 ------- */
document.addEventListener('DOMContentLoaded', function () {
  const worksSection = document.querySelector('.works');
  const verticalTitle = document.querySelector('.vertical-title');
  // worksセクションの上端位置を取得
  const startOffset = worksSection.offsetTop;

  function handleScroll() {
    const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollPosition >= startOffset) {
      verticalTitle.classList.add('fixed');
    } else {
      verticalTitle.classList.remove('fixed');
    }
  }

  window.addEventListener('scroll', handleScroll);
});
