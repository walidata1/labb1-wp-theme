<article>
  <?php the_post_thumbnail(); ?>
  <h2 class="title">
    <a href="http://localhost:8080/labb1-khiyar/blogg/"><?php the_title(); ?></a>
  </h2>
  <ul class="meta">
    <li>
      <i class="fa fa-calendar"></i> <?php the_date(); ?>
    </li>
    <li>
      <i class="fa fa-user"></i> <a href="http://localhost:8080/labb1-khiyar/blogg/"><?php the_author(); ?></a>
    </li>
    <li>
      <i class="fa fa-tag"></i> <?php the_tags('<a href="http://localhost:8080/labb1-khiyar/category/kategori-1/">', ', ', '</a>'); ?>
    </li>
  </ul>
  <p><?php the_content(); ?></p>
</article>