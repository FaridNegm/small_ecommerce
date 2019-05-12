@extends('Site.layouts.app')

@section('title')
    | @foreach ($ameen as $one) {{ $one->title}} @endforeach
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
</ul>





<div class="cleaner-h3"></div>


<a class="twitter-timeline" data-width="100%" data-height="450" data-theme="gray" data-link-color="#19CF86" href="https://twitter.com/AmantAlshmmalya?ref_src=twsrc%5Etfw">Tweets by AmantAlshmmalya</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  


<div class="cleaner-h3"></div>





</div><!--end col-3-->

<div class="col-md-9">

<div class="cleaner-h5"></div>

<div class="title title-big">
@foreach ($ameen as $one)
    <h2 class="green">
        {{ $one->title }}
    </h2>
@endforeach
<div class="cleaner"></div>
<div class="line green"></div>
<div class="cleaner-h1"></div>
</div><!--end title-->

@foreach ($ameen as $one)
    <div class="new-1 ameen">

        <img src="{{ url('Admin/images/ameen/'.$one->image)}}" class="img-responsive"/>
        <h3>{{ $one->title }}</h3>
        <p>{!!  $one->description !!}</p>

        <div class="cleaner-h2"></div>

    {{--  <div class="share">
    <h4>شارك</h4>

    <div id="shareRoundIcons"></div>
    </div><!--end share-facebook-->  --}}
    </div><!--end-new-1-->
@endforeach


 <div class="comments">

   <h4> التعليقات</h4>
   @if(count($all_comments) <= 0)
        <h3 style="color: gray; margin: 20px;"> لاتوجد تعليقات .</h3>
    @else
        @foreach ($all_comments as $one)
            <div class="one-comment">
                    <div><img src="{{ url('Admin/images/ameen/'.$one->image)}}" class="img-circle img-responsive"/></div>
                    <h4>{{ $one->name }}</h4>
                    <p>{{ strip_tags($one->message) }}</p>
            </div>
        @endforeach
    @endif

   </div><!--end comments-->

   <div class="form-comment">
   <h4>اترك تعليق</h4>
   <div class="line-recent"></div>

   <div class="cleaner-h3"></div>

   <form method="post" action="{{ url('admin/add_ameen_comments') }}">
       @csrf
        @foreach ($ameen as $one)
            <input type="hidden" name="ameen_id" value="{{ $one->id }}"/>
        @endforeach
        <input type="text"  name="name" placeholder="الاسم"/>
        <input class="pull-right" type="email" name="email" placeholder="الايميل"/>

        <textarea name="message"></textarea>
        <input type="submit" class="btn btn-gemy" value="ارسل">
   </form>

   </div><!--end form-comment-->

   <div class="cleaner-h4"></div>







</div><!--end col-8-->



</div><!--end row-->
</div><!--end container-->


<div class="cleaner-h4"></div>



@endsection

@section('footer')
    @include('Admin/layouts/message')

    <!-- Theme JS files -->
    <script src="{{ url('Admin') }}/js/plugins/notifications/noty.min.js"></script>
    <script src="{{ url('Admin') }}/js/plugins/notifications/jgrowl.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.clear').click(function(e){
                e.preventDefault();
                $('input').val('');
            });

            if('form input' == ''){
                alert('write');
            }
        });
    </script>
@endsection
