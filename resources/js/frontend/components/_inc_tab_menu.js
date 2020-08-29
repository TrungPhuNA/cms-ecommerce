var TabMenu = {
    init : function () {
        this.nextTab()
    },
    nextTab()
    {
        $(".js-tab-menu-home").click(function (event) {
            event.preventDefault()
            $(".js-tab-menu-home").removeClass('active')
            let $this = $(this);
            $this.addClass('active')
            let slug = $this.attr('data-slug')
            $(".js-hide-content").hide()
            let ajax = $.ajax({
                url : URL_NEXT_TAB,
                beforeSend: function() {
                    $(".js-sk-circle").show();
                },
                method : "POST",
                data : { slug : slug}
            });
            ajax.done(function (results) {
                $(".js-sk-circle").hide();
                $("#js-box-content-article").html(results.html)
            });
        })
    }
}

export default TabMenu
