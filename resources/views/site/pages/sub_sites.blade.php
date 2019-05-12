@extends('Site.layouts.app')

@section('title')
    | المواقع الفرعيه
@endsection

@section('header')

@endsection

@section('content')




<div class="container">
        <div class="row">
        <div class="col-md-12">

        <div class="cleaner-h5"></div>

        <div class="title">
        <h2 class="black">المواقع الفرعيه</h2>
        <div class="cleaner"></div>
        <div class="line black"></div>
        <div class="cleaner-h1"></div>
        </div><!--end title-->

        <div class="row">

        {{-- <div class="col-md-4"> --}}

        <div class="row">
                @foreach ($sub_sites as $one)
                    <div class="col-md-4">
                        <div class="image-new">
                            <a href="{{ $one->url }}" target="_blank">
                                <img src="{{ url('Admin/images/sub_sites/'.$one->image) }}" class="img-responsive"/>
                                <div class="title-news">
                                <p>{{ str_limit($one->title , 30) }}</p>
                                </div><!--end title-new-->
                            </a>
                        </div><!--end image-new-->
                    </div><!--end col-4-->
                @endforeach
        </div><!--end row-->
        <div class="text-center">
            {!! $sub_sites->render() !!}
        </div>
        {{-- @foreach ($sub_sites as $one)
            <div class="news">
                @if($one->image != "")
                    <img src="{{ url('Admin/images/sub_sites/'.$one->image)}}" class="img-responsive"/>
                @else

                @endif

                <h3>{{ $one->title }}</h3>

                <p>{!!  $one->description !!}</p>

                <div class="share">
                <h4>مشاركة الخبر</h4>

                <div class="social-linkss">
                                        <a href="#" class="fa fa-facebook-f"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-google"></a>
                                        <a href="#" class="fa fa-pinterest-p"></a>
                                    </div>
            </div><!--end share-facebook-->
            </div><!--end-new-1-->
        @endforeach --}}

        <div class="cleaner-h2"></div>

           <div class="cleaner-h5"></div>




        {{-- </div><!--end col-6--> --}}


        </div><!--end row-->

        </div><!--end col-8-->

        </div><!--end row-->
        </div><!--end container-->


        <div class="cleaner-h4"></div>


@endsection

@section('footer')

@endsection
