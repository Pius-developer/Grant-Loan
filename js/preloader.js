(function ($) {
    "use strict";
  
    /*============= preloader js css =============*/
    var cites = [];
    cites[0] =
      "Our mentors inspire the next generation of African leaders with stories from your business journey";
    cites[1] = "African foreign direct investment in Africa nearly tripled from 2006 to 2016";
    cites[2] = "Sub-Saharan Africa has the highest rate of adult population involved in early-stage entrepreneurial activity";
    cites[3] = "By 2060, the African middle class is expected to reach 1.1 billion people";
    var cite = cites[Math.floor(Math.random() * cites.length)];
    $("#preloader p").text(cite);
    $("#preloader").addClass("loading");
  
    $(window).on("load", function () {
      setTimeout(function () {
        $("#preloader").fadeOut(500, function () {
          $("#preloader").removeClass("loading");
        });
      }, 500);
    });
  })(jQuery);
  
