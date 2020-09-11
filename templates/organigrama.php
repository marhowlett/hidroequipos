<?php
    /* Template Name: Organigrama */ 
    get_header();
?>
 <section id="conocenos" class="template-section">
 <div class="contenedor">
 <div class="ban2">
   <h2 >Organigrama</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
  
  <div class="cont">
   <h3>Gerentes</h3>
    <?php echo do_shortcode( '[slide-anything id="174"]' ); ?>
    </div>
    <div class="cont">
  <h3>Corporativo</h3>
    <?php echo do_shortcode( '[slide-anything id="178"]' ); ?>
    
     </div>
     <div class="cont">
  <h3>Poolstructions</h3>
    <?php echo do_shortcode( '[slide-anything id="182"]' ); ?>
    
     </div>
     <div class="cont">
  <h3>Poolsolutions</h3>
    <?php echo do_shortcode( '[slide-anything id="186"]' ); ?>
    
     </div>
     <div class="cont contespe">
  <h3 class="espe">Poolsales</h3>
    <?php echo do_shortcode( '[slide-anything id="188"]' ); ?>
    
     </div>
     <div class="cont">
  <h3>Poolfix</h3>
    <?php echo do_shortcode( '[slide-anything id="190"]' ); ?>
    
     </div>
     <div class="cont">
  <h3>Pooldesign</h3>
    <?php echo do_shortcode( '[slide-anything id="192"]' ); ?>
    
     </div>
     
  
  </div>
  
</section>
 
<?php 
    get_footer();
?>