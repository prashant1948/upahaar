@extends('layouts.eazyCommon')
@section('content')
    <!-- //navigation -->
    <!-- banner-2 -->
    {{--    <div class="page-head_agile_info_w3l">--}}

    {{--    </div>--}}
    {{--    <!-- //banner-2 -->--}}
    <!-- page -->
{{--    --}}
    <div class="page-ecommerce_agile_info_w3l">

    </div>
    <!-- //page -->
    <!-- checkout page -->
    <div class="privacy">
        <div class="container">
            <!-- tittle heading -->
{{--            <h3 class="tittle-w3l">Cart Details--}}
{{--                <span class="heading-style">--}}
{{--					<i></i>--}}
{{--					<i></i>--}}
{{--					<i></i>--}}
{{--				</span>--}}
{{--            </h3>--}}
            <!-- //tittle heading -->

{{--            <div id="cart-page">--}}
{{--                <div class="container">--}}
{{--                    <div class="alert alert-warning" id="form-message" hidden>--}}
{{--                        <strong>Warning!</strong> Cart is empty!! <br>--}}
{{--                        Add to cart to checkout--}}
{{--                    </div>--}}

{{--                    <div class="section col-xs-12 col-sm-12 col-md-12" id="cart-list">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="checkout-left">
                <div class="address_form_agile">
                    <h4>Checkout Form</h4>
                    <form action="/checkoutBuy" method="POST" class="creditly-card-form agileinfo_form">
                        @csrf
                        <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row">
                                    <div class="controls">
                                        <input class="billing-address-name" type="text" name="name" placeholder="Full Name" required="">
                                    </div>
                                    <div class="controls">
                                        <input class="billing-address-name" type="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="controls">
                                        <input class="billing-address-name" type="text" name="address" placeholder="Address">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <input type="text" placeholder="Mobile Number" name="phone_no" required="">
                                            </div>
                                        </div>

                                        <div class="clear"> </div>
                                    </div>
                                    <input type="hidden" name="buy_id" value="{{$buy}}">



                                </div>
                                <button class="submit check_out" id="checkout-button">Checkout</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!-- //checkout page -->
@endsection

