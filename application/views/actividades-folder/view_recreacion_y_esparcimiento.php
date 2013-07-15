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
            
              if((elem.text()) == 'Orientación y movilidad'){
                      beep.play();
                      beep5.pause();
                      beep5.currentTime = 0;
              }
              else if ((elem.text()) != 'Orientación y movilidad'){
                      beep.pause();
                      beep.currentTime = 0;
              }

              if((elem.text()) == 'Asistencia psicológica'){
                      beep1.play();
                      beep5.pause();
                      beep5.currentTime = 0;
              }
              else if ((elem.text()) != 'Asistencia psicológica'){                      
                      beep1.pause();
                      beep1.currentTime = 0;
              }

              if((elem.text()) == 'Atención Kinesiológica'){
                      beep2.play();
                      beep5.pause();
                      beep5.currentTime = 0;
              }
              else if ((elem.text()) != 'Atención Kinesiológica'){
                      beep2.pause();
                      beep2.currentTime = 0;
              }

              if((elem.text()) == 'Recreación y esparcimiento'){
                      beep3.play();
                      beep5.pause();
                      beep5.currentTime = 0;
              }
              else if ((elem.text()) != 'Recreación y esparcimiento'){                      
                      beep3.pause();
                      beep3.currentTime = 0;
              }

              if((elem.text()) == 'Otras'){
                      beep4.play();
                      beep5.pause();
                      beep5.currentTime = 0;
              }
              else if ((elem.text()) != 'Otras'){                      
                      beep4.pause();
                      beep4.currentTime = 0;
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
                        <source src="<?php echo base_url();?>sounds/Orientacion y movilidad.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep1" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Asistencia sicologica.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep2" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Atencion kinesiologica.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep3" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Recreacion y esparcimiento.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep4" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Otras.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep5" src="<?php echo base_url();?>sounds/Recreacion y esparcimiento texto.mp3" type="audio/mp3" autoplay>
                      </audio>
                      <li><A href="<?php echo base_url();?>index.php/con_actividades/orientacionymovilidad">Orientación y movilidad</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_actividades/asistencia_psicologica">Asistencia psicológica</A></li>
                      <li><A id ="play" href="<?php echo base_url();?>index.php/con_actividades/atencion_kine">Atención Kinesiológica</A></li>
                      <li><a href="<?php echo base_url();?>index.php/con_actividades/recreacion_y_esparcimiento">Recreación y esparcimiento</a></li>
                      <li><a href="<?php echo base_url();?>index.php/con_actividades/otras">Otras</a></li>
                      <li><a href="<?php echo base_url();?>">Volver al home</a></li>
                    </ul></ul>
                  </div>
                </div>
              </div>
                    <div class="art-postcontent art-postcontent-0 clearfix">
                      <font face="arial" size=4 color=black>Pudiera parecer que la recreación es una tarea de segunda importancia dentro de las que realizamos en 
CENCACYLIV, pero la verdad es que es la que nuestros socios mas agradecen, estas no solo consisten 
en actividades sociales como comidas o celebraciones sino también en la participación en eventos 
generalmente organizados por organismos públicos como la municipalidad de Talca, donde se pide a 
CENCACYLIV que realice uno o varios números artísticos, logrando de esta forma afiatar al grupo de 
socios debido a que todos trabajan por un objetivo común y dar un sentido de logro y realización 
personal a personas que muchas veces no tienen otra forma de experimentar eso, el arte y las 
expresiones humanas también tienen un poder curativo para las personas, eso lo sabemos aquí por 
experiencia propia. Ademas se está formando una audioteca para beneficio de nuestros socios.</font>
                    </div>
            </div>
          </div>
  </div>
</div>
  </div>
</body>
