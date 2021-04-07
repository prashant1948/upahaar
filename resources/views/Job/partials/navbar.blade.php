
<!-- top-header -->
<div class="header-most-top">
    <p>Apply for most suitable jobs</p>
</div>

<!-- //top-header -->
<!-- header-bot-->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <!-- header-bot-->
        <div class="col-md-4 logo_agile">
            <h1>
                <a href="/">
                    <img src="{{asset('images/job.png')}}" alt="" width="100px" height="100px">
                </a>
            </h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-8 header">
            <!-- header lists -->
            <ul>
                <li>
                    <span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
                </li>
                @guest
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                    </li>
                @else
                    @if (Auth::user()->isStaff())
                        <li><a href="/admin/dashboard">Dashboard</a></li>
                    @endif
                    @if (Auth::user()->isJobCompany())
                        <li><a href="{{route('postJob.create')}}">Post a Job</a></li>
                        <li><a href="/profileCompany"><i class="fa fa-user s_color"></i> {{Auth::user()->name}} </a></li>
                    @endif

                    <li>
                        <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
            </ul>
            <!-- //header lists -->
            <!-- search -->
            <div class="agileits_search">
                <form class="form" action="/job/search/all" method="POST">
                    @csrf
                    <input id="searchJob" name="query" type="search" placeholder="How can we help you today?" required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <span class="fa fa-search" aria-hidden="true"></span>
                    </button>
                </form>
            </div>
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
                        Sign In now, Don't have an account?
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
                            <input type="password" class="le-input" name="password" placeholder="Password" value="{{ old('password') }}" required>
                            @error('password')
                            <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input type="submit" value="Sign In">
{{--                        <p>Have't Any Account <a href="{{route('job.register')}}">Create An Account</a></p>--}}
                        <p>Want to post a job? <a href="{{route('job_company.create')}}">Create Company Account</a></p>
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
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
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
                    <h3 class="agileinfo_sign">Upload your cv </h3>
{{--                    <p>--}}
{{--                        Sign In now, Let's start your Grocery Shopping. Don't have an account?--}}
{{--                        <a href="#" data-toggle="modal" data-target="#myModal2">--}}
{{--                            Sign Up Now</a>--}}
{{--                    </p>--}}
                    <form method="POST" action="{{ url('/job/add/' . $job->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" class="le-input" name="expected_salary" placeholder="Expected Salary" required autofocus>
                            @error('expected_salary')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="styled-input">
                            <input type="file" class="le-input" placeholder="Password" name="cv" required>
                            @error('cv')
                            <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
{{--                        <a href="{{ url('/job/add/' . $job->id) }}"><input type="submit" name="submit" value="Apply" class="button"/><input type="submit" value="Sign In"></a>--}}
                        <input type="submit" name="submit" value="Apply" class="button"/>
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


<div class="ban-top">
    <div class="container">
        <div class="agileits-navi_search">
            <div id="agileinfo-nav_search">
                <ul class="inline">
                    <li class="dropdown le-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-list"></i> All Categories
                        </a>
                        <ul class="dropdown-menu" id="jobList">

                        </ul>
                    </li>
                </ul>
            </div>

        </div>

        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">


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
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active">
                                <a class="nav-stylehead" href="/indexJob">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="/about">About Us</a>
                            </li>
                            {{--                            <li class="dropdown">--}}
                            {{--                                <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kitchen--}}
                            {{--                                    <span class="caret"></span>--}}
                            {{--                                </a>--}}
                            {{--                                <ul class="dropdown-menu multi-column columns-3">--}}
                            {{--                                    <div class="agile_inner_drop_nav_info">--}}
                            {{--                                        <div class="col-sm-4 multi-gd-img">--}}
                            {{--                                            <ul class="multi-column-dropdown">--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Bakery</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Baking Supplies</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Coffee, Tea & Beverages</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Dried Fruits, Nuts</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Sweets, Chocolate</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Spices & Masalas</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Jams, Honey & Spreads</a>--}}
                            {{--                                                </li>--}}
                            {{--                                            </ul>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="col-sm-4 multi-gd-img">--}}
                            {{--                                            <ul class="multi-column-dropdown">--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Pickles</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Pasta & Noodles</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Rice, Flour & Pulses</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Sauces & Cooking Pastes</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Snack Foods</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Oils, Vinegars</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product.html">Meat, Poultry & Seafood</a>--}}
                            {{--                                                </li>--}}
                            {{--                                            </ul>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="col-sm-4 multi-gd-img">--}}
                            {{--                                            <img src="{{asset('eazy/images/nav.png')}}" alt="">--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="clearfix"></div>--}}
                            {{--                                    </div>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="dropdown">--}}
                            {{--                                <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Household--}}
                            {{--                                    <span class="caret"></span>--}}
                            {{--                                </a>--}}
                            {{--                                <ul class="dropdown-menu multi-column columns-3">--}}
                            {{--                                    <div class="agile_inner_drop_nav_info">--}}
                            {{--                                        <div class="col-sm-6 multi-gd-img">--}}
                            {{--                                            <ul class="multi-column-dropdown">--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Kitchen & Dining</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Detergents</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Utensil Cleaners</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Floor & Other Cleaners</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Disposables, Garbage Bag</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Repellents & Fresheners</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html"> Dishwash</a>--}}
                            {{--                                                </li>--}}
                            {{--                                            </ul>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="col-sm-6 multi-gd-img">--}}
                            {{--                                            <ul class="multi-column-dropdown">--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Pet Care</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Cleaning Accessories</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Pooja Needs</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Crackers</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Festive Decoratives</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Plasticware</a>--}}
                            {{--                                                </li>--}}
                            {{--                                                <li>--}}
                            {{--                                                    <a href="product2.html">Home Care</a>--}}
                            {{--                                                </li>--}}
                            {{--                                            </ul>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="clearfix"></div>--}}
                            {{--                                    </div>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
{{--                            <li class="">--}}
{{--                                <a class="nav-stylehead" href="faqs.html">Faqs</a>--}}
{{--                            </li>--}}
                            {{--                            <li class="dropdown">--}}
                            {{--                                <a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Pages--}}
                            {{--                                    <b class="caret"></b>--}}
                            {{--                                </a>--}}
                            {{--                                <ul class="dropdown-menu agile_short_dropdown">--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="icons.html">Web Icons</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="typography.html">Typography</a>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            <li class="">
                                <a class="nav-stylehead" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- //navigation -->
