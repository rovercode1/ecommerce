<?php do_action( 'storefront_before_footer' ); ?>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="col-full">
    <?php
    wp_nav_menu(array(
      'theme_location'=>'main_footer',
    ));
     ?>
    <?php
    /**
     * Functions hooked in to storefront_footer action
     *
     * @hooked storefront_footer_widgets - 10
     * @hooked storefront_credit         - 20
     */
    do_action( 'storefront_footer' ); ?>

  </div><!-- .col-full -->
</footer><!-- #colophon -->
</div> <!--Loading page icon  -->
<?php do_action( 'storefront_after_footer' ); ?>
<!-- <script type="text/javascript" src=""></script> -->
<?php wp_footer() ?>
  </body>
</html>
