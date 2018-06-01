import readFile from './readFile.js'
import showAlert from "./alert";

var Portfolio = (function () {
    function cover() {
        // set croppie editor for cover portfolio.
        var uploadCrop = $('#upload-cover-content').croppie({
            viewport: {width: 300, height: 180,},
            boundary: {width: 300, height: 180}
        });

        // bind image to croppie when image selected.
        $('#portfolio-cover').on('change', function () {
            readFile(this, uploadCrop, function () {
                $('.upload-cover-wrapper').show();
            });
        });

        // we need to crop the result right before submit the form.
        $('#form-with-cover button[type=submit]').on('click', function (ev) {
            uploadCrop.croppie('result', {
                type: 'canvas',
                size: { width: 1200, height: 720}
            }).then(function (resp) {
                $('#cover-base64').val(resp);
            });
        });
    }

    function portfolio() {
        var templateScreenshotItem = $('#template-screenshot-item').html();
        var screenshotWrapper = $('.screenshot-wrapper');

        // we need at least 3 empty screenshot item
        // but stop adding when reach 9
        function checkNeedMoreScreenshot() {
            var totalChildren = screenshotWrapper.children().length;
            var totalUploaded = screenshotWrapper.children('.loaded').length;
            if (totalChildren < 3 || (totalUploaded >= totalChildren && totalUploaded < 9)) {
                screenshotWrapper.append(Mustache.render(templateScreenshotItem, {}));
            }
        }

        // adjust view of modal croppie then we edit selected or edit existing image.
        function readyCropImage() {
            $('.upload-screenshot-wrapper').show();
            $('.select-screenshot').hide();
            modalScreenshot.find('.btn-crop').text('Crop And Upload')
                .removeClass('btn-secondary').addClass('btn-primary');
        }

        // adjust view of modal croppie when we need to select new image rather than edit old image.
        function selectNewImage() {
            $('.upload-screenshot-wrapper').hide();
            $('.select-screenshot').show();
            modalScreenshot.find('.btn-crop').text('Cancel')
                .addClass('btn-secondary').removeClass('btn-primary');
        }

        // upload cropped image to server by given url, image, and element that we need update to.
        // this process is major and we do care about error whatever comes with.
        // first set loading, do upload, return response, remove loading and set value of uploaded
        // file name in temporary storage that we need to know latter for moving data to right place
        // when we save this portfolio.
        function uploadImageToTemp(url, image, currentItem) {
            currentItem.addClass('loading');
            axios.post(url, {image_base64: image})
                .then(function (response) {
                    currentItem.removeClass('loading').addClass('uploaded');
                    currentItem.find('.data-screenshot-item').val(response.data);
                })
                .catch(function (error) {
                    showAlert('Something went wrong', error.toString());
                });
        }

        // send delete signal to server by given url and image file name.
        // this method is not strict process, so we ignore whatever error comes with.
        function deleteUploadedImageFromTemp(url, image) {
            axios.delete(url, {data: {temp_name: image}})
                .then(function (response) { console.log(response.data); })
                .catch(function (error) { console.log(error.toString()); });
        }

        // set croppie editor of selected image later.
        var uploadCrop = $('#upload-screenshot-content').croppie({
            viewport: {width: 400, height: 250},
            boundary: {width: 400, height: 250}
        });

        // trigger activation of croppie editor binding above if input file is changed.
        $('input[name=screenshot]').on('change', function () {
            readFile(this, uploadCrop, readyCropImage);
        });

        // this step may cause bug, but it could be try,
        // we need to mark invoker of screenshot wrapper
        // save it latter until we need to place cropped image in the right place.
        var modalScreenshot = $('#modal-upload-portfolio');
        var screenshotItemWrapper = null;
        modalScreenshot.on('show.bs.modal', function (e) {
            screenshotItemWrapper = $(e.relatedTarget).closest('.screenshot-item-wrapper');
            // this part is important, we need to check if user click the cropped image rather than
            // "change image" link because we need to put the image back to croppie editor,
            // they will re-crop from last cropped image (actually this technique is not recommended)
            // if they try to zoom the image, they will lose quality because last cropped image already
            // in 100% size (800x500), then whatever they scale will be rescaled again to  800x500
            if ($(e.relatedTarget).hasClass('result-screenshot-link')) {
                uploadCrop.croppie('bind', {
                    url: screenshotItemWrapper.find('img').attr('src')
                });
                readyCropImage();
            } else {
                selectNewImage();
            }
        });

        // reset croppie editor when modal start to closing,
        // this step is optional, but it prevent weird glitch appearance of last image that selected before
        // replaced with new selected image.
        modalScreenshot.on('hide.bs.modal', function () {
            uploadCrop.croppie('bind', {url: ''});
            $('#upload-screenshot-content .cr-image').attr('src', '');
        });

        // cropping image from screenshot editor modal
        // populate url upload and url delete
        // check if user have select the image or do not change anything
        // set some adjustment in view and upload cropped image to server
        // if user re-crop image (open from preview rather than change/replace image) then send request delete
        // from old temp image name.
        modalScreenshot.find('.btn-crop').on('click', function (ev) {
            var url = $(this).data('url');
            var urlDelete = $(this).data('url-delete');
            uploadCrop.croppie('result', {
                type: 'canvas',
                size: {width: 800, height: 500}
            }).then(function (resp) {
                // do crop and upload if user choose image or edit from old cropped image
                if ($.trim($('#upload-screenshot-content .cr-image').attr('src')) !== '') {
                    // some adjustment in view.
                    var currentItem = screenshotItemWrapper;
                    currentItem.addClass('loaded');
                    currentItem.find('.result-screenshot-item img').attr('src', resp);
                    currentItem.find('.add-screenshot-item').hide();
                    currentItem.find('.result-screenshot-item').show();
                    checkNeedMoreScreenshot();

                    // delete old image if exist (edit from cropped image).
                    if(currentItem.find('.data-screenshot-item').val() !== '') {
                        var uploadedImage = currentItem.find('.data-screenshot-item').val();
                        deleteUploadedImageFromTemp(urlDelete, uploadedImage);
                    }

                    // upload to server whatever cropped image returned.
                    uploadImageToTemp(url, resp, currentItem);
                }
            });
        });

        // remove uploaded / preview cropped image
        // send request to remove image from server as well
        screenshotWrapper.on('click', '.screenshot-item-wrapper .close', function () {
            var itemWrapper = $(this).closest('.screenshot-item-wrapper');
            var uploadedImage = itemWrapper.find('.data-screenshot-item').val();
            var urlDelete = $(this).data('url');
            deleteUploadedImageFromTemp(urlDelete, uploadedImage);
            
            itemWrapper.remove();
            checkNeedMoreScreenshot();
        });
    }

    function init() {
        cover();
        portfolio();
    }

    return {
        init: init
    };
})();

export default Portfolio