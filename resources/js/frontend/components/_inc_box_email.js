import 'jquery-validation'
var BoxEmail = {
    init : function () {
        console.log('init BoxEmail')
        $("#form-email").validate({
            rules: {
                email: {
                    required: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                }
            },
            messages: {
                email: {
                    required: "Email không được để trống",
                }
            }
        });
    }
}

export default BoxEmail
