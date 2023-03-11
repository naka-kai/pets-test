<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>
    <main>
      <!-- バナー -->
      <?php
        $args = array();
        $wp_query = '';
        $args = array(
          'post_type' => 'banner',
          'showposts' => -1,
        );
        $wp_query = new WP_Query($args);
      ?>
      <?php if ($wp_query->have_posts()) : ?>
      <section class="banner">
        <div class="swiper" id="top-slider">
          <div class="swiper-wrapper">
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="swiper-slide">
              <img src="<?php the_field('banner_image'); ?>" />
              <div class="description-box">
                <h2><?php the_field('banner_heading2') ?></h2>
                <h1><?php the_field('banner_heading1') ?></h1>
                <p><?php the_field('banner_word') ?></p>
                <button class="description-button" onclick="location.href='<?php the_field('banner_link') ?>'">
                  詳細を見る
                </button>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-button-prev">
            <i class="fa-solid fa-angle-left fa-xs"></i>
          </div>
          <div class="swiper-button-next">
            <i class="fa-solid fa-angle-right fa-xs"></i>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <?php endif; ?>
      <!-- バナーここまで -->

      <!-- お知らせ -->
      <section class="info">
        <div class="info-container">
          <a href="#" class="info-box" data-aos="fade-up">
            <div class="info-right">
              <p class="info-category">新着情報</p>
              <div class="info-text-box">
                <div class="info-text">
                  <p>HPリニューアルのお知らせ</p>
                  <small><span>2023.02.01</span></small>
                </div>
              </div>
            </div>
            <i class="fa-solid fa-angle-right fa-xs info-left"></i>
          </a>
        </div>
      </section>
      <!-- お知らせここまで -->

      <!-- 探す -->
      <section class="search">
        <div class="search-container">
          <div class="search-title top-title">
            <h2>探す</h2>
            <span>Search</span>
          </div>
          <div class="animal-box" data-aos="zoom-in">
            <div class="tab-menu">
              <div class="tab-menu-item is-active" data-tab="01">
                <p>子犬を探す</p>
                <i class="fa-solid fa-caret-down"></i>
              </div>
              <div class="tab-menu-item" data-tab="02">
                <p>子猫を探す</p>
                <i class="fa-solid fa-caret-down"></i>
              </div>
            </div>
            <div class="animal-list-container">
              <div class="animal-list is-show" data-list="01">
                <p class="animal-list-title">子犬を探す</p>
                <div class="animal-item-box">
                  <a href="#">
                    <div class="animal-item">
                      <img
                        src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/tea-cup-toy-poodle.jpeg"
                        alt="トイプードル（ティーカップ）"
                      />
                      <div class="animal-name">
                        <p>トイプードル（ティーカップ）</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item">
                      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/mameshiba.jpeg" alt="豆柴" />
                      <div class="animal-name">
                        <p>豆柴</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item">
                      <img
                        src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/french-bulldog.jpeg"
                        alt="フレンチブルドッグ"
                      />
                      <div class="animal-name">
                        <p>フレンチブルドッグ</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item">
                      <img
                        src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/tiny-toy-poodle.jpeg"
                        alt="トイプードル（タイニー）"
                      />
                      <div class="animal-name">
                        <p>トイプードル（タイニー）</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item">
                      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/maltipoo.jpeg" alt="マルプー" />
                      <div class="animal-name">
                        <p>マルプー</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item all-animal">
                      <p>すべての</p>
                      <p>
                        子犬を探す<i class="fa-solid fa-magnifying-glass"></i>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="animal-list" data-list="02">
                <p class="animal-list-title">子猫を探す</p>
                <div class="animal-item-box">
                  <a href="#">
                    <div class="animal-item">
                      <img
                        src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/munchkin.jpeg"
                        alt="マンチカン"
                      />
                      <div class="animal-name">
                        <p>マンチカン</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item">
                      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/minuet.jpeg" alt="ミヌエット" />
                      <div class="animal-name">
                        <p>ミヌエット</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item">
                      <img
                        src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/siberian.jpeg"
                        alt="サイベリアン"
                      />
                      <div class="animal-name">
                        <p>サイベリアン</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item">
                      <img
                        src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/scottish-fold.jpeg"
                        alt="スコティッシュフォールド"
                      />
                      <div class="animal-name">
                        <p>スコティッシュフォールド</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item">
                      <img
                        src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/ragamuffin.jpeg"
                        alt="ラガマフィン"
                      />
                      <div class="animal-name">
                        <p>ラガマフィン</p>
                        <i class="fa-solid fa-angle-right fa-xs"></i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="animal-item all-animal">
                      <p>すべての</p>
                      <p>
                        子猫を探す<i class="fa-solid fa-magnifying-glass"></i>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="search-shop">
            <div class="search-shop-title">
              <span class="hr"></span>
              <p>店舗を探す</p>
              <span class="hr"></span>
            </div>
            <div class="search-shops">
              <a href="#">
                <div class="near-shop">
                  <p>近くの店舗を探す</p>
                </div>
              </a>
              <a href="#">
                <div class="partner-shop">
                  <p>提携先を探す</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- 探すここまで -->

      <!-- ペットの安心 -->
      <section class="safety">
        <div class="safety-container">
          <div class="safety-title top-title">
            <h2>ペットの安心</h2>
            <span>Safety</span>
          </div>
          <div class="sub-title-container">
            <div class="sub-title sub-title1">
              <img
                src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety_stack1.jpeg"
                alt="安心してペットをお迎えいただくために"
              />
              <div class="sub-title-inner sub-title-inner1" data-aos="zoom-in">
                <div class="sub-title-heading">
                  <h2>安心してペットを</h2>
                  <h2>お迎えいただくために</h2>
                </div>
                <p class="sub-title-text">
                  私たちはペットの健康を最優先し、お客様とペットが生涯にわたりイキイキと暮らせるよう、全力で尽くします。
                </p>
              </div>
            </div>
          </div>
          <div class="safety-content-box-container">
            <a href="#">
              <div class="safety-content-box" data-aos="fade-up">
                <div class="safety-content">
                  <div class="safety-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety1.jpeg" alt="" />
                    <h2>優良ブリーダーとの取引</h2>
                  </div>
                  <p>
                    "ペットを最優先に考える"という当社の理念に共感し、ペットの健康管理や生活環境の向上のために、協業できるブリーダーとのみ取引しています。
                  </p>
                  <div class="safety-content-description">
                    <span class="hr"></span>
                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="safety-content-box" data-aos="fade-up">
                <div class="safety-content">
                  <div class="safety-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety2.jpeg" alt="" />
                    <h2>ペットの健康管理</h2>
                  </div>
                  <p>
                    全頭獣医師による健康診断の実施、感染症予防プログラムの徹底、健康管理専門スタッフによる日々のケアで病気の予防・未病に努めています。
                  </p>
                  <div class="safety-content-description">
                    <span class="hr"></span>

                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="safety-content-box" data-aos="fade-up">
                <div class="safety-content">
                  <div class="safety-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety3.jpeg" alt="" />
                    <h2>店舗での取り組み</h2>
                  </div>
                  <p>
                    健康管理に加え、温度湿度管理の徹底やストレスがない生活環境の整備、社会化トレーニングなどの取り組みを行っています。
                  </p>
                  <div class="safety-content-description">
                    <span class="hr"></span>

                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="safety-content-box" data-aos="fade-up">
                <div class="safety-content">
                  <div class="safety-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety4.jpeg" alt="" />
                    <h2>お客様へのサポート</h2>
                  </div>
                  <p>
                    お迎え前、お迎え後とも、ご不明、ご心配な点はいつでもご相談いただける体制を整えています。ペットとペットを愛するお客様に寄り添います。
                  </p>
                  <div class="safety-content-description">
                    <span class="hr"></span>

                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="safety-content-box" data-aos="fade-up">
                <div class="safety-content">
                  <div class="safety-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety8.jpeg" alt="" />
                    <h2>ほっとサポート<br />- お迎え後もしっかり安心 -</h2>
                  </div>
                  <p>
                    「ほっとサポート」は、ペットの成長過程のあらゆる場面で安心をお届けする、ペッツファースト独自のサポートサービスです。
                  </p>
                  <div class="safety-content-description">
                    <span class="hr"></span>

                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="sub-title-container">
            <div class="sub-title sub-title2">
              <img
                src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety_stack3.jpeg"
                alt="すべてのペットの幸せのための活動"
              />
              <div class="sub-title-inner sub-title-inner2" data-aos="zoom-in">
                <div class="sub-title-heading">
                  <h2>すべてのペットの</h2>
                  <h2>幸せのための活動</h2>
                </div>
                <p class="sub-title-text">
                  すべてのペットの健康と幸せに責任を持つため、ペッツファーストでは里親探し活動やペットの難病根治を目指す研究、人とペットの共生社会実現に向けた活動などに取り組んでいます。
                </p>
              </div>
            </div>
          </div>
          <div class="safety-content-box-container">
            <a href="#">
              <div class="safety-content-box" data-aos="fade-up">
                <div class="safety-content">
                  <div class="safety-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety5.jpeg" alt="" />
                    <h2>里親探し活動</h2>
                  </div>
                  <p>
                    １頭でも多くのペットに家族をみつけ、幸せな生活を送る後押しをしたいという思いから、保健所や個人から引き取った犬・猫の里親探しを行っています。
                  </p>
                  <div class="safety-content-description">
                    <span class="hr"></span>

                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="safety-content-box" data-aos="fade-up">
                <div class="safety-content">
                  <div class="safety-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety6.jpeg" alt="" />
                    <h2>ペットの難病対策</h2>
                  </div>
                  <p>
                    すべてのペットが健康に生涯を全うできる世界を目指し、大学と提携してペットの難病を克服する研究を行っています。
                  </p>
                  <div class="safety-content-description">
                    <span class="hr"></span>

                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="safety-content-box" data-aos="fade-up">
                <div class="safety-content">
                  <div class="safety-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/safety7.jpeg" alt="" />
                    <h2>ペッツファーストの想い</h2>
                  </div>
                  <p>
                    命を扱うペットショップとして、すべてのペットに責任を持って家族を見つけ、ペッツファーストな社会の実現を目指します。
                  </p>
                  <div class="safety-content-description">
                    <span class="hr"></span>

                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- ペットの安心ここまで -->

      <!-- 特集一覧 -->
      <?php
        $args = array();
        $wp_query = '';
        $args = array(
          'post_type' => 'feature',
          'showposts' => 3,
        );
        $wp_query = new WP_Query($args);
      ?>
      <?php if ($wp_query->have_posts()) : ?>
      <section class="feature">
        <div class="feature-container">
          <div class="feature-title top-title">
            <h2>特集一覧</h2>
            <span>Feature</span>
          </div>
          <div class="card-content-box">
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="card-content" data-aos="flip-left">
              <a href="#">
                <?php
                  $feature_date = get_the_date('Y-m-d');
                  if (strtotime($feature_date) > strtotime("-1 month")) :
                ?>
                <div class="card-new">New!</div>
                <?php endif; ?>
                <img src="<?php the_field('feature_image'); ?>" />
                <div class="card-content-text">
                  <h2><?php the_title(); ?></h2>
                  <div class="card-content-sub-text">
                    <span class="card-category"><?php the_field('feature_category'); ?></span>
                    <span class="card-date"><?php echo get_the_date('Y.m.d') ?></span>
                  </div>
                </div>
              </a>
            </div>
            <?php endwhile; ?>
          </div>
          <button
            class="more-button"
            onclick="location.href='<?php echo get_post_type_archive_link('feature'); ?>'"
          >
            もっと見る
          </button>
        </div>
      </section>
      <?php endif; ?>
      <!-- 特集一覧ここまで -->

      <!-- アフターフォロー -->
      <section class="after-follow">
        <div class="after-follow-container">
          <div class="after-follow-title top-title">
            <h2>アフターフォロー</h2>
            <span>After follow</span>
          </div>
          <div class="sub-title-container">
            <div class="sub-title sub-title3">
              <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/after1.jpeg" alt="" />
              <div
                class="sub-title-inner sub-title-inner3"
                data-aos="fade-up-left"
              >
                <h2 class="sub-title-heading">
                  <img
                    src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/hotsupport.png"
                    alt="ほっとサポート"
                  />
                </h2>
                <p>
                  「ほっとサポート」は、ペッツファーストでワンちゃんやネコちゃんをご購入いただいた時にのみ付帯できるオリジナル商品です。
                </p>
                <button class="description-button" onclick="location.href='#'">
                  詳細を見る
                </button>
              </div>
            </div>
          </div>
          <div class="sub-title-container">
            <div class="sub-title sub-title4">
              <img
                src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/after2.jpeg"
                alt="安心してペットをお迎えいただくために"
              />
              <div
                class="sub-title-inner sub-title-inner4"
                data-aos="fade-up-right"
              >
                <div class="sub-title-heading">
                  <h2>提携サービス</h2>
                </div>
                <p>
                  ペッツファーストは、動物病院をはじめトリミングサロンやペットホテル、ドッグカフェなど日本全国に提携先を設けています。各種特典を用意している場合もございますので、是非ご確認ください。
                </p>
                <button class="description-button" onclick="location.href='#'">
                  詳細を見る
                </button>
              </div>
            </div>
          </div>
          <div class="after-follow-content2-box-container">
            <a href="">
              <div class="after-follow-content2-box">
                <div class="after-follow-content2">
                  <div class="after-follow-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/after3.png" alt="" />
                  </div>
                  <p>
                    より充実したペットとの生活をサポートし、一生寄り添っていくことが出来る最適な医療の提供を目指します。
                  </p>
                  <div class="after-follow-content2-description">
                    <span class="hr"></span>
                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="after-follow-content2-box">
                <div class="after-follow-content2">
                  <div class="after-follow-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/after4.png" alt="" />
                  </div>
                  <p>
                    トリミング・ペットホテル・ハイセンスなペットグッズを取り揃え、ベテランスタッフがお迎えいたします。
                  </p>
                  <div class="after-follow-content2-description">
                    <span class="hr"></span>
                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="after-follow-content2-box">
                <div class="after-follow-content2">
                  <div class="after-follow-img-box">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2023/03/after5.png" alt="" />
                  </div>
                  <p>
                    日本最大級の広大な敷地で、老犬ホーム、里親探し代行、ドッグラン、ペットホテルなどペットの幸せなセカンドライフをサポート。
                  </p>
                  <div class="after-follow-content2-description">
                    <span class="hr"></span>
                    <p>
                      詳細を見る<span
                        ><i class="fa-solid fa-circle-chevron-right"></i
                      ></span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- アフターフォローここまで -->

      <!-- ニュース -->
      <?php
        $args = array();
        $wp_query = '';
        $args = array(
          'post_type' => 'news',
          'showposts' => 3,
        );
        $wp_query = new WP_Query($args);
      ?>
      <?php if ($wp_query->have_posts()) : ?>
      <section class="news">
        <div class="news-container">
          <div class="news-title top-title">
            <h2>ニュース</h2>
            <span>News</span>
          </div>
          <div class="card-content-box">
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="card-content" data-aos="flip-left">
              <a href="#">
                <?php
                  $news_date = get_the_date('Y-m-d');
                  if (strtotime($news_date) > strtotime("-1 month")) :
                ?>
                <div class="card-new">New!</div>
                <?php endif; ?>
                <img src="<?php the_field('news_image'); ?>" alt="" />
                <div class="card-content-text">
                  <h2><?php the_title(); ?></h2>
                  <div class="card-content-sub-text">
                    <span class="card-category"><?php the_field('news_category'); ?></span>
                    <span class="card-date"><?php echo get_the_date('Y.m.d') ?></span>
                  </div>
                </div>
              </a>
            </div>
            <?php endwhile; ?>
          </div>
          <button class="more-button" onclick="location.href='#'">
            もっと見る
          </button>
        </div>
      </section>
      <?php endif; ?>
      <!-- ニュースここまで -->
    </main>

<?php get_footer(); ?>
