<?php

/**
 * Template Name: Gallary
*/

get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">

		<div class="row block03">
			<?php 
				$gallary = new WP_Query(array(
					'post_type'			=>	'zboom-gallary',
					'posts_per_page'	=>	-1	
				));

			while($gallary->have_posts())	:	$gallary->the_post(); ?>
				
			<div class="col-1-4">
				<div class="wrap-col">
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>
				</div>
			</div>

			<?php endwhile; ?>
			<h2 class="text-white"> <?php echo get_option( 'header_text' ); ?></h2>
		</div>

	</div>
</section>

<?php get_footer(); ?>