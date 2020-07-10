var Attribute = {
    init : function() {
        this.addHtml()
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
