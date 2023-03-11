<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="pets-test" />
    <title>Pets-test</title>

    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ヘッダー -->
    <header class="header">
      <div class="header-container">
        <nav class="pc-nav">
          <div class="pc-main-nav">
            <div class="pc-main-nav-left">
              <div class="pc-nav-logo">
                <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/logo.svg" alt="P's-first" />
              </div>
            </div>
            <div class="pc-main-nav-right">
              <div class="pc-nav-search">
                <input
                  type="text"
                  name="search"
                  id="search"
                  placeholder="キーワードを入力して検索"
                />
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <div class="pc-nav-login">
                <a href="#">
                  <i class="fa-solid fa-right-to-bracket"></i>
                  会員ログイン
                </a>
              </div>
              <div class="pc-nav-fab">
                <a href="#">
                  <i class="fa-solid fa-heart"></i>
                  お気に入り
                </a>
              </div>
            </div>
          </div>
          <div class="pc-sub-nav">
            <ul class="pc-sub-nav-list">
              <li class="pc-sub-nav-list-item pc-sub-nav-search">
                <a href="#"
                  ><span>探す</span><i class="fa-solid fa-caret-down"></i
                ></a>
                <ul class="pc-sub-nav-search-list">
                  <li class="pc-sub-nav-search-list-item">
                    <a href="#">
                      <span> 子犬 </span>
                      <span>
                        <i class="fa-solid fa-caret-right"></i>
                      </span>
                    </a>
                  </li>
                  <li class="pc-sub-nav-search-list-item">
                    <a href="#">子猫<i class="fa-solid fa-caret-right"></i></a>
                  </li>
                  <li class="pc-sub-nav-search-list-item">
                    <a href="#">店舗を探す</a>
                  </li>
                  <li class="pc-sub-nav-search-list-item">
                    <a href="#">提携先を探す</a>
                  </li>
                </ul>
              </li>
              <li class="pc-sub-nav-list-item"><a href="#">ランキング</a></li>
              <li class="pc-sub-nav-list-item"><a href="#">ペットの安心</a></li>
              <li class="pc-sub-nav-list-item">
                <a href="#">ほっとサポート</a>
              </li>
              <li class="pc-sub-nav-list-item"><a href="#">特集一覧</a></li>
              <li class="pc-sub-nav-list-item"><a href="#">サービス</a></li>
              <li class="pc-sub-nav-list-item"><a href="#">ニュース</a></li>
            </ul>
          </div>
        </nav>
        <nav class="sp-nav">
          <div class="sp-nav-header">
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="sp-logo">
              <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/logo.svg" alt="P's-first" />
            </div>
            <div class="sp-nav-search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </div>
          <div class="side-bar">
            <div class="side-nav-header side-nav-close-only">
              <span class="side-nav-close"
                >閉じる<span class="side-nav-close-icon">×</span></span
              >
            </div>
            <ul class="side-nav-contents">
              <li class="side-nav-link side-nav-search-link">
                <p>探す</p>
                <i class="fa-solid fa-caret-right"></i>
              </li>
              <li><a href="#">ランキング</a></li>
              <li><a href="#">ペットの安心</a></li>
              <li><a href="#">ほっとサポート</a></li>
              <li><a href="#">特集一覧</a></li>
              <li><a href="#">サービス</a></li>
              <li><a href="#">ニュース</a></li>
            </ul>
            <div class="side-nav-menu">
              <ul>
                <li>
                  <a href="#">
                    <i class="fa-solid fa-heart"></i>
                    お気に入り
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    会員ログイン
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="side-bar side-bar-search">
            <div class="side-nav-header">
              <span class="side-nav-back side-nav-search-back">戻る</span>
              <span class="side-nav-close"
                >閉じる<span class="side-nav-close-icon">×</span></span
              >
            </div>
            <ul class="side-nav-contents">
              <li class="side-bar-title"><p>探す</p></li>
              <li class="side-nav-link side-nav-dog-link">
                <p>子犬</p>
                <i class="fa-solid fa-caret-right"></i>
              </li>
              <li class="side-nav-link side-nav-cat-link">
                <p>子猫</p>
                <i class="fa-solid fa-caret-right"></i>
              </li>
              <li><a href="#">店舗を探す</a></li>
              <li><a href="#">提携先を探す</a></li>
            </ul>
            <div class="side-nav-menu">
              <ul>
                <li>
                  <a href="#">
                    <i class="fa-solid fa-heart"></i>
                    お気に入り
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    会員ログイン
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="side-nav-cover"></div>
        </nav>
      </div>
    </header>
