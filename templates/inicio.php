<?php
    /* Template Name: Inicio */ 
    get_header();
?>

<section id="slider" class="template-section">
<div class="contenedor">
  <div class="ban2">
   <h1>Diseñamos y construimos <span>la alberca tus SUEÑOS</span></h1>
   <div class="center">
   <div class="fondobtn">
    <a href="#" class="btn">ME INTERESA</a>
    </div>
    </div>
    </div>
</div>
</section>
<section id="servicios" class="template-section">
<div class="contenedor">
  <div class="ban">
   <h2>SERVICIOS</h2>
   <p>Le brindamos la mejor calidad en:</p>
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
   </div>
   <div class="grid">
       <div class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pooldesign.png" alt="pool"><p>DISEÑO</p></div>
       <div class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolstructions.png" alt="pool"><p>CONSTRUCCIÓN</p></div>
       <div class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsolutions.png" alt="pool"><p>MANTENIMIENTO</p></div>
   </div>
   <div class="grid especial">
       <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolfix.png" alt="pool"><p>REPARACIÓN</p></div>
       <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsales.png" alt="pool"><p>QUÍMICOS Y EQUIPOS</p></div>

   </div>
   <h3>para que usted disfrute al máximo<span>
su alberca o espacio acuático</span></h3>
 
 <div class="fondobtn">
    <a href="#" class="btn">SABER MÁS</a>
    </div>
  
</div>
</section>

<section id="galeria" class="template-section">
<div class="contenedor">
  <div class="ban">
   <h2 class="blanco">Galería</h2>
   <p class="blanco">Nuestra pasión es lograr un diseño que 
<span>se adapte a sus deseos y necesidades. </span></p>
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
    <?php echo do_shortcode( '[grid_plus name="galeria"]' ); ?>
    <div class="fondobtn blanco">
    <a href="#" class="btn blanco">SABER MÁS</a>
    </div>
    
</div>
</section>
    
    <section id="elegir" class="template-section">
<div class="contenedor">
  <div class="ban">
   <h2 >¿POR QUÉ ELEGIRNOS?</h2>
  
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
   
   <div class="grid">
       <div class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Experiencia.png" alt="pool"><p>40 años de experiencia
en 3 generaciones</p></div>
       <div class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/diseño.png" alt="pool"><p>Diseño totalmente
personalizado para su
alberca o espacio acuático</p></div>
       <div class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Operadores.png" alt="pool"><p>Operadores con
certificación CPO y
personal muy calificado</p></div>
   </div>
    
</div>

</section>
    <section id="blog" class="template-section">
    
    
     <div class="contenedor">
      <div class="ban">
   <h2 >BLOG</h2>
  
 <p>Esto podria interesarte </p>
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
      
        <div class="centro">
        
        
        <?php echo do_shortcode('[vc_row][vc_column][woodmart_blog items_per_page="3" blog_design="masonry" img_size="200x100" parts_title="1" parts_meta="1" parts_text="1" parts_btn="1" lazy_loading="no" blog_columns="3"][/vc_column][/vc_row]');?>

         
     </div>
      
        </div>
    </section>
    
  <section id="contacto" class="template-section">
 
 <div class="contenedor">
   

  <div class="grid">
  <div class="col"></div>
  <div class="col fondo">
                <div class="grid">
                    <div class="colespe1"> &nbsp;</div>
                    <div class="colespe2"> <img  class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png" alt="Logo">
                 <h2 class="cielo">CONTÁCTENOS</h2>
                  
                    
                   <p> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clock.png" alt="Logo">Lunes a Viernes 8:30 am - 6:00 pm
<span>Sábado 8:30 am - 2:00 pm</span></p>
                   <p> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" alt="Logo"> 624 164 4122  </p>
                   <p> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" alt="Logo"> <a class="evento" href="mailto:client_services@hidroequipos.com">client_services@hidroequipos.com</a></p>
                   <p> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location.png" alt="Logo"> 5 de Mayo S/N Col. Sta Rosa, 23428<span>
San José del Cabo, B.C.S</span></p></div>
                </div>
                
                 
                 <?php echo do_shortcode( '[caldera_form id="CF5f10927d4ec48"]' ); ?>
                 <p class="imagenes redes">Síguenos en <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png" alt="Logo"></a><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.png" alt="Logo"></a><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png" alt="Logo"></a><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/YT.png" alt="Logo"></a></p>
                </div>

 </div>        
                
             </div>
</section>

<?php 
    get_footer();
?>
