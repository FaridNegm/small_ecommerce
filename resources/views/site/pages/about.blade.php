@extends('Site.layouts.app')

@section('title')
    SHIFTERS| {{ trans('app.About Us') }}
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">

    </section>

    <!-- about -->
	<section class="sec-about bg4 p-t-80 p-b-90">
		<div class="container">
			<h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
					<span style="position:relative;top:-3px;">ــــــــ </span>  About Us  <span style="position:relative;top:-3px;">ــــــــ </span>
			</h3>
			<div class="row">

				<div class="col-md-6 p-b-30">
					<div  class="IMG">
                        <img src="{{url('Admin/images/about/'.$about['image'])}}" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="p-t-10">
						<div class="p-b-29">
							<h3 class="l2-txt2 p-b-2">
								@if(Config::get('app.locale') == 'ar')
                                    {!! $about['title_ar'] !!}
                                @else
                                    {!!  $about['title_en'] !!}
                                @endif
							</h3>
						</div>
						<p class="s1-txt8 p-b-25">
							@if(Config::get('app.locale') == 'ar')
                                {!! str_limit($about['description_ar'] , 1000) !!}
                            @else
                                {!! str_limit($about['description_en'] , 1000) !!}
                            @endif
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

    <!-- team -->
	<section class=" p-t-90 p-b-110">
        <div class="p-l-15 p-r-15 p-b-48">
            <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                <span style="position:relative;top:-3px;">ــــــــ </span>  OUR TEAM  <span style="position:relative;top:-3px;">ــــــــ </span>
            </h3>
        </div>

        <div class="flex-w p-l-40 p-r-40 respon1">
            @foreach ($teams as $team)
            <div class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="all-team">
                        <img src="{{url('Admin/images/team/'.$team->image)}}" class="img-width"/>
                        <h4>
                            @if(Config::get('app.locale') == 'ar')
                                {!! $team->title_ar !!}
                            @else
                                {!!  $team->title_en !!}
                            @endif
                        </h4>
                        <p>
                            @if(Config::get('app.locale') == 'ar')
                                {!! $team->job_ar !!}
                            @else
                                {!!  $team->job_en !!}
                            @endif
                    </div><!--end all-team-->
                </div><!--end col-->
            @endforeach
        </div>
    </section>

    <!-- partner -->
	<section class=" p-t-90 p-b-110">
        <div class="p-l-15 p-r-15 p-b-48">
            <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                <span style="position:relative;top:-3px;">ــــــــ </span>  OUR PARTNER  <span style="position:relative;top:-3px;">ــــــــ </span>
            </h3>
        </div>

        <div class="flex-w p-l-40 p-r-40 respon1">

            @foreach ($partners as $partner)
                <div class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="all-team">
                        <img src="{{url('Admin/images/partner/'.$partner->image)}}" class="img-width"/>
                        <h4>
                            @if(Config::get('app.locale') == 'ar')
                                {!! $partner->title_ar !!}
                            @else
                                {!!  $partner->title_en !!}
                            @endif
                        </h4>
                    </div><!--end all-team-->
                </div><!--end col-->
            @endforeach

        </div>
    </section>

@endsection

@section('footer')

@endsection
