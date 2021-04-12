@extends('Job.layout.master')

@section('content')
    <section id="category-grid">
        <div class="container">

            <!-- ========================================= BREADCRUMB ========================================= -->

            <div class="col-xs-12 col-sm-12 ">
                <section id="gaming">
                    <div class="grid-list-products">
                        <h2 class="section-title">{{$current_department->job_category}}</h2>

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
                            @if($jobs)
                                <div class="product-sec1">
                                    @foreach ($jobs as $job)
                                        <div class="company-list">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="company-logo">
                                                        <img src="/storage/images/jobCompanyLogo/{{$job->logo}}" class="img-responsive" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="company-content">
                                                        <h3>{{$job->name}}<span class="full-time">{{$job->job_type}}</span></h3>
                                                        <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$job->company_name}}</span><span class="company-location"><i class="fa fa-map-marker"></i> {{$job->company_address}}</span><span class="package"><i class="fa fa-money"></i>{{$job->salary}}</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 pt-2">
                                                    @if(!Auth::user())
                                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                                            <input type="submit" name="submit" value="Apply" class="button"/>
                                                        </div>
                                                    @else
                                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                                            <a href="{{ url('/job/add/' . $job->id) }}"><input type="submit" name="submit" value="Apply" class="button"/></a>
                                                        </div>
                                                    @endif
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
                                        {{ $jobs->links() }}
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="result-counter">
                                            Showing <span>{{ $jobs->count() }}</span> of <span>{{ $jobs->total() }}</span> results
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
                                window.location.href = '/jobCat/1?items=' + this.value;
                            });
                        </script>




                    </div><!-- /.grid-list-products -->

                </section><!-- /#gaming -->
            </div><!-- /.col -->
            <!-- ========================================= CONTENT : END ========================================= -->
        </div><!-- /.container -->
    </section><!-- /#category-grid -->
    <!-- Inner Banner -->

@endsection

