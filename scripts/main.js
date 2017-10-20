$(function() {
    
    var scrolled = 0;

    var ImgSlider = (function() {
        
        var pb = {};
        pb.el = $("#slider-images");
        pb.items = {
            panel: pb.el.find('img')
        }
        
        // Variáveis necessárias
        var sliderInterval,
            currentSlider = 0,
            nextSlider = 1,
            lengthSlider = pb.items.panel.length;
        
        // Inicialização
        pb.init = function(settings) {
            this.settings = settings || {duration: 8000}
            var output = '',
                backArrow = $("#back"),
                nextArrow = $("#next");
            
            // Activamos o Slider
            SliderInit();
            
            // Controlos do Slider
            backArrow.on("click", function(){
                changePanel(currentSlider - 1);
            });
            
            nextArrow.on("click", function(){
                changePanel(currentSlider + 1);
            });
        }
        
        var SliderInit = function() {
            sliderInterval = setInterval(pb.StartSlider, pb.settings.duration);
        }
        
        pb.StartSlider = function() {
            var panels = pb.items.panel;
            
            if(nextSlider >= lengthSlider)
            {
                nextSlider = 0;
                currentSlider = lengthSlider-1;
            }
            
            // Efeitos
            panels.eq(currentSlider).fadeOut('slow');
            panels.eq(nextSlider).fadeIn('slow');
            
            // Actualizar os dados
            currentSlider = nextSlider;
            nextSlider += 1;
        }
        
        // Função para os controladores
        var changePanel = function(id) {
            clearInterval(sliderInterval);
            var panels = pb.items.panel;
            
            // Prova do ID
            if(id >= lengthSlider)
            {
                id = 0;  
            } else if(id < 0){
                id = lengthSlider - 1;   
            }
            
            // Efeitos
            panels.eq(currentSlider).fadeOut('slow');
            panels.eq(id).fadeIn('slow');
            
            // Actualziamos os dados
            currentSlider = id;
            nextSlider = id+1;
            
            // Reactivar o Slider
            SliderInit();
        }
        
        return pb;
        
    }()); 
    
    // Inicia o Slider
    ImgSlider.init({duration: 3000});
    
    
    // Quando o formulário é enviado com sucesso a mensagem de
    // sucesso é exibida durante 8 segundos e depois desaparece
    if($("#formularioContacto div.sucesso").length)
    {
        setInterval(function(){
            $("#formularioContacto div.sucesso").fadeOut();
        }, 8000);   
    }

    var scrlTop = $(window).scrollTop();

    if(scrlTop > 70) {
        fixedMenu(true);
    }
    
    // mostra ou esconde o menu de topo
    $(window).scroll(function(){

        scrlTop = $(window).scrollTop();

        if(scrlTop > 70) {
            fixedMenu(true);
            
        } else {
            fixedMenu(false);
        }
    });
    
    
    // Animação de scroll quando se clica nos items de menu
    $('a[href^="#"]').click(function(e){
        e.preventDefault();
        var target = this.hash, 
            $target = $(target);
        
        if(target.length) {
            $('html, body').stop().animate({
              scrollTop: $target.offset().top
            }, 1000, "swing");
            return false;
        }
        
    });
    
    // Carousel de postais
    
    var postaisBack = $("#postais-back-arrow");
    var postaisNext = $("#postais-next-arrow");
    var postaisSlider = $("#postaisWrapper ul");
    var numItems = $("#postaisWrapper ul > li").length;
    var estado = -100,
        segundosTransicao = 1000,
        resetPoint = ((numItems-1)*-1) * 100;
    
    //Define parametros iniciais do carousel
    $("#postaisWrapper ul").css("width", (numItems*100)+"%");
    $("#postaisWrapper ul > li").css("width", (100/numItems)+"%");
    
    
    if(numItems > 2) {
        postaisNext.click(function(){

            estado -= 100;
            postaisSlider.animate({
                marginLeft: estado + "%"
            }, segundosTransicao, function(){
                if(estado == resetPoint) {
                    postaisSlider.css("margin-left", "-100%");
                    estado = -100;
                }
            });

        });

        postaisBack.click(function(){
            
            estado += 100;
            postaisSlider.animate({
                marginLeft: estado + "%"
            }, segundosTransicao, function(){
                if(estado == 0) {
                    postaisSlider.css("margin-left", (resetPoint + 100) + "%");
                    estado = resetPoint + 100;
                }
            });
        });
    }

    // Galeria de Imagens
    var Galeria = (function() {
        
        var gal = {};
        gal.contentWrapper = $("#galeriaWrapper");
        gal.imagens = {
            src: gal.contentWrapper.find('img')
        }
        
        var galeria = $("#galeria");
        var galeriaWrapper = $("#galeriaWrapper");
        var galeriaOverlay = $("#galeriaOverlay");
        var imagemOverlay = $("#imagem-overlay");
        
        var stepper = 0;
        var numImagens = gal.imagens.src.length;
        
        gal.init = function() {
            DefinePosicoes();
            ActivaControlos();

            gal.imagens.src.each(function(){
                $(this).click(function(e){
                    stepper = gal.imagens.src.index(this);
                    imagemOverlay.attr("src", gal.imagens.src[stepper].src);
                    AbreOverlay();
                });
            });
            
        }
        
        var DefinePosicoes = function() {
            $("#galeria").css('height', galeria.outerHeight()+'px');
            //console.log(galeria.outerHeight());
    
            galeriaWrapper.css({
                'position': 'absolute',
                'width': $("#galeria").width() + 'px'

            });

            galeriaOverlay.css({
                'position': 'absolute',
                'transform': 'translate(-20px, -20px)',
                'width': (galeriaWrapper.width() + 40) + 'px',
                'height': (galeriaWrapper.height() + 40) + 'px'
            });
            
            // Define Imagem Inicial
            imagemOverlay.attr("src", gal.imagens.src[stepper].src);
            
        }
        
        var ActivaControlos = function() {
            
            $("#backArrow-overlay").click(function(){
                stepper--;
                if(stepper > 0) {
                    imagemOverlay.attr("src", gal.imagens.src[stepper].src);
                    console.log(stepper);
                } else {
                    stepper = (numImagens-1);
                    imagemOverlay.attr("src", gal.imagens.src[stepper].src);
                    console.log(stepper);
                }
            });

            $("#nextArrow-overlay").click(function(){
                stepper++;
                if(stepper < numImagens) {
                    imagemOverlay.attr("src", gal.imagens.src[stepper].src);
                } else {
                    stepper = 0;
                    imagemOverlay.attr("src", gal.imagens.src[stepper].src);
                }
            });
            
            $("#close-overlay").click(function(){
                FechaOverlay();
            });
        }
        
        var AbreOverlay = function() {
            galeriaOverlay.fadeIn();
        }
        
        var FechaOverlay = function() {
            galeriaOverlay.fadeOut();
        }
        
        return gal;   
        
    }());
    
    $(window).on('load', function(){
        Galeria.init();
    });
    
});


$(window).on("load", function(){
    $("#slider-wrapper").height($("img.active-slider-img").height());
    
    $(window).on("resize", function(){
        $("#slider-wrapper").height($("img.active-slider-img").height());
    });
});


function fixedMenu(valor) {

    var nav = $("#navegacao");
    var navImgAnchor = $("#navegacao a");
    var navMenu = $("#navegacao nav");

    if(valor == true) {
        nav.addClass("fixed");
        navImgAnchor.addClass("fixed-img");
        navMenu.addClass("fixed-nav");
    } else {
        nav.removeClass("fixed");
        navImgAnchor.removeClass("fixed-img");
        navMenu.removeClass("fixed-nav");
    }

}


