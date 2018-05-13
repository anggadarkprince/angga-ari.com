$.validator.setDefaults({
    submitHandler: function (form) {
        return true;
    },
    invalidHandler: function (event, validator) {
        $(this).addClass('was-validated');
    },
    highlight: function (element) {
    },
    unhighlight: function (element) {
    },
    ignore: ":hidden, .ignore-validation",
    errorElement: "span",
    errorClass: "invalid-feedback",
    validClass: "valid-feedback",
    errorPlacement: function (error, element) {
        if (element.hasClass('select2') || element.hasClass("select2-hidden-accessible")) {
            error.insertAfter(element.next('span.select2'));
        }
        else if (element.parent(".input-group").length) {
            error.insertAfter(element.parent());
        }
        else {
            error.insertAfter(element);
        }
    }
});

$.validator.addMethod("alpha_space", function (value) {
    var personName = /^[a-zA-Z ]+$/;
    return value.match(personName);
}, "Require alpha characters");

$.validator.addMethod("alpha_num_dash", function (value) {
    if (value != '' && value != undefined) {
        var alphaNumDash = /^[a-zA-Z0-9\-_\.]+$/;
        return value.match(alphaNumDash);
    }
    return true;
}, "This field allow alpha, number, dot, dash and underscore only");

$.validator.addMethod("person_name", function (value) {
    var personName = /^[a-zA-Z. '\-]+$/;
    return value.match(personName);
}, "Please specify the correct person name");

$.validator.addMethod('file_size', function (value, element, param) {
    // param = size (in bytes)
    // element = element to validate (<input>)
    // value = value of the element (file name)
    return this.optional(element) || ((element.files[0].size / 1000) <= param)
}, "The file must below or equal {0} KB");

$('form[novalidate]').validate();