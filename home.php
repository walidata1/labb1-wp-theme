<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Blogg</h1>
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('article');
            }
          }
          ?>
            <?php the_posts_pagination(); ?>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <ul>
              <li>
                <?php get_search_form(); ?>
                <?php dynamic_sidebar('testwidget'); ?>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>