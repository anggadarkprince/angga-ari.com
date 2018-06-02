export default function () {
    let baseUrl = document.head.querySelector('meta[name="base-url"]').content;

    $('.selectize:not(.create)').selectize();

    $('.selectize.create').selectize({
        create: true,
        sortField: 'text'
    });

    $('.tag-able').selectize({
        plugins: ['restore_on_backspace'],
        delimiter: ',',
        persist: false,
        hideSelected: true,
        openOnFocus: false,
        addPrecedence: true,
        maxItems: 15,
        valueField: 'slug',
        labelField: 'term',
        searchField: ['term', 'slug'],
        create: function (input) {
            return {
                slug: input,
                term: input
            };
        },
        load: function (query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: baseUrl + '/taxonomy/search',
                type: 'GET',
                dataType: 'json',
                data: {q: query},
                error: function () {
                    callback();
                },
                success: function (res) {
                    callback(res);
                }
            });
        }
    });
}