import RunMessages from "../../components/run_messages";
import 'select2'
import 'summernote/dist/summernote'
import 'bootstrap'
var Estate = {
    init : function () {
        RunMessages.init()
        $('.js-select2-bank').select2();
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            // airMode: true,
            height: 120,
            tooltip: 'Clear All',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    }
}

$(function () {
    Estate.init()
})
