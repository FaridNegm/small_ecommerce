@extends('Site.layouts.app')

@section('title')
    | الاشتراطات واللوائح
@endsection

@section('header')

@endsection

@section('content')



<div class="container">
        <div class="row">



        <div class="col-md-3">

        <div class="cleaner-h5"></div>

        <ul class="right-colum">
        <li ><a href="{{ url('amana') }}"><i class="fa fa-arrow-left"></i> عن الامانة</a></li>
        <li class="selected"> <a href="{{ url('calends') }}"><i class="fa fa-arrow-left"></i> الاشتراطات واللوائح</a></li>
        <li><a href="{{ url('gate') }}"><i class="fa fa-arrow-left"></i>جديد البوابة</a></li>
        <li ><a href="{{ url('gayza') }}"><i class="fa fa-arrow-left"></i> جوائز البوابة</a></li>
        <li><a href="{{ url('gardens') }}"><i class="fa fa-arrow-left"></i> الحدائق والمنتزهات</a></li>
        </ul>





        <div class="cleaner-h3"></div>


        <a class="twitter-timeline" data-width="100%" data-height="450" data-theme="gray" data-link-color="#19CF86" href="https://twitter.com/AmantAlshmmalya?ref_src=twsrc%5Etfw">Tweets by AmantAlshmmalya</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  

        <div class="cleaner-h3"></div>





        </div><!--end col-3-->

        <div class="col-md-9">

                <div class="cleaner-h5"></div>

                <div class="title title-big">
                <h2 class="green">الاشتراطات واللوائح  </h2>
                <div class="cleaner"></div>
                <div class="line green"></div>
                <div class="cleaner-h1"></div>
                </div><!--end title-->

                @foreach ($calends as $one)
                    <div class="background-gray">
                        <div class="row">


                        <div class="col-md-11">
                            <h4>{{ $one->title }}</h4>
                        </div><!--end col-9-->

                        <div class="col-md-1">
                            <a class="downloud" href="{{ url('Admin/files/calends/'.$one->file) }}" download=""><i class="fa fa-download"></i></a>
                        </div><!--end col-3-->

                        </div><!--end background-gray-->
                    </div><!--end row-->
                @endforeach
                <div class="cleaner-h3"></div>
                <div class="text-center">
                    {!! $calends->render() !!}
                </div>
                </div><!--end col-8-->



                </div><!--end row-->
                </div><!--end container-->


                <div class="cleaner-h4"></div>
@endsection

@section('footer')

        <script>

        </script>

@endsection
