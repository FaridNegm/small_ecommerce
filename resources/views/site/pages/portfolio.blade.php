@extends('Site.layouts.app')

@section('title')
    SHIFTERS| {{ trans('app.Portfolio') }}
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">
            
    </section>

    <!-- Featured properties start -->
    <div class="featured-properties content-area-2">
        <div class="container">
            <div class="main-title">
                <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                    <span style="position:relative;top:-3px;">ــــــــ </span>  Featured Properties  <span style="position:relative;top:-3px;">ــــــــ </span>  
                </h3>
            </div>
            <ul class="list-inline-listing filters filteriz-navigation"  style="text-align: center;margin: 30px 0px;">
                <li class="active btn filtr-button filtr" data-filter="all">All</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr">UI/UX</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr">WEB DESIGNER</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr">MOBILE APP</li>
                <li data-filter="4" class="btn btn-inline filtr-button filtr">CORBIT ID</li>
            </ul>
            <div class="row filter-portfolio">
                <div class="cars">
                    @foreach($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="{{ $portfolio->type }}">
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <img src="{{  url('Admin/images/portfolio/'.$portfolio->image) }}" alt="property-7" class="img-fluid">
                                    </a>
                                    <div class="property-overlay">
                                        <a href="{{ $portfolio->url }}" target="_blank" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Featured properties end -->

@endsection

@section('footer')

@endsection
