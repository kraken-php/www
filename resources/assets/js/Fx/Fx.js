/**
 * @require
 */

require('./Polyfill/RequestAnimationFrame');
require('./Effect/GalaxyEffect');

/**
 * @constructor
 */
var Fx = module.exports = function() {

    /**
     * @member {Array} imgs
     */
    Object.defineProperty(this, 'imgs', {
        value: [],
        writable: true
    });
};

/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.affixNavbar = function() {
    var $menu = $('.navbar-dynamic');

    if ($menu.length === 0) {
        return this;
    }

    var origOffsetY = $menu.offset().top + 5;
    var scrolled = false;

    document.onscroll = function() {
        scrolled = true;
    };

    setInterval(function() {
        if (scrolled) {
            scrolled = false;
            if (window.scrollY > origOffsetY) {
                $menu.addClass('navbar-fixed');
            } else {
                $menu.removeClass('navbar-fixed');
            }
        }
    }, 40);

    return this;
};

/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.createPageScrolls = function() {

    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);

        $('html, body').stop().animate(
            {
                scrollTop: ($($ele.attr('href')).offset().top - $('#navbar-main').outerHeight())
            },
            750
        );
        event.preventDefault();
    });

    $('a.collapse-scroll').bind('click', function(event) {
        var $ele = $(this);
        var $body = $('html, body');
        var top = $($ele.attr('href')).offset().top;

        if (top < $body.scrollTop()) {
            $body.scrollTop(top);
        }
        event.preventDefault();
    });

    $('.section-docs blockquote p:first-child').each(function() {
        var str = $(this).html();
        var match = str.match(/\{(.*?)\}/);

        if (match) {
            var icon = match[1] || false;
            var word = match[1] || false;
        }

        if (icon) {
            switch (icon) {
                case "note":
                    icon = 'fa fa-commenting-o';
                    break;
                case "notice":
                    icon = 'fa fa-commenting-o';
                    break;
                case "tip":
                    icon = 'fa fa-diamond';
                    break;
                case "warning":
                    icon = 'fa fa-exclamation-triangle';
                    break;
            }

            $(this).html(str.replace(/\{(.*?)\}/, '<div class="flag ' + icon + '" aria-hidden="true"></div>'));
            $(this).parent().addClass('has-icon ' + word);
        }
    });

    var $welcome = $('#welcome-menu');
    $welcome.on('show.bs.collapse', function() {
        $('#navbar-main:not(.navbar-fixed)').addClass('navbar-fixed');
    });

    var $toggler = $('#toc-toggler');
    var $section = $('#sec-docs');
    $toggler.on('click', function() {
        var $sidebar = $section.find('#docs-sidebar');
        var $article = $section.find('#docs-article');

        if ($sidebar.css('display') !== 'none') {
            return;
        }

        var cwidth = 0;
        var pwidth = '';
        var c = 0;
        var width = $sidebar.width();

        if ((cwidth = (width / (c = 3))) >= 230) {
            pwidth = cwidth - 10 + 'px';
        }
        else if ((cwidth = (width / (c = 2))) >= 230) {
            pwidth = cwidth - 10 + 'px';
        }
        else {
            cwidth = width;
            pwidth = '100%';
            c = 1;
        }

        $sidebar.css({ "display" : "none", "opacity" : 0 });
        $article.css({ "display" : "block", "opacity" : 1 });
        $sidebar.children('ul').children('li').css({
            "float": "left",
            "width": pwidth
        });

        $article.stop().animate({
            "opacity": 0
        }, 200, function() {
            $article.css('display', 'none');
            $sidebar.css('display', 'block');

            $sidebar.stop().animate({
                "opacity": 1
            }, 400);
        });
    });

    return this;
};

/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.createGalaxy = function() {
    if (document.getElementById('particles-foreground') === null || document.getElementById('particles-background') === null) {
        return this;
    }

    particleground(document.getElementById('particles-foreground'), {
        dotColor: 'rgba(255, 255, 255, 0.6)',
        lineColor: 'rgba(255, 255, 255, 0.05)',
        minSpeedX: 0.05,
        maxSpeedX: 0.2,
        minSpeedY: 0.05,
        maxSpeedY: 0.2,
        density: 50000, // One particle every n pixels
        curvedLines: false,
        proximity: 250, // How close two dots need to be before they join
        parallaxMultiplier: 10, // Lower the number is more extreme parallax
        particleRadius: 4 // Dot size
    });

    particleground(document.getElementById('particles-background'), {
        dotColor: 'rgba(255, 255, 255, 0.5)',
        lineColor: 'rgba(255, 255, 255, 0.05)',
        minSpeedX: 0.075,
        maxSpeedX: 0.15,
        minSpeedY: 0.075,
        maxSpeedY: 0.15,
        density: 20000, // One particle every n pixels
        curvedLines: false,
        proximity: 25, // How close two dots need to be before they join
        parallaxMultiplier: 20, // Lower the number is more extreme parallax
        particleRadius: 2 // Dot size
    });

    return this;
};

/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.createCharts = function() {

    $('.y-chart').each(function() {
        var $self = $(this);
        var $target = $($self.attr('data-target'));
        var title = '';
        var labels = [];
        var data = [];

        title = $self.find('.chart-title').first().html().trim();

        $self.find('.chart-entries li').each(function() {
            labels.push(this.innerHTML);
        });

        $self.find('.chart-values li').each(function() {
            data.push(parseInt(this.innerHTML));
        });

        var w = $target.parent().width(),
            h = $target.parent().height();

        $target.attr('height', h);
        $target.attr('width', w);

        var chart = new Chart($target, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: title,
                    data: data,
                    backgroundColor: $self.css('color')
                }]
            },
            options: {
                responsive: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: parseInt($self.find('.chart-opt-min').html().trim())
                        }
                    }]
                },
                legend: {
                    display: false
                }
            }
        });

        $self.remove();
    });

    return this;
};



/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.createSidebarControls = function() {

    if ($('.sidebar').size() > 0)
    {
        $('.sidebar > ul > li').contents().filter(function() {
            return this.nodeType == Node.TEXT_NODE && !this.nodeValue.match(/^\s*$/);
        }).each(function(key, el) {
            $(el).replaceWith('<div class="control">' + $(el).text() + '</div>');
        });
    }

    return this;
};

/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.createCodeSamples = function() {

    $('code:not(.language-php)').each(function(key, el) {
        $(el).addClass('language-php');
        Prism.highlightElement(el);
    });

    return this;
};

/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.createImagePlaceholders = function() {

    var fx = this;

    $('section img').each(function(key, el) {
        var $el = $(el);
        var src = $el.attr('src');
        $el.removeAttr('src');

        fx.imgs.push([ $el, src ]);
    });

    return this;
};

/**
 * @public
 * @returns {Fx}
 */
Fx.prototype.hidePreloader = function() {

    var fx = this;

    $('#kraken-loader').fadeOut(300, function() {
        $('#preloader').fadeOut(300, function() {
            $(this).css('display', 'none');

            fx.imgs.forEach(function(el, key) {
                var $el = el[0];
                var src = el[1];

                $el.attr('src', src);
            });
            fx.imgs = [];
        });
    });

    return this;
};
