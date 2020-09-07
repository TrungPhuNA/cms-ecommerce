import Swal from "sweetalert2";
import {notify} from "../../components/run_notifi";
var ConfirmDelete = {
    init : function () {
        this.callbackDelete()
    },

    callbackDelete()
    {
        let _this = this;
        $("body").on("click",".js-confirm-delete", function (event) {
            event.preventDefault();
            let $this = $(this);
            let URL = $this.attr('href');

            Swal.fire({
                title: 'Xoá dữ liệu',
                text: "Bạn có chắc chắn xoá dữ liệu này không!",
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Bỏ qua'
            }).then((result) => {
                console.log(result)
                if (result.value) _this.callbackAjaxDelete(URL, $this)
            })
        })
    },
    callbackAjaxDelete(URL, $element)
    {
        console.log("Log Ajax")
        $.ajax({
            type: 'GET',
            url: URL,
        }).done(function (results) {
            if (results.code === 200) {
                $element.parents('tr').remove()
                notify('Xoá dữ liệu thành công', 'success');
            }
        });
    }
}

export default ConfirmDelete
