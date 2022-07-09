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
});