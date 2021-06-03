export default function() {
    $('.card-drive').on('click', function (e) {
        $(this).closest('.row').find('.card-drive').removeClass('selected');
        $(this).addClass('selected');
    });
}