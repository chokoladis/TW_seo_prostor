function goSlide(moveTo){
    let slider_active = $(".slider_item.active");
    let slider_active_index = $(".slider_item.active").index();
    let dot_active = $("section.main_slider .dots li.active");
    let next_slide = 0;
    let set_slide = 0;
    if (moveTo == "next") {
        next_slide = slider_active_index + 1;
    } else {
        next_slide = slider_active_index - 1;
    }

    if (next_slide >= ($('.slider_item:last').index()+1)){
        $(".slider_item").eq(0).fadeIn(1000);
        $(".slider_item").eq(0).addClass("active");
    } else {
        set_slide  = $(".slider_item").eq(next_slide);
        set_slide.fadeIn(1000);
        set_slide.addClass("active");
    }

    slider_active.fadeOut(1000);
    slider_active.removeClass("active");
    
}

$(document).ready(function(){

    var menu_burger_hide = true;
    $(".menu_burger").on("click", function(){
        $(".menu_burger").toggleClass("menuOpen");
        if (menu_burger_hide){
            $(".menu_burger_links").css('top',"0px");
            menu_burger_hide = false;
        } else {
            $(".menu_burger_links").css('top',"-300px");
            menu_burger_hide = true;
        }
        
    });

    var count_slides = $('section.main_slider .slider_item').length;

    for ( let i = 1; i<=count_slides; i++){
        if (i==1){
            $("section.main_slider .dots").append("<li id='"+i+"' class='active'>"+i+"</li>");
        } else {
            $("section.main_slider .dots").append("<li id='"+i+"'>"+i+"</li>");
        }
    }

    $(".arrow_left").on("click", function(){
        goSlide("prev");
    });
    $(".arrow_right").on("click", function(){
        goSlide("next");
    });

    $(document).on("click","section.main_slider .dots li", function(){
        let li_id = $(this).attr("id");
        let slider_id = li_id - 1;
        let slider_active = $(".slider_item.active");

        slider_active.fadeOut(1000);
        slider_active.removeClass("active");

        $(".slider_item").eq(slider_id).fadeIn(1000);
        $(".slider_item").eq(slider_id).addClass("active");

        $("section.main_slider .dots li.active").removeClass("active");
        $(this).addClass("active");
    });


});