<?php get_header(); ?>

<div id="fh5co-blog">
	<div class="container">

		<?php

		$args = array(
			'post_type' => 'post',
			'paged' => get_query_var('paged') //Para activar paginacion en esta pagina
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) : ?>

			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2><?php wp_title(''); ?></h2>
				</div>
			</div>

			<div class="row">

				<?php while ($query->have_posts()) : $query->the_post(); ?>

					<div class="col-md-4">
						<div class="fh5co-blog animate-box">

							<?php if (has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>" class="blog-bg">
									<?php the_post_thumbnail('blog-img'); ?>
								</a>
							<?php else : ?>
								<a href="<?php the_permalink(); ?>" class="blog-bg" style="background-image: url(<?php echo RUTATEMA; ?>/images/blog-1.jpg);">
								</a>
							<?php endif; ?>

							<div class="blog-text">
								<span class="posted_on"><?php the_time(get_option('date_format')); ?></span>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php the_excerpt(); ?></p>
								<ul class="stuff">
									<li><i class="icon-heart2"></i>249</li>
									<li><i class="icon-eye2"></i>1,308</li>
									<li><a href="<?php the_permalink(); ?>"><?php _e('Leer Más', 'air'); ?><i class="icon-arrow-right22"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

				<?php endwhile; ?>

				<!-- Navegacion -->
					<div>
						<div class="col-md-5 nav-previous alignleft">
							<?php previous_posts_link('Anterior'); ?>
						</div>

						<div class="col-md-5 nav-next alignright"><?php next_posts_link('Siguiente', $query->max_num_pages); ?>
						</div>
					</div>
				

			<?php
		else :
			//Contenido no encontrado
			get_template_part('template-parts/content', 'nopost');

		endif; ?>

			</div>
	</div>
</div>

<div id="fh5co-started">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Hire Us!</h2>
				<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				<p><a href="#" class="btn btn-default btn-lg">Contact Us</a></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>