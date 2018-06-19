import showAlert from "../scripts/alert";

export default function () {
    (function ($) {
        "use strict";

        $.resizer = function (options) {
            const settings = $.extend({}, $.resizer.defaults, options);

            if (settings.src == null) {
                settings.onError(this, 'Resizer: no source image available');
                return false;
            }

            var img = new Image();
            img.onload = function () {
                var MAX_WIDTH = settings.width;
                var MAX_HEIGHT = settings.height;
                var width = img.width;
                var height = img.height;

                switch (settings.mode) {
                    case 'auto':
                        if (width > height) {
                            if (width > MAX_WIDTH) {
                                height *= MAX_WIDTH / width;
                                width = MAX_WIDTH;
                            }
                        } else {
                            if (height > MAX_HEIGHT) {
                                width *= MAX_HEIGHT / height;
                                height = MAX_HEIGHT;
                            }
                        }
                        break;
                    case 'auto_height':
                        if (width > MAX_WIDTH) {
                            height *= MAX_WIDTH / width;
                            width = MAX_WIDTH;
                        }
                        break;
                    case 'auto_height_fixed':
                        width = MAX_WIDTH;
                        height *= MAX_WIDTH / width;
                        break;
                    case 'auto_width':
                        if (height > MAX_HEIGHT) {
                            width *= MAX_HEIGHT / height;
                            height = MAX_HEIGHT;
                        }
                        break;
                    case 'auto_width_fixed':
                        height = MAX_HEIGHT;
                        width *= MAX_HEIGHT / height;
                        break;
                    default:
                        width = MAX_WIDTH;
                        height = MAX_HEIGHT;
                        break;
                }

                var canvas = document.createElement("canvas");
                canvas.width = width;
                canvas.height = height;

                var ctx = canvas.getContext("2d");
                ctx.drawImage(img, 0, 0, width, height);

                settings.onResized.call(this, canvas.toDataURL("image/png"));
            };
            img.src = settings.src;
        };

        $.resizer.defaults = {
            src: null,
            width: 1000,
            height: 1000,
            mode: 'auto', // auto, auto_height, auto_height_fixed, auto_width, auto_width_fixed, fixed
            onResized: function (data) {

            },
            onError: function (message) {
                showAlert('Error', message);
            }
        };

    }(jQuery));
}