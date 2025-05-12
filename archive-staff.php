<?php get_header(); ?>

<main>
  <div class="section__mv">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/staff/staff-fv 1.jpg" alt="オフィス風景" class="section__image">
    <div class="mv__wrapper">
      <h2 class="mv__title">STAFF
      </h2>
      <p class="mv__sub-title">社員について</p>
      <p class="mv__lead">弊社社員のリアルな声を紹介しています。</p>
    </div>
  </div>
  <ol class="breadcrumbs">
    <?php if (function_exists('bcn_display')) bcn_display_list(); ?>

  </ol>
  <section class="staff">
    <div class="staff__inner">
      <div class="staff-content">
        <?php
        // 並び順を menu_order で制御する
        $args = [
          'post_type'      => 'staff',
          'posts_per_page' => -1,
          'orderby'        => 'menu_order',
          'order'          => 'ASC'
        ];
        $staff_query = new WP_Query($args);
        ?>
        <?php if ($staff_query->have_posts()): ?>
          <?php while ($staff_query->have_posts()): $staff_query->the_post(); ?>

            <?php
            $staff_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $staff_name = get_field('staff_name');
            $staff_position = get_field('staff_position');
            $staff_year = get_field('staff_year');
            $staff_msg1 = get_field('staff_message_1');
            $staff_msg2 = get_field('staff_message_2');
            ?>
            <a href="<?php the_permalink(); ?>" class="staff-card__link">
              <div class="staff-cards">
                <img src="<?php echo esc_url($staff_image); ?>" alt="<?php echo esc_attr($staff_name); ?>の写真" class="staff-card__image">
                <div class="staff-card__message">
                  <span><?php echo esc_html($staff_msg1); ?></span>
                  <span><?php echo esc_html($staff_msg2); ?></span>
                </div>
                <div class="staff-card__info">
                  <p class="staff-card__position"><?php echo esc_html($staff_position); ?>&nbsp;&nbsp;<?php echo esc_html($staff_year); ?></p>
                  <p class="staff-card__name"><?php echo esc_html($staff_name); ?></p>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>スタッフが登録されていません。</p>
        <?php endif; ?>
      </div>
    </div>
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
</main>

<?php get_footer(); ?>