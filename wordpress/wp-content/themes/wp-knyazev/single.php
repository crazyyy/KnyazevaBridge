<?php get_header(); ?>
<div class="row row-main-content">
  <div class="container">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-7 content-body'); ?>>

      <h1 class="single-title inner-title"><?php the_title(); ?></h1>

      <?php the_content(); ?>

      <?php edit_post_link(); ?>

      <?php comments_template(); ?>

    </article>
  <?php endwhile; else: ?>
    <article class="col-md-7 content-body">

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>

  <?php get_sidebar(); ?>
  </div><!-- /.container -->
</div><!-- /.row row-main-content -->
<?php get_footer(); ?>
