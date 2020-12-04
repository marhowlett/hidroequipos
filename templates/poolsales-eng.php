<?php
    /* Template Name: PoolSalesENG */ 
    get_header("eng");
?>
 <section id="poolsales" class="template-section">
     <div class="lap">
     <div class="grid">
         <div class="colespe1 fondo"></div>  
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsales2.png" alt="pool"><p>We sell <b>the products and accessories</b> you need to improve the condition and operation of your
pool. This area of the company is dedicated to those users who decide to do things for
themselves.</p></div>
     </div>
    </div>
    <div class="cel">
     <div class="grid">
         
         <div class="colespe2 espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poolsales2.png" alt="pool"><p>We sell <b>the products and accessories</b> you need to improve the condition and operation of your
pool. This area of the company is dedicated to those users who decide to do things for
themselves.</p></div>
         <div class="colespe1 fondo"></div>
     </div>
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
   <h2>BENEFITS</h2>
   
 
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
    
    </div>
     <div class="grid">
         <div class="col fondo"><ul>
<li>
       You can make adjustments at your own pace, with our advice. </li>
 
<li>We put at your disposal the best equipment, materials, products and accessories.</li>
 
<li>Immediate advice at no cost via telephone, mail, whats and even site visits by specialized
technicians.
</li>
 
<li>We have a great team of technicians to achieve a good installation.</li>
 
<li>We supply the entire Mexican Republic from one piece to a complete pool. With immediate
delivery and guaranteed shipping in 2 to 3 days.</li>
        
         </ul></div>
         <div class="col espe"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ventajas5.png" alt="pool"></div>
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
        <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CONSTRUCCIÓN2.png" alt="pool"><p><b>RESIDENTIAL</b></p><p><?php echo do_shortcode('[popup_anything id="1680"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CONSTRUCCIÓN2.png" alt="pool"><p><b>HOTELS OR LARGE USERS</b></p><p><?php echo do_shortcode('	[popup_anything id="1681"]'); ?><img class="flecha" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flecha.png" alt="pool"></p></div>
        
    </div>
</div>
</section>
<section id="ofrecemos-slider" class="template-section">
<div class="contenedor">
<div class="cont">
    <?php echo do_shortcode('[rev_slider alias="poolsales"][/rev_slider]'); ?>
    </div>
    </div>
</section>



<?php 
    get_footer("eng");
?>
