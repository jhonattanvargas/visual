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
              
              if((elem.text()) == 'Misión'){
                      beep1.play();
                      beep.pause();
                      beep.currentTime = 0;
              }
              else if ((elem.text()) != 'Misión'){                      
                      beep1.pause();
                      beep1.currentTime = 0;
              }

              if((elem.text()) == 'Quienes somos'){
                      beep4.play();
                      beep.pause();
                      beep.currentTime = 0;
              }
              else if ((elem.text()) != 'Quienes somos'){
                      beep4.pause();
                      beep4.currentTime = 0;
              }

              if((elem.text()) == 'Organigrama'){
                      beep2.play();
                      beep.pause();
                      beep.currentTime = 0;
              }
              else if ((elem.text()) != 'Organigrama'){
                      beep2.pause();
                      beep2.currentTime = 0;
              }

              if((elem.text()) == 'Historia'){
                      beep3.play();
                      beep.pause();
                      beep.currentTime = 0;
              }
              else if ((elem.text()) != 'Historia'){                      
                      beep3.pause();
                      beep3.currentTime = 0;
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
                      <audio id="beep4" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Quienes somos.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep" src="<?php echo base_url();?>sounds/Mision texto.mp3" type="audio/mp3" autoplay>
                      </audio>
                      <audio id="beep1" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Mision.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep2" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Organigrama.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep3" preload="auto">
                        <source src="<?php echo base_url();?>sounds/Historia.mp3" type="audio/mp3" />
                      </audio>
                      <li><A href="<?php echo base_url();?>index.php/con_sobre_nosotros/quienes_somos">Quienes somos</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_sobre_nosotros/mision">Misión</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_sobre_nosotros/organigrama">Organigrama</A></li>
                      <li><a href="<?php echo base_url();?>index.php/con_sobre_nosotros/historia">Historia</a></li>
                      <li><a href="<?php echo base_url();?>">Volver al home</a></li>
                    </ul></ul>
                  </div>
                </div>
              </div>
                    <div class="art-postcontent art-postcontent-0 clearfix">
                      <font face="arial" size=4 color=black>Pretendemos posicionarnos como un centro de ayuda integral al no vidente y al limitado visual, 
ayudándolo psicológicamente para adaptarse a su nueva realidad en caso de halla perdido la vista en 
forma traumática, enseñándole técnicas de desplazamiento que lo ayuden a que pueda tener la mayor 
autonomía posible, consiguiendo con eso una vida mas digna e independiente; ademas, queremos 
ayudarlos en materia de salud especializada para no videntes, gestionando convenios y postulando a 
fondos concursables que solo son otorgados a organizaciones y a los cuales, por lo tanto, un no vidente 
no podría acceder en forma individual. No menos importante que lo anterior queremos ser un centro 
donde estas personas puedan acceder a socialización y recreación, cosas que en muchas ocasiones están
vetadas para ellos.
Deseamos acompañar a los no videntes en un camino que, si bien es difícil, puede también conducirlos 
a una vida plena y feliz. </font> 
                    </div>
            </div>
          </div>
  </div>
</div>
  </div>
</body>
