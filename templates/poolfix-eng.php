<?php
    /* Template Name: PoolfixENG */ 
    get_header("eng");
?>
 <section id="poolfix" class="template-section">
     <div class="lap">
     <div class="grid">
         <div class="colespe1 fondo"></div>
       
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolfix2.png" alt="pool"><p>We are dedicated to the corrective maintenance of any space created to contain water in an
aesthetic, recreational way, mainly <b>pools,</b> but also <b>fountains, water mirrors, artificial lakes with
and without flora and fauna,</b> etc.</p></div>
     </div>
    </div>
    <div class="cel">
     <div class="grid">
         
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolfix2.png" alt="pool"><p>We are dedicated to the corrective maintenance of any space created to contain water in an
aesthetic, recreational way, mainly <b>pools,</b> but also <b>fountains, water mirrors, artificial lakes with
and without flora and fauna,</b> etc.</p></div>
         <div class="colespe1 fondo"></div>
     </div>
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
   <h2>BENEFITS</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
     <div class="grid">
         <div class="col fondo"><ul>
             <li>More than 40 years of experience in the area of preventive maintenance and the operation of
these areas.</li>
 
<li>We know in detail the most suitable equipment and brands for each type of operation.</li>
 
<li>We can replace obsolete equipment with the most efficient, ecological and suitable equipment
for the greatest energy and labor savings. </li>
 
<li>If your pool or aquatic space operates properly you will avoid maintenance, risks, accidents
and above all corrective expenses</li>
 
<li>We also offer repair in civil works, that is, leaks in the pool shell, remodeling or repair of the
coating.</li>
         </ul></div>
         <div class="col espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ventajas.png" alt="pool"></div>
     </div>
</div>
</section>

 <section id="ofrecemos" class="template-section">
 <div class="contenedor">
    <div class="ban">
   <h2>WHAT DO WE OFFER?</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
    <h3 class="blanco">Revision Service, free! </h3>
    <div class="grid">
        <div class="col3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/RECUBRIMIENTO.png" alt="pool"><p><b>COVERINGS</b></p><p><?php echo do_shortcode('	[popup_anything id="1642"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/EQUIPOS.png" alt="pool"><p><b>EQUIPMENT</b></p><p><?php echo do_shortcode('[popup_anything id="1647"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/automatización.png" alt="pool"><p><b>AUTOMATION</b></p><p><?php echo do_shortcode('[popup_anything id="1649"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/capacitacion.png" alt="pool"><p><b>TRAINING</b></p><p><?php echo do_shortcode('[popup_anything id="1651"]]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
    </div>
</div>
</section>
<section id="ofrecemos-slider" class="template-section">
<div class="contenedor">
<div class="cont">
    <?php echo do_shortcode('[rev_slider alias="poolfix"][/rev_slider]'); ?>
    </div>
    </div>
</section>

<?php 
    get_footer("eng");
?>
