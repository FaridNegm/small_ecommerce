@extends('Site.layouts.app')

@section('title')
    SHIFTERS| {{ trans('app.Services') }}
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">
            
    </section>

    <section class="sec-blog bg0 p-t-100 p-b-30">
            <div class="container">
                <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                    <span style="position:relative;top:-3px;">ــــــــ </span>  OUR SERVICES  <span style="position:relative;top:-3px;">ــــــــ </span>  
                </h3>
                <h2 class="l2-txt2 p-b-2 txt-center about_us_h3">
                    WHAT WE DO
                </h2>
                <div class="row text-center services" style="margin-top: 40px;">
                    @foreach($services as $service)
                        <div class="col-sm-6 col-md-3">
                            <!-- item event -->
                            <div class="item-event">
                                <div class="p-t-25 box-servise-gemy">
                                    <div class="icon">
                                        <img src="{{ url('Admin/images/service/'.$service->image) }}"/>
                                    </div>
                                    <h4 class="p-b-13">
                                        
                                        @if(Config::get('app.locale') == 'ar')
                                            {!! $service->title_ar !!}
                                        @else
                                            {!!  $service->title_en !!}
                                        @endif
                                    </h4>
        
                                    <div class="s1-txt3 p-b-18">
                                        @if(Config::get('app.locale') == 'ar')
                                            {!! str_limit($service->description_ar , 160 , '......') !!}
                                        @else
                                            {!!  str_limit($service->description_en , 160 , '......') !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection

@section('footer')

@endsection
