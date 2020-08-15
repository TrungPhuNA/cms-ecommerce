var ScrollTop = {
    init : function () {
        this.positionStatic()
    },

    positionStatic()
    {
        let $element = $(".js-position-static")
        if ($element.length > 0) {
            $( window ).scroll(function() {
                let scroll = $(this).scrollTop()
                if (scroll >= 102 ) {
                    if (!$element.hasClass('position-static-save'))
                        $element.addClass('position-static-save')
                }else {
                    if ($element.hasClass('position-static-save'))
                        $element.removeClass('position-static-save')
                }
            });
        }
    }
}

export default ScrollTop
