<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

      {{--link--}}
      @include('layouts.partials.link')

  </head>
  <!-- !Important notice -->
  <!-- Only for product page body tag have to added .productPage class -->
  <body class="productPage">

  <!--nav-->
{{--  @include('layouts.partials.navigation')--}}
  <header id="aa-header">
      <!-- start header top  -->
      <div class="aa-header-top">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="aa-header-top-area">
                          <!-- start header top left -->
                          <div class="aa-header-top-left">
                              <!-- start language -->
                              <div class="aa-language">
                                  <div class="dropdown">
                                      <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                                          <span class="caret"></span>
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                          <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                                          <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                                      </ul>
                                  </div>
                              </div>
                              <!-- / language -->

                              <!-- start currency -->
                              <div class="aa-currency">
                                  <div class="dropdown">
                                      <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          <i class="fa fa-usd"></i>USD
                                          <span class="caret"></span>
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                          <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                          <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                                      </ul>
                                  </div>
                              </div>
                              <!-- / currency -->
                              <!-- start cellphone -->
                              <div class="cellphone hidden-xs">
                                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                              </div>
                              <!-- / cellphone -->
                          </div>
                          <!-- / header top left -->
                          <div class="aa-header-top-right">
                              <ul class="aa-head-top-nav-right">
{{--                                  <li><a href="account.html">My Account</a></li>--}}
{{--                                  <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>--}}
{{--                                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>--}}
{{--                                  <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>--}}
                                  {{--                                <li><a href="" data-toggle="modal" data-target="#login-modal">登入</a></li>--}}
{{--                                  <li class="hidden-xs"><a href="{{route('login')}}">登入</a></li>--}}
                                  <form method="POST" action="{{ route('logout') }}">
                                      @csrf

                                      <x-jet-dropdown-link href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                          {{ __('Logout') }}
                                      </x-jet-dropdown-link>
                                  </form>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- / header top  -->

      <!-- start header bottom  -->
      <div class="aa-header-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="aa-header-bottom-area">
                          <!-- logo  -->
                          <div class="aa-logo">
                              <!-- Text based logo -->
                              <a href="{{route('home')}}">
                                  <span class="fa fa-shopping-cart"></span>
                                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                              </a>
                              <!-- img based logo -->
                              <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                          </div>
                          <!-- / logo  -->
                          <!-- cart box -->
                          <div class="aa-cartbox">
                              <a class="aa-cart-link" href="#">
                                  <span class="fa fa-shopping-basket"></span>
                                  <span class="aa-cart-title">SHOPPING CART</span>
{{--                                  <span class="aa-cart-notify">2</span>--}}
                              </a>
                              <div class="aa-cartbox-summary">
                                  <ul>
                                      {{--                                      <li>--}}
                                      {{--                                          <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>--}}
                                      {{--                                          <div class="aa-cartbox-info">--}}
                                      {{--                                              <h4><a href="#">Product Name</a></h4>--}}
                                      {{--                                              <p>1 x $250</p>--}}
                                      {{--                                          </div>--}}
                                      {{--                                          <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>--}}
                                      {{--                                      </li>--}}
                                      {{--                                      <li>--}}
                                      {{--                                          <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>--}}
                                      {{--                                          <div class="aa-cartbox-info">--}}
                                      {{--                                              <h4><a href="#">Product Name</a></h4>--}}
                                      {{--                                              <p>1 x $250</p>--}}
                                      {{--                                          </div>--}}
                                      {{--                                          <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>--}}
                                      {{--                                      </li>--}}
                                      <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                                          <span class="aa-cartbox-total-price">
{{--                        $500--}}
                      </span>
                                      </li>
                                  </ul>
                                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
                              </div>
                          </div>
                          <!-- / cart box -->
                          <!-- search box -->
                      {{--                          <div class="aa-search-box">--}}
                      {{--                              <form action="">--}}
                      {{--                                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">--}}
                      {{--                                  <button type="submit"><span class="fa fa-search"></span></button>--}}
                      {{--                              </form>--}}
                      {{--                          </div>--}}
                      <!-- / search box -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- / header bottom  -->
  </header>
  <!-- catg header banner section -->
{{--  <section id="aa-catg-head-banner">--}}
{{--   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">--}}
{{--   <div class="aa-catg-head-banner-area">--}}
{{--     <div class="container">--}}
{{--      <div class="aa-catg-head-banner-content">--}}
{{--        <h2>Fashion</h2>--}}
{{--        <ol class="breadcrumb">--}}
{{--          <li><a href="index.html">Home</a></li>--}}
{{--          <li class="active">Women</li>--}}
{{--        </ol>--}}
{{--      </div>--}}
{{--     </div>--}}
{{--   </div>--}}
{{--  </section>--}}
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
{{--            <div class="aa-product-catg-head">--}}
{{--              <div class="aa-product-catg-head-left">--}}
{{--                <form action="" class="aa-sort-form">--}}
{{--                  <label for="">Sort by</label>--}}
{{--                  <select name="">--}}
{{--                    <option value="1" selected="Default">Default</option>--}}
{{--                    <option value="2">Name</option>--}}
{{--                    <option value="3">Price</option>--}}
{{--                    <option value="4">Date</option>--}}
{{--                  </select>--}}
{{--                </form>--}}
{{--                <form action="" class="aa-show-form">--}}
{{--                  <label for="">Show</label>--}}
{{--                  <select name="">--}}
{{--                    <option value="1" selected="12">12</option>--}}
{{--                    <option value="2">24</option>--}}
{{--                    <option value="3">36</option>--}}
{{--                  </select>--}}
{{--                </form>--}}
{{--              </div>--}}
{{--              <div class="aa-product-catg-head-right">--}}
{{--                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>--}}
{{--                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>--}}
{{--              </div>--}}
{{--            </div>--}}
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                @foreach($elements as $element)
                <li>
                  <figure>
                    <a class="aa-product-img" href=""><img src="storage/img/ringelements/{{ $element->figure }}" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn" href=""><span class="fa fa-shopping-cart"></span>Select!</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#">{{ $element->name }}</a></h4>
                      <span class="aa-product-price">{{ $element->price }}$</span>

                      <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                    </figcaption>
                  </figure>
                  <div class="aa-product-hvr-content">
{{--                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>--}}
{{--                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>--}}
{{--                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>--}}
                  </div>
                </li>
                @endforeach
            </div>
{{--            <div class="aa-product-catg-pagination">--}}
{{--              <nav>--}}
{{--                <ul class="pagination">--}}
{{--                  <li>--}}
{{--                    <a href="#" aria-label="Previous">--}}
{{--                      <span aria-hidden="true">&laquo;</span>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                  <li><a href="#">1</a></li>--}}
{{--                  <li><a href="#">2</a></li>--}}
{{--                  <li><a href="#">3</a></li>--}}
{{--                  <li><a href="#">4</a></li>--}}
{{--                  <li><a href="#">5</a></li>--}}
{{--                  <li>--}}
{{--                    <a href="#" aria-label="Next">--}}
{{--                      <span aria-hidden="true">&raquo;</span>--}}
{{--                    </a>--}}
{{--                  </li>--}}
{{--                </ul>--}}
{{--              </nav>--}}
{{--            </div>--}}
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
                <li><a href="">戒寬</a></li>
{{--                <li><a href="">Women</a></li>--}}
{{--                <li><a href="">Kids</a></li>--}}
{{--                <li><a href="">Electornics</a></li>--}}
{{--                <li><a href="">Sports</a></li>--}}
              </ul>
            </div>
            <!-- single sidebar -->
{{--            <div class="aa-sidebar-widget">--}}
{{--              <h3>Tags</h3>--}}
{{--              <div class="tag-cloud">--}}
{{--                <a href="#">Fashion</a>--}}
{{--                <a href="#">Ecommerce</a>--}}
{{--                <a href="#">Shop</a>--}}
{{--                <a href="#">Hand Bag</a>--}}
{{--                <a href="#">Laptop</a>--}}
{{--                <a href="#">Head Phone</a>--}}
{{--                <a href="#">Pen Drive</a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <!-- single sidebar -->--}}
{{--            <div class="aa-sidebar-widget">--}}
{{--              <h3>Shop By Price</h3>--}}
{{--              <!-- price range -->--}}
{{--              <div class="aa-sidebar-price-range">--}}
{{--               <form action="">--}}
{{--                  <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">--}}
{{--                  </div>--}}
{{--                  <span id="skip-value-lower" class="example-val">30.00</span>--}}
{{--                 <span id="skip-value-upper" class="example-val">100.00</span>--}}
{{--                 <button class="aa-filter-btn" type="submit">Filter</button>--}}
{{--               </form>--}}
{{--              </div>--}}

{{--            </div>--}}
{{--            <!-- single sidebar -->--}}
{{--            <div class="aa-sidebar-widget">--}}
{{--              <h3>Shop By Color</h3>--}}
{{--              <div class="aa-color-tag">--}}
{{--                <a class="aa-color-green" href="#"></a>--}}
{{--                <a class="aa-color-yellow" href="#"></a>--}}
{{--                <a class="aa-color-pink" href="#"></a>--}}
{{--                <a class="aa-color-purple" href="#"></a>--}}
{{--                <a class="aa-color-blue" href="#"></a>--}}
{{--                <a class="aa-color-orange" href="#"></a>--}}
{{--                <a class="aa-color-gray" href="#"></a>--}}
{{--                <a class="aa-color-black" href="#"></a>--}}
{{--                <a class="aa-color-white" href="#"></a>--}}
{{--                <a class="aa-color-cyan" href="#"></a>--}}
{{--                <a class="aa-color-olive" href="#"></a>--}}
{{--                <a class="aa-color-orchid" href="#"></a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <!-- single sidebar -->--}}
{{--            <div class="aa-sidebar-widget">--}}
{{--              <h3>Recently Views</h3>--}}
{{--              <div class="aa-recently-views">--}}
{{--                <ul>--}}
{{--                  <li>--}}
{{--                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>--}}
{{--                    <div class="aa-cartbox-info">--}}
{{--                      <h4><a href="#">Product Name</a></h4>--}}
{{--                      <p>1 x $250</p>--}}
{{--                    </div>--}}
{{--                  </li>--}}
{{--                  <li>--}}
{{--                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>--}}
{{--                    <div class="aa-cartbox-info">--}}
{{--                      <h4><a href="#">Product Name</a></h4>--}}
{{--                      <p>1 x $250</p>--}}
{{--                    </div>--}}
{{--                  </li>--}}
{{--                   <li>--}}
{{--                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>--}}
{{--                    <div class="aa-cartbox-info">--}}
{{--                      <h4><a href="#">Product Name</a></h4>--}}
{{--                      <p>1 x $250</p>--}}
{{--                    </div>--}}
{{--                  </li>--}}
{{--                </ul>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <!-- single sidebar -->--}}
{{--            <div class="aa-sidebar-widget">--}}
{{--              <h3>Top Rated Products</h3>--}}
{{--              <div class="aa-recently-views">--}}
{{--                <ul>--}}
{{--                  <li>--}}
{{--                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>--}}
{{--                    <div class="aa-cartbox-info">--}}
{{--                      <h4><a href="#">Product Name</a></h4>--}}
{{--                      <p>1 x $250</p>--}}
{{--                    </div>--}}
{{--                  </li>--}}
{{--                  <li>--}}
{{--                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>--}}
{{--                    <div class="aa-cartbox-info">--}}
{{--                      <h4><a href="#">Product Name</a></h4>--}}
{{--                      <p>1 x $250</p>--}}
{{--                    </div>--}}
{{--                  </li>--}}
{{--                   <li>--}}
{{--                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>--}}
{{--                    <div class="aa-cartbox-info">--}}
{{--                      <h4><a href="#">Product Name</a></h4>--}}
{{--                      <p>1 x $250</p>--}}
{{--                    </div>--}}
{{--                  </li>--}}
{{--                </ul>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </aside>--}}
{{--        </div>--}}

      </div>
    </div>
  </section>
  <!-- / product category -->


  <!-- Subscribe section -->
{{--  <section id="aa-subscribe">--}}
{{--    <div class="container">--}}
{{--      <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--          <div class="aa-subscribe-area">--}}
{{--            <h3>Subscribe our newsletter </h3>--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>--}}
{{--            <form action="" class="aa-subscribe-form">--}}
{{--              <input type="email" name="" id="" placeholder="Enter your Email">--}}
{{--              <input type="submit" value="Subscribe">--}}
{{--            </form>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </section>--}}
  <!-- / Subscribe section -->

  <!--footer-->
  @include('layouts.partials.footer')

  <!-- Login Modal -->
  @include('layouts.partials.loginmodal')

  {{--script--}}
  @include('layouts.partials.script')

  </body>
</html>
