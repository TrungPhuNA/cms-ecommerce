import 'jquery-validation'
var BoxEmail = {
    init : function () {
        this.processEmail()
        this.validateEmail()
    },
    processEmail()
    {
        $(".js-process-email").click( function (event) {
            event.preventDefault()
            let $this = $(this);
            let $domForm = $this.closest('form');
            let ajax = $.ajax({
                url : URL_AJAX_EMAIL,
                beforeSend: function() {
                    $(".js-sk-circle").show();
                },
                method : "POST",
                data : $domForm.serialize()
            });
            ajax.fail(function (data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function (i, val) {
                    $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });
            ajax.done(function (data) {
                $('#form-email')[0].reset();
                $(".error-form").text('');
            });
        })
    },
    validateEmail()
    {
        $("#form-email").validate({
            rules: {
                email: {
                    required: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    },
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Email không được để trống",
                    email: "Email không hợp lệ",
                }
            }
        });
    }
}

export default BoxEmail
