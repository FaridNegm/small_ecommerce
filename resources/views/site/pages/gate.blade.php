@extends('Site.layouts.app')

@section('title')
    | جديد البوابه
@endsection

@section('header')

@endsection

@section('content')


<div class="container">
    <div class="row">


    <div class="col-md-3">
        <div class="cleaner-h5"></div>

        <ul class="right-colum">
            <li><a href="{{ url('amana') }}"><i class="fa fa-arrow-left"></i> عن الامانة</a></li>
            <li><a href="{{ url('calends') }}"><i class="fa fa-arrow-left"></i> الاشتراطات واللوائح</a></li>
            <li class="selected"><a href="{{ url('gate') }}"><i class="fa fa-arrow-left"></i>جديد البوابة</a></li>
            <li><a href="{{ url('gayza') }}"><i class="fa fa-arrow-left"></i> جوائز البوابة</a></li>
            <li><a href="{{ url('gardens') }}"><i class="fa fa-arrow-left"></i> الحدائق والمنتزهات</a></li>
        </ul>


        <div class="cleaner-h3"></div>


        <a class="twitter-timeline" data-width="100%" data-height="450" data-theme="gray" data-link-color="#19CF86" href="https://twitter.com/AmantAlshmmalya?ref_src=twsrc%5Etfw">Tweets by AmantAlshmmalya</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  

        <div class="cleaner-h3"></div>

    </div><!--end col-3-->

    <div class="col-md-9">

    <div class="cleaner-h5"></div>

    <div class="title title-big">
        <h2 class="green">جديد البوابة</h2>
        <div class="cleaner"></div>
        <div class="line green"></div>
        <div class="cleaner-h1"></div>
    </div><!--end title-->

    <div class="row">
        @foreach ($gate as $one)
            <div class="col-md-12">
                <div class="new-1 amen">
                    <a href="{{ url('gate/'.$one->id) }}">
                        <img src="{{ url('Admin/images/gate/'.$one->image)}}" class="img-responsive"/>
                        <h3>{{ str_limit($one->title , 150) }}</h3>
                        <p>{{  str_limit(strip_tags($one->description) , 250) }}</p>
                    </a>
                </div><!--end-new-1-->
            </div><!--end col-6-->
        @endforeach
        <div class="cleaner-h3"></div>
        <div class="text-center">
            {!! $gate->render() !!}
        </div>
    </div><!--end row-->

    </div><!--end col-8-->



    </div><!--end row-->
    </div><!--end container-->


    <div class="cleaner-h4"></div>


@endsection

@section('footer')

@endsection
