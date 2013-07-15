<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Pagina</title>
    <link charset="utf-8" href="<?php echo base_url();?>js/npNav_files/style.css" media="screen" rel="stylesheet" type="text/css">
    
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--link rel="stylesheet" href="<?php echo base_url();?>css/menu_lateral/style.css" media="screen">-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style_page/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <!--link rel="stylesheet" href="<?php echo base_url();?>css/menu_lateral/style.responsive.css" media="all">-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style_page/style.responsive.css" media="all">
    <link rel="stylesheet" href= "<?php echo base_url();?>css/slideshare/style.css" type="text/css" />
    <script type="text/javascript" async src="<?php echo base_url();?>js/npNav_files/ga.js"></script><script src="<?php echo base_url();?>js/npNav_files/prettify.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/npNav_files/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/npNav_files/jq.npNav.js" type="text/javascript"></script>
    
    <script type="text/javascript">
            
        $(document).ready(function(){
        
          prettyPrint();
          // Setting up plugin
          var $example = $('td, .nav a, .box').npNav();
          $example.npNav('onSelect', function(elem) {
            $('.status').text("selected item: " + (elem.text()));
            
              if((elem.text()) == 'Actividades'){
                      beep.play();
              }
              else if ((elem.text()) != 'Actividades'){                      
                      beep.pause();
                      beep.currentTime = 0;
              }

              if((elem.text()) == 'Sobre nosotros'){
                      beep_sobre_nosotros.play();
              }
              else if ((elem.text()) != 'Sobre nosotros'){
                      beep_sobre_nosotros.pause();
                      beep_sobre_nosotros.currentTime = 0;
              }

              if((elem.text()) == 'Testimonios'){
                      beep_testimonios.play();
              }
              else if ((elem.text()) != 'Testimonios'){
                      beep_testimonios.pause();
                      beep_testimonios.currentTime = 0;
              }            

              if((elem.text()) == 'Buena convivencia'){
                      beep_buena_convivencia.play();
              }
              else if ((elem.text()) != 'Buena convivencia'){
                      beep_buena_convivencia.pause();
                      beep_buena_convivencia.currentTime = 0;
              }

              if((elem.text()) == 'Contactos'){
                      beep_contactos.play();
              }
              else if ((elem.text()) != 'Contactos'){
                      beep_contactos.pause();
                      beep_contactos.currentTime = 0;
              }

          }).npNav('addAction', 'i', function(e){
            // This will bring focus to the textarea
            $('textarea:first').focus();
          });        
          $example.npNav('addAction',' ', function(elem) {
            var msg;
            if (elem.is('a')) {
              msg = elem.attr('href');
            }
            document.location.href=msg;
          });
          
          function detectar_tecla(){ 
            with (event){ 
                if (keyCode==27) {
                    document.location.href = "<?php echo base_url();?>";
                    //alert('Presionaste ESC');
                }
            }
          } 
          document.onkeydown = detectar_tecla;         
        });   /*fin de funcion  $(document).ready(function()*/
        
        
    </script>
  </head>
<body>
  <div id="art-main">
    <div class="art-sheet clearfix">
        <div class="art-layout-wrapper">
          <div class="art-content-layout">
            <div class="art-content-layout-row">
              <div class="art-layout-cell art-sidebar1">
                <div class="art-vmenublock clearfix">
                  <div class="art-vmenublockcontent">
                    <ul class="nav">
                    <ul class="art-vmenu">
                      <audio id="beep" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Actividades.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep_sobre_nosotros" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Sobre_nosotros.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep_testimonios" preload="auto">
                        <source src="<?php echo base_url();?>sounds/music1.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep_buena_convivencia" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Buena_convivencia.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep_contactos" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Contactos.mp3" type="audio/mp3" />
                      </audio>
                      <li><A href="<?php echo base_url();?>">Home</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_sobre_nosotros/index">Sobre nosotros</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_actividades/index">Actividades</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_testimonios/index">Testimonios</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_buena_convivencia/index">Buena convivencia</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_contactanos/index">Contactos</A></li>
                    </ul>
                    </ul>
                  </div>
                </div>
              </div>
                <div class="">
                        <img src="img/bienvenido.jpg" />
                    </div>           
            </div>
          </div>
        </div>
    </div>
  </div>

</body>
