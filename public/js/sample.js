$(document).ready(function () {
    // Set boundaries automatically
    // $("#topic-chooser").height($(".chooser").width());

    // Create animation
    // var chooser = document.getElementsByClassName("chooser");
    // function setHover(item) {
    //     item.onmouseover = function () {
    //         TweenLite.to(item, 0.25, { padding: '5%' });
    //     };
    //
    //     item.onmouseleave = function () {
    //         TweenLite.to(item, 0.25, { padding: '8%' });
    //     };
    // }
    // Array.from(chooser).forEach(setHover);

    // Adjust responsiveness
    // if (window.Util.isMobile() || window.Util.isSmall() || window.Util.isMedium()) {
    //     $("#topic-chooser > div > div:first-child").removeClass("align-middle");
    //     $("#topic-chooser > div > div:first-child").addClass("align-bottom");
    //     console.log($(".chooser").outerHeight());
    //     $("#topic-chooser").height($(".chooser").outerHeight() + 75);
    // } else {
    //     $("#topic-chooser").height($(".chooser").outerHeight());
    // }

    // Parallax Effect
    // var parallaxBg = document.getElementById("parallax");
    // var base = 0;
    //
    // window.onscroll = function () {
    //     window.Parallax.parallaxEffect(parallaxBg, base);
    // };

    // Fade on scroll
    // var pet = document.getElementsByClassName("pet");
    // window.onscroll = function () {
    //     for (var i = 0, item; item = pet[i]; i++) {
    //         if (window.Util.isShown(item)) {
    //             if (!item.classList.contains("animated")) {
    //                 item.style.visibility = "visible";
    //                 item.className += " animated fadeIn";
    //             }
    //         }
    //     }
    // };

    // Zoom Hover
    // var trailer = document.getElementsByClassName("panel-image");
    // function zoomHover(item) {
    //     item.onmouseover = function () {
    //         TweenLite.to(item, 0.25, { backgroundSize: '+=25%' });
    //         // TweenLite.fromTo(item, 0.25, { backgroundSize: 'auto 100%' }, { backgroundSize: 'auto 120%' });
    //     }
    //     item.onmouseleave = function () {
    //         TweenLite.to(item, 0.25, { backgroundSize: '-=25%' });
    //         // TweenLite.fromTo(item, 0.25, { backgroundSize: 'auto 120%' }, { backgroundSize: 'auto 100%' });
    //     }
    // }
    // Array.from(trailer).forEach(zoomHover);

    // Set Dropdown Same Width as button
    // var dropdownButton = document.getElementsByClassName("dropdown-button");
    // function setDropdownWidth(item) {
    //     item.onclick = function (e) {
    //         item.nextElementSibling.style.width = item.offsetWidth + "px";
    //     }
    // }
    // Array.from(dropdownButton).forEach(setDropdownWidth);

    // Set Value Selected from dropdown
    // var dropdownItem = document.getElementsByClassName("dropdown-item");
    // function setDropdownClick(item) {
    //     item.onclick = function (e) {
    //         item.parentNode.parentNode.previousElementSibling.innerHTML = item.innerHTML;
    //         item.parentNode.previousElementSibling.value = item.innerHTML;
    //         // document.getElementById(item.parentNode.parentNode.getAttribute("data-target")).value = item.innerHTML;
    //     }
    // }
    // Array.from(dropdownItem).forEach(setDropdownClick);
});
