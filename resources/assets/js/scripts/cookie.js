export default function() {
    var cookieBox = $('.cookie-choice');
    var confirmCookieUsage = cookieBox.find('[data-dismiss]');

    var cookieConfirmKeyStorage = 'app-cookie-confirm';
    if (localStorage.getItem(cookieConfirmKeyStorage) == '1') {
        cookieBox.remove();
    } else {
        cookieBox.show();
    }

    confirmCookieUsage.on('click', function (e) {
        localStorage.setItem(cookieConfirmKeyStorage, '1');
    });
}