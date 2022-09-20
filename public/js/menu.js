$(document).ready(function(){
    let menuVisible = true;
    let ul;
    $('nav>ul>li>ul').hide();
    $('nav>ul>li').children('ul').toggleClass("animar_ocultar_alto");
    $('nav>ul>li').click(function(){
        if (menuVisible)
        {
            $(this).children('ul').toggleClass("animar_mostrar_alto");
            $(this).children('ul').toggleClass("animar_ocultar_alto");
            ul = $(this).children('ul');
            setTimeout( function(){
                ul.toggle();
            },1000);
        }
        else
        {
            //menu flotante
        }
    });
    $('#menubar_icono').click(function(){
        if (menuVisible)
        {
            $(this).next().find('li>ul').removeClass("animar_mostrar_ancho");
            $(this).next().find('li>a>span').removeClass("animar_mostrar_ancho");
            $(this).next().find('li>ul').addClass("animar_ocultar_ancho");
            $(this).next().find('li>a>span').addClass("animar_ocultar_ancho");
            setTimeout(function(){
                $('#menubar_icono').next().find('li>ul').hide();
                $('#menubar_icono').next().find('li>a>span').hide();
            },1000);
        }
        else
        {
            $(this).next().find('li>ul').removeClass("animar_ocultar_ancho");
            $(this).next().find('li>a>span').removeClass("animar_ocultar_ancho");
            $(this).next().find('li>ul').addClass("animar_mostrar_ancho");
            $(this).next().find('li>a>span').addClass("animar_mostrar_ancho");
            $(this).next().find('li>ul').show();
            $(this).next().find('li>a>span').show();
        }
        menuVisible = !menuVisible;
    });
})
