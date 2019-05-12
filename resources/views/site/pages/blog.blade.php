@extends('Site.layouts.app')

@section('title')
    SHIFTERS| {{ trans('app.Blog') }}
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">
            
    </section>

    <!-- Blog -->
	<section class="sec-blog bg0 p-t-100 p-b-30">
        <div class="container">
            <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                <span style="position:relative;top:-3px;">ــــــــ </span>  Blog  <span style="position:relative;top:-3px;">ــــــــ </span>  
            </h3>
            <h2 class="l2-txt2 p-b-2 txt-center about_us_h3">
                News Feeds 
            </h2>
            
            <div class="cleaner-h5"></div>
            
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-sm-6 col-md-3 p-b-63">
                        <!-- item event -->
                        <div class="item-event box-blog-gemy">
                            <a href="{{ url('blog/'.$blog->id) }}" class="wrap-pic-w how-overlay2">
                                <img src="{{ url('Admin/images/blog/'.$blog->image) }}" alt="IMG-BLOG">
                            </a>

                            <div class="p-t-10">
                                <h4 class="p-b-13">
                                    <a href="{{ url('blog/'.$blog->id) }}" class="m2-txt1 hov-cl1 trans-04">
                                         @if(Config::get('app.locale') == 'ar')
                                            {!! str_limit($blog->title_ar , 70) !!}
                                        @else
                                            {!! str_limit($blog->title_en , 70) !!}
                                        @endif
                                    </a>
                                </h4>

                                <div class="s1-txt3 p-b-18">
                                    @if(Config::get('app.locale') == 'ar')
                                        {!! str_limit($blog->description_ar , 160 , '......') !!}
                                    @else
                                        {!! str_limit($blog->description_en , 160 , '......') !!}
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
