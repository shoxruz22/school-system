$(document).ready(() => {
    // navbar
    $('navbar-show-btn').click(() => {
        $('navbar-collapse').addClass('showNavbar');
    });

    $('navbar-hide-btn').click(() => {
        $('navbar-collapse').removeClass('showNavbar');
    });

    // slick slider
    $('.hero-slider').slick({
        infinite: true,
        slidesToShow: 1,
        dots: true,
        speed: 300,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
    });

    // stopping transition
    let resizeTimer;
    $(window).on('resize', () => {
        $(document.body).addClass('resize-transition-stopper');
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            $(document.body).removeClass('resize-transition-stopper');
        }, 400);
    });
});




    //
    // // POpup
    //
    // const serviceItems = document.querySelector(".service-items");
    // const popup = document.querySelector(".popup-box")
    // const popupCloseBtn = popup.querySelector(".popup-close-btn");
    // const popupCloseIcon = popup.querySelector(".popup-close-icon");
    //
    // serviceItems.addEventListener("click",function(event){
    //   if(event.target.tagName.toLowerCase() === "button"){
    //      const item =event.target.parentElement;
    //      const h3 = item.querySelector("h3").innerHTML;
    //      const readMoreCont = item.querySelector(".read-more-cont").innerHTML;
    //      popup.querySelector("h3").innerHTML = h3;
    //      popup.querySelector(".popup-body").innerHTML = readMoreCont;
    //      popupBox();
    //   }
    //
    // })
    //
    // popupCloseBtn.addEventListener("click", popupBox);
    // popupCloseIcon.addEventListener("click", popupBox);
    //
    // popup.addEventListener("click", function(event){
    //    if(event.target == popup){
    //       popupBox();
    //    }
    // })
    //
    // function popupBox(){
    //   popup.classList.toggle("open");
    // }
    //
