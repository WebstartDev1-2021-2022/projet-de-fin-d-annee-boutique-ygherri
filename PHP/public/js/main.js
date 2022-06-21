(function ($) {
  // Start of use strict
  "use strict";

  function user_links() {
    $(".user-link").on("click", function () {
      $("#userLinks").toggleClass("active");
    });
    $("body").on("click", function (e) {
      var t = $(e.target);
      t.parents().is("#userLinks") ||
        t.parents().is(".user-link") ||
        t.is(".user-link") ||
        $("#userLinks").removeClass("active");
    });
  }
  user_links();

  function product_slider() {
    $(".productSlider").slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }
  product_slider();

  function categories_level() {
    $(".sidebar_categories .sub-level a").on("click", function () {
      $(this).toggleClass("active");
      $(this).next(".sublinks").slideToggle("slow");
    });
  }
  categories_level();

  $(".filter-widget .widget-title").on("click", function () {
    $(this).next().slideToggle("300");
    $(this).toggleClass("active");
  });

  function footer_dropdown() {
    $(".footer-links .h4").on("click", function () {
      if ($(window).width() < 767) {
        $(this).next().slideToggle();
        $(this).toggleClass("active");
      }
    });
  }
  footer_dropdown();

  function scroll_top() {
    $("#site-scroll").on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 1000);
      return false;
    });
  }
  scroll_top();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $("#site-scroll").fadeIn();
    } else {
      $("#site-scroll").fadeOut();
    }
  });

  function productGridView() {
    var gridRows = [];
    var tempRow = [];
    productGridElements = $(".grid-products .item");
    productGridElements.each(function (index) {
      if ($(this).css("clear") != "none" && index != 0) {
        gridRows.push(tempRow);
        tempRow = [];
      }
      tempRow.push(this);

      if (productGridElements.length == index + 1) {
        gridRows.push(tempRow);
      }
    });

    $.each(gridRows, function () {
      var tallestHeight = 0;
      var tallestHeight1 = 0;
      $.each(this, function () {
        $(this).find(".product-image > a").css("height", "");
        elHeight = parseInt($(this).find(".product-image").css("height"));
        if (elHeight > tallestHeight) {
          tallestHeight = elHeight;
        }
      });

      $.each(this, function () {
        if ($(window).width() > 768) {
          $(this).find(".product-image > a").css("height", tallestHeight);
        }
      });
    });
  }

  function sticky_cart() {
    window.onscroll = function () {
      /* Sticky Header */
      if ($(window).scrollTop() > 145) {
        $(".header-main").addClass("sticky-header animated fadeInDown");
      } else {
        $(".header-main").removeClass("sticky-header fadeInDown");
      }
      /* End Sticky Header */

      $(window).scrollTop() > 600 && $(".stickyCart").length
        ? ($("body.template-product").css("padding-bottom", "70px"),
          $(".stickyCart").slideDown())
        : ($("body.template-product").css("padding-bottom", "0"),
          $(".stickyCart").slideUp());
    };
    $(".stickyOptions .selectedOpt").on("click", function () {
      $(".stickyOptions ul").slideToggle("fast");
    }),
      $(".stickyOptions .vrOpt").on("click", function (e) {
        var t = $(this).attr("data-val"),
          s = $(this).attr("data-no"),
          a = $(this).text();
        $(".selectedOpt").text(a),
          $(".stickyCart .selectbox").val(t).trigger("change"),
          $(".stickyOptions ul").slideUp("fast"),
          (this.productvariants = JSON.parse(
            document.getElementById("ProductJson-" + i).innerHTML
          )),
          $(".stickyCart .product-featured-img").attr(
            "src",
            this.productvariants.variants[s].featured_image.src.replace(
              /(\.[^\.]*$|$)/,
              "_60x60$&"
            )
          );
      });
  }
  sticky_cart();

  function qnt_incre() {
    $(".qtyBtn").on("click", function () {
      var qtyField = $(this).parent(".qtyField"),
        oldValue = $(qtyField).find(".qty").val(),
        newVal = 1;

      if ($(this).is(".plus")) {
        newVal = parseInt(oldValue) + 1;
      } else if (oldValue > 1) {
        newVal = parseInt(oldValue) - 1;
      }
      $(qtyField).find(".qty").val(newVal);
    });
  }
  qnt_incre();

  $(".tab_content").hide();
  $(".tab_content:first").show();
  /* if in tab mode */
  $("ul.tabs li").on("click", function () {
    $(".tab_content").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).fadeIn();

    $("ul.tabs li").removeClass("active");
    $(this).addClass("active");

    $(".tab_drawer_heading").removeClass("d_active");
    $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

    $(".productSlider").slick("refresh");
    $(".productSlider-style2").slick("refresh");
  });
  /* if in drawer mode */
  $(".tab_drawer_heading").on("click", function () {
    $(".tab_content").hide();
    var d_activeTab = $(this).attr("rel");
    $("#" + d_activeTab).fadeIn();

    $(".tab_drawer_heading").removeClass("d_active");
    $(this).addClass("d_active");

    $("ul.tabs li").removeClass("d_active");
    $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("d_active");

    $(".productSlider").slick("refresh");
    $(".productSlider-style2").slick("refresh");
  });
  $("ul.tabs li").last().addClass("tab_last");

  $(".tab-content").hide();
  $(".tab-content:first").show();
  /* if in tab mode */
  $(".product-tabs li").on("click", function () {
    $(".tab-content").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).fadeIn();

    $(".product-tabs li").removeClass("active");
    $(this).addClass("active");

    $(this).fadeIn();
    if ($(window).width() < 767) {
      var tabposition = $(this).offset();
      $("html, body").animate({ scrollTop: tabposition.top - 70 }, 700);
    }
  });

  $(".product-tabs li:first-child").addClass("active");
  $(".tab-container h3:first-child + .tab-content").show();

  $(".acor-ttl").on("click", function () {
    $(".tab-content").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).fadeIn();

    $(".acor-ttl").removeClass("active");
    $(this).addClass("active");
    if ($(window).width() < 767) {
      var tabposition = $(this).offset();
      $("html, body").animate({ scrollTop: tabposition.top }, 700);
    }
  });

  function tooltip() {
    if ($(window).width() > 991) {
      // $('[data-toggle="tooltip"]').tooltip();
      var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
          trigger: "hover",
        });
      });
    }
  }
  tooltip();
})(jQuery);
