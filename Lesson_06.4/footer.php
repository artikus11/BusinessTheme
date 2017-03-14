	<!--</div> #content -->

	<footer>
		<section class="widget well3">
			<div class="container">
				<div class="row">
					<div class="grid_4">
						<?php 
						if ( is_active_sidebar( 'footer-left' ) ) :
						dynamic_sidebar( 'footer-left' );
						endif;
						 ?>
					</div>
					<div class="grid_4">
						<?php 
						if ( is_active_sidebar( 'footer-center' ) ) :
						dynamic_sidebar( 'footer-center' );
						endif;
						 ?>
					</div>
					<div class="grid_4">
						<?php 
						if ( is_active_sidebar( 'footer-right' ) ) :
						dynamic_sidebar( 'footer-right' );
						endif;
						 ?>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="copyright">
					<?php if (ot_get_option('copiright_footer')) {?>
					<?php echo ot_get_option('copiright_footer'); ?>
					<?php } else {?>
					Все защищено
					<?php } ?> © <span id="copyright-year"></span>.
				</div>
			</div>
		</section>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
