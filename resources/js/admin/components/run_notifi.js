import "toastr";
import swal from "sweetalert2";
import GrowlNotification from "../../../library/growl-notification/growl-notification.min";

export const notify = (text, type = 'success', title = 'Thông báo') => {
    (new GrowlNotification({
        title: title,
        description: text,
        type: type,
        position: 'bottom-right',
        closeTimeout: 3000
    })).show();
};
export const toastSw2 = swal.mixin({
    toast: true,
    position: 'top-right',
    showConfirmButton: false,
    timer: 2000,
    grow: 'row'
});

export const confirmSw2 = swal.mixin({
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#fb236a',
    cancelButtonColor: '#494d89',
    confirmButtonText: 'Đồng ý',
    cancelButtonText: 'Bỏ qua'
});

export const alertSw2 = swal.mixin({
    type: 'warning',
    confirmButtonColor: '#fb236a',
    cancelButtonColor: '#494d89',
    confirmButtonText: 'Đồng ý',
});
