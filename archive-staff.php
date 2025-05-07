<?php get_header(); ?>

<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <div class="section__mv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/staff/staff-fv 1.jpg" alt="オフィス風景" class="section__image">
        <div class="mv__wrapper">
          <h2 class="mv__title"><?php the_title(); ?>
          </h2>
          <p class="mv__sub-title">社員について</p>
          <p class="mv__lead">弊社社員のリアルな声を紹介しています。</p>
        </div>
      </div>
      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>

      </ol>
      <section class="staff">
        <div class="staff__inner">
          <div class="staff-content">
            <a href="/html/staff/nishimura.html" class="staff-card__link">
              <div class="staff-cards">
                <img src="/img/staff/staff01.jpg" alt=" 男性社員西村優の写真" class="staff-card__image">
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
      </section>
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
          <a href="#" class="visual__entry_button">ENTRY</a>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>