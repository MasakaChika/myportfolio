/* ------- mv ------- */
// テキストアニメーションを適用する関数（アニメーション時間の引数を追加）
function applyAnimationToText(selector, staggerTime) {
  // prefers-reduced-motionメディアクエリをチェック
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // 対象の要素を取得
  const paragraph = document.querySelector(selector);

  if (!prefersReducedMotion) {
    // モーションアニメーションが有効の場合の処理
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
}

// 関数を使用してアニメーションを適用（異なるアニメーション時間を指定）
document.addEventListener('DOMContentLoaded', function () {
  applyAnimationToText('.mv__msg', 0.032); // .mv__msgの時間
  applyAnimationToText('.mv__sitename', 0.23); // .mv__sitenameの時間
});

// prefers-reduced-motionメディアクエリの状態が変化した際にも処理を実行するようにイベントリスナーを追加
window.matchMedia('(prefers-reduced-motion: reduce)').addEventListener('change', function () {
  // モーションアニメーションの有効性が変更された際に再度処理を実行
  applyAnimationToText('.mv__msg', 0.032); // .mv__msgの時間
  applyAnimationToText('.mv__sitename', 0.23); // .mv__sitenameの時間
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

      // チェックを外す際に、テキストを元に戻す
      const toggleText = document.querySelector('.site-nav-toggle__text');
      toggleText.textContent = 'menu';
      toggleText.classList.remove('white-text'); // テキスト色を元に戻す
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.getElementById('nav-toggle');
  const toggleText = document.querySelector('.site-nav-toggle__text');

  toggleText.textContent = 'menu';
  // チェックボックスの状態が変更されたときのイベントリスナーを追加
  hamburger.addEventListener('change', function () {
    if (hamburger.checked) {
      toggleText.textContent = 'close';
      toggleText.classList.add('white-text'); // テキスト色を白に変更
    } else {
      toggleText.textContent = 'menu';
      toggleText.classList.remove('white-text'); // テキスト色を元に戻す
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
document.addEventListener('DOMContentLoaded', function () {
  const mySwiper = new Swiper('.swiper', {
    slidesPerView: 1,
    loop: true,
    loopAdditionalSlides: 1,
    speed: 1600,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
    },
    on: {
      init: function () {
        manageTabindex(this);
      },
      slideChange: function () {
        manageTabindex(this);
      },
    },
  });

  function manageTabindex(swiper) {
    const activeSlide = swiper.slides[swiper.activeIndex];
    const links = activeSlide.querySelectorAll('a');
    links.forEach((link) => {
      link.setAttribute('tabindex', '0');
    });

    const allSlides = swiper.slides;
    allSlides.forEach((slide) => {
      if (slide !== activeSlide) {
        const otherLinks = slide.querySelectorAll('a');
        otherLinks.forEach((link) => {
          link.setAttribute('tabindex', '-1');
        });
      }
    });
  }
});

/* ------- back ------- */
function goBack() {
  window.history.back();
}

/* ------- contact ------- */
var submitted = false;

function redirectOnSubmit() {
  if (submitted) {
    window.location.href = '/contact/thanks';
  }
}
