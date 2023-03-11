/**
 * ハンバーガーメニュー
 */
const Hamburger = document.querySelector(".hamburger");
const SideBar = document.querySelector(".side-bar");
const SideNavCloseBtn = document.querySelectorAll(".side-nav-close");
const Cover = document.querySelector(".side-nav-cover");
const SideBar_a = document.querySelectorAll(".side-bar a");
const SideNavSearchLink = document.querySelector(".side-nav-search-link");
const SideBarSearch = document.querySelector(".side-bar-search");
const SideNavSearchBackBtn = document.querySelector(".side-nav-search-back");

// ハンバーガーメニューを開く
Hamburger.addEventListener("click", () => {
  SideBar.classList.add("active");
  Hamburger.classList.add("inactive");
  Cover.classList.add("cover");
});

// ハンバーガーメニューのパネルを開く
SideNavSearchLink.addEventListener("click", () => {
  SideBarSearch.classList.add("open");
});

// ハンバーガーメニューのパネルを「トップ」に戻る
SideNavSearchBackBtn.addEventListener("click", () => {
  SideBarSearch.classList.remove("open");
});

// ハンバーガーメニューとパネルを閉じる
SideNavCloseBtn.forEach(function (target) {
  target.addEventListener("click", function () {
    SideBar.classList.remove("active");
    Cover.classList.remove("cover");
    SideBarSearch.classList.remove("open");
    // console.log('ok');
  });
});

Cover.addEventListener("click", () => {
  SideBar.classList.remove("active");
  Cover.classList.remove("cover");
  SideBarSearch.classList.remove("open");
});

SideBar_a.forEach(function (target) {
  target.addEventListener("click", function () {
    SideBar.classList.remove("active");
    Cover.classList.remove("cover");
    SideBarSearch.classList.remove("open");
  });
});

/**
 * Swiper.js
 * Top
 */
const swiper = new Swiper("#top-slider", {
  loop: true, //繰り返しをする
  speed: 1500, //スライドの推移時間
  centeredSlides: true,
  initialSlide: 0,
  spaceBetween: 20,
  autoplay: {
    disableOnInteraction: true, //スライドに触ると自動再生を停止する
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true,
    draggable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination", //必須の設定：ページネーションのclass指定
    type: "bullets",
    clickable: "clickable",
  },
  breakpoints: {
    // 992px以上の場合
    992: {
      slidesPerView: "auto",
    },
  },
});

/**
 * Swiper.js
 * ArchiveFeature
 */
const archiveFeature = new Swiper("#a-feature-slider", {
  loop: true, //繰り返しをする
  speed: 600, //スライドの推移時間
  centeredSlides: true,
  initialSlide: 0,
  spaceBetween: 0,
  slidesPerView: 1,
  autoplay: {
    disableOnInteraction: true, //スライドに触ると自動再生を停止する
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true,
    draggable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination", //必須の設定：ページネーションのclass指定
    type: "bullets",
    clickable: "clickable",
  },
  breakpoints: {
    // 769px以上の場合
    769: {
      slidesPerView: 1,
    },
  },
});

/**
 * Search Tab
 */
const tabMenus = document.querySelectorAll(".tab-menu-item");

tabMenus.forEach((tabMenu) => {
  tabMenu.addEventListener("click", tabSwitch);
});

function tabSwitch(e) {
  // クリックされた要素のデータ属性を取得
  const tabTargetData = e.currentTarget.dataset.tab;

  // クリックされた要素の親要素と、その子要素を取得
  const tabList = e.currentTarget.closest(".tab-menu");
  const tabItems = tabList.querySelectorAll(".tab-menu-item");

  // クリックされた要素の親要素の兄弟要素の子要素を取得
  const animalLists =
    tabList.nextElementSibling.querySelectorAll(".animal-list");

  // クリックされたtabの同階層のmenuとanimal-listのクラスを削除
  tabItems.forEach((tabItem) => {
    tabItem.classList.remove("is-active");
  });
  animalLists.forEach((animalList) => {
    animalList.classList.remove("is-show");
  });

  // クリックされたmenu要素にis-activeクラスを付与
  e.currentTarget.classList.add("is-active");

  // クリックしたmenuのデータ属性と等しい値を持つanimal-listにis-showクラスを付与
  animalLists.forEach((animalList) => {
    if (animalList.dataset.list === tabTargetData) {
      animalList.classList.add("is-show");
    }
  });
}

/**
 * トップへ戻るスクロール
 */
const ToTopBtn = document.querySelector(".footer-to-top-icon");

ToTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

/**
 * もっと見る開閉
 */
const more = document.querySelectorAll(".description-box-text-box");

Array.from(more).forEach(function (el) {
  // ボタンを取得
  const moreBtn = el.querySelector(".description-more-btn");

  // コンテンツを取得
  const moreContents = el.querySelector(".description-contents");

  // もっと見るボタンを取得
  const more = el.querySelector(".description-box-more-box");

  // 閉じるボタンを取得
  const close = el.querySelector(".description-box-close-box");

  // ボタンクリックでイベント発火
  moreBtn.addEventListener("click", function () {
    if (!moreContents.classList.contains("open")) {
      // コンテンツの実際の高さを代入
      // キーワード値(none, max-content等)では動作しないので注意
      moreContents.style.maxHeight = moreContents.scrollHeight + "px";

      // openクラスを追加
      moreContents.classList.add("open");

      close.classList.add("active");

      more.classList.remove("active");
    } else {
      // コンテンツの高さに固定値を代入
      moreContents.style.maxHeight = "150px";

      // openクラスを削除
      moreContents.classList.remove("open");

      close.classList.remove("active");

      more.classList.add("active");
    }
  });
});
