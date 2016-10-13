// =========my

function fieldChecker(field, flag, msg) {
    if (flag) {
        field.closest('div').addClass('has-error has-feedback');
        field.prev('label').text(msg);
        field.after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
        return false;
    } else {
        field.closest('div').removeClass('has-error has-feedback');
        field.prev('label').text();
        field.closest('div').find('span').remove();
    }
    return true;
}

function moveToFeedBack(t, e) {
    if ($(window).width() > 1000) {
        e.preventDefault();
        t.moveTo(6);
    } else {
        setTimeout(function () {
            history.pushState('', document.title, window.location.pathname);
        }, 200);
    }
}


$(function () {
    $('a#down').on('click', function (e) {
        e.preventDefault();
        $(this).moveTo(2);
    });


    $('#og-grid a').on('click', function (e) {
        setTimeout(function () {
            $('a.link-button').on('click', function (e) {
                moveToFeedBack($(this), e);
            });
        }, 500);
    });
    $('.feedback').on('click', function (e) {
        moveToFeedBack($(this), e);
    });
    $('.viewnews').on('click', function () {
        var url = 'ajax/getNews.ajax.php';
        var id = Number($(this).attr('href'));
        $.getJSON(url, {id: id}, function (data, status, jqXHR) {
            if (status === 'success') {
                $('#viewtitle').text(data.title);
                var body = $('#viewbody');
                var date = body.children('#date');
                var image = body.children('#viewimage');
                var content = body.children('#viewcontent');
                date.empty();
                image.empty();
                content.empty();
                body.children('#date').append('<small>Добавлено: ' + data.created_time + '</small>');
                (data.image.length > 0) ? body.children('#viewimage').append('<a class="fancybox" href="' + data.image + '"><img src="' + data.image + '" alt="' + data.title + '" style="max-height: 350px" class="img-responsive"/></a>') : false;
                //(data.description.length > 0) ? body.children('#viewcontent').append('<p>' + data.description + '</p>') : false;
                body.children('#viewcontent').append(data.body);
            }
        });
    });
    $('#mail').on('click', function (e) {
        e.preventDefault();
        var url = 'helpers/sendMail.ajax.php';
        var name, email, message, flag, flag2;
        name = $('input[name=name]');
        email = $('input[name=email]');
        message = $('textarea#message');
        flag = fieldChecker(name, name.val().length === 0, 'Имя обязательно!');
        flag2 = fieldChecker(email, email.val().length === 0, 'Email обязателен!');
        flag3 = fieldChecker(message, message.val().length === 0, 'Сообщение обязательно!');
        if (!(flag && flag2 && flag3))
            return false;
        $.getJSON(url, {name: name.val(), email: email.val(), message: message.val()}, function (data, status, jqXHR) {
            if (status === 'success') {
                $('#feedback').empty();
                $('#feedback').append('<p class="bg-success">Ваше сообщение отправлено. Я отвечу вам в ближайшее время.)</p>');
                name.val('');
                email.val('');
                message.val('');
            }
        });
    });

    $('.bxslider').bxSlider();
    $('.fancybox').fancybox();
    if ($(window).width() < 1000) {
        $('ul.cb-slideshow').empty();
    }
});

<!-- Yandex.Metrika counter -->
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter37964860 = new Ya.Metrika({
                id:37964860,
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
            });
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");

// //===============my




$(function () {

    onepage();
    utils();
    demo();

});

/* for demo purpose only - can be deleted */

function demo() {

    $("#page").change(function () {

        if ($(this).val() !== '') {

            window.location.href = $(this).val();

        }

        return false;
    });
}

function onepage() {

    $(".main").onepage_scroll({
        sectionContainer: "section", // sectionContainer accepts any kind of selector in case you don't want to use section
        easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
        // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
        animationTime: 1000, // AnimationTime let you define how long each section takes to animate
        pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
        updateURL: false, // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
        beforeMove: function (index) {
        }, // This option accepts a callback function. The function will be called before the page moves.
        afterMove: function (index) {
        }, // This option accepts a callback function. The function will be called after the page moves.
        loop: false, // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
        keyboard: true, // You can activate the keyboard controls
        responsiveFallback: 1000, // You can fallback to normal page scroll by defining the width of the browser in which
        // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
        // the browser's width is less than 600, the fallback will kick in.
        direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
    });

}

function utils() {

    /* tooltips */

    $('[data-toggle="tooltip"]').tooltip();

    /* click on the box activates the radio */

    $('#checkout').on('click', '.box.shipping-method, .box.payment-method', function (e) {
        var radio = $(this).find(':radio');
        radio.prop('checked', true);
    });
    /* click on the box activates the link in it */

    $('.box.clickable').on('click', function (e) {

        window.location = $(this).find('a').attr('href');
    });
    /* external links in new window*/

    $('.external').on('click', function (e) {

        e.preventDefault();
        window.open($(this).attr("href"));
    });
    /* animated scrolling */

    $('.scroll-to, .scroll-to-top').click(function (event) {

        var full_url = this.href;
        var parts = full_url.split("#");
        if (parts.length > 1) {

            scrollTo(full_url);
            event.preventDefault();
        }
    });
    function scrollTo(full_url) {
        var parts = full_url.split("#");
        var trgt = parts[1];
        var target_offset = $("#" + trgt).offset();
        var target_top = target_offset.top - 100;
        if (target_top < 0) {
            target_top = 0;
        }

        $('html, body').animate({
            scrollTop: target_top
        }, 1000);
    }
}

$.fn.alignElementsSameHeight = function () {
    $('.same-height-row').each(function () {

        var maxHeight = 0;
        var children = $(this).find('.same-height');
        children.height('auto');
        if ($(window).width() > 768) {
            children.each(function () {
                if ($(this).innerHeight() > maxHeight) {
                    maxHeight = $(this).innerHeight();
                }
            });
            children.innerHeight(maxHeight);
        }

        maxHeight = 0;
        children = $(this).find('.same-height-always');
        children.height('auto');
        children.each(function () {
            if ($(this).innerHeight() > maxHeight) {
                maxHeight = $(this).innerHeight();
            }
        });
        children.innerHeight(maxHeight);
    });
}

/* this function is here becase chrome renders really blurry texts with transformations used in CSS to center the section content */

$.fn.alignSections = function () {

    if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
        $('section .content').each(function () {
            var element = $(this);
            var contentHeight = element.height();
            var paddingTop = -(contentHeight) / 2;

            if ($(window).width() > 1000) {

                element.css('-webkit-transform', 'translate(0,0)');
                element.css('-ms-transform', 'translate(0,0)');
                element.css('transform', 'translate(0,0)');
                element.css('margin-top', paddingTop + 'px');
            }
            else {
                element.css('margin-top', 0);
            }
        });
    }
}

$(window).load(function () {

    windowWidth = $(window).width();

    $(this).alignElementsSameHeight();
    $(this).alignSections();


});
$(window).resize(function () {

    newWindowWidth = $(window).width();

    if (windowWidth !== newWindowWidth) {
        setTimeout(function () {
            $(this).alignElementsSameHeight();
            $(this).alignSections();
        }, 100);
        windowWidth = newWindowWidth;
    }

});
