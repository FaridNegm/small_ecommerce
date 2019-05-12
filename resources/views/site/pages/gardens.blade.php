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
        <li > <a href="{{ url('calends') }}"><i class="fa fa-arrow-left"></i> الاشتراطات واللوائح</a></li>
        <li><a href="{{ url('gate') }}"><i class="fa fa-arrow-left"></i>جديد البوابة</a></li>
        <li ><a href="{{ url('gayza') }}"><i class="fa fa-arrow-left"></i> جوائز البوابة</a></li>
        <li class="selected"><a href="{{ url('gardens') }}"><i class="fa fa-arrow-left"></i> الحدائق والمنتزهات</a></li>
        </ul>


        <div class="cleaner-h3"></div>





        <a class="twitter-timeline" data-width="100%" data-height="450" data-theme="gray" data-link-color="#19CF86" href="https://twitter.com/AmantAlshmmalya?ref_src=twsrc%5Etfw">Tweets by AmantAlshmmalya</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  



        <div class="cleaner-h3"></div>





        </div><!--end col-3-->

        <div class="col-md-9">

                <div class="cleaner-h5"></div>

                <div class="title title-big">
                <h2 class="green">الحدائق والمنتزهات </h2>
                <div class="cleaner"></div>
                <div class="line green"></div>
                <div class="cleaner-h1"></div>
                </div><!--end title-->


                <table class="table-garden">

                  <tr>
                    <th>الاسم</th>
                    <th>الوحده</th>
                    <th>الحى</th>
                    <th> مساحة كلية م2</th>
                    <th>موقع الحديقة</th>
                  </tr>
                  @foreach ($gardens as $one)
                    <tr>
                        <td>{{ $one->name }}</td>
                        <td>{{ $one->unit }}</td>
                        <td>{{ $one->district }}</td>
                        <td>{{ $one->space }}</td>
                        <td id="modal_tr">
                            <button id="modal"  garden_id="{{ $one->id }}" garden_location="{{ $one->location }}" style="background: transparent;border: 0px;font-size: 18px;color: blue;">
                                <i class="fa fa-location-arrow"></i>
                            </button>
                        </td>
                    </tr>
                  @endforeach

                  <div class="cleaner-h3"></div>
                    <div class="text-center">
                        {!! $gardens->render() !!}
                    </div>


                </table>

                </div><!--end col-8-->



                </div><!--end row-->
                </div><!--end container-->


                <div class="cleaner-h4"></div>


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            {{-- @foreach ($gardens as $one)
                                {!! $one->location !!}
                            @endforeach --}}

                            {{-- ddd --}}
                    </div>
                </div>
                </div>

@endsection

@section('footer')

        <script>
            $("document").ready(function(){
                $("#modal_tr #modal").each(function(){
                    $(this).click(function(){
                        {{-- var garden_id = $(this).attr('garden_id'); --}}
                        {{-- alert(garden_id); --}}

                        var garden_location = $(this).attr('garden_location');
                        $("#exampleModal").modal('show');
                        $("#exampleModal .modal-content").html(garden_location);
                    });

                });
            });
        </script>

@endsection
