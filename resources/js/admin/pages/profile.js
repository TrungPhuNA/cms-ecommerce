import {notify} from "../components/run_notifi";

var Profile = {
    init: function () {
        this.updateProfile()
    },

    updateProfile() {
        $(".js-save-profile").click(function (event) {
            event.preventDefault();
            let $this = $(this)
            let $domForm = $this.closest('form')
            let URL = $this.attr('data-url')
            let $thisSave = $this.text()
            let processAjax = $.ajax({
                url: URL,
                beforeSend: function() {
                    $this.html(`<i class='fa fa-refresh fa-spin'></i> Đang xử lý`);
                },
                method: "POST",
                data: $domForm.serialize(),
            });

            processAjax.done(function (results) {
                console.log(results)
                $this.html($thisSave)
                notify('Cập nhật thành công', 'success');
            });

            processAjax.fail(function (results) {
                $this.html($thisSave)
                let errors = results.responseJSON;
                notify('Cập nhật thất bại', 'error');
                $.each(errors.errors, function (i, val) {
                    $domForm.find('input[name=' + i + ']').siblings('.error-form').text(val[0]);
                });
            });

        })
    }
}

$(function () {
    Profile.init()
})
