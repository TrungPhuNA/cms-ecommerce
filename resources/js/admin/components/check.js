var Check = {
    init : function () {
        this.clickAll()
    },
    clickAll()
    {
        $("#checkAll").change(function(){
            var checked = $(this).is(':checked');
            if(checked){
                $(".checkbox").each(function(){
                    $(this).prop("checked",true);
                });
            }else{
                $(".checkbox").each(function(){
                    $(this).prop("checked",false);
                });
            }
        });
    }
}
export default Check
