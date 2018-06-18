import slugger from '../libs/slugger'
import postEditor from '../scripts/postEditor'

let Editor = (function () {

    function wordCount(val) {
        var wom = val.match(/\S+/g);
        return {
            charactersNoSpaces: val.replace(/\s+/g, '').length,
            characters: val.length,
            words: wom ? wom.length : 0,
            lines: val.split(/\r*\n/).length
        };
    }

    function editorSupport() {
        let characterCounterText = $('#character-counter');
        if (characterCounterText.length) {
            let targetEditor = characterCounterText.data('target');

            CKEDITOR.instances[targetEditor].on('contentDom', function() {
                var editor = this;
                CKEDITOR.instances[targetEditor].document.on('keyup', function() {
                    var content = wordCount($(editor.getData()).text());
                    var totalCharacters = content.charactersNoSpaces;
                    var totalWords = content.words;
                    var labelChar = 'character' + (totalCharacters > 1 ? 's' : '');
                    var labelWord = 'word' + (totalWords > 1 ? 's' : '');
                    characterCounterText.text(totalCharacters + ' ' + labelChar + ' / ' + totalWords + ' ' + labelWord);
                });
            });
        }

        $('.slugger').slugger();
    }

    function init() {
        slugger();
        postEditor();
        editorSupport();
    }

    return {
        init: init
    };
})();

export default Editor