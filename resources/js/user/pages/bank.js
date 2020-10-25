import RunMessages from "../../components/run_messages";
import 'select2'
import Password from "../components/password";
import 'jquery-modal'

var UserBank = {
    init : function () {
        RunMessages.init()
        $('.js-select2-bank').select2();
    }
}

$(function () {
    UserBank.init()
    Password.init()
})
