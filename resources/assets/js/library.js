import backToTop from './scripts/backToTop'
import cardThumbnail from './scripts/cardThumbnail'
import cookie from './scripts/cookie'
import deleteModal from './scripts/delete'
import drive from './scripts/drive'
import misc from './scripts/misc'
import postEditor from './scripts/postEditor'
import searchBox from './scripts/searchBox'
import selectize from './scripts/selectTag'
import svg from './scripts/svg'
import validation from './scripts/validation'
import selectDate from './scripts/selectDate'

var LibraryInitializer = (function () {

    function libInitializer() {
        // activate misc library
        misc();

        // initialize selectize library
        selectize();

        // initialize jquery validation
        validation();

        // initialize ck-editor
        postEditor();
    }

    function domEventAndManipulation() {
        // add script back to top, show button if necessary.
        backToTop();

        // navbar expand and shrink search box
        searchBox();

        // control cookie confirm bar
        cookie();

        // replace svg img into svg path
        svg();

        // set thumbnail event list or grid view
        cardThumbnail();

        // trigger delete modal
        deleteModal();

        // drive
        drive();

        // selectDate
        selectDate();
    }

    function init() {
        libInitializer();
        domEventAndManipulation();
    }

    return {
        init: init
    };
})();

export default LibraryInitializer