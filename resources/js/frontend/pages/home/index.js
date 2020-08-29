import 'owl.carousel/dist/owl.carousel.min';
import BoxEmail from "../../components/_inc_box_email";
var Home = {
    init : function () {
        this.runBoxTwo()
    },
    runBoxTwo()
    {
        $("#owl-box-two").owlCarousel({
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            loop: true,
            nav:true,
            pagination: false,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            navText: ["", ""]
        });
    }
}
$(function () {
    Home.init()
    BoxEmail.init()
})
