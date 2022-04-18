<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="error-contents">
						<h1>Nothing Found 404 Error....</h1>
						<h4>May be looking for somthing else</h4>
						<p>Go Back To <a href="<?php esc_url(bloginfo( 'home' )); ?>">Home</a></p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>