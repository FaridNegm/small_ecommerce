@extends('Site.layouts.app')

@section('title')
    {{-- | @foreach ($gayza as $one) {{ $one->title}} @endforeach --}}
@endsection

@section('header')

@endsection

@section('content')




<div class="container">
        <div class="row">
            
    <div class="col-md-3">
            <div class="cleaner-h5"></div>
    
            <ul class="right-colum">
                    <li class="selected"><a href="{{ url('news') }}"><i class="fa fa-arrow-left"></i> الأخبار</a></li>
                    <li ><a href="{{ url('articles') }}"><i class="fa fa-arrow-left"></i> المقالات الصحفيه اليوميه</a></li>
                    <li ><a href="{{ url('investment') }}"><i class="fa fa-arrow-left"></i>الفرص الإستثماريه</a></li>
                    <li ><a href="{{ url('challengs') }}"><i class="fa fa-arrow-left"></i>المنافسات</a></li>
            </ul>
    
            <div class="cleaner-h3"></div>
    
    
            <a class="twitter-timeline" data-width="100%" data-height="450" data-theme="gray" data-link-color="#19CF86" href="https://twitter.com/AmantAlshmmalya?ref_src=twsrc%5Etfw">Tweets by AmantAlshmmalya</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  
    
            <div class="cleaner-h3"></div>
    
        </div><!--end col-3-->
        <div class="col-md-9">

        <div class="cleaner-h5"></div>

        <div class="title">
        <h2 class="black">الاخبار </h2>
        <div class="cleaner"></div>
        <div class="line black"></div>
        <div class="cleaner-h1"></div>
        </div><!--end title-->

        <div class="row">

        <div class="col-md-12">

        @foreach ($news as $one)
            <div class="news">

                <img src="{{ url('Admin/images/news/'.$one->image)}}" class="img-responsive"/>
                <h3>{{ $one->title }}</h3>

                <p>{!!  $one->description !!}</p>

                {{--  <div class="share">
                <h4>مشاركة الخبر</h4>

                <div id="shareRoundIcons"></div>
            </div><!--end share-facebook-->  --}}
            </div><!--end-new-1-->
        @endforeach

        <div class="cleaner-h2"></div>

         <div class="buttoms">
           <ul>
           <li><a href="{{ url('news/'.$next) }}" class="btn btn-prv">الخبر التالى</a></li>
           <li><a href="{{ url('news/'.$previous) }}" class="btn btn-next">الخبر السابق</a></li>

           </ul>
           </div><!--end buttoms-->

           <div class="cleaner-h5"></div>




        </div><!--end col-6-->


        </div><!--end row-->

        </div><!--end col-8-->

       

        </div><!--end row-->
        </div><!--end container-->


        <div class="cleaner-h4"></div>


@endsection

@section('footer')

@endsection
