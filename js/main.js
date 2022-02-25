$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    margin: 0,
    responsiveClass: true,
    autoplay: true,
    animateOut: "slideOutDown",
    animateIn: "flipInX",
    items: 1,
    loop: true,
    stagePadding: 0,
    smartSpeed: 500,
    rewind: true,
    autoplayTimeout: 5000,
    nav: true,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 1,
        nav: false
      },
      1000: {
        items: 1,
        nav: true,
        loop: false
      }
    }
  });

  //Magnific Popup

  $(".portfolio-block .block").magnificPopup({
    delegate: "a",
    type: "image",
    mainClass: "mfp-with-zoom mfp-img-mobile",
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300
    }
  });

  $(".section-about .page-gallery-wrapper").magnificPopup({
    delegate: "a",
    type: "image",
    mainClass: "mfp-with-zoom mfp-img-mobile",
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300
    }
  });
  $(".gallery-filter .wrap-up .gallery").magnificPopup({
    delegate: "a",
    type: "image",
    mainClass: "mfp-with-zoom mfp-img-mobile",
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300
    }
  });

  // slick for testimonials section
  $(".testimonials-section .testimonial-block").slick({
    centerMode: false,
    arrows: false,
    autoplay: true,
    prevArrow:
      "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
    nextArrow:
      "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
    slidesToShow: 1,
    dots: true,
    autoplaySpeed: 4000
  });

  $(window).resize(function () {
    $(".testimonials-section .testimonial-block").slick("resize");
  });

  // slick slider on mobile only
  $slick_slider = $(".features-section .row");
  settings_slider = {
    arrows: false,
    autoplay: true,
    slidesToShow: 3,
    dots: false,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  };
  slick_on_mobile($slick_slider, settings_slider);

  // slick on mobile
  function slick_on_mobile(slider, settings) {
    $(window).on("load resize", function () {
      if ($(window).width() > 767) {
        if (slider.hasClass("slick-initialized")) {
          slider.slick("unslick");
        }
        return;
      }
      if (!slider.hasClass("slick-initialized")) {
        return slider.slick(settings);
      }
    });
  }

  // slick for portfolio section
  $(".portfolio-section .portfolio-block .row").slick({
    prevArrow:
      "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
    nextArrow:
      "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
    arrows: true,
    autoplay: true,
    slidesToShow: 3,
    dots: false,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $(window).resize(function () {
    $(".portfolio-section .portfolio-block .row").slick("resize");
  });

  // Scroll Event (Go to Top on Click)
  //To scroll top
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".scrollToTop")
        .fadeIn()
        .addClass("d-block");
    } else {
      $(".scrollToTop")
        .fadeOut()
        .removeClass("d-block");
    }
  });

  //Click event to scroll to top
  $(".scrollToTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});

$(window).load(function () {
  var $container = $(".galleryContainer");
  $container.isotope({
    filter: "*",
    animationOptions: {
      duration: 750,
      easing: "linear",
      queue: false
    }
  });

  $(".galleryFilter a").click(function () {
    $(".galleryFilter .current").removeClass("current");
    $(this).addClass("current");

    var selector = $(this).attr("data-filter");
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: "linear",
        queue: false
      }
    });
    return false;
  });
});
