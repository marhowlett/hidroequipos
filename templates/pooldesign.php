<?php
    /* Template Name: Pooldesign */ 
    get_header();
?>
 <section id="pooldesign" class="template-section">
 
     <div class="grid">
         <div class="colespe1 fondo"></div>
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pooldesign2.png" alt="pool"><p>El mejor servicio de diseño de 
 <b>albercas o espacios acuáticos. </b>
Esta es el área más importante de la empresa. Nosotros estudiamos sus necesidades de cada cliente, nos tomamos el tiempo para crear el mejor y más adecuado diseño para su alberca.   </p></div>
     </div>

</section>
<section id="galeria2" class="template-section">
 
     <div class="contenedor">
         
    <?php echo do_shortcode( '[grid_plus name="pooldesign"]' ); ?>
   
   <div class="fondobtn">
    <a href="#" class="btn">SABER MÁS</a>
    </div>
     </div>
     
     
</section>
<div class="fondo-galeria">
    <div class="fondo"></div>
</div>
 <section id="instalaciones" class="template-section">
 <div class="contenedor">
    <p>
     El <b>diseño arquitectónico y de instalaciones</b> debe tomar en cuenta tanto los aspectos funcionales como los aspectos estéticos y simbólicos. El proyecto se representa por medio de signos gráficos en planos rigurosamente estructurados.</p>
 <p>
<b>Hidroequipos</b> también busca que los diseños de albercas deben adecuarse a las condiciones del terreno, a las necesidades de los clientes y a las condiciones del entorno. </p>
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

        
        <li>Experiencia en el área de diseño de albercas. No iniciamos sin antes no tener todos los planos perfectamente desarrollados.</li>
 
<li>Podemos diseñar el proyecto, para que otros constructores lo hagan o concursen, o empezar con eso y seguir con la obra completa.</li>
 
<li>La metodología incluida en la especialización abarca desde el estudio de un problema en un escenario real, hasta el desarrollo de un proyecto / solución que surge del diagnóstico y análisis de todas las posibles opciones a atender la necesidad original.</li>
 
<li>Además, contamos con la tecnología más actual y conocemos los equipos, accesorios y maquinaria más adecuada para concretar su proyecto. </li> 
        
         </ul></div>
         <div class="col espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ventajas4.png" alt="pool"></div>
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
        <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/diseño2.png" alt="pool"><p><b>DISEÑO</b></p><p><?php echo do_shortcode('[popup_anything id="89"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        
    </div>
</div>
</section>
<section id="ofrecemos-slider" class="template-section">
<div class="contenedor">
<div class="cont">
    <?php echo do_shortcode('[slide-anything id="84"]'); ?>
    </div>
    </div>
</section>



<?php 
    get_footer();
?>
