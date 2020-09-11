<?php
    /* Template Name: PoolSales */ 
    get_header();
?>
 <section id="poolsales" class="template-section">
 
     <div class="grid">
         <div class="colespe1 fondo"></div>
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsales2.png" alt="pool"><p>Vendemos <b>los productos y accesorios</b> que requiere para mejorar el estado y funcionamiento de su alberca. Esta área de la empresa está dedicada a aquellos usuarios que deciden hacer las cosas por ellos mismos.</p></div>
     </div>

</section>
 <section id="galeria2" class="template-section">
 
     <div class="contenedor">
         
    <?php echo do_shortcode( '[grid_plus name="poolsales"]' ); ?>
   
  
     </div>
     
</section> 
 
 <section id="ventajas" class="template-section">
 <div class="contenedor">
 <div class="ban">
   <h2>VENTAJAS</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
     <div class="grid">
         <div class="col fondo"><ul>
<li>
       Podrá realizar los ajustes a su ritmo, con nuestra asesoría. </li>
 
<li>Ponemos a su disposición los mejores equipos, materiales, productos y accesorios.</li>
 
<li>Asesoría inmediata sin costo via telefónica, mail, whats y hasta visitas a obra por técnicos especializados.</li>
 
<li>Contamos con un gran equipo de técnicos para lograr una buena instalación.</li>
 
<li>Surtimos a toda la República mexicana desde una pieza hasta toda una alberca completa. Con entrega inmediata y envío garantizado de 2 a 3 días.</li>
        
         </ul></div>
         <div class="col espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ventajas5.png" alt="pool"></div>
     </div>
</div>
</section>

 <section id="ofrecemos" class="template-section">
 <div class="contenedor">
    <div class="ban">
   <h2>¿QUÉ OFRECEMOS?</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
   
    <div class="grid">
        <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CONSTRUCCIÓN2.png" alt="pool"><p><b>RESIDENCIALES</b></p><p><?php echo do_shortcode('[popup_anything id="96"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CONSTRUCCIÓN2.png" alt="pool"><p><b>HOTELEROS  O
GRANDES USARIOS</b></p><p><?php echo do_shortcode('[popup_anything id="97"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        
    </div>
</div>
</section>
<section id="ofrecemos-slider" class="template-section">
<div class="contenedor">
<div class="cont">
    <?php echo do_shortcode('[slide-anything id="217"]'); ?>
    </div>
    </div>
</section>



<?php 
    get_footer();
?>
