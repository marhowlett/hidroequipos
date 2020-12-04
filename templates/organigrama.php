<?php
    /* Template Name: Organigrama */ 
    get_header();
?>
<section id="servicios2" class="template-section">
<div class="contenedor">
  <div class="ban">
   <h2>Organigrama</h2>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
   </div>
   <div class="grid">
       <div class="col2"><a href="#pooldesignorg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pooldesign.png" alt="pool"><p>DISEÑO</p></a></div>
       <div class="col2"><a href="#poolstructionsorg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolstructions.png" alt="pool"><p>CONSTRUCCIÓN</p></a></div>
       <div class="col2"><a href="#poolsolutionsorg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsolutions.png" alt="pool"><p>MANTENIMIENTO</p></a></div>
   </div>
   <div class="grid especial">
       <div class="col"><a href="#poolfixorg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolfix.png" alt="pool"><p>REPARACIÓN</p></a></div>
       <div class="col"><a href="#poolsalesorg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsales.png" alt="pool"><p>QUÍMICOS Y EQUIPOS</p></a></div>

   </div>
  
 
 
  
</div>
</section>
 <section id="conocenos" class="template-section">
 <div class="contenedor">
 
  
  <div class="cont">
   <h3>Gerentes</h3>
    <?php echo do_shortcode( '[slide-anything id="174"]' ); ?>
    </div>
    <div class="cont">
  <h3>Corporativo</h3>
    <?php echo do_shortcode( '[slide-anything id="178"]' ); ?>
    
     </div>
     <div class="cont" id="poolstructionsorg">
  <h3>Poolstructions</h3>
    <?php echo do_shortcode( '[slide-anything id="182"]' ); ?>
    
     </div>
     <div class="cont" id="poolsolutionsorg">
  <h3>Poolsolutions</h3>
    <?php echo do_shortcode( '[slide-anything id="186"]' ); ?>
    
     </div>
     <div class="cont contespe" id="poolsalesorg">
  <h3 class="espe">Poolsales</h3>
    <?php echo do_shortcode( '[slide-anything id="188"]' ); ?>
    
     </div>
     <div class="cont contespe" id="poolfixorg">
  <h3 class="espe">Poolfix</h3>
    <?php echo do_shortcode( '[slide-anything id="1711"]' ); ?>
    
     </div>
     <div class="cont" id="pooldesignorg">
  <h3>Pooldesign</h3>
    <?php echo do_shortcode( '[slide-anything id="192"]' ); ?>
    
     </div>
     
  
  </div>
  
</section>
 
<?php 
    get_footer();
?>