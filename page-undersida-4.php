<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6">
					<h1><?php the_title(); ?></h1>

					<?php
					the_content();
					?>

				</div>
				<div class="col-xs-12 col-sm-4 col-md-6">
					<img src="http://localhost:8080/labb1-khiyar/wp-content/uploads/2023/04/photo.jpg" />
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>