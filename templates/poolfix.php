<?php
    /* Template Name: Poolfix */ 
    get_header();
?>
 <section id="poolfix" class="template-section">
 
     <div class="grid">
         <div class="colespe1 fondo"></div>
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolfix2.png" alt="pool"><p>Nos dedicamos al mantenimiento correctivo de cualquier espacio creados para contener agua de forma estética, recreativa, principalmente <b>Albercas,</b> pero también <b>fuentes, espejos de agua, lagos artificiales con y sin flora y fauna,</b> etc.</p></div>
     </div>

</section>
 <section id="galeria2" class="template-section">
 
     <div class="contenedor">
         
    <?php echo do_shortcode( '[grid_plus name="poolfix"]' ); ?>
   
   
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
             <li>Más de 40 años de experiencia en el área de mantenimiento preventivo y la operación de dichas áreas</li>
 
<li>Conocemos con detalle los equipos y marcas mas adecuados para cada tipo de operación.</li>
 
<li>Podemos reemplazar equipos obsoletos, por los equipos mas eficientes, ecológicos y adecuados para el mayor ahorro energético y de mano de obra.</li>
 
<li>Si su alberca o especio acuático opera adecuadamente usted evitará mantenimientos, riesgos, accidentes y sobre todo gastos correctivos.</li>
 
<li>También ofrecemos la reparación en la obra civil, es decir, fugas en el casco de la alberca, remodelación o reparación del recubrimiento.</li>
         </ul></div>
         <div class="col espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ventajas.png" alt="pool"></div>
     </div>
</div>
</section>

 <section id="ofrecemos" class="template-section">
 <div class="contenedor">
    <div class="ban">
   <h2>¿QUÉ OFRECEMOS?</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
    <h3 class="blanco">Servicio de revisión ¡TOTALMENTE GRATIS!</h3>
    <div class="grid">
        <div class="col3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/RECUBRIMIENTO.png" alt="pool"><p><b>RECUBRIMIENTO</b></p><p><?php echo do_shortcode('[popup_anything id="68"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/EQUIPOS.png" alt="pool"><p><b>EQUIPOS</b></p><p><?php echo do_shortcode('[popup_anything id="71"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/automatización.png" alt="pool"><p><b>AUTOMATICAZIÓN</b></p><p><?php echo do_shortcode('[popup_anything id="72"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/capacitacion.png" alt="pool"><p><b>CAPACITACIÓN</b></p><p><?php echo do_shortcode('[popup_anything id="73"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
    </div>
</div>
</section>
<section id="ofrecemos-slider" class="template-section">
<div class="contenedor">
<div class="cont">
    <?php echo do_shortcode('[slide-anything id="215"]'); ?>
    </div>
    </div>
</section>

<?php 
    get_footer();
?>
