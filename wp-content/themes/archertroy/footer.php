<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php wp_footer(); ?>
  <!-- Footer OUTSIDE container -->
  <?php if (is_blog()) { ?>
	<footer id="colophon" role="contentinfo" class="footer-border-top">
    <?php } else { ?>
	<footer id="colophon" role="contentinfo">      
    <?php } ?>
		<div class="site-info">
      <div class="solid">
        <div class='social-links'>
          <a href='https://www.facebook.com/archertroy' class='icon-facebook' target='_blank'></a>
          <a href='https://twitter.com/ArcherTroy' class='icon-twitter' target='_blank'></a>
          <a href='http://instagram.com/archertroy' class='icon-instagram' target='_blank'></a>
          <a href='http://www.pinterest.com/archertroyp' class='icon-pinterest-1' target='_blank'></a>
          <a href='https://www.youtube.com/ConquistasArcher' class='icon-youtube-play' target='_blank'></a>
          <a href='https://plus.google.com/105080074709822071277/posts' class='icon-google-plus' target='_blank'></a>
        </div>
      </div>
      <img class="triangule" src="/wp-content/themes/archertroy/img/footer-triangule.png" />
      <div class='copyright'>
        <span class='reg'>&reg;</span> ARCHER TROY S.A. DE C.V. LOS USUARIOS SE OBLIGAN A CUMPLIR CON LOS TÉRMINOS Y CONDICIONES DEL WEB. MARCA REGISTRADA. DECLARACIÓN DE PRIVACIDAD DE LA INFORMACIÓN DE MÉXICO (55) 55 39 22 72
      </div>
    </div><!-- .site-info --> 
	</footer><!-- #colophon -->
  <!-- Footer OUTSIDE container -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/archertroy.js"></script>  
  <script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/masonry-horizontal.js"></script>   
  <script src="<?php echo get_template_directory_uri(); ?>/js/fit-columns.js"></script>    
  <script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>
<?php
if(isset($_GET["c"])){
?>
<script type="text/javascript">
$(".formulario").html("<h1>¡Gracias!, Correo confirmado.</h1>");
</script>
<?php
}
?>

</body>
</body>
</html>