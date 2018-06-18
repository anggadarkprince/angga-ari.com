export default function () {
    (function ($) {
        "use strict";

        $.fn.slugger = function (options) {
            const settings = $.extend({}, $.fn.slugger.defaults, options);

            function formatInput(slugInput, targetInput) {
                const text = $(targetInput).val();
                const generatedSlug = $.fn.slugger.format(text);
                slugInput.val(generatedSlug);
                settings.onTyped.call(this, generatedSlug);
            }

            return this.each(function () {
                const input = $(this);


                let targetInput = $(settings.target);
                if (input.data('target') != null) {
                    targetInput = input.data('target');
                }

                let allowChangesInput = $(settings.allowChanges);
                if (input.data('allow-changes') != null) {
                    allowChangesInput = input.data('allow-changes');
                }

                // generate slug when target input is type a text,
                // check if user never touch slug input, so we good to replace old slug result
                // every changes of target input.
                $(targetInput).on('keyup', function () {
                    if (!input.hasClass('slugger-changed')) {
                        formatInput(input, targetInput);
                    }
                });

                if (allowChangesInput) {
                    // if allow to change result of slug, the user intend to using their
                    // own slug text, we do not to override in next change of target input,
                    // so mark it down by adding custom class.
                    input.on('keyup', function () {
                        if (!$(this).hasClass('slugger-changed')) {
                            $(this).addClass('slugger-changed');
                        }
                    });

                    // prevent user edit slug with any characters
                    // only alpha-numeric, dash and control like backspace and delete only.
                    input.on('keypress', function (e) {
                        /*
                         48-57 - (0-9) Numbers
                         65-90 - (A-Z)
                         97-122 - (a-z)
                         8 - (backspace)
                         32 - (space)
                         45 - (dash -)
                         */
                        const keyCode = e.which;
                        const isNumber = (keyCode >= 48 && keyCode <= 57);
                        const isAlphaLower = (keyCode >= 97 && keyCode <= 122);
                        const isDash = (keyCode === 45);
                        const isBackspace = (keyCode === 8);
                        const isDelete = (keyCode === 0);
                        if (!isNumber && !isAlphaLower && !isDash && !isBackspace && !isDelete) {
                            return false;
                        }
                    });

                    // additional event when user remove all text on slug result input,
                    // we assume that user reset their changes and we put it back current result
                    // of slug generated text.
                    input.on('blur', function () {
                        if ($(this).val() === '') {
                            $(this).removeClass('slugger-changed');
                            formatInput(input, targetInput);
                        }
                    });
                } else {
                    input.attr('readonly', true);
                }
            });
        };

        $.fn.slugger.defaults = {
            target: "#title",
            allowChanges: true,
            onTyped: function (data) {

            },
        };

        $.fn.slugger.format = function (str) {
            const trimmed = $.trim(str);
            const slug = trimmed.replace(/[^a-z0-9-]/gi, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
            return slug.toLowerCase();
        };

    }(jQuery));
}