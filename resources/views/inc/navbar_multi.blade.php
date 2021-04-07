
<!-- top-header -->
<div class="header-most-top">
    <p>Multi Service Application</p>
</div>

<!-- //top-header -->
<!-- header-bot-->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <!-- header-bot-->

    <nav id="navbar1" class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container">
            <span class="navbar-brand"><img src="{{asset('images/job.png')}}"></span>

            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" id="active1" href="#section1">Home</a></li>
                    <li class="nav-item"><a class="nav-link" id="active2" href="#section2">Our Services</a></li>
                    <li class="nav-item"><a class="nav-link" id="active3" href="#section3">Contact</a></li>
                    @guest
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> Log In </a></li>

                    @else
                        @if (Auth::user()->isStaff())
                            <li><a class="nav-link"  href="/admin/dashboard">Dashboard</a></li>
                            <li>
                                <a href="" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>

        </div>
    </nav>
        <!-- header-bot -->
{{--        <div class="col-md-8 header">--}}
{{--            <!-- header lists -->--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678--}}
{{--                </li>--}}
{{--                @guest--}}
{{--                    <li>--}}
{{--                        <a href="#" data-toggle="modal" data-target="#myModal1">--}}
{{--                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#" data-toggle="modal" data-target="#myModal2">--}}
{{--                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    @if (Auth::user()->isStaff())--}}
{{--                        <li><a href="/admin/dashboard">Dashboard</a></li>--}}
{{--                    @endif--}}
{{--                    @if (Auth::user()->isJobCompany())--}}
{{--                        <li><a href="{{route('postJob.create')}}">Post a Job</a></li>--}}
{{--                    @endif--}}
{{--                    <li><a href="/profileMart"><i class="fa fa-user s_color"></i> {{Auth::user()->name}} </a></li>--}}
{{--                    <li>--}}
{{--                        <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            </ul>--}}
            <!-- //header lists -->
            <!-- search -->
{{--            <div class="agileits_search">--}}
{{--                <form class="form" action="/products/search/all" method="POST">--}}
{{--                    @csrf--}}
{{--                    <input id="searchProduct" name="query" type="search" placeholder="How can we help you today?" required="">--}}
{{--                    <button type="submit" class="btn btn-default" aria-label="Left Align">--}}
{{--                        <span class="fa fa-search" aria-hidden="true"></span>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
            <!-- //search -->
            <!-- cart details -->
{{--            <header>--}}
{{--                <div class="top_nav_right">--}}
{{--                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">--}}
{{--                        <div class="top-cart-holder dropdown animate-dropdown basket" id="cart-dropdown">--}}
{{--                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                                @guest--}}
{{--                                    <a href="#" data-toggle="modal" data-target="#myModal1">--}}
{{--                                        <div class="basket-item-count">--}}
{{--                                            <span class="count">0</span>--}}
{{--                                            <button class="w3view-cart">--}}
{{--                                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <div class="total-price-basket">--}}
{{--                                            <span class="lbl">Manage cart</span>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                @else--}}
{{--                                    @if ($carts ?? '')--}}
{{--                                        <div class="basket-item-count" style="width:400px">--}}
{{--                                            <span class="count">{{count($carts)}}</span>--}}
{{--                                            <button class="w3view-cart">--}}
{{--                                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

{{--                                        <div class="total-price-basket">--}}
{{--                                            <span class="lbl">Your cart:</span>--}}
{{--                                            <span class="total-price">--}}
{{--                                                <span class="sign">Rs.</span>--}}
{{--                                                <span class="value">{{$grand_total}}</span>--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    @else--}}
{{--                                        <div class="basket-item-count">--}}
{{--                                            <span class="count">0</span>--}}
{{--                                            <button class="w3view-cart">--}}
{{--                                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>--}}
{{--                                            </button>--}}

{{--                                        </div>--}}

{{--                                        <div class="total-price-basket">--}}
{{--                                            <span class="lbl">your cart:</span>--}}
{{--                                            <span class="total-price">--}}
{{--                                                                <span class="sign">Rs.</span>--}}
{{--                                                                <span class="value">0</span>--}}
{{--                                                            </span>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                @endguest--}}
{{--                            </a>--}}

{{--                            @if ($carts ?? '')--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    @foreach ($carts as $cart)--}}
{{--                                        <li>--}}
{{--                                            <div class="basket-item">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-xs-4 col-sm-4 no-margin text-center">--}}
{{--                                                        <div class="thumb" >--}}
{{--                                                            <img alt="" src="/assets/images/products/{{$cart->product->image}}"/>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-xs-8 col-sm-8">--}}
{{--                                                        <div class="title">{{$cart->product->name}}</div>--}}
{{--                                                        <div class="price">Rs.{{$cart->product->rate}}</div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <a class="close-btn" href="#"></a>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}

{{--                                    <li class="checkout">--}}
{{--                                        <div class="basket-item">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-xs-12 col-sm-6">--}}
{{--                                                    <a href="/checkoutMart" class="le-button">Checkout</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                            @endif--}}
{{--                            --}}{{--                        </div><!-- /.basket -->--}}
{{--                        </div><!-- /.top-cart-holder -->--}}
{{--                        --}}{{--                    </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </header>--}}
            <!-- //cart details -->
            <div class="clearfix"></div>
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
                        Sign In now, enjoy the service. Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            Sign Up Now</a>
                    </p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="styled-input agile-styled-input-top">
                            <input type="email" class="le-input" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="styled-input">
                            <input type="password" class="le-input" name="password" placeholder="Enter Password" value="{{ old('password') }}" required>
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
                        Come join the Multi Service Application! Enjoy the best service.
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
{{--                    <p>--}}
{{--                        <a href="#">By clicking register, I agree to your terms</a>--}}
{{--                    </p>--}}
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


{{--<div class="ban-top">--}}


{{--    <div class="top_nav_left">--}}
{{--        <nav class="navbar navbar-default">--}}
{{--            <div class="container-fluid">--}}


{{--                <!-- Brand and toggle get grouped for better mobile display -->--}}
{{--                <div class="navbar-header">--}}
{{--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"--}}
{{--                            aria-expanded="false">--}}
{{--                        <span class="sr-only">Toggle navigation</span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <!-- Collect the nav links, forms, and other content for toggling -->--}}
{{--                <div class="collapse navbar-collapse menu--shylock categories" id="bs-example-navbar-collapse-1">--}}
{{--                    <ul class="nav navbar-nav menu__list" id="departmentList">--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}

{{--</div>--}}
<!-- //navigation -->
