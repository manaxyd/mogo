$(function() {
    var header = $("#header"),
        introHeight = $("#intro").innerHeight(),
        scrollOffset = 0;
    
    /* Fixed Header */    
    $(window).on("scroll", function() {

        scrollOffset = $(this).scrollTop();
        
        if ( scrollOffset >= introHeight ) {
            header.addClass("fixed"); 
        } else {
            header.removeClass("fixed"); 
        }
    });

    /* Smooth Scroll */

    $("[data-scroll]").on("click", function(event) {
        event.preventDefault();

        var $this = $(this),
            blockId = $this.data('scroll'),
            blockOffset = $(blockId).offset().top;
            
        $("#nav a").removeClass("active");
        $this.addClass("active");

        $("html, body").animate({
            scrollTop: blockOffset
        }, 1500);

    });
    
    jQuery(window).scroll(function(){
        var $sections = $('section');
        
        $sections.each(function(i,el){
            var top  = $(el).offset().top-200;
            var bottom = top +$(el).height();
            var scroll = $(window).scrollTop();
            var id = $(el).attr('id');

            if( scroll > top && scroll < bottom){
                console.log(id);
                $('#nav a').removeClass('active');
                $('#nav a[data-scroll="#'+id+'"]').addClass('active');
            }
        })
    });
    

    /* Mobile Menu */

    $("#nav_toogle").on("click", function(event) {
        event.preventDefault();

        $("#nav_toogle_menu").css('display', 'block');
    });

    $("#close").on("click", function(event) {
        event.preventDefault();

        $("#nav_toogle_menu").css('display', 'none');
    });

    /* Accordion */

    $("[data-collapse]").on("click", function(event){
        event.preventDefault();

        var $this = $(this),
            blockId = $this.data('collapse');

        $(blockId).slideToggle();
            //$('.accordion_item').removeClass("active");
        $this.toggleClass("active");
            //$(''+this+' .accordion_item_header').css("cursor", "none");
            //$('.accordion_item .accordion_item_desc').css("display", "none");
            //$(blockId).css("display", "block"); 
    });
});