$(document).ready(function(){
    var indicator_one = $("#indicator-one"),
        indicator_two = $("#indicator-two"),
        logo = $(".logo img"),
        image = $(".toothbrush__image img"),
        dial =  $("#dial");
    
    $(".dial").knob({
        'width' : 130,
        'height' : 130,
        'readOnly' : true,
        'fgColor' : '#12A1F3',
        'inputColor': '#12A1F3',
        'bgColor' : '#FFF',
        'format' : function (value) {
                     return value + '%';
                   }
    });
    
    $(indicator_two).on("click", function(e){
        e.preventDefault();
        $(this).addClass("active");
        $(indicator_one).removeClass("active");
        $(logo).attr( "src", "./assets/img/logo-twister.png");
        $(image).attr( "src", "./assets/img/cepillo-twister.png");
        $(".dial").val(65).trigger("change");
    });
    
    $(indicator_one).on("click", function(e){
        e.preventDefault();
        $(this).addClass("active");
        $(indicator_two).removeClass("active");
        $(logo).attr( "src", "./assets/img/logo-slim-soft.png");
        $(image).attr( "src", "./assets/img/cepillo-normal.png");
        $(".dial").val(50).trigger("change");
    });
    
});