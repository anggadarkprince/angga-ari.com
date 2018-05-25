export default function() {
    var displayButton = $('.breadcrumb.main').find('.app-display-setting');
    var cardAppWrapper = $('.card-app-wrapper');
    var thumbnails = $(cardAppWrapper).find('[class*=col-]');

    function setThumbnailView() {
        displayButton.find('i').addClass('icon-menu').removeClass('icon-grid');
        cardAppWrapper.removeClass('list-view');
        thumbnails.attr('class', 'col-sm-6 col-md-4');
        localStorage.setItem(cardListViewKeyStorage, '0');
    }

    function setListView() {
        displayButton.find('i').addClass('icon-grid').removeClass('icon-menu');
        cardAppWrapper.addClass('list-view');
        thumbnails.attr('class', 'col-12');
        localStorage.setItem(cardListViewKeyStorage, '1');
    }

    // set list view if has been set from local storage
    var cardListViewKeyStorage = 'app-card-list-view';
    if (localStorage.getItem(cardListViewKeyStorage) == '1') {
        setListView();
    }

    // action toggle view button
    displayButton.on('click', function (e) {
        e.preventDefault();
        if (cardAppWrapper.hasClass('list-view')) {
            setThumbnailView();
        } else {
            setListView();
        }
    });
}