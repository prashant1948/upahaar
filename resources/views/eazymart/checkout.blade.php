@extends('multiservice')
@section('content')
<div class="page-header"
				style="background-image: url('{{asset('images/banner-shop.jpg')}}'); background-color: #3C63A4;">
				<h1 class="page-title">Product Details</h1>
</div>
<main class="main checkout pb-10 bg-additional">
			<div class="page-content pt-7 pb-10">
				<div class="container mt-7 pt-5 pb-5 bg-white">
					<form action="/checkoutBuy" method="POST" class="form">
					@csrf

					<div class="row">
							<div class="col-lg-7 mb-6 mb-lg-0 pr-lg-4">
						
                            <div id="data-shipping">  
								<h3 class="title title-simple text-left text-uppercase">Shipping Details</h3>
										<label>First Name *</label>
										<input type="text" class="form-control" name="name" required="" />

										<label>Email Address *</label>
								<input type="text" class="form-control" name="email" required="" />

								<label>Address *</label>
								<input type="text" class="form-control" name="address" required=""
									placeholder="House number and street name" />
								
						
										<label>Phone *</label>
										<input type="text" class="form-control" name="phone_no" required="" />
                                    
									</div>  
							</div>
							<aside class="col-lg-5 sticky-sidebar-wrapper">
								<div class="sticky-sidebar mt-1" data-sticky-options="{'bottom': 50}">
									<div class="summary pt-5">
										<h3 class="title title-simple text-left text-uppercase">Your Order</h3>
										<table class="order-table">
											<thead>
												<tr>
													<th>Product</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
                                           
                                            @foreach ($carts as $cart)
	
												<tr>
													<td class="product-name">{{$cart->product->name}} <span
															class="product-quantity">×&nbsp;{{$cart->quantity}}</span></td>
													<td class="product-total text-body">Rs {{$cart->product->rate}}</td>
												</tr>

											@endforeach	

												<tr class="summary-total">
													<td class="pb-0">
														<h4 class="summary-subtitle">Total</h4>
													</td>
													<td class=" pt-0 pb-0">
														<p class="summary-total-price ls-s text-primary" >
														{!! $cart->quantity * $cart->product->rate !!}</p>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="payment accordion radio-type">
											<h4 class="summary-subtitle ls-m pb-3">Payment Methods</h4>
											<div class="card">
												<div class="card-header">
												<label class="form-control-label" for="terms-condition">
												Cash on Delivery
											</label>												</div>
											
											</div>
										</div>
									
										<button type="submit" class="btn btn-primary btn-rounded btn-order">Place Order</button>
									</div>
								</div>
							</aside>
						</div>
					</form>
				</div>
			</div>
		</main>
@endsection