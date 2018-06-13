export default function () {
    window.paceOptions = {
        ajax: {
            trackMethods: ['GET', 'POST', 'PUT', 'DELETE', 'REMOVE'],
            restartOnRequestAfter: 5,
        }
    };

    $('[data-toggle="popover"]').popover({
        trigger: 'focus'
    });

    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val();
        if (fileName !== '') {
            fileName = fileName.split('\\').pop();
        }
        $(this).parent().find('.custom-file-label').html(fileName);
    });

    $('.lazy').Lazy({
        delay: 150,
        placeholder: '',
        defaultImage: '',
        effect: "fadeIn",
        effectTime: 500,
        threshold: 0,
        enableThrottle: true,
        throttle: 250,
        afterLoad: function(element) {
            $(element).removeClass('loading');
        },
    });
}