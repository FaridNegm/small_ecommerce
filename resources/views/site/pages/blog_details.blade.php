@extends('Site.layouts.app')

@section('title')
    SHIFTERS| @foreach ($blogs as $blog) 
                 @if(Config::get('app.locale') == 'ar')
                        {!! $blog->title_ar !!}
                    @else
                        {!! $blog->title_en !!}
                    @endif
            @endforeach
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">
            
    </section>

    <!-- Blog detail-->
	<section class="sec-blog-detail bg0 p-t-100 p-b-30">
		<h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
			<span style="position:relative;top:-3px;">ــــــــ </span>  Blog  <span style="position:relative;top:-3px;">ــــــــ </span>  
		</h3>
		<h2 class="l2-txt2 p-b-2 txt-center about_us_h3 blog_details_sub_heading">
			Malesuada Eros Blandit
		</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 p-b-30">
                    @foreach ($blogs as $blog)
                    <div class="p-r-0-lg blog-details">
                      
                        <div class="content-blog">
                            
                            <div class="how8-parent">
                                <div class=" blog_details_image">
                                    <img src="{{ url('Admin/images/blog/'.$blog->image) }}" alt="IMG-BLOG">
                                </div>
                            </div>
                                
                            <div class="p-t-38 p-b-20">
                                <h4 class="p-b-28 l2-txt10">
                                     @if(Config::get('app.locale') == 'ar')
                                            {!! $blog->title_ar !!}
                                        @else
                                            {!! $blog->title_en !!}
                                        @endif
                                </h4>

                                <p class="s1-txt3 p-b-20">
                                     @if(Config::get('app.locale') == 'ar')
                                            {!! $blog->description_ar !!}
                                        @else
                                            {!! $blog->description_en !!}
                                        @endif
                                </p>
                            </div>
                            
                                <div class="flex-sb-m flex-w">
                                    <h5 class="col-md-3 col-xs-12">SHARE:</h5>

                                    <div class="flex-w p-t-10 p-b-10 col-md-9 col-xs-12">
                                        <ul class="main-menu">
                                            <li style="margin:0px 10px;">
                                                <a href="home.html" style="background-color: #3b5998;padding: 10px;color: #fff;border-radius: 7px;font-size:8px;font-weight: 100;font-family: sans-serif;width: 90px;display: inline-block;text-align:center"><i class="fa fa-facebook" style="margin-right: 10px;"></i> Facebook</a>
                                            </li>
                                            
                                            <li style="margin:0px 10px;">
                                                <a href="home.html" style="background-color: #25d366;padding: 10px;color: #fff;border-radius: 7px;font-size:8px;font-weight: 100;font-family: sans-serif;width: 90px;display: inline-block;text-align:center"><i class="fa fa-whatsapp" style="margin-right: 10px;"></i> whatsapp</a>
                                            </li>
                                            
                                            <li style="margin:0px 10px;">
                                                <a href="home.html" style="background-color: #1da1f2;padding: 10px;color: #fff;border-radius: 7px;font-size:8px;font-weight: 100;font-family: sans-serif;width: 90px;display: inline-block;text-align:center"><i class="fa fa-twitter" style="margin-right: 10px;"></i> twitter</a>
                                            </li>
                                            
                                            <li style="margin:0px 10px;">
                                                <a href="home.html" style="background-color: gray;padding: 10px;color: #fff;border-radius: 7px;font-size:8px;font-weight: 100;font-family: sans-serif;width: 90px;display: inline-block;text-align:center"><i class="fa fa-envelope" style="margin-right: 10px;"></i> email</a>
                                            </li>
                                            
                                            <li style="margin:0px 10px;">
                                                <a href="home.html" style="background-color: #007bb5;padding: 10px;color: #fff;border-radius: 7px;font-size:8px;font-weight: 100;font-family: sans-serif;width: 90px;display: inline-block;text-align:center"><i class="fa fa-linkedin" style="margin-right: 10px;"></i> linked in</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                        </div>
                    </div>
                    @endforeach

                    <div class="cleaner-h3"></div>
                                
                                

                    <div class="cleaner-h3"></div>
            
                    <h5 class="m2-txt8 p-b-35">
                        Recent Posts
                    </h5>
                    
                    <div class="cleaner-h3"></div>

                    <div class="row">
                                       
                                       
                                        
                            @foreach($recent as $blog)
                            <div class="col-sm-12 col-md-4 p-b-63">
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
                                                {!! str_limit($blog->description_ar , 160) !!}
                                            @else
                                                {!! str_limit($blog->description_en , 160) !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div><!--end row-->   
            </div>
                

                <div class="col-md-4  recent_section">
					<h2 class="l2-txt2 p-b-2 txt-center" style="margin: -45px 0px 20px;font-family: Montserrat-Regular;font-size: 18px;">
						Portfolio
					</h2>

                    @foreach ($portfolios as $portfolio)
                        <div class="recent" >
                            <div class="col-xs-12 image float-left text-center">
                                <a href="{{ url('portfolio') }}">
                                    <img src="{{ url('Admin/images/portfolio/'.$portfolio->image) }}" class="img-responsive" width="80%" height="120px;"/>
                                </a>
                            </div>
                        </div>
                    @endforeach
					
				</div>
            </div>
        </div>
    </section>

@endsection

@section('footer')

@endsection
