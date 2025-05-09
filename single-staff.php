<?php get_header(); ?>

<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <section class="staff-detail">
        <div class="section-inner">
          <div class="staff-detail__mv section__mv">
            <!-- 左側：テキスト -->
            <div class="staff-detail__message">
              <div class="staff-detail__lead">
                <span class="staff-detail__highlight"><?php the_field('staff_message_1'); ?></span>
                <span><?php the_field('staff_message_2'); ?></span>
              </div>
              <div class="staff-detail__info">
                <p class="staff-detail__position"><?php the_field('staff_position'); ?></p>
                <div class="staff-detail__wrapper">
                  <p class="staff-detail__name"><?php the_field('staff_name'); ?></p>
                  <p class="staff-detail__year"><?php the_field('staff_year'); ?></p>
                </div>
              </div>
              <p class="staff-detail__desc"><?php the_field('staff_desc'); ?></p>
            </div>

            <!-- 右側：画像 -->
            <div class="staff-detail__image">
              <?php
              // 現在の投稿のスラッグを取得
              $slug = get_post_field('post_name', get_post());

              // スラッグに応じた画像パスを生成
              $image_path = get_stylesheet_directory_uri() . '/img/staff/' . $slug . '.jpg';
              ?>

              <img src="<?php echo esc_url($image_path); ?>" alt="<?php the_title(); ?>の写真">
            </div>

          </div>
        </div>
      </section>

      <ol class="breadcrumbs">
        <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>

      <article class="staff-article" data-staff-name="西村 優">
        <div class="staff-article__inner">
          <div class="staff-article__wrapper">
          <?php the_content(); ?>
        </div>
      </article>

      <section class="other-members">
        <div class="section-inner">
          <h2 class="other-members__title">その他のメンバー</h2>

          <!-- ★ ここにJavaScriptで動的にカードを入れる！ -->
          <div id="otherMemberList" class="staff-cards-wrapper">
            <!-- 最初は空っぽ -->
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

    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>