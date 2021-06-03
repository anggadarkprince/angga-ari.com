import showAlert from "./alert";

function readFile(input, uploadCrop, onFileExistCallback, onLoadCallback) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function(){
                if (typeof onLoadCallback === "function") {
                    onLoadCallback();
                }
            });
        }

        reader.readAsDataURL(input.files[0]);

        if (typeof onFileExistCallback === "function") {
            onFileExistCallback();
        }
    }
    else {
        showAlert("Warning", "Sorry - you're browser doesn't support the FileReader API");
    }
}

export default readFile