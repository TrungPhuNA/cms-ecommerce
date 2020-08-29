var Tags = {
    init : function () {
        $(".js-select2-tags").select2();
        $(".js-select2-articles").select2({
            maximumSelectionLength : 3
        });
    }
}

export default Tags
