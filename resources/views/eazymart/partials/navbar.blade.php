
<!-- top-header -->
<div class="header-most-top">
{{--    <p>Grocery Offer Zone Top Deals & Discounts</p>--}}
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <p>
            <span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
        </p>
    </div>
    @guest
        <div class="col-lg-4 col-md-4 col-12">
            <p>
                <a href="#" data-toggle="modal" data-target="#myModal1">
                    <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <p>
                <a href="#" data-toggle="modal" data-target="#myModal2">
                    <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
            </p>
        </div>
    @else
        @if (Auth::user()->isStaff())
            <div class="col-lg-4 col-md-4 col-12">
                <p><a href="/admin/dashboard">Dashboard</a></p>
            </div>
        @endif

        <div class="col-lg-4 col-md-4 col-12">
            <p><a href="/profileMart"><i class="fa fa-user s_color"></i> {{Auth::user()->name}} </a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <p>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </p>
        </div>
    @endif
    </div>

</div>

<!-- //top-header -->
<!-- header-bot-->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <!-- header-bot-->
        <div class="col-md-2 col-12 logo_agile">
            <h1>
                <a href="/">
                    <img src="{{asset('eazy/images/upahaar.jpg')}}" alt="" style="max-height:80px;">
                </a>
            </h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-8 col-12 header">
            <!-- header lists -->

                <div class="agileits_search">
                    <form class="form" action="/products/search/all" method="POST">
                        @csrf

                        <input id="searchProduct" name="query" type="search" placeholder="How can we help you?" required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-search" aria-hidden="true"></span>
                        </button>

                    </form>
                </div>
        </div>
        <div class="col-md-2 col-12 logo_agile">

                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <div class="top-cart-holder dropdown animate-dropdown basket" id="cart-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                @guest
                                    <a href="#" data-toggle="modal" data-target="#myModal1">
                                        <div class="basket-item-count">
                                            <span class="count">0</span>
                                            <button class="w3view-cart">
                                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="total-price-basket">
                                            <span class="lbl"></span>
                                        </div>
                                    </a>
                                @else
                                    @if ($carts ?? '')
                                        <div class="basket-item-count" style="width:400px">
                                            <span class="count">{{count($carts)}}</span>
                                            <button class="w3view-cart">
                                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                            </button>
                                        </div>

                                        <div class="total-price-basket">
                                            <span class="lbl">Your cart:</span>
                                            <span class="total-price">
                                                <span class="sign">Rs.</span>
                                                <span class="value">{{$grand_total}}</span>
                                            </span>
                                        </div>
                                    @else
                                        <div class="basket-item-count">
                                            <span class="count">0</span>
                                            <button class="w3view-cart">
                                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                            </button>

                                        </div>

                                        <div class="total-price-basket">
                                            <span class="lbl">your cart:</span>
                                            <span class="total-price">
                                                                <span class="sign">Rs.</span>
                                                                <span class="value">0</span>
                                                            </span>
                                        </div>
                                    @endif
                                @endguest
                            </a>

                            @if ($carts ?? '')
                                <ul class="dropdown-menu">
                                    @foreach ($carts as $cart)
                                        <li>
                                            <div class="basket-item">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                        <div class="thumb" >
                                                            <img alt="" src="/assets/images/products/{{$cart->product->image}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-8 col-sm-8">
                                                        <div class="title">{{$cart->product->name}}</div>
                                                        <div class="price">Rs.{{$cart->product->rate}}</div>
                                                    </div>
                                                </div>
                                                <a class="close-btn" href="#"></a>
                                            </div>
                                        </li>
                                    @endforeach

                                    <li class="checkout">
                                        <div class="basket-item">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6">
                                                    <a href="/checkoutMart" class="le-button">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            @endif
                            {{--                        </div><!-- /.basket -->--}}
                        </div><!-- /.top-cart-holder -->
                        {{--                    </form>--}}

                    </div>
                </div>


            <!-- //header lists -->
            <!-- search -->

            <!-- //search -->
            <!-- cart details -->


            <!-- //cart details -->

    </div>
        <div class="clearfix"></div>
    </div>
</div>


<!-- signin Model -->
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In </h3>
                    <p>
                        Sign In now, Let's start your Grocery Shopping. Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            Sign Up Now</a>
                    </p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
{{--                        @if(Session::has('productSessionID'))--}}
{{--                            <div class="alert">{{ Session::get('productSessionID') }}</div>--}}
{{--                        @endif--}}
                        <div class="styled-input agile-styled-input-top">
                            <input type="email" class="le-input" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="styled-input">
                            <input type="password" class="le-input" name="password" placeholder="Password" value="{{ old('password') }}" required>
                            @error('password')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <input type="submit" value="Sign In">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- //signin Model -->
<!-- signup Model -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up</h3>
                    <p>
                        Come join the Grocery Shoppy! Let's set up your Account.
                    </p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="Name" name="name" required="">
                        </div>
                        <div class="styled-input">
                            <input type="email" placeholder="E-mail" name="email" required="">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Password" name="password" id="password1" required="">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password2" required="">
                        </div>
                        <input type="submit" value="Sign Up">
                    </form>
                    <p>
                        <a href="#">By clicking register, I agree to your terms</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal2 -->
<!-- //signup Model -->
<!-- Modal3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In </h3>
                    <p>
                        Sign In now, Let's start your Grocery Shopping. Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            Sign Up Now</a>
                    </p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="styled-input agile-styled-input-top">
                            <input type="email" class="le-input" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="styled-input">
                            <input type="password" class="le-input" placeholder="Password" name="password" value="{{ old('password') }}" required>
                            @error('password')
                            <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input type="submit" value="Sign In">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal3 -->
<!-- //header-bot -->
<!-- navigation -->

<div class="col-12">
    <div class="col-lg-2 col-md-2 col-12">
        <div class="ban-top">
            <div class="container">
                <div class="agileits-navi_search ecommerce">
                    <div id="agileinfo-nav_search">
                        <ul class="inline">
                            <li class="dropdown le-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-list"></i>All Categories
                                </a>
                                <ul class="dropdown-menu" id="departmentList">

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-10 col-md-10 col-12">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu--shylock departments" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav menu__list">
                <li class="active">
                    <a class="nav-stylehead" href="/ecommerce">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @foreach ($departmentsLists as $department)
                    <li class="dropdown menu-item">
                        <a href="/departmentMart/{{$department->id}}" >{{$department->department_name}}</a>
                    </li><!-- /.menu-item -->
                @endforeach
            </ul>
        </div>
    </div>
</div>






<!-- //navigation -->
