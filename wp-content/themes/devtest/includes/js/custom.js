jQuery( document ).ready(function() {

    /* navigation sub-menu display */
    jQuery('.desktop_menu .sub-menu').parent().hover(function(){
        jQuery(this).children('.sub-menu').slideToggle(200);
    });

    jQuery('.mobile_menu .sub-menu').parent().click(function(){
        jQuery(this).children('.sub-menu').slideToggle(200);
    });

    jQuery( ".sub-menu" ).siblings().append( '<i class="fas fa-chevron-down" style="margin-left: 10px;"></i>' );

    jQuery('.content .cont:odd').addClass('reverse');

    jQuery('.mobile_toggle').click(function(){
        jQuery('.mobile_menu').slideToggle(200);
    });

});
