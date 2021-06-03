import showAlert from './alert.js'

var UploadAvatar = (function() {
    function upload() {
        var uploadCrop;

        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function(){
                        console.log('Croppie bind complete');
                    });
                }

                reader.readAsDataURL(input.files[0]);

                $('.upload-avatar-wrapper').show();
            }
            else {
                showAlert("Warning", "Sorry - you're browser doesn't support the FileReader API");
            }
        }

        uploadCrop = $('#upload-avatar-content').croppie({
            viewport: {
                width: 180,
                height: 180,
                type: 'circle'
            },
            boundary: {
                width: 230,
                height: 230
            }
        });

        $('input[name=avatar]').on('change', function () { readFile(this); });

        $('#form-with-avatar button[type=submit]').on('click', function (ev) {
            uploadCrop.croppie('result', {
                circle: false,
                type: 'canvas',
                size: {
                    width: 300,
                    height: 300
                }
            }).then(function (resp) {
                $('#avatar-base64').val(resp);
                $('#form-with-avatar').submit();
            });
            return false;
        });
    }

    function init() {
        upload();
    }

    return {
        init: init
    };
})();

export default UploadAvatar