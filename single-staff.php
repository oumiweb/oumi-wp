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
                <span class="staff-detail__highlight">あなたが担当で良かった</span>
                <span>この一言が、最高のやりがい</span>
              </div>
              <div class="staff-detail__info">
                <p class="staff-detail__position">コンサルタント</p>
                <div class="staff-detail__wrapper">
                  <p class="staff-detail__name">西村 優</p>
                  <p class="staff-detail__year">2011年入社</p>
                </div>
              </div>
              <p class="staff-detail__desc">
                東京大学工学部を卒業後、大手IT企業でシステムエンジニアとして5年間、システム開発に携わった。その後、TETOTEに転職し、IT戦略策定やシステム導入プロジェクトの支援に従事。豊富な経験と知識を活かし、クライアントの課題解決に貢献している。
              </p>
            </div>

            <!-- 右側：画像 -->
            <div class="staff-detail__image">
              <img src="/img/staff/staff01.jpg" alt="男性社員西村優の写真">
            </div>
          </div>
        </div>
      </section>

      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>

      <article class="staff-article" data-staff-name="西村 優">
        <div class="staff-article__inner">
          <div class="staff-article__wrapper">
            <!-- 左側：本文 -->
            <div class="staff-article__content">
              <h2 id="duties" class="staff-article__title">普段の業務内容について</h2>
              <p>
                TETOTEのコンサルティング本部で、ITコンサルタントとして勤務しています。主な業務内容は、以下の3つです。
              </p><br>
              <p><strong>1. クライアントの経営課題のヒアリングと分析</strong></p>
              <br>
              <p>
                クライアント企業の経営者やIT部門責任者から、経営戦略や業務内容、既存のシステム状況などをヒアリングし、課題解決のためのIT戦略を策定します。
              </p>
              <br>
              <p><strong>2. システム導入プロジェクトの支援</strong></p>
              <br>
              <p>
                システム導入プロジェクトの企画・立案から導入後の運用まで、一貫して支援します。
              </p>
              <br>
              <p><strong>3. IT人材育成</strong></p>
              <br>
              <p>
                クライアント企業のIT部門向けに、ITスキル向上のための研修やセミナーを実施します。<br>これらの業務を通して、クライアント企業のIT戦略の立案から実行までを支援し、課題解決に貢献しています。
              </p>

              <h2 id="student-life" class="staff-article__title">学生時代に力を入れたことは？</h2>
              <p>
                学生時代に力を入れたことは、ロボットプログラミングサークルでの活動です。
                私は、東京大学工学部在学中に、ロボットプログラミングサークルに所属していました。サークルでは、二足歩行ロボットや自律走行ロボットなどの製作に取り組み、全国大会にも出場しました。<br>
                この活動を通して、問題解決能力、チームワーク力、プレゼンテーション能力を身につけました。<br>
                特に、二足歩行ロボットの製作では、ロボットが歩行できるようにするためのプログラムを開発しました。試行錯誤を繰り返しながら、目標を達成するために必要な知識を積極的に学び、チームメンバーと協力して課題を解決しました。<br>
                この経験は、現在の仕事、つまり、クライアントの課題を解決するために、必要な知識を積極的に学び、チームメンバーと協力して課題を解決する、ここに活かされています。
              </p>

              <h2 id="reason-tetote" class="staff-article__title">TETOTEを選択した理由は？</h2>
              <p>IT戦略策定からシステム導入まで一貫して支援できる点です。<br>
                前職でシステムエンジニアとして5年間、システム開発に携わった中で、単なる技術課題解決ではなく、クライアントの経営課題解決に貢献したいと考えるようになりました。<br>
                TETOTEは、IT戦略策定から導入まで一貫して支援できる数少ないコンサルティング会社です。自分の技術力と経営視点を活かし、課題解決に貢献したいという想いを叶えられる環境だと確信しました。</p>

              <h2 id="rewarding" class="staff-article__title">やりがいを感じる瞬間は？</h2>
              <p>特に印象深いのは、大手製造業のA社でのプロジェクトです。A社は、生産管理システムの老朽化により、作業効率の低下とコスト増加に悩んでいました。<br>
                私は、A社の経営層や現場担当者と綿密なヒアリングを行い、課題を分析しました。そして、最新のクラウド技術を活用した新しい生産管理システムを提案しました。
                導入後は、作業効率が大幅に向上し、コストも削減できました。さらに、システムの使いやすさが好評で、現場担当者からも感謝の言葉を頂きました。<br>
                この経験を通して、ITの力でクライアントの課題解決に貢献できる仕事の価値を実感しました。</p>

              <h2 id="teammate" class="staff-article__title">どんな人と一緒に働きたい？</h2>
              <p>自分の考えを相手に分かりやすく伝え、相手の意見を尊重できる人です。<br>
                このような人々と共に働くことで、互いに刺激を与え合い、より高いレベルを目指していけると考えています。</p>

              <h2 id="message" class="staff-article__title">応募者へのメッセージ</h2>
              <p>TETOTEは、「ITの力で社会課題を解決する」というビジョンを掲げ、日々成長している会社です。
                高い志を持ち、自ら考え行動できる人と一緒に働きたいです。
                一緒に、社会に貢献できる仕事に挑戦しましょう！</p>
            </div>

            <!-- 右側：追従する目次 -->
            <aside class="staff-article__toc">
              <nav class="staff-article__nav">
                <ul class="toc-list">
                  <li>目次</li>
                  <li><a href="#duties" class="toc-link">・普段の業務内容について</a></li>
                  <li><a href="#student-life" class="toc-link">・学生時代に力を入れたことは？</a></li>
                  <li><a href="#reason-tetote" class="toc-link">・TETOTEを選択した理由は？</a></li>
                  <li><a href="#rewarding" class="toc-link">・やりがいを感じる瞬間は？</a></li>
                  <li><a href="#teammate" class="toc-link">・どんな人と一緒に働きたい？</a></li>
                  <li><a href="#message" class="toc-link">・応募者へのメッセージ</a></li>
                </ul>
              </nav>
            </aside>
          </div>
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