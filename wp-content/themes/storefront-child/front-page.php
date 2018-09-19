<?php include 'header.php' ?>
<section id='header'style= 'background-image:url( <?php echo get_theme_file_uri("assets/img/beach.png")?> )'>
  <div class="overlay">
    <h2>Welcome to</h2>
    <h2 id='brand'><?php bloginfo('name') ?></h2>
  </div>
</section>
<section>
  <div class="icon-box container">
    <div class="icon">
      <i class="fas fa-truck"></i>
      <p>Free Shipping For Orders Over $35</p>
    </div>
    <div class="icon">
      <i class="fas fa-check"></i>
      <p>High Quality Products</p>
    </div>
    <div class="icon">
      <i class="fas fa-lock"></i>
      <p>HTTPS Secure</p>
    </div>
  </div>
</section>
<section id="featured">
  <div class='container' id="product-box">
    <h1 class="header text-center">Featured Products</h1>
    <!-- <p>Check out our amazing collection of Featured Products!</p> -->
    <!-- <hr class="header-hr"> -->
    <div class="container">
      <ul class="products">
        <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 3,
            'product_cat' => 'Featured',
            'orderby' => 'rand'
          );
          // Finds the product with those arguments
          $loop = new WP_Query( $args );
          ?>
        <div class="row">
        <?php
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <li class="product">
                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
                <h3><?php the_title(); ?></h3>
                <span class="price"><?php echo $product->get_price_html(); ?></span>
                </a>
                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
              </li>
            </div>
          <?php endwhile; ?>
          <div class="col-lg-12" id="featured-btn">
            <a class="btn" style=''href="<?php echo site_url('/product-category/all/featured')?>">View More</a>
          </div>
      </div>
      <?php wp_reset_query(); ?>

      </ul><!--/.products-->
    </div>
  </div>
</section>
<section id='contact-section'>
  <div class="container">
    <div class="contact-box">
      <h2>Have any questions?</h2>
      <a class='btn' href="#" id='contact-btn'>
        <h1 >Contact us!</h1>
      </a>
    </div>
  </div>
</section>
<?php include 'footer.php' ?>
