@extends('layouts.multiservicelayout')
@section('content')
<div class="page-header"
				style="background-image: url('{{asset('images/banner-shop.jpg')}}'); background-color: #3C63A4;">
				<h1 class="page-title">Product Details</h1>
</div>
<main class="main mt-6 single-product">
			<div class="page-content mb-10 pb-6">
				<div class="container">
					<div class="product product-single row mb-7">
						<div class="col-md-6 sticky-sidebar-wrapper">
							<div class="product-gallery pg-vertical sticky-sidebar"
								data-sticky-options="{'minWidth': 767}">
								<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
								
								@foreach($productImg as $productimage)

									<figure class="product-image">
										<img src="/storage/images/products/{{$productimage->image}}" 
                                        data-zoom-image="/storage/images/products/{{$productimage->image}}" 
                                        alt="" width="800" height="900">
									</figure>

								@endforeach

								</div>
								
							</div>
						</div>
						<div class="col-md-6">

							<div class="product-details">
								<h1 class="product-name">{!!$product->name!!}</h1>
								<div class="product-meta">

									BRAND: <span class="product-brand">{{$product->brand}}</span>
									AVAILABILITY:
									@if ($product->quantity>0)
										<span class="product-sku">  in stock</span>
									@else
										<span class="product-sku">  Out of Stock</span>
									@endif
								</div>
								<div class="product-price">Rs. {{$product->rate}} <del>Rs. {{$product->prev_price}}</del>
								</div>
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:80%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
								</div>
								<p class="product-short-desc">
								{{$product->description}}</p>
								
								<hr class="product-divider">

								<div class="product-form product-qty">
								
							<div class="product-form-group">
						
							@if ($product->quantity>0)
										<!-- <div class="input-group mr-2">
											<button class="quantity-minus d-icon-minus"></button>
											<input class="quantity form-control" type="number" min="1" max="1000000" 
											id="totalqty">
											<button class="quantity-plus d-icon-plus" ></button>
										</div> -->
										<a
											class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold"><i
												class="d-icon-bag" onclick="addToCart({{$product->id}}, 
                        '<?php echo csrf_token() ?>')" value="Add to cart"></i>Add to
											Cart</a>
											<!-- @php 
												$test;
											@endphp -->
                                            <a
											class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold" 
											href="{{ url('checkedoutBuy/' . $product->id . '/' . 1) }}"><i
												class="d-icon-money"></i>Buy Now</a>
							@else
									<div class="input-group mr-2">
										<!-- <div class="input-group mr-2 cursor-disabled">
											<button class="quantity-minus d-icon-minus"></button>
											<input class="quantity form-control" type="number" min="1" max="1000000">
											<button class="quantity-plus d-icon-plus"></button>
										</div> -->
										<a
											class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold cursor-disabled"><i
												class="d-icon-bag"></i>Add to
											Cart</a>
                                            <a
											class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold cursor-disabled"  href="/checkedoutBuy"><i
												class="d-icon-money"></i>Buy Now</a>
							@endif

									</div>
								</div>

								<hr class="product-divider mb-3">
								
							</div>

						</div>
					</div>

					<div class="tab tab-nav-simple product-tabs">
						<ul class="nav nav-tabs justify-content-center" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#product-tab-description">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-additional">Additional information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-reviews">Reviews (2)</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active in" id="product-tab-description">
								<div class="row mt-6">
									<div class="col-md-6">
										<h5 class="description-title mb-4 font-weight-semi-bold ls-m">Features</h5>
										<ul class="mb-8">
											<li>Praesent id enim sit amet.Tdio vulputate</li>
											<li>Eleifend in in tortor. ellus massa.Dristique sitii</li>
											<li>Massa ristique sit amet condim vel</li>
											<li>Dilisis Facilisis quis sapien. Praesent id enim sit amet</li>
										</ul>
										<h5 class="description-title mb-3 font-weight-semi-bold ls-m">Specifications
										</h5>
										<table class="table">
											<tbody>
												<tr>
													<th class="font-weight-semi-bold text-dark pl-0">Material</th>
													<td class="pl-4">Praesent id enim sit amet.Tdio</td>
												</tr>
												<tr>
													<th class="font-weight-semi-bold text-dark pl-0">Recommended Use
													</th>
													<td class="pl-4">Praesent id enim sit amet.Tdio vulputate eleifend
														in in tortor. ellus massa. siti</td>
												</tr>
												<tr>
													<th class="font-weight-semi-bold text-dark border-no pl-0">
														Manufacturer</th>
													<td class="border-no pl-4">Praesent id enim</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-6 pl-md-6 pt-4 pt-md-0">
										<div class="icon-box-wrap d-flex flex-wrap">
											<div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4 mr-10">
												<div class="icon-box-icon">
													<i class="d-icon-lock"></i>
												</div>
												<div class="icon-box-content">
													<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">2 year
														warranty</h4>
													<p>Guarantee with no doubt</p>
												</div>
											</div>
											<div class="divider d-xl-show mr-10"></div>
											<div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4">
												<div class="icon-box-icon">
													<i class="d-icon-truck"></i>
												</div>
												<div class="icon-box-content">
													<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">Free shipping
													</h4>
													<p>On orders over Rs.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="product-tab-additional">
								<ul class="list-none">
									<li><label>Brands:</label>
										<p>SkillStar, SLS</p>
									</li>
									<li><label>Color:</label>
										<p>Blue, Brown</p>
									</li>
									<li><label>Size:</label>
										<p>Large, Medium, Small</p>
									</li>
								</ul>
							</div>
							<div class="tab-pane " id="product-tab-reviews">
								<div class="comments mb-8 pt-2 pb-2 border-no">
									<ul>
										<li>
											<div class="comment">
												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<span class="comment-date text-body">September 22, 2020 at 9:42
															pm</span>
														<h4><a href="#">John Doe</a></h4>
													</div>

													<div class="comment-content">
														<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
															libero sodales leo,
															eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.
															Suspendisse potenti.
															Sed egestas, ante et vulputate volutpat, eros pede semper
															est, vitae luctus metus libero eu augue.</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<span class="comment-date text-body">September 22, 2020 at 9:42
															pm</span>
														<h4><a href="#">John Doe</a></h4>
													</div>

													<div class="comment-content">
														<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
															libero sodales leo, eget blandit nunc tortor eu nibh. Nullam
															mollis.
															Ut justo. Suspendisse potenti. Sed egestas, ante et
															vulputate volutpat,
															eros pede semper est, vitae luctus metus libero eu augue.
															Morbi purus libero,
															faucibus adipiscing, commodo quis, avida id, est. Sed
															lectus. Praesent elementum
															hendrerit tortor. Sed semper lorem at felis. Vestibulum
															volutpat.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- End Comments -->
								<div class="reply">
									<div class="title-wrapper text-left">
										<h3 class="title title-simple text-left text-normal">Add a Review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
									</div>
									<div class="rating-form">
										<label for="rating" class="text-dark">Your rating * </label>
										<span class="rating-stars selected">
											<a class="star-1" href="#">1</a>
											<a class="star-2" href="#">2</a>
											<a class="star-3" href="#">3</a>
											<a class="star-4 active" href="#">4</a>
											<a class="star-5" href="#">5</a>
										</span>

										<select name="rating" id="rating" required="" style="display: none;">
											<option value="">Rate…</option>
											<option value="5">Perfect</option>
											<option value="4">Good</option>
											<option value="3">Average</option>
											<option value="2">Not that bad</option>
											<option value="1">Very poor</option>
										</select>
									</div>
									<form action="#">
										<textarea id="reply-message" cols="30" rows="6" class="form-control mb-4"
											placeholder="Comment *" required></textarea>
										<div class="row">
											<div class="col-md-6 mb-5">
												<input type="text" class="form-control" id="reply-name"
													name="reply-name" placeholder="Name *" required />
											</div>
											<div class="col-md-6 mb-5">
												<input type="email" class="form-control" id="reply-email"
													name="reply-email" placeholder="Email *" required />
											</div>
										</div>
										<div class="form-checkbox mb-4">
											<input type="checkbox" class="custom-checkbox" id="signin-remember"
												name="signin-remember" />
											<label class="form-control-label" for="signin-remember">
												Save my name, email, and website in this browser for the next time I
												comment.
											</label>
										</div>
										<button type="submit" class="btn btn-primary btn-rounded">Submit<i
												class="d-icon-arrow-right"></i></button>
									</form>
								</div>
								<!-- End Reply -->
							</div>
						</div>
					</div>

				</div>
			</div>
		</main>

		<script>
			var test = document.getElementById('totalqty').innerHTML;
			console.log(test);
		</script>
        @endsection