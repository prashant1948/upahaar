<header class="header">
       
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                    <p class="welcome-msg">Welcome to Upahaar Solutions</p>                
                    </div>
                    <div class="header-right">

                        @guest
                            <a class="login-link" href="loginn" data-toggle="modal" data-toggle="#login-modal"><i
                                    class="d-icon-user"></i>Sign in</a>
                            <span class="delimiter">/</span>
                            <a class="register-link ml-0" href="loginn" data-toggle="modal" data-toggle="#register-modal">Register</a>           

                        @else   
                        @if (Auth::user()->isStaff())
                            <a class="" href="/admin/dashboard"> Dashboard </a>
                        @endif
                            <a class="login-link" href="/profile" data-toggle="login-modal"><i
                                    class="d-icon-user"></i>{{Auth::user()->name}}</a>
                            <span class="delimiter">/</span>
                            <a class="register-link ml-0" href=""
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}</a>  
                                                    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        @endguest

                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="/" class="logo">
                            <img src="{{asset('eazy/images/upahaar.png')}}" alt="logo" width="153" height="44" />
                        </a>
                        <!-- End Logo -->

                        <div class="header-search hs-simple">

                            <form action="/products/search" class="input-wrapper" method="POST">
                                @csrf
                                <input id="searchProduct" type="search" class="form-control" 
                                name="query" autocomplete="off"
                                placeholder="How can we help you?" required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End Header Search -->
                    </div>
                    <div class="header-right">
                  
                        <nav class="main-nav">
                                <ul class="menu">
                                    <li class="active">
                                        <a href="/"><i class="d-icon-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="/about"><i class="d-icon-layer"></i>About Us</a>
                                       
                                    </li>
                                    <li>
                                        <a href="/contact"><i class="d-icon-map-marker"></i>Contact</a>
                                    </li>
                                </ul>
                        </nav>
 
                        @guest 
                        
                        @else

                        <span class="divider"></span>
                            @if ($carts ?? '')
                            <div class="dropdown cart-dropdown type2 cart-offcanvas mr-0 mr-lg-2">
                                <a href="#" class="cart-toggle label-block link">
                                    <div class="cart-label d-lg-show">
                                        <span class="cart-name">Shopping Cart:</span>
                                        <span class="cart-price">Rs. {{$grand_total}}</span>
                                    </div>
                                    <i class="d-icon-bag"><span class="cart-count">{{count($carts)}}</span></i>
                                </a>
                                <div class="cart-overlay"></div>
                                <!-- End Cart Toggle -->
                                <div class="dropdown-box">
                                    <div class="cart-header">
                                        <h4 class="cart-title">Shopping Cart</h4>
                                    
                                        <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                                class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                                    </div>
                                    <div class="products scrollable">
                                        
                                    <div style="display: none">
                                        {{ $total = 0 }}
                                    </div>
                                    @foreach ($carts as $cart)

                                        <div class="product product-cart">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="/storage/images/products/{{$cart->product->image}}" alt="product" width="80"
                                                            height="88" />
                                                    </a>
                                                    <a class="btn btn-link btn-close" href="javascript:window.location.reload(true)" onclick="removeItem({{$cart->id}}, '<?php echo csrf_token() ?>')">
                                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
</a>
                                                </figure>
                                                <div class="product-detail">
                                                    <a href="product.html" class="product-name">{{$cart->product->name}}</a>
                                                    <div class="price-box">
                                                        <span class="product-quantity">{{$cart->quantity}}</span>
                                                        <span class="product-price">Rs {{$cart->product->rate}} = 
                                                        {!! $cart->quantity * $cart->product->rate !!}
                                                        </span>
                                                        <div style="display: none">{{$total += $cart->quantity * $cart->product->rate}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Cart Product -->
                                    @endforeach
                                        </div>

                                    <!-- End of Products  -->
                                    <div class="cart-total">
                                        <label>Subtotal:</label>
                                        <span class="price">Rs {{ $total }}</span>
                                    </div>
                                    <!-- End of Cart Total -->
                                    <div class="cart-action">
                                        <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                        <a href="/checkoutMart" class="btn btn-dark"><span>Go To Checkout</span></a>
                                    </div>
                                    <!-- End of Cart Action -->
                                </div>
                                <!-- End Dropdown Box -->
                            </div>

                            @else
                            <div class="dropdown cart-dropdown type2 cart-offcanvas mr-0 mr-lg-2">
                                <a href="#" class="cart-toggle label-block link">
                                    <div class="cart-label d-lg-show">
                                        <span class="cart-name">Shopping Cart:</span>
                                        <span class="cart-price">Rs. 0</span>
                                    </div>
                                    <i class="d-icon-bag"><span class="cart-count">0</span></i>
                                </a>
                                <div class="cart-overlay"></div>
                                <!-- End Cart Toggle -->
                                <div class="dropdown-box">
                                    <div class="cart-header">
                                        <h4 class="cart-title">Shopping Cart</h4>
                                        <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                                class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                                    </div>
                                    <!-- End of Cart Action -->
                                </div>
                                <!-- End Dropdown Box -->
                            </div>
                            @endif

                        @endif
                    </div>
                    </div>
                </div>
            </div>

</header>
  

