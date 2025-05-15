// DOMが読み込まれたら実行
window.addEventListener('DOMContentLoaded', function () {
  // ▼ 追従ヘッダーの関数
  const showFixedHeader = () => {
    const $globalMenu = $('#js-global-menu');
    const fixedNav = $('.header--black');

    // メニューが開いていたら制御しない
    if ($globalMenu.attr('aria-hidden') === 'false') return;

    const scrollTop = $(window).scrollTop();
    const headerHeight = $('.fv').outerHeight();
    const isHeaderVisible = scrollTop < headerHeight;

    fixedNav.toggleClass('is_active', !isHeaderVisible)
      .attr('aria-hidden', isHeaderVisible);
  };
  // 初回に実行
  showFixedHeader();

  // スクロール時に実行
  $(window).on('scroll', () => {
    showFixedHeader();
  });

  // ▼ ハンバーガーメニューの制御
  $(function () {
    $('.js-hamburger').click(toggleHamburgerMenu);
    $('#js-global-menu a').click(toggleHamburgerMenu);
  
    function toggleHamburgerMenu() {
      const isExpanded = $('.js-hamburger').attr('aria-expanded') === 'true';
      const $globalMenu = $('#js-global-menu');
      const $headerSp = $('.header--sp');
      const $headerBlack = $('.header--black');
      const $headerWhite = $('.header--white');
  
      $('body').toggleClass('is-drawerActive');
  
      if (!isExpanded) {
        // ▼ 開くとき
        $('.js-hamburger').attr('aria-expanded', true);
        $globalMenu.addClass('is-visible').attr('aria-hidden', 'false');
  
        // ▼ header--black を非表示に
        $headerBlack.removeClass('is_active').addClass('is-hidden');
        $headerSp.addClass('is-visible');
  
      } else {
        // ▼ 閉じるとき
        $('.js-hamburger').attr('aria-expanded', false);
        $globalMenu.removeClass('is-visible').attr('aria-hidden', 'true');
        $headerSp.removeClass('is-visible');
  
        // ▼ header--black を復活
        $headerBlack.removeClass('is-hidden');
  
        const isTop = $('.fv').length && $(window).scrollTop() < $('.fv').outerHeight();
        if (isTop) {
          $headerWhite.addClass('is-visible');
        } else {
          $headerBlack.addClass('is_active');
        }
      }
    }
  

    // スムーススクロール（リンククリック）
    const headerHeight = $('.header').outerHeight();
    $('a[href^="#"]').click(function () {
      const href = $(this).attr("href");
      const target = $(href === "#" || href === "" ? 'html' : href);
      if (target.length) {
        const position = target.offset().top - headerHeight;
        $("html, body").animate({ scrollTop: position }, 300, "swing");
        return false;
      }
    });

    // スムーススクロール（ハッシュありで読み込み時）
    const urlHash = location.hash;
    if (urlHash) {
      const target = $(urlHash);
      if (target.length) {
        const position = target.offset().top - headerHeight;
        $("html, body").animate({ scrollTop: position }, 300, "swing");
      }
    }
    // 目次
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = Array.from(tocLinks).map(link => {
      const id = link.getAttribute('href').replace('#', '');
      return document.getElementById(id);
    });

    window.addEventListener('scroll', () => {
      const header = document.querySelector('.header--black'); // 追従しているヘッダーの要素
      const headerHeight = header ? header.offsetHeight : 0;

      const scrollY = window.scrollY + headerHeight + 80; // ヘッダーの高さと80pxずらす

      let currentIndex = -1;
      sections.forEach((section, index) => {
        if (section.offsetTop <= scrollY) {
          currentIndex = index;
        }
      });

      tocLinks.forEach((link, index) => {
        if (index === currentIndex) {
          link.classList.add('is-active');
        } else {
          link.classList.remove('is-active');
        }
      });
    });


    // アコーディオン
    $('.jsAccordionQuestion').on('click', function () {
      $(this).next().toggleClass('is-open');
      $(this).toggleClass('is-active');
    });

    // コンタクトフォームのバリデーション
    const $submitBtn = $('#js-submit');

    $('#form input, #form textarea, #form select').on('change keyup', function () {
      const isValid =
        $('#your_name').val() !== '' &&
        $('#your_name_kana').val() !== '' &&
        $('#mail').val() !== '' &&
        $('#tel').val() !== '' &&
        $('input[name="radio-xxx"]:checked').val() !== undefined &&
        $('textarea[name="textarea-xxx"]').val() !== '' &&
        $('input[name="checkbox-xxx[]"]:checked').length > 0 &&
        $('input[name="birth_year"]').val() !== '' &&
        $('select[name="month"]').eq(0).val() !== '' &&
        $('select[name="birth_day"]').eq(1).val() !== '' &&
        $('#privacyCheck').is(':checked');

      $submitBtn.prop('disabled', !isValid);
    });

    $submitBtn.on('click', function (e) {
      e.preventDefault();
      window.location.href = "./thanks.html";
    });
  });

  // スワイパー（SwiperインスタンスはjQueryと分ける）
  new Swiper(".top-member__swiper", {
    loop: true,
    slidesPerView: "auto",
    slidesPerGroup: 1,
    speed: 800,
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });
});


// トップページアニメーション
$(window).on('scroll', function () {
  const scrollTop = $(window).scrollTop();
  const windowHeight = $(window).height();

  // top-about__text にアニメーションを適用
  $('.top-about__text').each(function () {
    const offsetTop = $(this).offset().top;

    if (scrollTop > offsetTop - windowHeight + 100 && scrollTop < offsetTop + $(this).outerHeight()) {
      $(this).addClass('active');
    } else {
      $(this).removeClass('active');
    }
  });

  // title-box にアニメーションを適用
  $('.title-box').each(function () {
    const offsetTop = $(this).offset().top;

    if (scrollTop > offsetTop - windowHeight + 100 && scrollTop < offsetTop + $(this).outerHeight()) {
      $(this).addClass('is-visible');
    } else {
      $(this).removeClass('is-visible');
    }
  });
});





