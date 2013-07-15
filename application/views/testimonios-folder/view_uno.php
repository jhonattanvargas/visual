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
            
            if((elem.text()) == 'uno'){
                      beep.play();
              }
              else if ((elem.text()) != 'uno'){
                      beep.pause();
                      beep.currentTime = 0;
              }

              if((elem.text()) == 'dos'){
                      beep1.play();
              }
              else if ((elem.text()) != 'dos'){                      
                      beep1.pause();
                      beep1.currentTime = 0;
              }

              if((elem.text()) == 'tres'){
                      beep2.play();
              }
              else if ((elem.text()) != 'tres'){
                      beep2.pause();
                      beep2.currentTime = 0;
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
                     
                      <li><A href="<?php echo base_url();?>index.php/con_testimonios/uno">1</A></li>
                      <li><A href="<?php echo base_url();?>index.php/con_testimonios/dos">2</A></li>
                      <li><A id ="play" href="<?php echo base_url();?>index.php/con_testimonios/tres">3</A></li>
                      <li><a href="<?php echo base_url();?>">Volver al home</a></li>
                    </ul></ul>
                  </div>
                </div>
              </div>
                    <div class="art-postcontent art-postcontent-0 clearfix">
                      <iframe type='text/html' width='640' height='385' src='http://www.youtube.com/embed/0XGtdUwWt-w?autoplay=1' frameborder='0'></iframe>
                    </div>
            </div>
          </div>
  </div>
</div>
  </div>
</body>
