@extends('Site.layouts.app')

@section('title')
    |الأمناء
@endsection

@section('header')

@endsection

@section('content')


<div class="container">
    <div class="row">


    <div class="col-md-3">
        <div class="cleaner-h5"></div>

        <ul class="right-colum">
            <li ><a href="{{ url('princes') }}"><i class="fa fa-arrow-left"></i> امراء المنطقه الشمالية</a></li>
            <li class="selected"><a href="{{ url('ameen') }}"><i class="fa fa-arrow-left"></i> امناء المنطقة الشمالية</a></li>
            <li><a href="{{ url('amana') }}"><i class="fa fa-arrow-left"></i>عن الامانة</a></li>
        </ul>

        <div class="cleaner-h3"></div>


        <a class="twitter-timeline" data-width="100%" data-height="450" data-theme="gray" data-link-color="#19CF86" href="https://twitter.com/AmantAlshmmalya?ref_src=twsrc%5Etfw">Tweets by AmantAlshmmalya</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  
        <div class="cleaner-h3"></div>

    </div><!--end col-3-->

    <div class="col-md-9">

    <div class="cleaner-h5"></div>

    <div class="title title-big">
        <h2 class="green">امناء المنطقة الشمالية </h2>
        <div class="cleaner"></div>
        <div class="line green"></div>
        <div class="cleaner-h1"></div>
    </div><!--end title-->

    <div class="row">
        @foreach ($ameen as $one)
            <div class="col-md-6" >
                <div class="new-1 amen">
                    <a href="{{ url('ameen/'.$one->id) }}">
                        <img src="{{ url('Admin/images/ameen/'.$one->image)}}" class="img-responsive"/>
                        <h3>{{ str_limit($one->title , 60) }}</h3>
                        {{-- <p></p> --}}
                        <p>{{  str_limit(strip_tags($one->description) , 200) }}</p>

                    </a>
                </div><!--end-new-1-->
            </div><!--end col-6-->
        @endforeach
        <div class="cleaner-h3"></div>
        <div class="text-center">
            {!! $ameen->render() !!}
        </div>
    </div><!--end row-->

    </div><!--end col-8-->



    </div><!--end row-->
    </div><!--end container-->


    <div class="cleaner-h4"></div>


@endsection

@section('footer')

@endsection
