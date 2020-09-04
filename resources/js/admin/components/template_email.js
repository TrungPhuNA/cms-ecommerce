var TemplateEmail = {
    init : function () {
        this.showInfo()
    },
    showInfo()
    {
        $(".js-show-list-user").click( function (event) {
            event.preventDefault()
            let $this = $(this);
            let URL = $this.attr('href')
            let ajax = $.ajax({
                url : URL,
            });
            ajax.fail(function (data) {});

            ajax.done(function (results) {
                console.log(results)
                $("#js-modal-content").html(results.html)
                $("#modal-demo").modal({
                    show : true
                });
            });

        })
    }
}

export default TemplateEmail

