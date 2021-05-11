
@extends('layouts.ecommercelayout')
@section('content')


<div class="tab-content">
@foreach ($productsname as $productname)
<h1 class="page-title text-center">{{ $productname->department_name }}</h1>
@endforeach

                                        <div class="tab-pane active">
                                        <div class="row cols-2 cols-sm-3 product-wrapper">

                                        @foreach ($products as $f)
                                            <div class="product-wrap">
                                                <div class="product product-outer-layer">
                                                    <figure class="product-media">
                                                        <a href="/productDetails/{{$f->id}}" class="product-list-shop">
                                                            <img src="/storage/images/products/{{$f->image}}" alt="product" width="280" height="315">
                                                        </a>
                                                        <div class="product-label-group">
                                                            @if($f->discount)
                                                            <label class="product-label label-sale">Save {{$f->discount}} %</label>
                                                            @else
                                                            <label class="product-label label-new">new</label>
                                                            @endif
                                                        </div>
                                                        <div class="product-action-vertical">
                                                        @if(!Auth::user())
                                                        <a href="loginn" class="login-link btn-product-icon"
                                                        data-toggle="modal" data-toggle="#login-modal" title="Add to cart"><i
                                                                    class="d-icon-bag"></i></a>

                                                        @else
                                                            <a class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal"
                                                            type="submit" name="submit" title="Add to cart" 
                                                            onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" href="#">
                                                            <i
                                                                    class="d-icon-bag"></i>
                                                                    </a>
                                                        @endif
                                                        </div>
                                                        <div class="product-action">
                                                            @if(!Auth::user())
                                                                <a href="loginn"
                                                                    data-toggle="modal" data-toggle="#login-modal"
                                                                class="login-link btn-product" title="Buy Now">Buy Now</a>
                                                            @else
                                                                @if ($f->quantity>0)
                                                                <a href="{{ url('checkedoutBuy/' . $f->id . '/' . 1) }}"
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
                                                                data-toggle="#login-modal" class="login-link">{{ $f->name }}</a>
                                                        </h3>
                                                        @else
                                                        <h3 class="product-name">
                                                                <a href="/productDetails/{{$f->id}}">{{ $f->name }}</a>
                                                        </h3>
                                                        @endif
                                                        <div class="product-price">
                                                            <ins class="new-price">Rs.{{$f->rate}}</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        </div>
                                        </div>
</div>
                                         
@endsection
                                        

