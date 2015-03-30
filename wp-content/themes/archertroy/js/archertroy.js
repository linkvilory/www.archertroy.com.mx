/*
 * Ejecucion de mostrar el contenido hasta que se cargue la pagina
 */
$( document ).ready(function() {
  
  $("#cntctfrm_contact_form").submit(function(e){
    alert("¡Gracias!");
    return false;
  });

  if($(".carteles").length){
    setTimeout(function () {
        $(".carteles").animate({opacity: 1}, 1000);      
    },1500);
  }

  if($(".proyectos-recientes div").length){
    setTimeout(function () {
        $(".proyectos-recientes > div").animate({opacity: 1}, 1000);      
    },1500);
  }

  if($(".ultimas-noticias div").length){
    setTimeout(function () {
        $(".ultimas-noticias > div").animate({opacity: 1}, 1000);      
    },1500);
  }

  if($(".grid div").length){
    setTimeout(function () {
        $(".grid div").animate({opacity: 1}, 1000);      
    },1500);
  }
  
  if($(".clientes img").length){
    setTimeout(function () {
        $(".clientes img").animate({opacity: 1}, 1000);      
    },1500);
  }

  if($(".gente div").length){
    setTimeout(function () {
        $(".gente div").animate({opacity: 1}, 1000);      
    },1500);
  }


  mover_footer_al_fondo();
}); 

/* Ordenar de manera aleatoria los elementos de un arreglo */
Array.prototype.shuffle = function () {
  var self = this;
  var conteo = self.length;
  var temp, x;
  for (var i = conteo - 1; i >= 0; i--){
    temp = self[i];
    x = Math.floor(Math.random() * conteo);
    self[i] = self[x];
    self[x] = temp;
  }
	return self;
};

/* Mostrar / Ocultar Menú de Navegación */
  $('body').on('click', '.menu-toggle', function(e) {
      $('body').toggleClass('pushed');
      e.preventDefault();
  });

/* Show / Hide Sidebar */
  
/* Mostrar / Ocultar submenús */  

$(document).on('click', '.main-navigation li', function (e) {
  if ($(window).outerWidth() < 960) {
    var $current_link = $(this).find('a'),
        menuHref = $current_link.attr('href');
      $('.main-navigation li').removeClass('current-menu-item');
        if ($current_link.first().text().toLowerCase() == 'legión' || menuHref.search('proyectos') !== -1){
            $('.main-navigation li').removeClass('current-menu-parent');
            $current_link.closest('li').addClass('current-menu-item current-menu-parent').parents('li').addClass('current-menu-parent');  
        } else if (menuHref.search('projects') !== - 1) {
          $current_link.attr('href', 'proyectos');
        }
  }
});

