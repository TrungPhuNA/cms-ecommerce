import RunMessages from "../../components/run_messages";
import Password from "../components/password";
import 'jquery-modal'
var UserDashboard = {
    init : function () {
        RunMessages.init()
    }
}

$(function () {
    UserDashboard.init()
    Password.init()
})
