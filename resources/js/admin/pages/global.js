import 'jquery-mousewheel'
// import './../../../library/admin/plugins/jquery/jquery.min.js'
import './../../../library/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'
// import './../../../library/admin/plugins/ionicons/ionicons.js'
// import './../../../library/admin/plugins/moment/moment.js'
import './../../../library/admin/plugins/rating/jquery.rating-stars.js'
import './../../../library/admin/plugins/rating/jquery.barrating.js'
import './../../../library/admin/plugins/select2/js/select2.full.min.js'
import './../../../library/admin/js/select2.js'
import './../../../library/admin/plugins/sumoselect/jquery.sumoselect.js'
import './../../../library/admin/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js'
// import './../../../library/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js'
// import './../../../library/admin/plugins/perfect-scrollbar/p-scroll.js'
import './../../../library/admin/plugins/jquery-sparkline/jquery.sparkline.min.js'
import './../../../library/admin/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js'
// import './../../../library/admin/plugins/sidebar/sidebar.js'
// import './../../../library/admin/plugins/sidebar/sidebar-custom.js'
// import './../../../library/admin/js/eva-icons.min.js'
import './../../../library/admin/plugins/chart.js/Chart.bundle.min.js'
import './../../../library/admin/plugins/raphael/raphael.min.js'
import './../../../library/admin/plugins/jquery.flot/jquery.flot.js'
import './../../../library/admin/plugins/jquery.flot/jquery.flot.pie.js'
import './../../../library/admin/plugins/jquery.flot/jquery.flot.resize.js'
import './../../../library/admin/plugins/jquery.flot/jquery.flot.categories.js'
import './../../../library/admin/js/dashboard.sampledata.js'
import './../../../library/admin/js/advanced-form-elements.js'
// import './../../../library/admin/js/chart.flot.sampledata.js'
// import './../../../library/admin/js/apexcharts.js'
import './../../../library/admin/plugins/jqvmap/jquery.vmap.min.js'
import './../../../library/admin/js/modal-popup.js'
import './../../../library/admin/js/index.js'
import './../../../library/admin/js/jquery.vmap.sampledata.js'
import './../../../library/admin/js/sticky.js'
import './../../../library/admin/js/custom.js'
import './../../../library/admin/plugins/side-menu/sidemenu.js'
import './../../../library/admin/switcher/js/switcher.js'
import './../components/run_notifi'
import Charcounter from './../components/count_char'
import Seo from "../components/seo";
import RunMessages from "../components/run_messages";
import ConfirmDelete from "../components/confirm_delete";
import Check from "../components/check";
import Attribute from "../components/attribute";
import ScrollTop from "../components/scrollTop";
import Tags from "../components/tags";
import InitFilepond from "../components/init_filepond";
$(function () {
    Charcounter.init()
    Seo.init()
    Check.init()
    RunMessages.init()
    ConfirmDelete.init()
    Attribute.init()
    ScrollTop.init()
    Tags.init()
    InitFilepond.init()
    $('#datetimepicker').datetimepicker({
        format: 'yyyy-mm-dd hh:ii',
        autoclose: true
    });
})
