(function ($) {
  ("use strict");
  /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/
  if ($(".fancybox").length) {
    $(".fancybox").fancybox({
      openEffect: "elastic",
      closeEffect: "elastic",
      wrapCSS: "project-fancybox-title-style",
    });
  }

  /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/
  if ($(".video-play-btn").length) {
    $(".video-play-btn").on("click", function () {
      $.fancybox({
        href: this.href,
        type: $(this).data("type"),
        title: this.title,
        helpers: {
          title: { type: "inside" },
          media: {},
        },

        beforeShow: function () {
          $(".fancybox-wrap").addClass("gallery-fancybox");
        },
      });
      return false;
    });
  }

  /* =================
        sampul awal THE BEGINING
    =================*/

  $("#konten").hide(); //hided konten scr deafult
  $(".thebegining").click(function () {
    $(this).hide(); //hide the begining
    $("#konten").show(); //show konten
    // $("#audio").get(0).play(); //play musik
    document.documentElement.requestFullscreen(); //fullscreen
  });

  /*------------------------------------------
        = NAV BOTTOM BAR
    -------------------------------------------*/

  var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
  navItems.forEach(function (e, i) {
    e.addEventListener("click", function (e) {
      navItems.forEach(function (e2, i2) {
        e2.classList.remove("mobile-bottom-nav__item--active");
      });
      this.classList.add("mobile-bottom-nav__item--active");
    });
  });

  $(".icons").click(function () {
    $("#nav2").animate(
      {
        height: "toggle",
        opacity: "toggle",
      },
      100,
      "linear"
    );

    $("#lain").animate(
      {
        height: "toggle",
        opacity: "toggle",
      },
      200,
      "linear"
    );

    $("#tutup").toggleClass("rotate");
  });

  $("#lain").click(function () {
    $("#nav2").animate(
      {
        height: "toggle",
        opacity: "toggle",
      },
      100,
      "linear"
    );

    $("#lain").animate(
      {
        height: "toggle",
        opacity: "toggle",
      },
      200,
      "linear"
    );

    $("#tutup").toggleClass("rotate");
  });

  var $allContentDivs = $(
    "#sampul-konten, #mempelai-konten, #acara-konten, #album-konten, #ucapan-konten, #lokasi-konten, #cerita-konten"
  ).hide(); // Hide All Content Divs

  $("#sampul-konten").show();
  $(".dekorasi-sampul").show();
  $(".dekorasi-all").hide();

  $("#sampul, #mempelai, #acara, #album, #ucapan, #lokasi, #cerita").click(
    function () {
      var $contentDiv = $("#" + this.id + "-konten");

      if (this.id == "sampul") {
        $("#imgbawah").hide();
        $(".dekorasi-sampul").show();
        $(".dekorasi-all").hide();
        // $("#imgatas").hide();
      } else {
        $("#imgbawah").show();
        $(".dekorasi-sampul").hide();
        $(".dekorasi-all").show();
      }
      if ($contentDiv.is(":visible")) {
      } else {
        $allContentDivs.hide(); // Hide All Divs
        $contentDiv.show(); // Show Div
      }

      $("body,html").animate(
        {
          scrollTop: 0,
        },
        600
      );
    }
  );

  /*=======================================
        Load more content with jQuery - May 21, 2013
        (c) 2013 @ElmahdiMahmoud
    ================================*/

  $(".komen").slice(0, 4).show();
  $("#loadMore").on("click", function (e) {
    e.preventDefault();
    $(".komen:hidden").slice(0, 4).slideDown();
    if ($(".komen:hidden").length == 0) {
      $("#loadMore").fadeOut("slow");
    }
    $("html,body").animate(
      {
        scrollTop: $(this).offset().top,
      },
      1500
    );
  });

  /*=================
     FORMAT TANGGAL
    ======================= */
  moment.locale("id"); //set indonesian format

  //output = Senin, 17 Agustus 2020
  /* if ($("#tanggal-acara-aqad").length > 0) {
    let date = moment($("#tanggal-acara-aqad")).format("dddd, Do MMMM YYYY");
    $("#tanggal-acara-aqad").html(date);
  }
  if ($("#tanggal-acara-resepsi").length > 0) {
    let date2 = moment($("#tanggal-acara-resepsi")).format(
      "dddd, Do MMMM YYYY"
    );
    $("#tanggal-acara-resepsi").html(date2);
  }
  if ($("#tanggal-acara-walimah").length > 0) {
    let date3 = moment($("#tanggal-acara-walimah")).format(
      "dddd, Do MMMM YYYY"
    );
    $("#tanggal-acara-walimah").html(date3);
  } */

  /*=================
     ADD KOMENTAR
    ======================= */
  $("#submitKomen").on("click", function (event) {
    alert("submit komen");
    $("#loading_").css("display", "inline");
    $("#submitKomen").css("display", "none");

    let nama = $("#nama").val();
    let komentar = $("#komentar").val();
    let id = $("#id").val();

    $.ajax({
      url: "/add_komentar",
      method: "POST",
      data: { id: id, nama: nama, komentar: komentar },
      async: true,
      dataType: "json",
      success: function (data) {
        let status = data.status;
        if (status == "success") {
          $(".layout-komen").prepend(
            "<div class='komen' style='display:block'><div class='col-12 komen-nama'>" +
              nama +
              "</div><div class='col-12 komen-isi'>" +
              komentar +
              "</div></div>"
          );
          $(".komen:hidden").slice(0, 100).slideDown();
          $("html, body").animate({ scrollTop: $(document).height() }, 1000);
          $("#loadMore").fadeOut("slow");
          $("#loading_").css("display", "none");
          $("#submitKomen").css("display", "block");
          $("#submitKomen").prop("disabled", true);
        }
      },
    });
  });
})(window.jQuery);
