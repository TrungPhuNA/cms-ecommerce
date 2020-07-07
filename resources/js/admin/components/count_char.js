import {str_slug} from "../helpers/slug";
var Charcounter = {
    init: function () {
        this.countChar()
    },
    countChar() {
        $(".keypress-count").keyup(function (event) {
            event.preventDefault();
            let $this = $(this);
            let $prev = $this.prev();
            let countMax = $prev.attr('data-max')
            let value = $this.val();
            let age = (parseInt(countMax) - parseInt(value.length))
            let html = `(` + age + ` character(s) remain)`;
            if (age <= 0) return

            let elementMapping = $this.attr('data-add-content')
            console.log(elementMapping);
            if (typeof elementMapping !== "undefined") {
                $(elementMapping).text(value)
                $(elementMapping).val(value)
            }

            let elementMappingSlug = $this.attr('data-add-slug')
            if (typeof elementMappingSlug !== "undefined") {
                $(elementMappingSlug).text(str_slug(value))
                $(elementMappingSlug).val(str_slug(value))
            }

            $prev.html(html);
        })
    }
}

export default Charcounter
