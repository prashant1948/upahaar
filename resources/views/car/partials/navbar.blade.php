
<!-- top-header -->
<!-- <div class="header-most-top">
    {{--    <p>Grocery Offer Zone Top Deals & Discounts</p>--}}
    <div class="container">
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
                @if (Auth::user()->isJobCompany())
                    <div class="col-lg-4 col-md-4 col-12">
                        <p><a href="{{route('postJob.create')}}">Post a Job</a></p>
                        <p><a href="/profileCompany"><i class="fa fa-user s_color"></i> {{Auth::user()->name}} </a></p>
                    </div>
                @endif

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

</div> -->

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
        <div class="col-md-6 col-12 header">
            <!-- header lists -->
            <ul>
                <div class="agileits_search">
                    <form class="form" action="/car/search/all" method="POST">
                        @csrf
                        <input id="searchCar" name="query" type="search" placeholder="How can we help you today?" required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-search" aria-hidden="true"></span>
                        </button>
                    </form>
                </div>

            </ul>
            <!-- //header lists -->
            <!-- search -->


            <div class="clearfix"></div>
        </div>
    <div class="col-lg-4 col-md-4 col-12">
            <div class="row header-most-top">
                <p>
                    <span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
                </p>
            
                @guest
                
                    <p>
                        <a href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                    </p>
                
                
                    <p>
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                    </p>
            
            
                @else
                    @if (Auth::user()->isStaff())
                    
                        <p><a href="/admin/dashboard">Dashboard</a></p>
                        
                    @endif
                
                        
                    <p>
                        <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </p>
                        
                @endif
                </div>
            </div>
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
                        <div class="styled-input agile-styled-input-top">
                            <input type="email" class="le-input" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                            @error('email')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="styled-input">
                            <input type="password" class="le-input" name="password" value="{{ old('password') }}" placeholder="Password" required>
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
                    <h3 class="agileinfo_sign">Add Details</h3>

                    @if(count($cars) >= 1)
                    <form method="POST" action="{{ url('/car/add/' . $car->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="styled-input agile-styled-input-top">
                            <label for="from_date">Rental Date:</label>
                            <input type="date" class="le-input" name="from_date" placeholder="From" required autofocus>
                            @error('from_date')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><br>
                        <div class="styled-input">
                            <label for="end_date">Return Date:</label>
                            <input type="date" class="le-input" placeholder="To" name="end_date" required>
                            @error('end_date')
                            <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div></br>

                        <div class="styled-input">
                            <label for="with_driver">Driver Required?</label>
                            <select class="form-control input-lg" name="with_driver">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <input type="submit" name="submit" value="Rent" class="button"/>
                    </form>
                    @endif

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
                        <a class="white" href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-list"></i> All Categories
                        </a>
                        <ul class="dropdown-menu" id="carList">

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
                                <a class="nav-stylehead" href="/indexCar">Home
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
