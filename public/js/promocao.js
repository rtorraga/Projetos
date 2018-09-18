function redirect(url) {
    window.location=url;
}

$(document).ready(function(){

    // Trocar icones faq
    $('#accordion .panel-collapse').on('shown.bs.collapse', function () {
        $(this).prev().find(".fa").removeClass("fa-caret-down").addClass("fa-caret-up");
    });

    //The reverse of the above on hidden event:

    $('#accordion .panel-collapse').on('hidden.bs.collapse', function () {
        $(this).prev().find(".fa").removeClass("fa-caret-up").addClass("fa-caret-down");
    });

});

$(document).ready(function() {

    //Placeholder
    $('input, textarea').placeholder({ customClass: 'my-placeholder' });

    //Atualiza IE
    $('#AtualizeIE').modal('show');

    //Scroll
    $('.textoScroll').jScrollPane({
        autoReinitialise: true,
        showArrows:true,
        verticalDragMinHeight: 60,
        verticalDragMaxHeight: 60
    });

    //image map responsivo
    $('img[usemap]').rwdImageMaps();

    // Mascaras Cliente
    $('.cpf_mask').mask('000.000.000-00');

    // Opções para telefone com o dígito 9
    var cel_options = {
        onKeyPress: function(cel) {
            var masks = ['(00) 0000-00009', '(00) 00000-0000'];
            mask = (cel.length > 14) ? masks[1] : masks[0];
            $('.telefone_mask').mask(mask, this);
        }};
    $('.telefone_mask').mask('(00) 0000-00009', cel_options);

});

$(document).ready(function() {
    var navegador = $(window).width();
    //variação titulo
    if(navegador > 1499) {
        //home
        $(".home_logo_ani").animate({opacity: 1, }, 1200, null, function(){});
        $(".home_bg_ani").animate({opacity: 1, }, 1000, null, function(){});
        $(".home_audi_ani").delay(500).animate({right: "0px", }, 800, null, function(){});
        //premios
        $(".premios_pensou_ani").animate({ "top": "55px", opacity: 1, }, 1800, null, function(){});
        //HBO
        $(".hbo_melhores_ani").animate({ "left": "45px", opacity: 1, }, 1800, null, function(){});
        $(".hbo_logo_ani").animate({opacity: 1, }, 1200, null, function(){});
        $(".hbo_series_ani").animate({opacity: 1, }, 1200, null, function(){});
    } else {
        //home
        $(".home_logo_ani").animate({opacity: 1, }, 1200, null, function(){});
        $(".home_bg_ani").animate({opacity: 1, }, 1000, null, function(){});
        $(".home_audi_ani").delay(500).animate({right: "0px", }, 800, null, function(){});
        //premios
        $(".premios_pensou_ani").animate({ "top": "55px", opacity: 1, }, 1800, null, function(){});
        //HBO
        $(".hbo_melhores_ani").animate({ "left": "-55px", opacity: 1, }, 1800, null, function(){});
        $(".hbo_logo_ani").animate({opacity: 1, }, 1200, null, function(){});
        $(".hbo_series_ani").animate({opacity: 1, }, 1200, null, function(){});
    }
});


