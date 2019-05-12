@extends('Site.layouts.app')

@section('title')
    SHIFTERS| {{ trans('app.Jobs') }}
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">

    </section>

    <!-- Job Title -->
	<section class="sec-about bg4 p-t-80 p-b-90 jobs">
        <div class="container">
            <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                <span style="position:relative;top:-3px;">ــــــــ </span>  WORKING IN SHIFTS  <span style="position:relative;top:-3px;">ــــــــ </span>
            </h3>

			<p class="text-center">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!
			</p>
        </div>
    </section>

    <!-- Position -->
	<section class="sec-about bg4 p-t-40 p-b-90 position">
        <div class="container">
            <h3 class="">
                OPEN POSITIONS
            </h3>

			<div class="position_details">
                @foreach ($jobs as $job)
				<ul>
					<li>
						<a href="{{ url('job_details/'.$job->id) }}"><span class="col-xs-6  title_image"><img src="{{ url('Admin/images/job/'.$job->image) }}" />{{ $job->job_title  }}</span></a>
						<span class="col-xs-6  float-right date">{{ $job->date }}</span>
					</li>
                </ul>
                @endforeach
			</div>
        </div>
    </section>

<div class="cleaner-h2"></div>

@endsection

@section('footer')

@endsection
