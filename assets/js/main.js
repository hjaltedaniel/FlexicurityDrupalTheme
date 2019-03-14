//Toggle slicknav in top of all pages
$(document).ready(function () {
    $('#slicknav').click(function (event) {
        event.stopPropagation();
        $("#navigation").slideToggle("slow");
        $("#slicknav span").css("background", '#fff');
    });
    $("#navigation").on("click", function (event) {
        event.stopPropagation();
    });
});
$(document).on("click", function () {
    $("#navigation").slideUp("slow");
    $('#slicknav').removeClass('open');
});
//Toggle tasks on all themepages.
$("#opg-r-head").click(function () {
    $("#opg-r-txt").slideToggle("slow", function () {
        // Animation complete.
    });
});
$("#opg-d-head").click(function () {
    $("#opg-d-txt").slideToggle("slow", function () {
        // Animation complete.
    });
});
$("#opg-u-head").click(function () {
    $("#opg-u-txt").slideToggle("slow", function () {
        // Animation complete.
    });
});
$("#slicknav")
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > $(window).height() && $(window).width() >= 600) {
            $("#slicknav span").css("background", '#9B2729');
        }
        else {
            $("#slicknav span").css("background", '#fff');
        }
    });
});
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > $(window).height() && $(window).width() <= 600) {
            $("#top-bar").css("background", '#404040');
        }
        else {
            $("#top-bar").css("background", 'transparent');
        }
    });
});
(function () {
    var $w = $(window);
    var $circ = $('.animated-circle');
    var $progCount = $('.progress-count');
    var $prog2 = $('.progress-indicator-2');
    var wh, h, sHeight;

    function setSizes() {
        wh = $w.height();
        h = $('body').height();
        sHeight = h - wh;
    }
    setSizes();
    $w.on('scroll', function () {
        var perc = Math.max(0, Math.min(1, $w.scrollTop() / sHeight));
        updateProgress(perc);
    }).on('resize', function () {
        setSizes();
        $w.trigger('scroll');
    });

    function updateProgress(perc) {
        var circle_offset = 126 * perc;
        $circ.css({
            "stroke-dashoffset": 126 - circle_offset
        });
        $progCount.html(Math.round(perc * 100) + "%");
        $prog2.css({
            width: perc * 100 + '%'
        });
    }
}());
// Create the tooltips only when document ready
$(document).ready(function () {
    // This will automatically grab the 'title' attribute and replace
    // the regular browser tooltips for all <a> elements with a title attribute!
    $('.word-exp[title]').qtip({
        position: {
            my: 'top left', // Position my top left...
            at: 'bottom left', // at the bottom right of...
        }
    });
});
$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});
$(document).ready(function () {
    $('#slicknav').click(function () {
        $(this).toggleClass('open');
    });
});
$(document).ready(function () {
    var s = $("#pagination");
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(window).height()) {
            s.addClass("stick");
        }
        else {
            s.removeClass("stick");
        }
    });
});
$(document).ready(function () {
    var iScrollPos = 0;
    var s = $("#top-bar");
    $(window).scroll(function () {
        var iCurScrollPos = $(this).scrollTop();
        if (iCurScrollPos > iScrollPos) {
            s.css("top", "-65px");
        }
        else {
            s.css("top", "0");
        }
        iScrollPos = iCurScrollPos;
    });
});
$(document).ready(function () {
    $(".frontpage-icon").mouseover(function () {
        var title = $(this).attr('title');
        $(".caption-container").find(".icon-caption").text(title);
        $(".caption-container").find("p").text(null);
    }).mouseout(function () {
        $(".caption-container").find(".icon-caption").text(null);
        $(".caption-container").find("p").text("Velkommen til flexicurity-modellen.dk, klik på et af ikonerne for at komme igang med undervisningsmaterialet");
    });
});
$(document).ready(function () {
    $(".frontpage-icon").on("touchstart", function (e) {
        "use strict"; //satisfy the code inspectors
        var icon = $(this); //preselect the link
        var title = $(this).attr('title');
        if (icon.hasClass('hover')) {
            return true;
        }
        else {
            icon.addClass("hover");
            $(".caption-container").find(".icon-caption").text(title);
            $(".caption-container").find("p").text(null);
            e.preventDefault();
            return false; //extra, and to make sure the function has consistent return points 
        }
    });
});