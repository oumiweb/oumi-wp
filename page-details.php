<?php get_header(); ?>

  <main>
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <section class="details-mv">
      <div class="section__mv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/details/details-fv 1.jpg" alt="オフィス風景" class="section__image">
        <div class="mv__wrapper">
          <h2 class="mv__title"><?php the_title(); ?></h2>
          <p class="mv__sub-title">募集要項</p>
          <p class="mv__lead">TETOTEは幅広く仲間を募集しています。</p>
        </div>
      </div>
      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
    </section>
    <section class="details">
    <?php the_content(); ?>
    </section>


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
    <?php endwhile; ?>
    <?php endif; ?>
  </main>
  <?php get_footer(); ?>
    
  <script src="/js/jquery-3.7.1.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>