/* Mostrar ocultar submenús */
var $full_width_header = $('.entry-content p:first-child img:first'),
    msnry_container,
    msnry, 
    opts,    
    map_network_icon = [
      {
        network: 'facebook',
        icon: 'icon-facebook'
      }, 
      {
        network: 'twitter',
        icon: 'icon-twitter'
      },
      {
        network: 'instagram',
        icon: 'icon-instagram'
      },
      {
        network: 'pinterest',
        icon: 'icon-pinterest-1'
      },
      {
        network: 'youtube',
        icon: 'icon-youtube-play'
      },
      {
        network: 'google',
        icon: 'icon-google-plus'
      }
    ];
    
    /* Procesar los datos de cada persona para visualizarlos */
    function parse_person_data(persona) {
      var tmp_data = persona.split("|");
      var nombre = tmp_data[0];
      var puesto = tmp_data[1];  
      var handler = tmp_data[2];  
      var markup = "";  
          markup += "<div class='datos-persona'>";
          markup +=   "<div class='persona'>";
          markup +=     "<div class='nombre-persona'>";
          markup +=       nombre;
          markup +=     "</div>";
          markup +=     "<div class='puesto-persona'>";
          markup +=       puesto;
          markup +=     "</div>";     
          markup +=   "</div>";
          markup +=   "<div class='handler'>";
          markup +=     "<a href='http://twitter.com/" + handler.trim().replace("@", "") +"' target='_blank'>" + handler + "</a>";
          markup +=   "</div>";
          markup += "</div>";    
      return markup; 
    }

    /* Analiza los vínculos dentro de las entradas y aquellos que tengan  URL definido en la variable map_network_icon le asigna el icono definido en la misma variable. */
    function asignar_clase_a_iconos_sociales() {
      var ajustar_contenedor = false, 
          nodo = null;
    
      $('.entry-content a').each(function (index, item) {
        for (var i = 0; i < map_network_icon.length; i++) {
           if ($(item).prop('href').indexOf(map_network_icon[i].network) !== -1) {
             $(item).removeClass().addClass(map_network_icon[i].icon).text('');
             ajustar_contenedor = true;
             nodo = $(item);
           }
        }
      });
    
      if (ajustar_contenedor === true) {
        $(nodo).parent().addClass('entry-content-social-links');
      }
    }
  
  /* Si el tamaño de pantalla es menor a 600px  el copyright del sitio se posiciona antes de los vínculos de redes sociales.  Como son dos rengones se ajusta la altura. */

  function ajustar_footer() {
    if ($(window).outerWidth() < 600) {          
      $('.site-info').prepend($('.copyright'));
    }else{
      $('.site-info').prepend($('.triangule'));
      $('.site-info').prepend($('.solid'));
    } 
  }
  
  /* Calcula el tamaño de la ventana y lo compara con el tamaño del contenido.  Si el tamaño de la ventana es mayor que el tamaño atual del contenido le asigna el tamaño de la ventana (menos el encabezado) al contenido para que el footer quede posicionado  */
  function mover_footer_al_fondo() {
    var window_height = $(window).outerHeight();
    var actual_height = $('#masthead').outerHeight() + $('#main').outerHeight();
    if (window_height > actual_height) {
      var calc_height = ($(window).outerHeight() - $('#masthead').outerHeight() - 40 - $("#colophon").height());
      $('#main').height(calc_height);
    }        
  }
  
  /* Cuando se visualiza el blog en dos columnas se toma como referencia la columna más alta para asignar la altura al contenedor. */

  function ajustar_altura_columnas() { 
    $('.wrapper, .mini-post, .post-browse').attr('style', '');            
     var altura_final = 0,
         posicion_footer = 0,
         altura_proporcional = 0,
         altura_nueva_publicacion = $('.mini-post').height(),
         altura_visualizacion_publicaciones = $('.post-browse').height(),
         espacio_para_navegacion = 224, 
         separacion_footer = 0;
     
     if (es_movil()) {
         separacion_footer = 60;
     }
            
     if (altura_nueva_publicacion > altura_visualizacion_publicaciones) {         
       altura_final = altura_nueva_publicacion;
       altura_final += espacio_para_navegacion;
       posicion_footer = altura_final + separacion_footer;
     } else {
       altura_final = altura_visualizacion_publicaciones;
       altura_final += espacio_para_navegacion;
       posicion_footer = altura_final + separacion_footer;
     }
   
     altura_proporcional = altura_final + $('#masthead').outerHeight();
   
     if (altura_proporcional > $('#page').outerHeight()) {
       $('.mini-post').height(altura_final);
       $('.post-browse').height(altura_final);      
       $('#main').height(posicion_footer);         
     } else {
        altura_final = ($('#page').outerHeight() - $('#masthead').outerHeight()) + espacio_para_navegacion;
       $('.mini-post').height(altura_final);
       $('.post-browse').height(altura_final);
     }
  }

    /* Crear masonry con las opciones generadas */

    function create_and_build_masonry(container, options, ajustar) {
      msnry_container = document.querySelector(container);
      imagesLoaded( msnry_container, function() {
        msnry = new Masonry( msnry_container, options);     
      });
    }

  /* Crear opciones para masonry */

  function build_msnry_opts () {
    if ($(".carteles").length > 0) {
      
      opts = {
        gutter: 0,      
        itemSelector: 'a',
        columnWidth: 1,
        transitionDuration: '1s'          
      }
      create_and_build_masonry('.carteles', opts);
      
    } else if ($('.clientes').length > 0) {
        opts = {
          gutter: 16,   
          itemSelector: 'img',
          transitionDuration: '1s'          
        }
        create_and_build_masonry('.clientes', opts);
    } else if ($('.gente').length > 0) {
        opts = {
          gutter: 15,
          itemSelector: 'div',
          transitionDuration: '1s'          
        }
        create_and_build_masonry('.gente', opts);  
        parse_people_data();
    } else if ($(".grid").length > 0) { 

      if ($(window).outerWidth() < 600) {
        $('a.small').css({margin: '0 auto'}).show();
      } else {
        $('a.large').show();
      }  
      opts = {
          gutter: 16, 
          itemSelector: 'div',
          transitionDuration: '1s',
        }         
      create_and_build_masonry('.grid', opts, true);
    } 
  }
  
  /* Ajustar datos de las personas para visualizar */
  function parse_people_data() {
      setTimeout(function () {
        $('.gente .wp-caption-text').each(function (index, item) {
            var persona = $(item).text();
            $(item).html(parse_person_data(persona));
        });        
      },1000);        
  }
  
  /* Cargar publicación del blog */
  function load_visualization(data) {
    var $tmp_node = $('<div>').html(data);
    var content_images = $tmp_node.find('img').length;
    $('img',$tmp_node).load(function(){
      content_images--;
      if (content_images == 0) {
        ajustar_altura_columnas();
      }
    });
    
    /* 
      Si es para escritorio dejar el comportamiento normal 
      if ($(window).outerWidth() > 599) {    
    */
    if ($(window).outerWidth() > 959) {
      $('#post-visualization').html($tmp_node.children());
      $('.mini-post .wp-caption').css({"margin-top" : 0});        
    } else {
      /* 
        Si el grid y la publicación están agrupados en el mismo contenedor 
        visualizar el contenido 
      */
      if ($('.blog-wrapper').length > 0 || $('.blog-grid').parent() === $('#post-visualization').parent()) {
        $('#post-visualization').html($tmp_node.children());
        $('.mini-post .wp-caption').css({"margin-top" : 0});            
        $('html, body').animate({scrollTop: -$('#post-visualization').offset().top}, 600);
      } else {
        /* Si no están agrupados agruparlos y visualizar el contenido*/
          $('#post-visualization').remove();
          $('.blog-grid').wrap("<div class='blog-wrapper'></div>");
          $('.blog-wrapper').append("<div id='post-visualization' class='post-content'></div>");
          $('#post-visualization').html($tmp_node.children());
          /* Crecer el contenedor 180px para las noticias
          if (window.location.pathname.search("noticia") !== -1) {            
            var altura_ajustada = $(".mini-post").outerHeight() + 180;
            $("#page, #main").height(altura_ajustada);
          }
           Crecer el contenedor 180px para las noticias
          
            Mover -285px para 320
            Buscar tamaño para mover entre 600 y 960px
          */
          
          var desplazar = 0;

          if ($(window).outerWidth() > 599) {
            desplazar = -515;
          } else {
            desplazar = -285;
          }
          $('.blog-wrapper').animate({'margin-left': desplazar}, 600);
          $('.mini-post .wp-caption').css({"margin-top" : 0});        
      }
    }
    
  }
  
  function trace_error(data) {
    return false;    
  }
  
  /* Mandar llamar una publicación del blog */

  $('.post-grid').click(function(e) {
    e.preventDefault();
    var post_id = $(this).attr('href');

    $.ajax({
      type: "GET",
      url:  window.location.origin + "/wp-admin/admin-ajax.php",
      dataType: 'html',
      data: ({ action: 'visualize_post', id: post_id}),
      success: function (data) {
        load_visualization(data);
      },
      error: function (data) {
        trace_error(data);
      }
    }); 
  });
  
  /* Navegación para la publicación anterior / siguiente dentro del blog */

  $('.archertroy-blog').on('click', '.post-navigation-left, .post-navigation-right', function(e) {
    e.preventDefault();
    var post_id = $(this).attr('href');
    var post_type = 'post';
    $.ajax({
      type: "GET",
      url:  window.location.origin + "/wp-admin/admin-ajax.php",
      dataType: 'html',
      data: ({ action: 'previous_next', post_type: post_type,  id: post_id}),
      success: function (data) {
        load_visualization(data);
      },
      error: function (data) {
        trace_error(data)
      }
    }); 
  });
  
  function quitar_marcas_de_agua() {
    if ( $('.amazingcarousel-image a').length >  0) {
      $('.amazingcarousel-image a').remove();
    }
  }
  
  
  $(window).on('resize', function () {
    build_msnry_opts();
    ajustar_footer();
    mover_footer_al_fondo();
  }); 

  /* Al momento en que se cargan la ventana mandamos ejecutar las siguientes funciones. */
  window.onload = function () {
    asignar_clase_a_iconos_sociales();
    ajustar_footer();  
    build_msnry_opts();
    quitar_marcas_de_agua();
    hacer_zoom_a_imagen();
    animaciones_legion();
  }
  
  
  function mostrar_leyenda() {
    $(this).find('.wp-caption-text').stop().css({'z-index': 0}).animate({
      'background': 'rgb(255,255,255)',
      'filter': 'alpha(opacity=85)',
      'opacity': 0.85
    }, 600);
  }
  
  function ocultar_leyenda() {
    $(this).stop();    
    $(this).find('.wp-caption-text').stop().animate({
      'background': 'rgb(255,255,255)',
      'filter': 'alpha(opacity=0)',
      'opacity': 0
    }, 600, function () {
      $(this).css({'z-index': -1});
    });
  }
  
  function mostrar_leyenda_grid() {
    $(this).find('.blog-wp-caption-text').stop().css({'z-index': 0}).animate({
      'background': 'rgb(255,255,255)',
      'filter': 'alpha(opacity=85)',
      'opacity': 0.85
    }, 600);
  }
  
  function ocultar_leyenda_grid() {
    $(this).stop();    
    $(this).find('.blog-wp-caption-text').stop().animate({
      'background': 'rgb(255,255,255)',
      'filter': 'alpha(opacity=0)',
      'opacity': 0
    }, 600, function () {
      $(this).css({'z-index': -1});
    });
  }
  
  function es_movil() {
    return $(window).outerWidth() < 959;
  }
  
  function hacer_zoom_a_imagen() {
    if (window.location.pathname.search("contacto") !== -1) {
        $('.columnas:last img').addClass('agrandar-imagen-contacto');          
    }    
  }
  

  function track_scroll(animaciones) {      
    $('.legion, .filosofia, .metodologia, .tactica, .interior').on('mouseenter', function(){        
          for (var i = 0; i < animaciones.length; i++) {
            if (animaciones[i].seccion == $(this).prop('class') && animaciones[i].iniciada === false) {
                animaciones[i].iniciada = true;
               $(this).animate({opacity: 1}, 800);
            }
          } 
    });

       $( window ).on('scroll', function() {
         $('.legion, .filosofia, .metodologia, .tactica, .interior').each(function(){
             if(en_area_de_visualizacion($(this))){               
               for (var i = 0; i < animaciones.length; i++) {
                 if (animaciones[i].seccion == $(this).prop('class') && animaciones[i].iniciada === false) {
                   animaciones[i].iniciada = true;
                   if (animaciones[i].seccion === 'tactica') {
                     // Animar ballestas cuando la sección sea táctica
                     animar_texto_ballestas();
                   }                   
                   if (animaciones[i].seccion === 'interior') {
                     animar_texto_caballo();
                   }
                 }
               }
             } 
         });
       }); 
  }
  
  $(".seccion-arco").hover(function(){
      animar_texto_ballestas();
    });
  $(".seccion-caballo").hover(function(){
      animar_texto_caballo();
    });
  
  function en_area_de_visualizacion (elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height() / 2;
      var elemTop = $(elem).offset().top;
      return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
  }
  
  function animar_texto_ballestas() {
var espera_entre_animaciones = 300, 
    espera_fade_in = 600;
    
    $('.arco-1').fadeIn(espera_entre_animaciones, function () {
      setTimeout(function () {
        $('.arco-2').fadeIn(espera_entre_animaciones, function () {
          setTimeout(function () {
            $('.arco-3').fadeIn(espera_entre_animaciones, function () {
              setTimeout(function () {
                $('.arco-4').fadeIn(espera_entre_animaciones);                  
              }, espera_entre_animaciones);       
            });
          }, espera_entre_animaciones);       
        });          
      }, espera_entre_animaciones);       
    });
  }
  
  function animar_texto_caballo() {
    var espera_entre_animaciones = 300, 
        espera_fade_in = 600;
    $('.mensaje-derecha-1').fadeIn(espera_fade_in, function () {
      $(this).css("display","table");
      setTimeout(function () {
        $('.mensaje-izquierda-1').fadeIn(espera_fade_in, function () {
          $(this).css("display","table");
          setTimeout(function () {
            $('.mensaje-derecha-2').fadeIn(espera_fade_in, function () {
              $(this).css("display","table");
              setTimeout(function () {
                $('.mensaje-izquierda-2').fadeIn(espera_fade_in, function () {
                  $(this).css("display","table");
                 setTimeout(function () {
                   $('.mensaje-derecha-3').fadeIn(espera_fade_in, function () {
                    $(this).css("display","table");
                     setTimeout(function () {
                       $('.mensaje-izquierda-3').fadeIn(espera_fade_in, function () {
                        $(this).css("display","table");
                         $('.mensaje-izquierda-4').fadeIn(espera_fade_in);
                         $('.mensaje-izquierda-4').css("display","table");
                       });
                     }, espera_entre_animaciones);
                   });
                 }, espera_entre_animaciones);
                }); 
              }, espera_entre_animaciones);       
            });
          }, espera_entre_animaciones);       
        });          
      }, espera_entre_animaciones);       
    });
  }
  
  
  

  
  function animaciones_legion() {
    if (window.location.pathname.search("legion") !== -1 && !$(window).outerWidth() < 599) {

      var animaciones = [
        {
          seccion: 'legion',
          iniciada: false
        }, 
        {
          seccion: 'filosofia',
          iniciada: false
        }, 
        {
          seccion: 'metodologia',
          iniciada: false
        }, 
        {
          seccion: 'tactica',
          iniciada: false
        }, 
        {
          seccion: 'interior',
          iniciada: false
        }
    ];

$('.mensaje-derecha-1, .mensaje-derecha-2, .mensaje-derecha-3, .mensaje-izquierda-1, .mensaje-izquierda-2, .mensaje-izquierda-3, .mensaje-izquierda-4, .arco-1, .arco-2, .arco-3, .arco-4').hide();

      track_scroll(animaciones);
    
    } /*  if (window.location.pathname.search("legion") !== -1 && !es_movil()) */
  } /* animaciones_legion() */
  

  /*
   * Menu override de loading or front page
   */
   $("#menu-item-443").click(function (e) {
      e.preventDefault();
      $.ajax({
          method: "POST",
          url: "/wp-content/themes/archertroy/overrideLoading.php",
          data: { entro: "1"}
        })
        .done(function( msg ) {
          window.location = "/";
      });
   });
   $(".mini-logo").click(function (e) {
      e.preventDefault();
      $.ajax({
          method: "POST",
          url: "/wp-content/themes/archertroy/overrideLoading.php",
          data: { entro: "1"}
        })
        .done(function( msg ) {
          window.location = "/";
      });
   });
   $(".mini-logo-internal").click(function (e) {
      e.preventDefault();
      $.ajax({
          method: "POST",
          url: "/wp-content/themes/archertroy/overrideLoading.php",
          data: { entro: "1"}
        })
        .done(function( msg ) {
          window.location = "/";
      });
   });
   $(".boton-Cartel").click(function(){
      window.location = "/?page_id=308";
   });

  $('body').on('mouseenter', '.post-content .wp-caption:not(:first-child)', mostrar_leyenda);
  $('body').on('mouseleave', '.post-content .wp-caption:not(:first-child)', ocultar_leyenda);
  $('body').on('mouseenter', '.blog-grid .blog-wp-caption', mostrar_leyenda_grid);
  $('body').on('mouseleave', '.blog-grid .blog-wp-caption', ocultar_leyenda_grid);
  $('.wp-caption').hover(mostrar_leyenda, ocultar_leyenda); 