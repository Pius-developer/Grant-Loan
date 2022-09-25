/* Template	:	CryptoCoin v1.0.0 */ ! function (e) {
    "use strict";

    function a() {
        return i.width()
    }

    function t(e, a) {
        var t = e;
        !0 === (!0 === a || "open" === a || 1 === a) ? t.slideDown(600) : (t.slideUp(500), t.find("li.nav-opened").removeClass("nav-opened").children("ul").slideUp(300))
    }

    function s() {
        i.width() > 767 ? (f.removeClass("nav-mobile"), f.find(".has-children").removeClass("nav-opened").removeClass("rollover").children("ul").removeAttr("style")) : f.addClass("nav-mobile")
    }
    var i = e(window),
        l = e("body");
    "ontouchstart" in document.documentElement || l.addClass("no-touch");
    var n = a();
    i.on("resize", function () {
        n = a()
    });
    var r = e(".is-sticky");
    if (r.length > 0) {
        var o = e("#mainnav").offset();
        i.scroll(function () {
            var e = i.scrollTop();
            i.width() > 991 && e > o.top + 4 ? r.hasClass("has-fixed") || r.addClass("has-fixed") : r.hasClass("has-fixed") && r.removeClass("has-fixed")
        })
    }
    var d = window.location.href,
        c = d.split("#"),
        h = e(".nav li a");
    h.length > 0 && h.each(function () {
        d === this.href && "" !== c[1] && e(this).closest("li").addClass("active").parent().closest("li").addClass("active")
    });
    var f = e("#mainnav"),
        m = (e(".navbar"), f.find("li")),
        u = f.find("a");
    s(), i.on("resize", function () {
        s()
    }), m.has("ul").addClass("has-children"), m.on({
        mouseenter: function () {
            e(this).addClass("rollover")
        },
        mouseleave: function () {
            e(this).removeClass("rollover")
        }
    }), u.on("click touchstart", function (a) {
        var s = e(this),
            i = s.parent(),
            l = s.attr("href");
        return "click" === a.type && n > 1366 || (i.hasClass("has-children") ? i.hasClass("nav-opened") ? (i.removeClass("nav-opened"), "#" !== l || (t(i.children("ul"), "close"), !1)) : (i.addClass("nav-opened"), i.siblings().removeClass("nav-opened"), t(i.siblings().children("ul"), "close"), setTimeout(function () {
            t(i.children("ul"), "open")
        }, 150), !1) : "#" !== l && void 0)
    }), e(".nav-item").on("click", function () {
        e(".navbar-collapse").collapse("hide")
    });
    var v = window.location.href;
    (h = e(".nav li a")).each(function () {
        v === this.href && e(this).closest("li").addClass("active")
    });
    var p = e(".video-play");
    p.length > 0 && p.magnificPopup({
        type: "iframe",
        removalDelay: 160,
        preloader: !0,
        fixedContentPos: !1,
        callbacks: {
            beforeOpen: function () {
                this.st.image.markup = this.st.image.markup.replace("mfp-figure", "mfp-figure mfp-with-anim"), this.st.mainClass = this.st.el.attr("data-effect")
            }
        }
    });
    var g = e(".switch-tab");
    g.length > 0 && g.on("click", function () {
        var a = e(this),
            t = a.data("tabnav"),
            s = a.attr("href");
        e("#" + t).find("a").each(function () {
            e(this).parent().removeClass("active"), e(this).attr("href") === s && e(this).parent().addClass("active")
        })
    });
    var C = e(".has-carousel");
    C.length > 0 && C.each(function () {
        var a = e(this),
            t = a.data("items") ? a.data("items") : 4,
            s = t >= 3 ? 3 : t,
            i = s >= 2 ? 2 : s,
            l = a.data("delay") ? a.data("delay") : 6e3,
            n = !!a.data("auto"),
            r = !!a.data("loop"),
            o = !!a.data("dots"),
            d = !!a.data("navs"),
            c = !!a.data("center"),
            h = a.data("margin") ? a.data("margin") : 30;
        a.owlCarousel({
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            items: t,
            loop: r,
            nav: d,
            dots: o,
            margin: h,
            center: c,
            autoplay: n,
            autoplayTimeout: l,
            autoplaySpeed: 300,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: i
                },
                768: {
                    items: s
                },
                1170: {
                    items: t
                }
            }
        })
    });
    var y = e(".btc-ticker");
    y.length > 0 && y.owlCarousel({
        items: 7,
        loop: !0,
        margin: 0,
        center: !0,
        stagePadding: 0,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 2,
                center: !1
            },
            599: {
                items: 3
            },
            1024: {
                items: 5
            },
            1170: {
                items: 7
            }
        }
    });
    var b = e(".header-slider");
    b.length > 0 && b.owlCarousel({
        items: 1,
        margin: 0,
        dots: !1,
        loop: !0,
        nav: !0,
        autoplay: !1,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: ["<span class='pe pe-7s-angle-left'></span>", "<span class='pe pe-7s-angle-right'></span>"]
    });
    var w = e(".imagebg");
    w.length > 0 && w.each(function () {
        var a = e(this),
            t = a.parent(),
            s = a.data("overlay"),
            i = a.children("img").attr("src"),
            l = void 0 !== s && "" !== s && s.split("-");
        void 0 !== i && "" !== i && (t.hasClass("has-bg-image") || t.addClass("has-bg-image"), "" !== l && "dark" === l[0] && (t.hasClass("light") || t.addClass("light")), a.css("background-image", 'url("' + i + '")').addClass("bg-image-loaded"))
    });
    var k = e(".has-parallax");
    k.length > 0 && k.each(function () {
        e(this).parallaxie({
            speed: .3,
            offset: 0
        })
    });
    var x = e("#contact-form");
    if (x.length > 0) {
        if (!e().validate || !e().ajaxSubmit) return console.log("quoteForm: jQuery Form or Form Validate not Defined."), !0;
        if (x.length > 0) {
            var T = x.find("select.required"),
                _ = x.find(".form-results");
            x.validate({
                invalidHandler: function () {
                    _.slideUp(400)
                },
                submitHandler: function (a) {
                    _.slideUp(400), e(a).ajaxSubmit({
                        target: _,
                        dataType: "json",
                        success: function (t) {
                            var s = "error" === t.result ? "alert-danger" : "alert-success";
                            _.removeClass("alert-danger alert-success").addClass("alert " + s).html(t.message).slideDown(400), "error" !== t.result && e(a).clearForm()
                        }
                    })
                }
            }), T.on("change", function () {
                e(this).valid()
            })
        }
    }
    var j = e("#preloader");
    j.length > 0 && i.on("load", function () {
        j.children().fadeOut(300), j.delay(150).fadeOut(500), e("body").delay(100).css({
            overflow: "visible"
        })
    }), l.append('<div></div>')
}(jQuery);