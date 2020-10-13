<?php
    /* Template Name: Staff */ 
    get_header();

?>

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
  <section id="staff2" class="template-section">
<div class="contenedor">
   <div class="ban">
   <h2>STAFF</h2>
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onda.png" alt="pool">
   </div>
    <div class="grid">
        <div class="col2"><a href="https://webmail.hidroequipos.com/cpsess0498961472/horde/imp/dynamic.php?page=mailbox#mbox:SU5CT1g"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/web.png" alt="pool"><h3>WEB MAIL</h3></a></div>
        <div class="col2"><a href="http://avl.telenube.net/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gps.png" alt="pool"><h3>GPS</h3></a></div>
        <div class="col2"><a href="https://crm.hidroequipos.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/crm.png" alt="pool"><h3>CRM</h3></a></div>
    </div>
    <?php 
    get_footer();
}
    ?>
</div>
</section>
   