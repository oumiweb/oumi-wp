<?php get_header(); ?>

<main>
  <ol class="breadcrumbs">
    <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
  </ol>
  <section class="blog-detail">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <div class="blog-detail__inner">
          <article class="blog-detail__article">
            <header>
              <p class="blog-detail__meta">社内研修　2023.03.25</p>
              <h2 class="blog-detail__title">新入社員向けに、入社前研修を行いました。</h2>
              <?php if (has_post_thumbnail()): ?>
                <div class="blog-detail__image">
                  <?php the_post_thumbnail('full'); ?>
                </div>
              <?php endif; ?>

            </header>
            <?php the_content(); ?>
          </article>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
  </section>
  
  <div class="blog-detail__pagination">
    <div class="blog-detail__pagination-prev">
      <a href="<?php echo esc_url(home_url('/')); ?>./blog-detail2/" class="pagination-link">
        <div class="pagination-link__text-group">
          <?php previous_post_link('%link', '前の記事へ'); ?>
          <p class="pagination-link__text">内定者向け研修を行いました。</p>
          <time class="pagination-link__date" datetime="2024-08-25">2024.08.25</time>
        </div>
        <span class="visually-hidden">前の記事へ</span>
      </a>
    </div>
    <!-- 真ん中の線 -->
    <div class="blog-detail__separator"></div>
    <div class="blog-detail__pagination-next">
      <a href="./blog-detail4.html" class="pagination-link">
        <div class="pagination-link__text-group">
          <p class="pagination-link__text">【新卒採用2024】エントリー受付中！</p>
          <time class="pagination-link__date" datetime="2024-08-25">2024.08.25</time>
        </div>
        <span class="visually-hidden">次の記事へ</span>
      </a>
    </div>
  </div>
</main>


<!-- bottomメインビジュアル -->
<section class="visual">
  <div class="visual__image">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cta/cta-visual.jpg" alt="オフィスビルの写真">
  </div>

  <div class="visual__entry-box">
    <p class="visual__text">
      わたしたちと一緒に働く仲間を募集中です。<br>
      少数精鋭のチームで、<br>
      あなたも会社と一緒に成長していきましょう。
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>entry/" class="visual__entry_button">ENTRY</a>
  </div>
</section>

<!-- フッター -->
<?php get_footer(); ?>