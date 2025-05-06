<?php get_header(); ?>

  <main>
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

    <section class="about-us">
      <div class="section__mv">
        <img src="/img/about-us/about-fv.jpg" alt="オフィス風景" class="section__image">
        <div class="mv__wrapper">
          <h2 class="mv__title"><?php the_title(); ?>
          </h2>
          <p class="mv__sub-title">TETOTEについて</p>
          <p class="mv__lead">私たちの理念を紹介をします。</p>
        </div>
      </div>
      <ol class="breadcrumbs">
        <li><a href="./">TOP</a></li>
        <li><a href="#">ABOUT US</a></li>
      </ol>
    </section>
    <section class="importance">
    <?php the_content(); ?>

    </section>
    <?php endwhile; ?>
    <?php endif; ?>

    </main>

    <?php get_footer(); ?>

  
  <script src="/js/jquery-3.7.1.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>