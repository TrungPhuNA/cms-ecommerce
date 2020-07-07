var Seo = {
    init : function () {
        this.showFromEditMeta()
    },
    showFromEditMeta() {
        $(".js-edit-seo").click( function (event) {
            event.preventDefault();
            let $contentSeo = $(".content-seo")
            $contentSeo.toggleClass('hide')
        })
    }
}

export default Seo
