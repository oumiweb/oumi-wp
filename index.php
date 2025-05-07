<?php get_header(); ?>

<main>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

  <section class="fv">
    <div class="fv__slider">
      <div class="fv__slide fv__slide1"></div>
      <div class="fv__slide fv__slide2"></div>
    </div>
    <h2 class="fv__title fade-in delay-1"><?php the_title(); ?></h2>
    <p class="fv__subtitle fade-in delay-2">君の挑戦が、意思が、未来を変える</p>
    <div class="fv__wrapper fade-in delay-3">
      <a class="fv__newsBanner" href="./blog/blog.html">
        <span class="fv__newsBanner--label">NEWS</span>
        <div class="fv__newsBanner--content">
          <p class="fv__newsBanner--text">新入社員向けに、入社前研修を行いました。</p>
          <p class="fv__newsBanner-viewmore">VIEW MORE</p>
        </div>
      </a>
    </div>
  </section>


  <section class="top-about">
    <div class="slider-wrapper">
      <ul class="slider">
        <li class="slide">
          <img src="/img/top/top-slide01.jpg" alt="男性が電話をかけている画像" />
        </li>
        <li class="slide">
          <img src="/img/top/top-slide02.jpg" alt="女性がパソコンで作業している画像" />
        </li>
        <li class="slide">
          <img src="/img/top/top-slide03.jpg" alt="女性がプレゼンしている画像" />
        </li>
        <li class="slide">
          <img src="/img/top/top-slide01.jpg" alt="男性が電話をかけている画像" />
        </li>
        <li class="slide">
          <img src="/img/top/top-slide02.jpg" alt="女性がパソコンで作業している画像" />
        </li>
        <li class="slide">
          <img src="/img/top/top-slide03.jpg" alt="女性がプレゼンしている画像" />
        </li>
      </ul>
      <h3 class="top-about__title">
        <span>後悔しないキャリアを作る、</span>
        <span>それこそが、我々の使命だ</span>
      </h3>
    </div>
    <div class="section-inner">
      <div class="top-about__text">
        <p>
          「人手不足」<br>
          今の日本が抱えるこの社会課題に挑み、<br>
          企業と個人の可能性を最大限に引き出す。<br>
          それが私達の役目。
        </p>
        <p>
          単につなぐだけじゃない。<br>
          「手と手」を取り合っていけるような、<br>
          持続可能な社会を、一緒に作りませんか？
        </p>
      </div>

      <div class="top-about__vewmore">
        <a class="viewmore-btn" href="about-us.html">VIEW MORE</a>
      </div>
    </div>
  </section>

  <section class="top-member">
    <div class="inner">
      <div class="title-box">
        <span class="top-member__title--en title-box__en">MEMBER</span>
        <h2 class="top-member__title--ja title-box__ja"><span>人</span>を知る</h2>
      </div>
      <p class="section-text"> TETOTEの社員がどういった信念を持って働いているのか、<br>
        一日のスケジュールや仕事内容などを紹介します。</p>
      <div class="swiper top-member__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="/html/staff/nishimura.html" class="staff-card__link">
              <div class="staff-cards">
                <img src="/img/staff/staff01.jpg" alt=" 男性社員西村優の写真" class="staff-card__image">
                <div class="staff-card__message">
                  <span>「あなたが担当で良かった」</span><span>この一言が、最高のやりがい</span>
                </div>
                <div class="staff-card__info">
                  <p class="staff-card__position">コンサルタント&nbsp;&nbsp;2011年入社</p>
                  <p class="staff-card__name">西村 優</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/html/staff/hashimoto.html" class="staff-card__link">
              <div class="staff-cards">
                <img src="/img/staff/staff02.jpg" alt="男性社員の橋本拓哉の写真" class="staff-card__image">
                <div class="staff-card__message">
                  <span>全力で考えぬける環境</span>
                  <span>試練の数だけ強くなれました</span>
                </div>
                <div class="staff-card__info">
                  <p class="staff-card__position">コンサルタント&nbsp;&nbsp;2015年入社</p>
                  <p class="staff-card__name">橋本 拓哉</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/html/staff/aoki.html" class="staff-card__link">
              <div class="staff-cards">
                <img src="/img/staff/staff03.jpg" alt="女性社員の青木美月の写真" class="staff-card__image">
                <div class="staff-card__message">
                  <span>お客様も知らない課題を</span>
                  <span>一緒に探し出す醍醐味</span>
                </div>
                <div class="staff-card__info">
                  <p class="staff-card__position">ソリューション営業&nbsp;&nbsp;2017年入社</p>
                  <p class="staff-card__name">青木 美月</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/html/staff/sasaki.html" class="staff-card__link">
              <div class="staff-cards">
                <img src="/img/staff/staff04.jpg" alt="男性社員の佐々木健の写真" class="staff-card__image">
                <div class="staff-card__message">
                  <span>ビジネスの課題を</span>
                  <span>データで解決する醍醐味</span>
                </div>
                <div class="staff-card__info">
                  <p class="staff-card__position">データサイエンティスト&nbsp;&nbsp;2002年入社</p>
                  <p class="staff-card__name">佐々木 健</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/html/staff/takada.html" class="staff-card__link">
              <div class="staff-cards">
                <img src="/img/staff/staff05.jpg" alt="女性写真の高田凛の写真" class="staff-card__image">
                <div class="staff-card__message">
                  <span>どんな難解な案件も</span>
                  <span>チームで突破できる強い連携</span>
                </div>
                <div class="staff-card__info">
                  <p class="staff-card__position">コンサルタント&nbsp;&nbsp;2006年入社</p>
                  <p class="staff-card__name">高田 凛</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/html/staff/tachibana.html" class="staff-card__link">
              <div class="staff-cards">
                <img src="/img/staff/staff06.jpg" alt="男性社員の橘光の写真" class="staff-card__image">
                <div class="staff-card__message">
                  <span>お客様と一緒に開発</span>
                  <span>豊富なプライム案件が魅力です</span>
                </div>
                <div class="staff-card__info">
                  <p class="staff-card__position">システム事業部課長&nbsp;&nbsp;2007年入社</p>
                  <p class="staff-card__name">橘 光</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="top-member__viewmore">
        <a class="viewmore-btn" href="/html/staff/staff.html">VIEW MORE</a>
        <div class="top-member__arrow-btn">
          <a class="button-next" href=""><span class="visually-hidden">前へ</span></a>
          <a class="button-prev" href=""><span class="visually-hidden">次へ</span></a>
        </div>
      </div>
    </div>
  </section>

  <section class="top-benefits">
    <div class="section-inner">
      <div class="title-box">
        <span class="title-box__en">BENEFITS</span>
        <h2 class="top-benefits__title-ja title-box__ja"><span>制度・環境</span>を知る</h2>
      </div>
      <p class="top-benefits__section-text">当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
      <ul class="top-benefits__list">
        <li class="top-benefits__item">
          <a href="./career.html" class="top-benefits__link">
            <div class="top-benefits__wrapper">
              <img class="top-benefits__image" src="/img/top/career.svg" alt="研修制度とキャリアパス" />
              <span class="top-benefits__label">Traning And Career</span>
              <h3 class="top-benefits__title">研修制度とキャリアパス</h3>
              <div class="top-benefits__arrow">
                <div class="arrow-black-btn"></div>
              </div>
            </div>
            <p class="top-benefits__text">
              個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。
            </p>
          </a>
        </li>

        <li class="top-benefits__item">
          <a href="./benefits.html" class="top-benefits__link">
            <div class="top-benefits__wrapper">
              <img class="top-benefits__image" src="/img/top/hukurikousei.svg" alt="">
              <span class="top-benefits__label">Employee Benefits</span>
              <h3 class="top-benefits__title">福利厚生</h3>
              <div class="top-benefits__arrow">
                <div class="arrow-black-btn"></div>
              </div>
            </div>
            <p class="top-benefits__text">
              TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。
            </p>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="top-blog">
    <div class="section-inner">
      <div class="top-blog__title title-box">
        <div class="title-box__group">
          <span class="title-box__en">BLOG</span>
          <h2 class="title-box__ja">採用ブログ</h2>
        </div>

        <a class="viewmore-btn__link" href="./blog/blog.html">
          <span class="circle-btn"></span>
          <span class="btn-text">VIEW MORE</span>
        </a>
      </div>

      <p class="section-text">採用情報やイベント情報、社員の紹介など、<br>
        日々の現場の様子をご紹介します。</p>
      <div class="cards">
        <article class="card">
          <a href="./blog/blog-detail.html" class="card__link">
            <div class="card__item">
              <div class="card__img"><img src="/img/blog/blog01.jpg" alt="女性がプレゼンしている画像"></div>
              <div class="card__body">
                <p class="card__category">社内研修</p>
                <h3 class="card__title">新入社員向けに、入社前研修を行いました。</h3>
                <time class="card__date" datetime="2025-03-25">2025.03.25</time>
              </div>
            </div>
          </a>
        </article>
        <article class="card">
          <a href="./blog/blog-detail2.html" class="card__link">
            <div class="card__item">
              <div class="card__img"><img src="/img/blog/blog02.jpg" alt="オフィスの写真"></div>
              <div class="card__body">
                <p class="card__category">社内研修</p>
                <h3 class="card__title">内定者向け研修を行いました。</h3>
                <time class="card__date" datetime="2024-08-25">2024.08.25</time>
              </div>
            </div>
          </a>
        </article>
        <article class="card card--trip">
          <a href="./blog/blog-detail3.html" class="card__link">
            <div class="card__item">
              <div class="card__img"><img src="/img/blog/blog03.jpg" alt="旅行の記念写真画像"></div>
              <div class="card__body">
                <p class="card__category">社内イベント</p>
                <h3 class="card__title">【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！</h3>
                <time class="card__date" datetime="2024-03-25">2025.03.25</time>
              </div>
            </div>
          </a>
        </article>
        <article class="card">
          <a href="./blog/blog-detail4.html" class="card__link">
            <div class="card__item">
              <div class="card__img"><img src="/img/blog/blog04.jpg" alt="男女スタッフの写真"></div>
              <div class="card__body">
                <p class="card__category">お知らせ</p>
                <h3 class="card__title">【新卒採用2024】エントリー受付中！</h3>
                <time class="card__date" datetime="2024-03-01">2024.03.01</time>
              </div>
            </div>
          </a>
        </article>
        <div class="top-blog__viewmore">
          <a class="viewmore-btn__link" href="./blog/blog.html">
            <span class="circle-btn"></span>
            <span class="btn-text">VIEW MORE</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="top-recruitment">
    <div class="section-inner">
      <div class="title-box">
        <span class="title-box__en">RECRUITMENT</span>
        <h2 class="title-box__ja">採用情報</h2>
      </div>
      <p class="section-text">募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。</p>

      <div class="info-links">
        <div class="info-links_top">
          <a class="info-links__item" href="./details.html">募集要項</a>
          <a class="info-links__item" href="./faq.html">よくある質問</a>
        </div>
        <div class="info-links__bottom">
          <a class="info-links__item" href="./about-us.html#company">会社概要</a>
        </div>
      </div>
    </div>
  </section>

  <!-- メインビジュアル -->
  <section class="visual">
    <div class="visual__image">
      <img src="/img/cta/cta-visual.jpg" alt="オフィスビルの写真">
    </div>

    <div class="visual__entry-box">
      <p class="visual__text">
        わたしたちと一緒に働く仲間を募集中です。<br>
        少数精鋭のチームで、<br>
        あなたも会社と一緒に成長していきましょう。
      </p>
      <a href="./entry.html" class="visual__entry_button">ENTRY</a>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>

  </main>

  <!-- フッター -->
  <?php get_footer(); ?>



<script src="/js/jquery-3.7.1.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/js/main.js"></script>
</body>

</html>