
<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">

			<?php dynamic_sidebar( 'footer-widget' ); ?>

		</div>
		
		<div class="row copyright">
			<p><?php echo get_option('copyright_text'); ?></p>
		</div>
	</div>
</footer>

	<script src="<?php echo esc_url( get_template_directory_uri() ) ?> /assets/js/jquery.min.js"></script>



	<?php wp_footer(); ?>
</body>
</html>