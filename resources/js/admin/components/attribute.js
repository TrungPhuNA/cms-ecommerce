var Attribute = {
    init : function() {
        this.addHtml()
        this.addListAttributeValue()
        this.loadAttributeValueSelect()
        this.addItemBeforeFirst()
    },

    addHtml()
    {
        let _this = this;
        $("body").on("click",".js-add-attribute", function (event) {
            event.preventDefault()

            let count = $("#listAttribute tr").length
            let html = _this.renderHtml(count + 1)

            $("#listAttribute").append(html)
        })
    },

    loadAttributeValueSelect()
    {
        let _this = this
        $("body").on("change",".js-changeAttribute", function (event) {
            event.preventDefault();
            let $this = $(this);
            let option = $('option:selected', this).attr('data-json');
            let $dataJson = $.parseJSON(option)
            let html = _this.renderHtmlValue($dataJson)
            console.log(html);
            let $valueFirst = $this.parent().next().find(".js-attribute-value");
            console.log($valueFirst)
            if ($valueFirst.length > 0) {
                $valueFirst.html('').append(html)
            }
        })
    },
    addListAttributeValue()
    {
        let _this = this
        $(".js-add-attribute-value").click( function (event) {
            event.preventDefault()
            let $this = $(this)
            $(this).remove()
            let $selectAttributeFirst = $(".js-changeAttribute").first()
            if ($selectAttributeFirst.length > 0) {
                let $optionFirst = $selectAttributeFirst.find("option").first()
                if ($optionFirst.length > 0) {
                    let $dataJson = $.parseJSON($optionFirst.attr("data-json"))
                    let $valueFirst = $(".js-attribute-value").first()
                    let html = _this.renderHtmlValue($dataJson)
                    $valueFirst.append(html)
                    $(".js-add-attribute-value-btn").removeClass('hide')
                }

            }
            $("#listAttributeValue .row").removeClass('hide')
        })
    },
    addItemBeforeFirst(){
        $(".js-add-attribute-value-btn").click( function (event) {
            event.preventDefault()
            let $rowClone = $(".row.clone").clone();
            $("#listAttributeValue").append($rowClone.removeClass('hide clone')).append($(this))

        })
    },

    renderHtmlValue($datas)
    {
        let html = ''
        $.each($datas, function( index, value ) {
            html += `<option value="${value.id}">${value.av_name}</option>`
        });

        return html
    },
    renderHtml(stt)
    {
        return `<tr>
            <td>${stt}</td>
            <td>
                <input type="hidden" name="av_id[]" value="0">
                <input type="text" class="form-control" name="av_name[]" placeholder="">
            </td>
            <td><input type="text" class="form-control" name="av_slug[]" placeholder=""></td>
            <td>
                <input type="color"  name="av_color[]" value="#ff0000">
            </td>
            <td>
                <img src="/images/default.jpg" alt="" style="width: 50px;height: 50px;">
            </td>
            <td>
                <a href="" class="btn btn-sm btn-danger js-confirm-delete"><i class="la la-trash"></i></a>
            </td>
        </tr>`
    }
}
export default Attribute
