<?php get_header(); ?>

<main>
  <ol class="breadcrumbs">
    <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
  </ol>
  <section class="entry">
    <div class="entry-inner">
      <div class="entry__wrapper">
        <div class="entry__header">
          <h3 class="entry__title"><?php the_title(); ?>
          </h3>
          <div class="entry__head">
            <h2 class="entry__lead"><span>新卒・中途採用<br class="sp-only"></span>エントリーフォーム</h2>
            <p class="entry__description">
              当社へ入社ご希望の方は、下記の送信フォームより送信してください。</p>
              <p class="entry__note"><span>※</span>は必須項目になります。</p>
          </div>
        </div>

        <div class="Form" id="form">
          <!-- 名前input -->
          <div class="Form-Item">
            <p class="Form-Item-Label">お名前
              <span class="Form-Item-Label-Required">※</span>
            </p>
            <span class="wpcf7-form-control-wrap text-xxx">
              <input type="text" name="your_name" class="wpcf7-form-control wpcf7-text" aria-invalid="false" 　 id="name"
                placeholder="例：山田太郎" 　>
            </span>
          </div>
          <!-- 名前カナinput -->
          <div class="Form-Item">
            <p class="Form-Item-Label">お名前カナ
              <span class="Form-Item-Label-Required">※</span>
            </p>
            <span class="wpcf7-form-control-wrap text-xxx">
              <input type="text" name="your_name_kana" class="wpcf7-form-control wpcf7-text" aria-invalid="false" id="name_kana" placeholder="例：ヤマダタロウ">
            </span>
          </div>
          <!-- メールアドレスinput -->
          <div class="Form-Item">
            <p class="Form-Item-Label">メールアドレス
              <span class="Form-Item-Label-Required">※</span>
            </p>
            <span class="wpcf7-form-control-wrap email-xxx">
              <input type="email" name="email"
                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" id="mail"
                placeholder="例：tetote@gmail.com">
            </span>
          </div>
          <!-- 電話番号input -->
          <div class="Form-Item">
            <p class="Form-Item-Label">電話番号
              <span class="Form-Item-Label-Required">※</span>
            </p>
            <span class="wpcf7-form-control-wrap tel-xxx">
              <input type="tel" name="tel" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                aria-invalid="false" id="tel" placeholder="例：00-0000-0000">
            </span>
          </div>
          <!-- 生年月日 -->
          <div class="Form-Item year">
            <p class="Form-Item-Label">生年月日
              <span class="Form-Item-Label-Required">※</span>
            </p>
            <input type="text" name="birth_year" class="wpcf7-form-control wpcf7-text wpcf7-year wpcf7-validates-as-year" id="birth_year" placeholder="例：2000">
            <span>年</span>
          </div>
          <div class="form__birth-selects">
            <div class="Form-Item month">
              <select class="select-box" name="month" id="month">
                <option value="">選択してください</option>
                <option value="1">1月</option>
                <option value="2">2月</option>
                <option value="3">3月</option>
                <option value="4">4月</option>
                <option value="5">5月</option>
                <option value="6">6月</option>
                <option value="7">7月</option>
                <option value="8">8月</option>
                <option value="9">9月</option>
                <option value="10">10月</option>
                <option value="11">11月</option>
                <option value="12">12月</option>
              </select>
              <span>月</span>
            </div>
            <!-- 日（プルダウン） -->
            <div class="Form-Item birth_day">
              <select class="select-box" name="birth_day" id="birth_day">
                <option value="">選択してください</option>
                <option value="1">1日</option>
                <option value="2">2日</option>
                <option value="3">3日</option>
                <option value="4">4日</option>
                <option value="5">5日</option>
                <option value="6">6日</option>
                <option value="7">7日</option>
                <option value="8">8日</option>
                <option value="9">9日</option>
                <option value="10">10日</option>
                <option value="11">11日</option>
                <option value="12">12日</option>
                <option value="13">13日</option>
                <option value="14">14日</option>
                <option value="15">15日</option>
                <option value="16">16日</option>
                <option value="17">17日</option>
                <option value="18">18日</option>
                <option value="19">19日</option>
                <option value="20">20日</option>
                <option value="21">21日</option>
                <option value="22">22日</option>
                <option value="23">23日</option>
                <option value="24">24日</option>
                <option value="25">25日</option>
                <option value="26">26日</option>
                <option value="27">27日</option>
                <option value="28">28日</option>
                <option value="29">29日</option>
                <option value="30">30日</option>
                <option value="31">31日</option>
              </select>
              <span>日</span>
            </div>
          </div>


          <!-- ラジオボタン -->
          <div class="Form-Item radio-btn">
            <p class="Form-Item-Label">希望職種<span class="Form-Item-Label-Required">※</span></p>
            <span class="wpcf7-form-control-wrap radio-xxx">
              <span class="wpcf7-form-control wpcf7-radio">
                <span class="wpcf7-list-item first">
                  <label>
                    <input type="radio" name="radio-xxx" value="コンサルタント" checked>
                    <span class="wpcf7-list-item-label">コンサルタント</span>
                  </label>
                </span>
                <span class="wpcf7-list-item">
                  <label>
                    <input type="radio" name="radio-xxx" value="ソリューション営業">
                    <span class="wpcf7-list-item-label">ソリューション営業</span>
                  </label>
                </span>
                <span class="wpcf7-list-item last">
                  <label>
                    <input type="radio" name="radio-xxx" value="システムエンジニア">
                    <span class="wpcf7-list-item-label">システムエンジニア</span>
                  </label>
                </span>
              </span>
            </span>
          </div>

          <!-- 自己PR -->
          <div class="Form-Item textarea">
            <p class="Form-Item-Label isMsg">自己PR<span class="Form-Item-Label-Required">※</span></p>
            <span class="wpcf7-form-control-wrap textarea-xxx">
              <textarea name="textarea-xxx" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                aria-invalid="false" id="" placeholder="例：志望動機、自己PR"></textarea>
            </span>
          </div>
          <!-- チェックボックス -->
          <div class="Form-Item checkbox">
            <p class="Form-Item-Label">当社を知ったきっかけを教えて下さい。</p>
            <span class="wpcf7-form-control-wrap checkbox-xxx">
              <span class="wpcf7-form-control wpcf7-checkbox">
                <span class="wpcf7-list-item first">
                  <label>
                    <input type="checkbox" name="checkbox-xxx" value="X(旧Twitter)">
                    <span class="wpcf7-list-item-label">X(旧Twitter)</span>
                  </label>
                </span>
                <span class="wpcf7-list-item">
                  <label>
                    <input type="checkbox" name="checkbox-xxx" value="Facebook">
                    <span class="wpcf7-list-item-label">Facebook</span>
                  </label>
                </span>
                <span class="wpcf7-list-item">
                  <label>
                    <input type="checkbox" name="checkbox-xxx" value="検索広告">
                    <span class="wpcf7-list-item-label">検索広告</span>
                  </label>
                </span>
                <span class="wpcf7-list-item">
                  <label>
                    <input type="checkbox" name="checkbox-xxx" value="知人友人・親戚">
                    <span class="wpcf7-list-item-label">知人友人・親戚</span>
                  </label>
                </span>
                <span class="wpcf7-list-item last">
                  <label>
                    <input type="checkbox" name="checkbox-xxx" value="その他">
                    <span class="wpcf7-list-item-label">その他</span>
                  </label>
                </span>
              </span>
            </span>
          </div>

          <div class="button-wrap">
            <span class="wpcf7-list-item">
              <input type="checkbox" id="privacyCheck" required>
              <span class="wpcf7-list-item-label">個人情報保護方針に同意する</span>
            </span>
            <input type="submit" disabled value="送信する" class="wpcf7-form-control wpcf7-submit" id="js-submit">
            <span class="ajax-loader"></span>
          </div>
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
  <?php get_footer(); ?>
