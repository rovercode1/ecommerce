jQuery(function($){
  // Breadcrumbs container
  $('.woocommerce-breadcrumb').addClass('container');

  //Shop
  if($('body').hasClass('archive')){
    $('body').addClass('shop');
    // Add 'Coming soon' text to btn
    $('.product_cat-coming-soon').each(function(item){
      let btn = $(this).children('a.button');
      console.log(btn.text('Coming Soon'))
    })

    $('.products').addClass('row');
    $('.products').removeClass('columns-3');
    $('.products').children().addClass('col-lg-4 col-sm-6');
  }
    // My Account
  if($('body').hasClass('woocommerce-account')){
    $('.entry-content').addClass('edit-entry');
    $('u-columns').addClass('row');
    $('u-columns').children().addClass('col-lg-6');
  }
    // Cart
  if($('body').hasClass('woocommerce-cart')){
      console.log('Cart');
    $('.site-main').addClass('container');
  }
  // Checkout
  if($('body').hasClass('woocommerce-checkout')){
  $('#main').addClass('container');
  }
  // Single Product
  if($('body').hasClass('single-product')){
    console.log('Single Product');
    // Coming soon product
    function shopCategory(){
      $('.posted_in').children().each(function(category){
        if($(this).text()==='Coming soon'){
          $('.out-of-stock').addClass('coming-soon');
          $('.out-of-stock').text('Coming Soon')
        }
      })
    }
    shopCategory();
  }

  // Contact
  if($('body').hasClass('page-id-479')){
    $('#post-479').addClass('container');
  }

  if($('body').hasClass('page-template-default')){
    $('.site-main').addClass('container');
  }

})
