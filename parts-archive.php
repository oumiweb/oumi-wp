<div class="cards">

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="card">
        <a href="<?php the_permalink(); ?>" class="card__link">
          <div class="card__item">
            <div class="card__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog/blog01.jpg" alt="ブログのサムネイル">
              <?php endif; ?>
            </div>
            <div class="card__body">
              <?php
              $cats = get_the_category();
              if ($cats) :
              ?>
                <p class="card__category">
                  <?php foreach ($cats as $cat) : echo esc_html($cat->name);
                  endforeach; ?>
                </p>
              <?php endif; ?>
              <h3 class="card__title"><?php the_title(); ?></h3>
              <time datetime="<?php the_time('Y-m-d'); ?>" class="card__date"><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>
        </a>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>記事が見つかりませんでした。</p>
  <?php endif; ?>

</div> <!-- cards -->