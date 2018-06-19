import slugger from '../libs/slugger'
import resizer from '../libs/resizer'
import postEditor from '../scripts/postEditor'
import showAlert from "../scripts/alert";

let Editor = (function () {
    let form = $('#form-post');

    function wordCount(val) {
        let wom = val.match(/\S+/g);
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

            CKEDITOR.instances[targetEditor].on('contentDom', function () {
                let editor = this;
                CKEDITOR.instances[targetEditor].document.on('keyup', function () {
                    let content = wordCount($(editor.getData()).text());
                    let totalCharacters = content.charactersNoSpaces;
                    let totalWords = content.words;
                    let labelChar = 'character' + (totalCharacters > 1 ? 's' : '');
                    let labelWord = 'word' + (totalWords > 1 ? 's' : '');
                    characterCounterText.text(totalCharacters + ' ' + labelChar + ' / ' + totalWords + ' ' + labelWord);
                });
            });
        }

        $('.slugger').slugger();
    }

    function pickCoverImg() {
        let coverInput = form.find('#post-cover');
        let coverTemp = form.find('#post-cover-temp');
        let coverPreview = form.find('#cover-preview');

        coverInput.on('change', function () {
            var input = this;
            if (input.files && input.files[0]) {
                if (input.files[0].size > 2000000) {
                    showAlert('Image too large', 'Maximum file must be less than 2MB');
                } else {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        let target = e.target;
                        $.resizer({
                            src: target.result,
                            width: 1400,
                            onResized: function (data) {
                                coverPreview.css('background', 'url("' + data + '") center center / cover');
                                axios.post($(input).data('url'), {
                                    file: data, type: 'image', old_file: coverTemp.val()
                                })
                                    .then(function (response) {
                                        coverPreview.removeClass('loading');
                                        coverTemp.val(response.data);
                                    })
                                    .catch(function (error) {
                                        coverPreview.removeClass('loading');
                                        showAlert('Something went wrong', error.toString());
                                    });
                            }
                        });
                    };
                    reader.readAsDataURL(input.files[0]);
                    coverPreview.show().addClass('loading');
                }
            }
        });
    }

    function init() {
        slugger();
        resizer();
        postEditor();
        editorSupport();
        pickCoverImg();
    }

    return {
        init: init
    };
})();

export default Editor