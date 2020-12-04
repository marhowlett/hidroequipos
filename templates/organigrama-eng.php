<?php
    /* Template Name: OrganigramaENG */ 
    get_header("eng");
?>
<section id="servicios" class="template-section">
<div class="contenedor">
  <div class="ban">
   <h2>SERVICES</h2>
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
   </div>
   <div class="grid">
       <div class="col2"><a href="https://www.hidroequipos.com/en/pooldesign"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pooldesign.png" alt="pool"><p>DESIGN
</p></a></div>
       <div class="col2"><a href="https://www.hidroequipos.com/en/poolstructions"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolstructions.png" alt="pool"><p>CONSTRUCTION</p></a></div>
       <div class="col2"><a href="https://www.hidroequipos.com/en/poolsolutions"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsolutions.png" alt="pool"><p>MAINTENANCE</p></a></div>
   </div>
   <div class="grid especial">
       <div class="col"><a href="https://www.hidroequipos.com/en/poolfix"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolfix.png" alt="pool"><p>REPAIRS</p></a></div>
       <div class="col"><a href="https://www.hidroequipos.com/en/poolsales"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsales.png" alt="pool"><p>CHEMICALS AND EQUIPMENT</p></a></div>

   </div>
  
  
</div>
</section>
 <section id="conocenos" class="template-section">
 <div class="contenedor">
 
  
  <div class="cont">
   <h3>GET TO KNOW US</h3>
    <?php echo do_shortcode( '[slide-anything id="1629"]' ); ?>
    </div>
    <div class="cont">
  <h3>Corporate</h3>
    <?php echo do_shortcode( '[slide-anything id="1696"]' ); ?>
    
     </div>
     <div class="cont" id="poolstructionsorg">
  <h3>Poolstructions</h3>
    <?php echo do_shortcode( '[slide-anything id="1700"]' ); ?>
    
     </div>
     <div class="cont" id="poolsolutionsorg">
  <h3>Poolsolutions</h3>
    <?php echo do_shortcode( '[slide-anything id="1702"]' ); ?>
    
     </div>
     <div class="cont contespe" id="poolsalesorg">
  <h3 class="espe">Poolsales</h3>
    <?php echo do_shortcode( '[slide-anything id="1704"]' ); ?>
    
     </div>
     <div class="cont" id="poolfixorg">
  <h3>Poolfix</h3>
    <?php echo do_shortcode( '[slide-anything id="1716"]'  ); ?>
    
     </div>
     <div class="cont" id="pooldesignorg">
  <h3>Pooldesign</h3>
    <?php echo do_shortcode( '[slide-anything id="1718"]' ); ?>
    
     </div>
     
  
  </div>
  
</section>
 
<?php 
    get_footer("eng");
?>