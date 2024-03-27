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
  loopAnimation('viewall', 'animate-kochiradesu', 8000);
});
