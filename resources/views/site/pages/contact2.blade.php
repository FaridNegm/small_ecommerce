@extends('Site.layouts.app')

@section('title')
    SHIFTERS| {{ trans('app.Contact Us') }}
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">

    </section>

    <!-- get in touch -->
	<section class="sec-about bg4 p-t-80 p-b-90">
        <div class="container">
            <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                <span style="position:relative;top:-3px;">ــــــــ </span>  GET IN TOUCH  <span style="position:relative;top:-3px;">ــــــــ </span>
            </h3>
            <div class="row">

                <div class="col-md-6 p-b-30">
                    <div class="IMG-ABOUT">
                        <img src="{{ url('Admin/images/setting/'.$contacts['contact_image']) }}" alt="IMG-ABOUT" style="margin: 10px 10px;">
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="p-t-10">
                        <p class="p-b-25" style="color: #555;">

                             @if(Config::get('app.locale') == 'ar')
                                {!! $contacts['contact_description_ar'] !!}
                            @else
                                {!! $contacts['contact_description_en'] !!}
                            @endif
                       
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

	<!-- Contact -->
	<section class="contact_us">

      <div class="cleaner-h5"></div>


		<h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
			<span style="position:relative;top:-3px;">ــــــــ </span>  CONTACT US  <span style="position:relative;top:-3px;">ــــــــ </span>
		</h3>
        <div class="container">
            <div class="row">

			<div class="col-md-6 col-xs-12 pull-left contact_us_form">
                <form method="post" action="{{ url('admin/message') }}" enctype="multipart/form-data">
                    @csrf
					<div class="form-group col-md-6 col-xs-12 pull-left">
						<input type="text" class="form-control" name="name" placeholder="NAME" required>
					</div>
					<div class="form-group col-md-6 col-xs-12 pull-right">
						<input type="number" class="form-control" name="phone" placeholder="PHONE NUMBER" required>
					</div>
					<div class="form-group col-md-6 col-xs-12 pull-left" >
						<input type="text" class="form-control" name="address" placeholder="ADDRESS" required>
					</div>
					<div class="form-group col-md-6 col-xs-12 pull-right">
						<input type="email" class="form-control" name="email" placeholder="EMAIL" required>
					</div>
					<div class="form-group col-md-12 col-xs-12 pull-left">
						<textarea class="form-control" name="message" placeholder="YOUR MESSAGE" required rows="8"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<button class="btn btn-default clear">Clear</button>
				</form>
			</div>

			<div class="col-md-6 col-xs-12 pull-right">
				<div class="details_contact_us">
					<i class="fa fa-location-arrow"></i> <span>{{ $contacts['address'] }}</span>
				</div>
				<div class="details_contact_us">
					<i class="fa fa-envelope"></i> <span>{{ $contacts['email'] }}</span>
				</div>
				<div class="details_contact_us">
					<i class="fa fa-home"></i> <span>{{ $contacts['phone'] }}</p>
				</div>

				<div class="social_contact_us">
					<ul>
						<li><a href="{{ url('/') }}" target="_blank"><i class="fa fa-home"></i> </a></li>
						<li><a href="{{ $contacts['facebook'] }}" target="_blank"><i class="fa fa-facebook"></i> </a></li>
						<li><a href="{{ $contacts['whatsapp'] }}" target="_blank"><i class="fa fa-whatsapp"></i> </a></li>
						<li><a href="{{ $contacts['facebook'] }}" target="_blank"><i class="fa fa-home"></i> </a></li>
					</ul>
                </div>

                <div class="details_contact_us" style="width: 70%;margin-left: -5px;">
                    <span>{!! $contacts['location_map'] !!}</p>
                </div>
			</div>

            </div>
        </div>


        <div class="cleaner-h5"></div>
        <div class="cleaner-h3"></div>

    </section>

@endsection

@section('footer')
    <script>
        $(document).ready(function(){
            $('.clear').click(function(e){
                e.preventDefault();
                $('input').val('');
                $('textarea').val('');
            });

            if('form input' == ''){
                alert('write');
            }
        });
    </script>
@endsection
