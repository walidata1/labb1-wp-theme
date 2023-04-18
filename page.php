<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <h1><?php the_title(); ?></h1>

        <?php
        the_content();
        ?>

      </div>
    </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>