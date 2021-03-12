<?php
    /* Template Name: Staff */ 
    get_header();

?>

<section id="staff2" class="template-section">
<div class="contenedor">
	
<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
					<?php		
                     if ( post_password_required() ) {
						 the_content(); }?>
						
					</div>

					<?php woodmart_entry_meta(); ?>

				</article><!-- #post -->

				

		<?php endwhile; ?>


   
   
<?php		
if ( ! post_password_required() ) {
  ?>

   <div class="ban">
            <h2>STAFF</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
        </div>
			<div class="grid">

            <div class="col2"><a href="https://inventario.hidroequipos.com/todos"><img src="https://www.hidroequipos.com/wp-content/uploads/Inventarios-con-Sombra.png" alt="Inventarios">
                    <h3>Inventarios</h3>
                </a></div>
		
            <div class="col2"><a href="https://inventario.hidroequipos.com/ventas"><img src="https://www.hidroequipos.com/wp-content/uploads/Ventas-con-sombra.png" alt="Ventas">
                    <h3>Gerente de Ventas</h3>			
                </a></div>
		
            <div class="col2"><a href="https://airtable.com/login"><img src="https://www.hidroequipos.com/wp-content/uploads/Admin-con-Sombra.png" alt="Admin">
                    <h3>Admin</h3>
				
                </a></div>  
			 
        </div>
        <div class="grid">
            <div class="col"><a href="https://webmail.hidroequipos.com/cpsess0498961472/horde/imp/dynamic.php?page=mailbox#mbox:SU5CT1g"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/web.png" alt="pool"></a>
                    <h3>WEB MAIL</h3>
	
            </div>
		 <div class="col"><a href="http://avl.telenube.net/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gps.png" alt="Pool">
                    <h3>GPS</h3>			
                </a></div>
    </div>
    <?php     
}
    ?>
</div>
</section>

<?php
get_footer();
?>
   