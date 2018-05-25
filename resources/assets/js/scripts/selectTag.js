export default function() {
    $('.selectize:not(.create)').selectize();

    $('.selectize.create').selectize({
        create: true,
        sortField: 'text'
    });

    $('.tag-able').selectize({
        plugins: ['restore_on_backspace'],
        delimiter: ',',
        persist: false,
        maxItems: 10,
        create: function (input) {
            return {
                value: input,
                text: input
            }
        }
    });
}