<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>
/style.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Viga&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body class="top-page">
  <header class="header">
    <div class="header--white">
      <h1>
      <a href="<?php echo esc_url(home_url('/')); ?>"><img class="header__logo-img header__logo-img--white"
       src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-white.png"
       alt="株式会社TETOTE | テクノロジーで社会課題を解決する"></a>

      </h1>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>details/" class="recruitment_btn">募集要項</a></li>
          <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>entry/" class="entry_btn">ENTRY</a></li>
        </ul>
      </nav>
      <button type="button" class="button hamburger js-hamburger" aria-controls="js-glabal-menu"
        aria-expanded="false" aria-label="メニューを開閉する">
        <span class="hamburger__line"></span>
        <span class="hamburger__label">MENU</span>
      </button>
    </div>
    <div class="header--black">
      <h1><a href="<?php echo esc_url(home_url('/')); ?>"><img class="header__logo-img header__logo-img--black"
            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-black.png" alt="株式会社TETOTE | テクノロジーで社会課題を解決する"></a>
      </h1>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>details/" class="recruitment_btn">募集要項</a></li>
          <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>entry/" class="entry_btn">ENTRY</a></li>
        </ul>
      </nav>
      <button type="button" class="button hamburger js-hamburger" aria-controls="js-glabal-menu"
        aria-expanded="false" aria-label="メニューを開閉する">
        <span class="hamburger__line"></span>
        <span class="hamburger__label">MENU</span>
      </button>
    </div>
    <div class="sp-global-menu" id="js-global-menu" aria-hidden="true">
      <header class="header--sp">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><img class="header__logo-img header__logo-img--black"
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-black.png" alt="株式会社TETOTE | テクノロジーで社会課題を解決する"></a>
        </h1>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>details/" class="recruitment_btn recruitment_btn--sp">募集要項</a></li>
            <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>entry/" class="entry_btn">ENTRY</a></li>
          </ul>
        </nav>
      </header>
      <section class="recruit-links">
        <div class="recruit-links__inner">

          <div class="recruit-links__logo-area">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-black.png" alt="TETOTEロゴ" class="recruit-links__logo" />
          </div>

          <div class="recruit-links__content">
            <div class="recruit-links__grid">

              <ul class="recruit-links__list">
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>about-us/">
                    <p class="recruit-links__en">ABOUT US</p>
                    <p class="recruit-links__ja">TETOTEについて</p>
                  </a>
                </li>
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>staff/">
                    <p class="recruit-links__en">STAFF</p>
                    <p class="recruit-links__ja">社員について</p>
                  </a>
                </li>
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>blog/">
                    <p class="recruit-links__en">BLOG</p>
                    <p class="recruit-links__ja">採用ブログ</p>
                  </a>
                </li>
              </ul>
              <ul class="recruit-links__list">
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>benefits/">
                    <p class="recruit-links__en">BENEFITS</p>
                    <p class="recruit-links__ja">福利厚生について</p>
                  </a>
                </li>
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>career/">
                    <p class="recruit-links__en">CARRER</p>
                    <p class="recruit-links__ja">研修制度とキャリアパス</p>
                  </a>
                </li>
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>faq/">
                    <p class="recruit-links__en">FAQ</p>
                    <p class="recruit-links__ja">よくある質問</p>
                  </a>
                </li>
              </ul>
            </div>

            <ul class="sp-button">
              <li><a href="<?php echo esc_url(home_url('/')); ?>details/" class="recruitment_btn recruitment_btn--large">募集要項</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>entry/" class="entry_btn entry_btn--large">ENTRY</a></li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </header>
 