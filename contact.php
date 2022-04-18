<?php

/**
 * Template Name: Contact
*/

get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<?php 
					
						while (have_posts()) : 	the_post(); ?>

						<article>
							<?php the_post_thumbnail(); ?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <?php comments_popup_link('No Comment', '1 Comment', '% Comments', 'comment-style', 'Comments Off'); ?>]</div>

							<?php the_content(); ?> 

						</article>
						
					<?php
						endwhile;
					?>
					<!-- <article>
						<div class="comment">
							Your email address will not be published. Required fields are marked *
							<form>
								<div><input type="text" name="name" id="name"> Name *</div>
								<div><input type="email" name="email" id="email"> Email *</div>
								<div><input type="url" name="website" id="website"> Website</div>
								<div><textarea rows="10" name="comment" id="comment"></textarea></div>
								<div><input type="submit" name="submit" value="Submit"></div>
							</form>
						</div>
					</article> -->
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<?php dynamic_sidebar( 'contact-right-sidebar' ); ?>
					<!-- <div class="box">
						<div class="heading"><h2>Find Us</h2></div>
						<div class="content">
							<img src="images/map.png"/>
							<p>Petru Zadnipru 15/2 Chisinau 2044, Republic of Moldova</p>
							<p>Freephone : +1 800 445 7880</p>
							<p>Telephone : +1 800 995 6880</p>
							<p>Fax : +1 800 465 1990</p>
							<p>Email : zerotheme@demolink.com</p>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>