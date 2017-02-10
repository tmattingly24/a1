$(document).ready(function () {
    'use strict';
    var images = ['img/allsitting.jpg', 'img/allstanding.jpg', 'img/meandcrystal.jpg', 'img/meandtimmy.jpg'];
    var i = 0;

    function changeBackground() {
        $('#Photo').css('background-image', function () {
            if (i >= images.length) {
                i = 0;
            }
            return 'url(' + images[i++] + ')';
        });
    }
    changeBackground();
    setInterval(changeBackground, 8000);
});