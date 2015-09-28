<aside class="col-md-4 col-md-offset-1 sidebar" role="complementary">

  <div class="widget widget-social">
    <ul>
      <li class="ico-socwid-fb"><a href=""></a></li>
      <li class="ico-socwid-tw"><a href=""></a></li>
      <li class="ico-socwid-gp"><a href=""></a></li>
      <li class="ico-socwid-em"><a href=""></a></li>
    </ul>
  </div>
  <!-- /.widget widget-social -->

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>
</aside><!-- /sidebar -->
