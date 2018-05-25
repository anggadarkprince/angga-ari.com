export default function() {
    $('[data-toggle="popover"]').popover({
        trigger: 'focus'
    });

    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val();
        if (fileName !== '') {
            fileName = fileName.split('\\').pop();
        }
        $(this).next('.custom-file-label').html(fileName);
    });
}