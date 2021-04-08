@extends('layouts.eazyCommon')

@section('content')
<section id="category-grid">
    <div class="container">


            <!-- ========================================= BREADCRUMB ========================================= -->

        <div class="col-xs-12 col-sm-12 ">
            <section id="gaming">
                <div class="grid-list-products">
                    <h2 class="section-title">{{$current_department->department_name}}</h2>

                    <div class="control-bar">
                        <div id="item-count" class="le-select">
                            <select id="countItems">
                                <?php
                                    $itemNumbers = [9, 18, 27];
                                    foreach ($itemNumbers as $i) {
                                        if ($i == $items) {
                                            echo "<option value='".$i."' selected>".$i." per page</option>";
                                        } else {
                                            echo "<option value='".$i."'>".$i." per page</option>";
                                        }
                                    }
                                    ?>
                            </select>
                        </div>
                    </div><!-- /.control-bar -->

                    <div class="tab-content">
                        @if($products)
                            <div class="product-sec1">
                                @foreach ($products as $f)
                                    <div class="col-md-4 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img alt="" src="/storage/images/products/{{$f->image}}"/>
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="/singleMart/{{$f->id}}" class="link-product-add-cart">Quick View</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">New</span>
                                            </div>
                                            <div class="item-info-product ">
                                                <h4>
                                                    <a href="/singleMart/{{$f->id}}" >{{ Str::limit($f->name, 10) }}</a>
                                                </h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">Rs.{{$f->rate}}</span>
                                                    <del>Rs.{{$f->prev_price}}</del>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        @endif

                            <div class="pagination-holder">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 text-left">
                                        {{ $products->links() }}
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="result-counter">
                                        Showing <span>{{ $products->count() }}</span> of <span>{{ $products->total() }}</span> results
                                        </div>
                                    </div>

                                </div><!-- /.row -->
                            </div><!-- /.pagination-holder -->
                        </div><!-- /.products-grid #grid-view -->

                        <script>
                            elements = document.getElementsByClassName("page-number");
                            Array.prototype.forEach.call(elements, child => {
                                child.setAttribute('href', child.getAttribute('href') + "&items=" + document.getElementById("countItems").value);
                            });

                            document.getElementById("countItems").addEventListener("change", function () {
                                window.location.href = '/department/1?items=' + this.value;
                            });
                        </script>




                </div><!-- /.grid-list-products -->

            </section><!-- /#gaming -->
        </div><!-- /.col -->
        <!-- ========================================= CONTENT : END ========================================= -->
    </div><!-- /.container -->

</section><!-- /#category-grid -->
@endsection
