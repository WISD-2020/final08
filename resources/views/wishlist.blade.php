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
  <body>

  <!--nav-->
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
                                  <li><a href="account.html">My Account</a></li>
                                  <li class="hidden-xs"><a href="{{ route('customer.buy.index') }}">Wishlist</a></li>
                                  <li class="hidden-xs"><a href="{{ route('customer.cart.index') }}">My Cart</a></li>
                                  <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
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
                              <a href="{{route('home.login.ed')}}">
                                  <span class="fa fa-shopping-cart"></span>
                                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                              </a>
                              <!-- img based logo -->
                              <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                          </div>
                          <!-- / logo  -->
                          <!-- cart box -->
{{--                          <div class="aa-cartbox">--}}
{{--                              <a class="aa-cart-link" href="#">--}}
{{--                                  <span class="fa fa-shopping-basket"></span>--}}
{{--                                  <span class="aa-cart-title">SHOPPING CART</span>--}}
{{--                                  <span class="aa-cart-notify">2</span>--}}
{{--                              </a>--}}
{{--                              <div class="aa-cartbox-summary">--}}
{{--                                  <ul>--}}
{{--                                      --}}{{--                                      <li>--}}
{{--                                      --}}{{--                                          <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>--}}
{{--                                      --}}{{--                                          <div class="aa-cartbox-info">--}}
{{--                                      --}}{{--                                              <h4><a href="#">Product Name</a></h4>--}}
{{--                                      --}}{{--                                              <p>1 x $250</p>--}}
{{--                                      --}}{{--                                          </div>--}}
{{--                                      --}}{{--                                          <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>--}}
{{--                                      --}}{{--                                      </li>--}}
{{--                                      --}}{{--                                      <li>--}}
{{--                                      --}}{{--                                          <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>--}}
{{--                                      --}}{{--                                          <div class="aa-cartbox-info">--}}
{{--                                      --}}{{--                                              <h4><a href="#">Product Name</a></h4>--}}
{{--                                      --}}{{--                                              <p>1 x $250</p>--}}
{{--                                      --}}{{--                                          </div>--}}
{{--                                      --}}{{--                                          <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>--}}
{{--                                      --}}{{--                                      </li>--}}
{{--                                      <li>--}}
{{--                      <span class="aa-cartbox-total-title">--}}
{{--                        Total--}}
{{--                      </span>--}}
{{--                                          <span class="aa-cartbox-total-price">--}}
{{--                        $500--}}
{{--                      </span>--}}
{{--                                      </li>--}}
{{--                                  </ul>--}}
{{--                                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>--}}
{{--                              </div>--}}
{{--                          </div>--}}
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
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Wishlist Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Wishlist</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table aa-wishlist-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($elements as $element)
                      <tr>
                        <td><a class="remove" href="#">{{ $element->id }}</a></td>
                        <td><a href="#"><img style="width: 200px;" src="storage/img/ringelements/{{ $element->figure }}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">{{ $element->name }}</a></td>
                        <td>${{ $element->price }}</td>
                        <td>In Stock</td>
                        <td><a href="{{ route('customer.buy.cart',$element->id) }}" class="aa-add-to-cart-btn">Add To Cart</a></td>
                      </tr>
                    @endforeach
                      </tbody>
                  </table>
                </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!--footer-->
  @include('layouts.partials.footer')

  <!-- Login Modal -->
  @include('layouts.partials.loginmodal')

  {{--script--}}
  @include('layouts.partials.script')

  </body>
</html>
