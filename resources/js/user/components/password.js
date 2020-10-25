import toastr from 'toastr'
var Password = {
    init: function () {
        this.showPopup()
        this.updatePassword()
    },
    showPopup() {
        $(".js-popup-password").click(function (event) {
            event.preventDefault()
            $("#update-password").modal({
                escapeClose: false,
                clickClose: true,
                fadeDuration: 100,
                showClose: true,
                closeExisting: true,
                closeClass: 'icon-remove',
                closeText: 'x'
            });
        })
    },

    updatePassword() {
        $(".js-update-password").click(function (event) {
            event.preventDefault();
            let $form = $("#form_password")
            let URL = $form.attr('action')
            console.log(URL)
            let ajax = $.ajax({
                url: URL,
                beforeSend: function () {
                    // $(".js-sk-circle").show();
                },
                method: "POST",
                data : $form.serialize()
            });
            ajax.fail(function (results) {
                var errors = results.responseJSON;
                $.each(errors.errors, function (i, val) {
                    $form.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });
            ajax.done(function (results) {
                if( results.code === 200)
                {
                    $.modal.close();
                    toastr.success("Cập nhật thành công")
                }else {
                    toastr.error("Cập nhật thất bại")
                }
            });
        })
    }
}
export default Password
