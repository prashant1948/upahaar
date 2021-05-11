@extends('multiservice')
@section('content')
<div class="page-header"
				style="background-image: url('{{asset('images/banner-shop.jpg')}}'); background-color: #3C63A4;">
				<h1 class="page-title">Cart Items</h1>
</div>

<main class="main cart">
			<div class="page-content pt-7 pb-10">
			
				<div class="container mt-7 mb-2">
					<div class="row">
						<div class="col-lg-8 col-md-12 pr-lg-4">
							<table class="shop-table cart-table">
								<thead>
									<tr>
										<th><span>Product</span></th>
										<th></th>
										<th><span>Price</span></th>
										<th><span>quantity</span></th>
										<th>Subtotal</th>
									</tr>
								</thead>
								<tbody>

                                <div style="display: none">
                                        {{ $total = 0 }}
                                </div>

                                @foreach ($carts as $cart)

									<tr>
										<td class="product-thumbnail">
											<figure>
												<a href="product-simple.html">
													<img src="/storage/images/products/{{$cart->product->image}}" width="100" height="100"
														alt="product">
												</a>
											</figure>
										</td>
										<td class="product-name">
											<div class="product-name-section">
                                                <span class="amount">{{$cart->product->name}}</span>
											</div>
										</td>
										<td class="product-subtotal">
											<span class="amount">Rs {{$cart->product->rate}}</span>
										</td>
										<td class="product-quantity">
                                        <span class="amount">{{$cart->quantity}}</span>
										</td>
										<td class="product-price">
											<span class="amount">Rs {!! $cart->quantity * $cart->product->rate !!}</span>
										</td>
										<td class="product-close">
											<button type="submit" class="product-remove" title="Remove this product" onclick="removeItem({{$cart->id}}, '<?php echo csrf_token() ?>')">
												<i class="fas fa-times"></i>
                                            </button>
										</td>
									</tr>
                                    <div style="display: none">{{$total += $cart->quantity * $cart->product->rate}}</div>

                                @endforeach
								</tbody>
							</table>
						
						</div>
						<aside class="col-lg-4 sticky-sidebar-wrapper">
							<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
								<div class="summary mb-4">
									<h3 class="summary-title text-left">Cart Totals</h3>
								
									<table class="total">
										<tr class="summary-subtotal">
											<td>
												<h4 class="summary-subtitle">Total</h4>
											</td>
											<td>
												<p class="summary-total-price ls-s">Rs {{ $total }}</p>
											</td>												
										</tr>
									</table>
									<a href="checkoutMart" class="btn btn-dark btn-rounded btn-checkout">Proceed to checkout</a>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</main>


@endsection