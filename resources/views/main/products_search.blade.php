@extends('multiservice')
@section('content')
<div class="page-header"
				style="background-image: url('{{asset('images/banner-shop.jpg')}}'); background-color: #3C63A4;">
				<h1 class="page-title">Search Products</h1>
</div>


<div class="page-content mb-10 pb-3 pt-4">
<div class="container">
                        <div class="row">
                         
                            <div class="col-lg-12 mb-4">
                                <div class="tab tab-vertical tab-simple">
                                   
                                    <div class="tab-content">
                                     

                                        <div class="tab-pane active" id="Oils">
                                       
                                            <div class="row cols-2 cols-sm-3 product-wrapper">
                                       
                                            @foreach ($products as $product)

                                                    <div class="product-wrap">
                                                        <div class="product product-outer-layer">
                                                            <figure class="product-media">
                                                                <a href="/productDetails/{{$product->id}}" class="product-list-shop">
                                                                    <img src="/storage/images/products/{{$product->image}}" alt="product" width="280" height="315">
                                                                </a>
                                                                <div class="product-label-group">
                                                                    @if($product->discount)
                                                                    <label class="product-label label-sale">Save {{$product->discount}} %</label>
                                                                    @else
                                                                    <label class="product-label label-new">new</label>
                                                                    @endif
                                                                </div>
                                                                <div class="product-action-vertical">
                                                                @if(!Auth::user())
                                                                <a href="/loginn" class="login-link btn-product-icon"
                                                                data-toggle="modal" data-toggle="#login-modal" title="Add to cart"><i
                                                                            class="d-icon-bag"></i></a>

                                                                @else
                                                                    <a class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal"
                                                                    type="submit" name="submit" title="Add to cart" 
                                                                    onclick="addToCart({{$product->id}}, '<?php echo csrf_token() ?>')" href="#">
                                                                    <i
                                                                            class="d-icon-bag"></i>
                                                                            </a>
                                                                @endif
                                                                </div>
                                                                <div class="product-action">
                                                                    @if(!Auth::user())
                                                                    <a href="/loginn"
                                                                            data-toggle="modal" data-toggle="#login-modal"
                                                                        class="login-link btn-product" title="Buy Now">Buy Now</a>
                                                                        @else
                                                                        @if ($product->quantity>0)
                                                                        <a href="{{ url('checkedoutBuy/' . $product->id . '/' . 1) }}"
                                                                            class="btn-product" title="Buy Now">Buy Now</a>
                                                                         
                                                                        @else
                                                                        <a href="qtydown" data-toggle="modal" data-toggle="#login-modal"
                                                                            class="notification-link btn-product" title="Buy Now">Buy Now</a>
                                                                            @endif

                                                                    @endif
                                                                </div>
                                                            </figure>
                                                            <div class="product-details product-details-bg">
                                                            @if(!Auth::user())
                                                            <h3 class="product-name">
                                                                        <a href="loginn" data-toggle="modal"
                                                                         data-toggle="#login-modal" class="login-link">{{ $product->name }}</a>
                                                                </h3>
                                                                @else
                                                                <h3 class="product-name">
                                                                        <a href="/productDetails/{{$product->id}}">{{ $product->name }}</a>
                                                                </h3>
                                                                @endif
                                                                <div class="product-price">
                                                                    <ins class="new-price">Rs.{{$product->rate}}</ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
@endsection