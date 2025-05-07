<?php get_header(); ?>

  <main>
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

    <section class="carrer-mv">
      <div class="section__mv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/career/carrer-fv 1.jpg" alt="オフィス風景" class="section__image">
        <div class="mv__wrapper">
          <h2 class="mv__title">CAREER</h2>
          <p class="mv__sub-title">研修制度とキャリアパス</p>
          <p class="mv__lead">キャリアパスを支える充実した、研修制度</p>
        </div>
      </div>
      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
    </section>
    <section class="career">
      <div class="section-inner">

        <h2 class="section-title section-title__right">キャリアパスに沿った研修制度を用意</h2>
        <p class="section__lead">
          弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。
        </p>
        <div class="career__img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/career/tetote-carrer-path 1.svg" alt="TETOTEでのキャリアパスの図解">
        </div>
        <p class="career__text">
          TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。
        </p>
        <div class="career__list">

          <div class="career__item">
            <p class="career__item-title">1. ケーススタディ研修</p>
            <p class="career__item-text">
              TETOTE の過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>
              この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。
            </p>
          </div>

          <div class="career__item">
            <p class="career__item-title">2. クライアント対応研修</p>
            <p class="career__item-text">
              TETOTE は、クライアントとの信頼関係構築を重視しています。<br>
              この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。
            </p>
          </div>

          <div class="career__item">
            <p class="career__item-title">3. 専門知識研修</p>
            <p class="career__item-text">
              財務、会計、ITなど、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。<br>
              TETOTE は、幅広い分野の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。
            </p>
          </div>

          <div class="career__item">
            <p class="career__item-title">4. マネジメント研修</p>
            <p class="career__item-text">
              プロジェクトマネジメント、リーダーシップ、チームビルディングなど、マネジメントスキルを習得するための研修を実施しています。<br>
              TETOTE は、将来的にマネジメント層を担うコンサルタントを育成し、組織全体の成長を促進しています。
            </p>
          </div>

          <div class="career__item">
            <p class="career__item-title"><span class="career__training-number">5.</span>外部研修</p>
            <p class="career__item-text">
              社外で実施される研修にも積極的に参加することができます。<br>
              TETOTE は、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。
            </p>
          </div>

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