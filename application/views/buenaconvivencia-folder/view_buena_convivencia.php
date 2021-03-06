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

            if((elem.text()) == 'Consejos'){
                    beep.play();
                    beep4.pause();
                    beep4.currentTime = 0;
            }
            else{
                    beep.pause();
                    beep.currentTime = 0;
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
                        <source src="<?php echo base_url();?>sounds/Consejos.mp3" type="audio/mp3" />
                      </audio>
                      <audio id="beep4" src="<?php echo base_url();?>sounds/Consejo texto.mp3" type="audio/mp3" autoplay>
                      </audio>
                      <li><A href="<?php echo base_url();?>index.php/con_buena_convivencia/buenaconvivencia">Consejos</A></li>
                      <li><A href="#">Mensaje a los videntes</A></li>
                      <li><A id ="play" href="#">Mensajes a los no videntes</A></li>
                      <li><a href="<?php echo base_url();?>">Volver al home</a></li>
                    </ul></ul>
                  </div>
                </div>
              </div>
                    <div class="art-postcontent art-postcontent-0 clearfix">
                      <font face="arial" size=4 color=black>-Cuando se dirija a un ciego hable en forma clara y audible, primero identifíquese con su nombre y solo cuando el ciego lo haya reconocido comience a decirle su mensaje. <br>
-Adviértale cuando se va y cuando regresa, para que sepa en todo momento si usted está o no.<br>
-Léale lo que hay en las pizarras, afiches o notas de servicio.<br>
-Si una persona ciega le pide una dirección, indíquele de forma precisa la distancia que va a recorrer. 
Utilice los conceptos de izquierda, derecha, de frente, los puntos cardinales, arriba, abajo, atrás, 
adelante, etc.<br>-Cuando esté en el paso de una persona ciega, retírese o anuncie su presencia en lugar de guardar 
silencio y, si le propone modificar su dirección, cuide no dirigirla a otro obstáculoso.<br>
-El orden es fundamental y facilita la búsqueda de las cosas, de no respetarse el lugar asignado a un 
objeto, tendrían que tocar por todas partes para encontrarlo.<br>
-No deje objetos tirados sobre el suelo en los lugares por donde la persona ciega pasa regularmente. 
Debe dejar libre de obstáculos los pasillos y accesos al trabajo y avisar al no vidente, en caso de 
cualquier cambio en los mismos.<br></font>
                    </div>
            </div>
          </div>
  </div>
</div>
  </div>
</body>
