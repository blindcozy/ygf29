/*! YOOtheme Pro v2.3.5 | https://yootheme.com */
!function(t,i){"use strict";function e(t){return t&&"object"==typeof t&&"default"in t?t:{default:t}}var a,r=e(t),n={update:[{read:function(){return!!d()&&{height:this.$el.offsetHeight}},write:function(t){var e=t.height,a=d(),r=a[0],n=a[1];i.hasClass(this.$el,"tm-header-transparent")||(i.addClass(this.$el,"tm-header-transparent tm-header-overlay"),i.addClass(i.$$(".tm-headerbar-top, .tm-headerbar-bottom, .tm-toolbar-transparent"),"uk-"+n),i.removeClass(i.$(".tm-toolbar-transparent.tm-toolbar-default"),"tm-toolbar-default"),i.$("[uk-sticky]",this.$el)||i.addClass(i.$(".uk-navbar-container",this.$el),"uk-navbar-transparent uk-"+n)),i.css(i.$(".tm-header-placeholder",r),{height:e})},events:["resize"]}]},s={update:{read:function(){var t=d()||[],e=t[0],a=t[1];a&&i.closest(this.$el,"[uk-header]")&&(this.animation="uk-animation-slide-top",this.clsInactive="uk-navbar-transparent uk-"+a,this.top=e.offsetHeight<=window.innerHeight?i.offset(e).bottom:i.offset(e).top+300)},events:["resize"]}},o={computed:{dropbarMode:function(t){var e=t.dropbarMode;return d()||i.closest(this.$el,"[uk-sticky]")?"slide":e}}};function d(){var t=i.$('.tm-header ~ [class*="uk-section"], .tm-header ~ :not(.tm-page) > [class*="uk-section"]'),e=i.attr(t,"tm-header-transparent");return t&&e&&[t,e]}r.default.component("header",n),r.default.mixin(s,"sticky"),r.default.mixin(o,"navbar"),i.isRtl&&(a={init:function(){this.$props.pos=i.swap(this.$props.pos,"left","right")}},r.default.mixin(a,"drop"),r.default.mixin(a,"tooltip")),i.ready(function(){var t=window,e=t.$load,a=void 0===e?[]:e,r=t.$theme;!function t(e,a){e.length&&e.shift()(a,function(){return t(e,a)})}(a,void 0===r?{}:r)})}(UIkit,UIkit.util);
// Demo JavaScript
(function () {

    var util = UIkit.util,
        $ = util.$,
        $$ = util.$$,
        on = util.on,
        css = util.css,
        ajax = util.ajax,
        attr = util.attr,
        ready = util.ready,
        closest = util.closest,
        matches = util.matches,
        Promise = util.Promise,
        includes = util.includes,
        getImage = util.getImage,
        toggleClass = util.toggleClass;

    var style = getParam('style', window.location.href) || 'default';

    var colorThief = null;

    var ColorUtil = {

        lightOrDarkImage: function (url) {

            if (!colorThief) {
                colorThief = ajax('https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.0.1/color-thief.min.js').then(function (xhr) {
                    document.body.appendChild(document.createRange().createContextualFragment('<script>' + xhr.response + '</script>'));
                });
            }

            return colorThief.then(function () {
                return getImage(url).then(function (img) {
                    return ColorUtil.lightOrDark('rgb(' + (new ColorThief()).getColor(img).join(',') + ')');
                });
            });

        },

        lightOrDark: function (hexcolor) {
            return Promise.resolve(ColorUtil._rgbToHsl.apply(this, ColorUtil._parseColor(hexcolor).slice(0, 3))[2] < 0.52 ? 'dark' : 'light');
        },

        _rgbToHsl: function (r, g, b) {

            r /= 255;
            g /= 255;
            b /= 255;

            var max = Math.max(r, g, b), min = Math.min(r, g, b);
            var h, s, l = (max + min) / 2;

            if (max === min) {
                h = s = 0; // achromatic
            } else {
                var d = max - min;
                s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                switch (max) {
                    case r:
                        h = (g - b) / d + (g < b ? 6 : 0);
                        break;
                    case g:
                        h = (b - r) / d + 2;
                        break;
                    case b:
                        h = (r - g) / d + 4;
                        break;
                }
                h /= 6;
            }

            return [h, s, l];
        },

        _parseColor: function (color) {

            var match, quadruplet;

            // match #aabbcc
            if (match = /#([0-9a-fA-F]{2})([0-9a-fA-F]{2})([0-9a-fA-F]{2})/.exec(color)) {
                quadruplet = [parseInt(match[1], 16), parseInt(match[2], 16), parseInt(match[3], 16), 1];

                // match #abc
            } else if (match = /#([0-9a-fA-F])([0-9a-fA-F])([0-9a-fA-F])/.exec(color)) {
                quadruplet = [parseInt(match[1], 16) * 17, parseInt(match[2], 16) * 17, parseInt(match[3], 16) * 17, 1];

                // match rgb(n, n, n)
            } else if (match = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color)) {
                quadruplet = [parseInt(match[1]), parseInt(match[2]), parseInt(match[3]), 1];

                // match rgba(n,n,n,o)
            } else if (match = /rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9.]*)\s*\)/.exec(color)) {
                quadruplet = [parseInt(match[1], 10), parseInt(match[2], 10), parseInt(match[3], 10), parseFloat(match[4])];

                // No browser returns rgb(n%, n%, n%), so little reason to support this format.
            } else {
                quadruplet = [255, 255, 255, 0];
            }

            return quadruplet;
        }

    };

    if (style !== 'default') {

        on(document.documentElement, 'load', '[uk-img]', function (e) {

            var pageContainer = $('.tm-page-container');
            var section = $('.tm-header ~ [class*="uk-section"], .tm-header ~ * > [class*="uk-section"]');
            var modifier = attr(section, 'tm-header-transparent');

            if (!section || !section.contains(e.target)) {
                return;
            }

            var bgImage = $('> [style*="background-image"]', pageContainer) || $('> [style*="background-image"]', section);
            var color;

            if (!bgImage || css(bgImage, 'background-image').replace(/(url\(|"|'|\))/g, '') === 'none') {
                if (pageContainer) {
                    color = ColorUtil.lightOrDark(css(pageContainer, 'background-color'));
                } else {
                    color = ColorUtil.lightOrDark(css(section, 'background-color'));
                }
            } else if (!includes(['rgba(0, 0, 0, 0)', 'transparent', ''], css(bgImage, 'background-color'))) {
                color = ColorUtil.lightOrDark(css(bgImage, 'background-color'));
            } else {
                color = ColorUtil.lightOrDarkImage(css(bgImage, 'background-image').replace(/(url\(|"|'|\))/g, ''));
            }

            color.then(function (color) {
                if (color === modifier) {

                    var navbar = $('.uk-navbar-transparent.uk-' + modifier);

                    toggleClass(navbar, 'uk-light uk-dark');

                    var sticky = $('[uk-sticky]');

                    if (sticky) {
                        var comp = UIkit.getComponent(sticky, 'sticky');
                        comp.clsInactive = comp.$props.clsInactive = comp.clsInactive.replace(/dark|light/, color === 'dark' ? 'light' : 'dark');
                        UIkit.update(sticky);
                    }

                }
            });
        }, true);

    }

    ready(function () {

        // Hide ZOO and Shop submenu on modal main menu
        $$('.uk-modal-full .uk-nav.uk-nav-primary li, .uk-offcanvas-bar .uk-nav.uk-nav-primary li').forEach(function (li) {
            if ($('a', li).innerHTML.match(/ZOO|Shop/)) {
                css($$('.uk-nav-sub', li), 'display', 'none');
            }
        });

        if (style !== 'default') {

            $$('a[href]:not([href*="style="]):not(.uk-navbar-toggle)').forEach(function (a) {
                if (a.hostname === location.hostname || !attr(a, 'href').match(/^#\w/)) {
                    a.search += '&style=' + style;
                }
            });

        }

    });

    function getParam(key, uri) {
        var value = (new RegExp('[?&]'+key+'=([^&#]*)', 'i').exec(uri) || [])[1];
        return value ? decodeURIComponent(value) : value;
    }

})();
