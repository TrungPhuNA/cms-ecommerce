import * as FilePond from 'filepond';

import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
var InitFilepond = {
    init : function () {
        FilePond.setOptions({
            server: 'http://127.0.0.1'
        });
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
        );
        FilePond.create( document.querySelector('input[type="file"]'))

        // var files = $('.my-pond').filepond('getFiles');
        // $(files).each(function (index) {
        //     console.log(files[index].fileExtension);
        // });
    }
}

export default InitFilepond

