(function ($) {
    $('.navbar').find('.icon-search').on('click', function (e) {
        e.preventDefault();

        $('.navbar .search-form').toggle(0, function () {
            $('.navbar .search-form').find('input').focus();
        });
    });

    $('.navbar .search-form').find('input').on('blur', function () {
        $('.navbar .search-form').hide(0);
    });

})(jQuery);