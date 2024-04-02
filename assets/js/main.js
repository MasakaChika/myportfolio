/* ------- mv ------- */
// テキストアニメーションを適用する関数（アニメーション時間の引数を追加）
function applyAnimationToText(selector, staggerTime) {
  // 対象の要素を取得
  const paragraph = document.querySelector(selector);

  // テキストコンテンツを取得して一時的なDIVに挿入し、テキストと<br>を処理
  const tempDiv = document.createElement('div');
  tempDiv.innerHTML = paragraph.innerHTML;
  const newTextContent = Array.from(tempDiv.childNodes)
    .map((node) => {
      if (node.nodeType === Node.TEXT_NODE) {
        return [...node.nodeValue].map((char) => `<span>${char === ' ' ? '&nbsp;' : char}</span>`).join('');
      } else if (node.nodeType === Node.ELEMENT_NODE && node.tagName === 'BR') {
        return '<br>';
      }
      return ''; // ノードタイプが対象外の場合、空文字列を返す
    })
    .join('');

  // 新しい文字列をHTMLに挿入
  paragraph.innerHTML = newTextContent;

  // gsapアニメーションの適用（staggerTimeを使用）
  gsap.fromTo(
    `${selector} span`,
    {
      autoAlpha: 0,
    },
    {
      autoAlpha: 1,
      stagger: {
        each: staggerTime,
        from: 'random',
      },
    }
  );
}

// 関数を使用してアニメーションを適用（異なるアニメーション時間を指定）
applyAnimationToText('.mv__msg', 0.032); // .mv__msgの時間
applyAnimationToText('.mv__sitename', 0.23); // .mv__sitenameの時間
/* ------- media query mv change------- */
/*
document.addEventListener('DOMContentLoaded', function () {
  const video = document.querySelector('.mv__video');

  function updateVideoSource() {
    if (window.matchMedia('(max-width: 480px)').matches) {
      video.src = 'assets/video/spmv.mp4';
    } else {
      video.src = 'assets/video/pcmv.mp4';
    }
  }

  // ページロード時とウィンドウサイズ変更時にビデオソースを更新
  const mediaQueryList = window.matchMedia('(max-width: 767px)');
  mediaQueryList.addListener(updateVideoSource); // メディアクエリの状態が変化したときに実行
  updateVideoSource();
});

document.addEventListener('DOMContentLoaded', function () {
  const video = document.querySelector('.mv__video');

  function updateVideoSource() {
    if (window.matchMedia('(max-width: 480px)').matches) {
      video.src = `${themeParams.templateUrl}/assets/video/spmv.mp4`;
    } else {
      video.src = `${themeParams.templateUrl}/assets/video/pcmv.mp4`;
    }
  }

  // ページロード時とウィンドウサイズ変更時にビデオソースを更新
  const mediaQueryList = window.matchMedia('(min-width: 481px)');
  mediaQueryList.addListener(updateVideoSource);
  updateVideoSource();
});
*/

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

/* ------- animation loop ------- */
function loopAnimation(id, className, delay) {
  // getElementsByClassName で得られるコレクションを取得
  var elements = document.getElementsByClassName(className);

  // elements が NodeList なので、forEach で各要素に対して処理を適用
  Array.from(elements).forEach(function (element) {
    // 各要素に対してリスナーを追加
    element.addEventListener('animationend', function (event) {
      event.target.classList.remove(className);
      void event.target.offsetWidth; // アニメーションをリセット
      event.target.classList.add(className);
    });

    // 初回のアニメーションを追加
    element.classList.add(className);
  });
}

document.addEventListener('DOMContentLoaded', function () {
  loopAnimation('viewall', 'animate-slide', 8000);
});

/* ------- swiper ------- */
const mySwiper = new Swiper('.swiper', {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  loopAdditionalSlides: 1,

  speed: 1600,

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
    waitForTransition: false,
  },
  breakpoints: {
    //640px以上の時
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    //768px以上の時
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});
