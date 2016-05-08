jQuery(function($){
    

    $('.has-drop-down').mouseover(function(){
        var type = $(this).attr('menu');
        $('.drop-block-' + type).show();
        $('.mask').show();
    });

    $('.mask').mousemove(function(){
        $('.drop-block').hide();
        $(this).hide();
    });
});