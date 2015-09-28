<?php get_header(); ?>
<div class="row row-main-content">
  <div class="container">
  <h1 class="cat-title inner-title col-md-12"><span><?php the_category(', '); ?></span></h1>
  <article class="col-md-7 content-body">

    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </article>
  <?php get_sidebar(); ?>
  </div><!-- /.container -->
</div><!-- /.row row-main-content -->
<?php get_footer(); ?>
