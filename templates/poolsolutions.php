<?php
    /* Template Name: Poolsolutions */ 
    get_header();
?>
 <section id="poolsolutions" class="template-section">
 
     <div class="grid">
         <div class="colespe1 fondo"></div>
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsolutions2.png" alt="pool"><p>Nuestra especialidad es mantener su alberca en las mejores condiciones: <b>técnicas, visuales, de desinfección, cepillado y otras</b> para asegurarnos de que siempre sea sana y ecológica.</p></div>
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
   <h2>VENTAJAS</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
     <div class="grid">
         <div class="col fondo"><ul>
             <li>Asesoría y personal calificado para el mantenimiento de su alberca.</li>
 
<li>Manejo ecológico de los desechos y los productos que se aplican a las albercas. </li>
 
<li>Mayor ahorro energético para un mundo más verde.</li>
 
<li>Tendrá una alberca automatizada.</li>
 
         </ul></div>
         <div class="col espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ventajas2.png" alt="pool"></div>
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
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/asesoria.png" alt="pool"><p><b>ASESORÍA
POR EVENTO</b></p><p><?php echo do_shortcode('[popup_anything id="76"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/PROGRAMADO.png" alt="pool"><p><b>ASESORÍA
PROGRAMADA</b></p><p><?php echo do_shortcode('[popup_anything id="77"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CONTRATO.png" alt="pool"><p><b>CONTRATO DE
MANTENIMIENTO</b></p><p><?php echo do_shortcode('[popup_anything id="78"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/VIP.png" alt="pool"><p><b>MANTENIMIENTO
VIP</b></p><p><?php echo do_shortcode('[popup_anything id="79"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/EXTRAS.png" alt="pool"><p><b>ÓRDENES DE
TRABAJO EXTRA</b></p><p><?php echo do_shortcode('[popup_anything id="80"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
    </div>
</div>
</section>
<section id="ofrecemos-slider" class="template-section">
<div class="contenedor">
<div class="cont">
    <?php echo do_shortcode('[slide-anything id="219"]'); ?>
    </div>
    </div>
</section>

<?php 
    get_footer();
?>
