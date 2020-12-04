<?php
    /* Template Name: PoolsolutionsENG */ 
   get_header("eng");
?>
 <section id="poolsolutions" class="template-section">
 <div class="lap">
     <div class="grid">
         <div class="colespe1 fondo"></div>
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsolutions2.png" alt="pool"><p>Our specialty is keeping your pool in the best conditions: <b>technical, visual, disinfection,
brushing and others</b> to ensure that it is always healthy and ecological.</p></div>
     </div>
</div>
 <div class="cel">
     <div class="grid">
         
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsolutions2.png" alt="pool"><p>Nuestra especialidad es mantener su alberca en las mejores condiciones: <b>técnicas, visuales, de desinfección, cepillado y otras</b> para asegurarnos de que siempre sea sana y ecológica.</p></div>
         <div class="colespe1 fondo"></div>
     </div>
</div>
</section>
 <section id="galeria2" class="template-section">
 
     <div class="contenedor">
         
    <?php echo do_shortcode( '[grid_plus name="poolsolutions"]' ); ?>
   
   
     </div>
     
     
</section>
 <section id="ventajas2" class="template-section">
 <div class="contenedor">
 <div class="ban">
   <h2>BENEFITS</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
     <div class="grid">
         <div class="col fondo"><ul>
             <li>Advisory and qualified personnel for the maintenance of your pool.
</li>
 
<li>Ecological management of waste and products applied to swimming pools. </li>
 
<li>Energy savings for a greener world.</li>
 
<li>You will have an automated pool.</li>
 
         </ul></div>
         <div class="col espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ventajas2.png" alt="pool"></div>
     </div>
</div>
</section>

 <section id="ofrecemos" class="template-section">
 <div class="contenedor">
    <div class="ban">
   <h2>WHAT DO WE OFFER?</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
      <div class="grid">
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/asesoria.png" alt="pool"><p><b>CONSULTING BY EVENT</b></p><p><?php echo do_shortcode('[popup_anything id="1661"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/PROGRAMADO.png" alt="pool"><p><b>SCHEDULED CONSULTING</b></p><p><?php echo do_shortcode('[popup_anything id="1662"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CONTRATO.png" alt="pool"><p><b>MAINTENANCE CONTRACT</b></p><p><?php echo do_shortcode('[popup_anything id="1663"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/VIP.png" alt="pool"><p><b>VIP MAINTENANCE</b></p><p><?php echo do_shortcode('[popup_anything id="1664"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/EXTRAS.png" alt="pool"><p><b>EXTRA WORK ORDERS</b></p><p><?php echo do_shortcode('[popup_anything id="1666"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
    </div>
</div>
</section>
<section id="ofrecemos-slider" class="template-section">
<div class="contenedor">
<div class="cont">
    <?php echo do_shortcode('[rev_slider alias="PoolSolutions"][/rev_slider]'); ?>
    </div>
    </div>
</section>

<?php 
    get_footer("eng");
?>
