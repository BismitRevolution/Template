$(document).ready(function () {
    $(document).foundation();

    // Parallax Effect
    Parallax = {
        parallaxEffect : function (item, basePosition) {
            var distance = (window.scrollY - basePosition)/3;
            // console.log(window.scrollY);
            TweenLite.to(item, 0.01, { backgroundPosition: '0px '+ distance + 'px' });
        }
    };

    Util = {
        isMobile : function () {
            return (window.innerWidth < 576);
        },

        isSmall : function () {
            return (window.innerWidth >= 576 && window.innerWidth < 768);
        },

        isMedium : function () {
            return (window.innerWidth >= 768 && window.innerWidth < 992);
        },

        isLarge : function () {
            return (window.innerWidth >= 992 && window.innerWidth < 1200);
        },

        isExtraLarge : function () {
            return (window.innerWidth >= 1200);
        },

        isShown : function (element) {
            var rect = element.getBoundingClientRect();
            var top = rect.top;
            var bottom = rect.bottom;
            return (top >= 0 && bottom <= window.innerHeight);
        }
    }

    console.log("app loaded");
});
