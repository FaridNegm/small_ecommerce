@extends('Site.layouts.app')

@section('title')
    | الرئيسية
@endsection

@section('header')

@endsection

@section('content')

    <div class="sllider">
        <div class="container-fluid">
        <div class="row">

        <div class="width-50">
            <div id="carousel-example-generic-1" style="direction:ltr" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            {{--  @foreach ($sliders as $slider)
            <div class="carousel-inner" role="listbox">
                <div class="item active">

                        <img class="img-responsive img-slider relative" src="{{ url('Admin/images/slider/'.$slider->image) }}"/>

                </div>


                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic-1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic-1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @endforeach  --}}


            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="{{ url('Admin/images/news/'.$slider_one['image']) }}" alt="Chania">
                        <div class="carousel-caption">
                            <a href="{{ url('news/'.$slider_one['id']) }}">
                                <h3 class="title_slider">{!! $slider_one['title'] !!}</h3>
                                <p>{!! str_limit($slider_one['description'] , 200) !!}</p>
                            </a>
                        </div>
                      </div>

                    @foreach ($slider_news_one as $slider)
                        <div class="item">
                            <img src="{{ url('Admin/images/news/'.$slider->image) }}" alt="Chaniafff">
                            <div class="carousel-caption">
                                <a href="{{ url('news/'.$slider->id) }}">
                                    <h3 class="title_slider">{!! $slider->title !!}</h3>
                                    <p>{!! str_limit($slider->description , 200) !!}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div><!--end carsoul-->

            </div><!--end width-50-->

            @foreach ($slider_news as $one)
                <div class="width-25">
                    <img src="{{ url('Admin/images/news/'.$one->image) }}" class="img-responsive"/>
                    <div class="title-slider">
                        <a href="{{ url('news/'.$one->id) }}" target="_blank" style="color:#FFF;">
                            <p>{!! str_limit($one->title , 30) !!}</p>
                        </a>
                    </div><!--end title-slider-->
                </div><!--end width-25-->
            @endforeach

            </div><!--end row-->
            </div><!--end container-->
        </div><!--end sllider-->


    <div class="cleaner-h5"></div>


    <div class="container">
    <div class="row">
    <div class="col-md-8">

    <div class="first-news">
    <h2>اخر الاخبار </h2>
    <a class="sub-title" href="{{ url('news') }}">الاخبار</a>
    <div class="cleaner"></div>
    <div class="line"></div>
    <div class="cleaner-h1"></div>

    <div class="row">

        <div class="col-md-5">
            @foreach ($latest_news as $one)
                <div class="big-new">
                    <a href="{{ url('news/'.$one->id) }}" target="_blank"><img src="{{ url('Admin/images/news/'.$one->image) }}" class="img-responsive img-new-big"/></a>

                    <div class="title-new">
                        <a href="{{ url('news/'.$one->id) }}" target="_blank">{!! $one->title !!}</a>
                    </div><!--end title-new-->

                </div><!--end big-new-->
            @endforeach
        </div><!--end col-5-->

    <div class="col-md-7">
        @foreach ($all_news as $one)
            <div class="new-1">
                <a href="{{ url('news/'.$one->id) }}">
                    <img src="{{ url('Admin/images/news/'.$one->image) }}" class="img-responsive"/>
                    <h3>{!! str_limit($one->description , 130) !!}</h3>
                    <p><i class="fa fa-times-circle"></i> {{ $one->created_at->diffForHumans() }} </p>
                </a>
            </div><!--end-new-1-->
        @endforeach
    </div><!--end col-md-7-->

    </div><!--end row-->

    </div><!--end first-news-->

    <div class="cleaner-h2"></div>

    <div class="adv">
            @foreach (\App\Setting::get() as $one)
                <a href="#"><img src="{{ url('Admin/images/setting/'.$one->add3) }}" class="img-responsive"/></a>
            @endforeach

    </div><!--end adv-->

    <div class="cleaner-h3"></div>





    <div id="tabs">
    <div class="title">
    <ul>
    <li><a href="#tabs-1">ادارة الامانات</a></li>
    <li><a href="#tabs-2">بلديات الامانة</a></li>
    <li><a href="#tabs-3">المواقع الفرعية</a></li>
    </ul>
    <div class="line blue-green"></div>
    </div><!--end title-->

    <div class="cleaner-h3"></div>

    <div id="tabs-1">
        <div class="row">
            @foreach ($AmanaMangements as $AmanaMangement)
                <div class="col-md-4">
                    <div class="image-new">
                        <a href="{{ $AmanaMangement->url }}" target="_blank">
                            <img src="{{ url('Admin/images/amana_mangement/'.$AmanaMangement->image) }}" class="img-responsive"/>
                            <div class="title-news">
                            <p>{{ str_limit($AmanaMangement->title , 30) }}</p>
                            </div><!--end title-new-->
                        </a>
                    </div><!--end image-new-->
                </div><!--end col-4-->
            @endforeach
        </div><!--end row-->
    </div><!--end tab-1-->


    <div id="tabs-2">
        <div class="row">
            @foreach ($AmanaMunicipalitys as $AmanaMunicipality)
                <div class="col-md-4">
                    <div class="image-new">
                        <a href="{{ $AmanaMunicipality->url }}" target="_blank">
                            <img src="{{ url('Admin/images/amana_municipality/'.$AmanaMunicipality->image) }}" class="img-responsive"/>
                            <div class="title-news">
                            <p>{{ str_limit($AmanaMunicipality->title , 30) }}</p>
                            </div><!--end title-new-->
                        </a>
                    </div><!--end image-new-->
                </div><!--end col-4-->
            @endforeach
        </div><!--end row-->
    </div>

    <div id="tabs-3">
        <div class="row">
            @foreach ($SubSites as $SubSite)
                <div class="col-md-4">
                    <div class="image-new">
                        <a href="{{ $SubSite->url }}" target="_blank">
                            <img src="{{ url('Admin/images/sub_sites/'.$SubSite->image) }}" class="img-responsive"/>
                            <div class="title-news">
                            <p>{{ str_limit($SubSite->title , 30) }}</p>
                            </div><!--end title-new-->
                        </a>
                    </div><!--end image-new-->
                </div><!--end col-4-->
            @endforeach
        </div><!--end row-->
    </div>

    </div>

    <div class="cleaner-h1"></div>

    <div class="adv">
            @foreach (\App\Setting::get() as $one)
                <a href="#"><img src="{{ url('Admin/images/setting/'.$one->add4) }}" class="img-responsive"/></a>
            @endforeach

    </div><!--end adv-->

    <div class="cleaner-h3"></div>

    <div class="row">

    <div class="col-md-6">
    <div class="big-new new-buttom">

    <div class="title">
    <h2 class="black">اعلانات الامانة </h2>
    <div class="cleaner"></div>
    <div class="line black"></div>
    <div class="cleaner-h1"></div>
    </div><!--end title-->

    @if($advertisment2['image'] == "df.jpg")
        <img src="{{ url('Admin/images/amana_advertisment/'.$advertisment2['image']) }}" class="img-responsive" style="height: 253px; width:100%;"/>
    @else
        <img src="{{ url('Admin/images/amana_advertisment/'.$advertisment2['image']) }}" class="img-responsive" style="height: 253px; width:100%;"/>
    @endif

    <div class="title-new">
    <a href="{{ url('advertisment/'.$advertisment2['id']) }}">{{ str_limit($advertisment2['title'] , 30) }}</a>
    </div><!--end title-new-->

    @foreach ($AmanaAdvertisments as $AmanaAdvertisment)
        <div class="new-1">
            <a href="{{ url('advertisment/'.$AmanaAdvertisment->id) }}">
                @if($AmanaAdvertisment->image == "")
                    <img src="{{ url('Site/images/News/1038630847.jpg') }}" class="img-responsive"/>
                @else
                    <img src="{{ url('Admin/images/amana_advertisment/'.$AmanaAdvertisment->image) }}" class="img-responsive"/>

                @endif
                <h3>{{ str_limit($AmanaAdvertisment->title, 150) }}</h3>

            <p><i class="fa fa-times-circle"></i>{{ $AmanaAdvertisment->created_at->diffForHumans() }}</p>
            </a>
        </div><!--end-new-1-->
    @endforeach
    </div><!--end big-new-->

    <div class="cleaner-h3"></div>

    <div class="big-new new-buttom">

    <div class="title">
    <h2 class="red">الفرص الاستثمارية </h2>
    <div class="cleaner"></div>
    <div class="line red"></div>
    <div class="cleaner-h1"></div>
    </div><!--end title-->


    @if($investment2['image'] == "df.jpg")
    <img src="{{ url('Admin/images/investment_opportunity/'.$investment2['image']) }}" class="img-responsive" style="height: 253px; width:100%;" />
    @else
        <img src="{{ url('Admin/images/investment_opportunity/'.$investment2['image']) }}" class="img-responsive" style="height: 253px; width:100%;" />
    @endif

    <div class="title-new">
    <a href="{{ url('investment/'.$investment2['id']) }}">{{ str_limit($investment2['title'] , 30) }}</a>
    </div><!--end title-new-->

    @foreach ($InvestmentOpportunitys as $InvestmentOpportunity)
        <div class="new-1">
            <a href="{{ url('investment/'.$InvestmentOpportunity->id) }}">
                @if($InvestmentOpportunity->image == "")
                    <img src="{{ url('Site/images/News/1038630847.jpg') }}" class="img-responsive"/>
                    @else
                    <img src="{{ url('Admin/images/investment_opportunity/'.$InvestmentOpportunity->image) }}" class="img-responsive"/>

                @endif
                <h3>{{ str_limit($InvestmentOpportunity->title, 150) }}</h3>

            <p><i class="fa fa-times-circle"></i>{{ $InvestmentOpportunity->created_at->diffForHumans() }}</p>
            </a>
        </div><!--end-new-1-->
    @endforeach

    </div><!--end big-new-->
    </div><!--end col-6-->

    <div class="col-md-6">
    <div class="big-new new-buttom">

    <div class="title">
    <h2 class="orange">المقالات </h2>
    <div class="cleaner"></div>
    <div class="line orange"></div>
    <div class="cleaner-h1"></div>
    </div><!--end title-->


    @if($articles2['image'] == "df.jpg")
    <img src="{{ url('Admin/images/articles/'.$articles2['image']) }}" class="img-responsive" style="height: 253px; width:100%;"/>
    @else
        <img src="{{ url('Admin/images/articles/'.$articles2['image']) }}" class="img-responsive" style="height: 253px; width:100%;"/>
    @endif

    <div class="title-new">
    <a href="{{ url('articles/'.$articles2['id']) }}">{{ str_limit($articles2['title'] , 30) }}</a>
    </div><!--end title-new-->

    @foreach ($Articles as $Articles)
        <div class="new-1">
            <a href="{{ url('articles/'.$Articles->id) }}">
                @if($Articles->image == "")
                    <img src="{{ url('Site/images/News/1038630847.jpg') }}" class="img-responsive"/>
                @else
                <img src="{{ url('Admin/images/articles/'.$Articles->image) }}" class="img-responsive"/>

                @endif
                <h3>{{ str_limit($Articles->title, 150) }}</h3>

            <p><i class="fa fa-times-circle"></i>{{ $Articles->created_at->diffForHumans() }}</p>
            </a>
        </div><!--end-new-1-->
    @endforeach

    </div><!--end big-new-->

    <div class="cleaner-h3"></div>

    <div class="big-new new-buttom">

    <div class="title">
    <h2 class="blue">المنافسات </h2>
    <div class="cleaner"></div>
    <div class="line blue"></div>
    <div class="cleaner-h1"></div>
    </div><!--end title-->


    @if($challengs2['image'] == "df.jpg")
    <img src="{{ url('Admin/images/challengs/'.$challengs2['image']) }}" class="img-responsive" style="height: 253px; width:100%;"/>
    @else
        <img src="{{ url('Admin/images/challengs/'.$challengs2['image']) }}" class="img-responsive" style="height: 253px; width:100%;"/>
    @endif

    <div class="title-new">
    <a href="{{ url('challengs/'.$challengs2['id']) }}">{{ str_limit($challengs2['title'] , 30) }}</a>
    </div><!--end title-new-->

    @foreach ($Challengs as $Challeng)
        <div class="new-1">
            <a href="{{ url('challengs/'.$Challeng->id) }}">
                @if($Challeng->image == "")
                <img src="{{ url('Site/images/News/1038630847.jpg') }}" class="img-responsive"/>
                @else
                <img src="{{ url('Admin/images/challengs/'.$Challeng->image) }}" class="img-responsive"/>

                @endif
                <h3>{{ str_limit($Challeng->title, 150) }}</h3>

            <p><i class="fa fa-times-circle"></i>{{ $Challeng->created_at->diffForHumans() }}</p>
            </a>
        </div><!--end-new-1-->
    @endforeach

    </div><!--end big-new-->

    </div><!--end col-6-->

    </div><!--end row-->

    </div><!--end col-8-->

    <div class="col-md-4">

    <div class="adv-small">
        @foreach (\App\Setting::get() as $one)
            <a href="#"><img src="{{ url('Admin/images/setting/'.$one->add1) }}" class="img-responsive"/></a>
        @endforeach
    </div><!--end adv-->

    <div class="cleaner-h3"></div>

    <div class="videos">

    <div class="title">
    <h2 class="orange">فيديوهات </h2>
    <div class="cleaner"></div>
    <div class="line orange"></div>
    <div class="cleaner-h1"></div>
    </div><!--end title-->

    <div >
        {!! \App\Setting::first()->video !!}
    </div>


    </div><!--end videos-->

    <div class="cleaner-h3"></div>
    <a class="twitter-timeline" data-width="100%" data-height="450" data-theme="gray" data-link-color="#19CF86" href="https://twitter.com/AmantAlshmmalya?ref_src=twsrc%5Etfw">Tweets by AmantAlshmmalya</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  

    <div class="cleaner-h3"></div>

    <div class="latest-news">

    <div class="title">
    <h2 class="black">جديد البوابة </h2>
    <div class="cleaner"></div>
    <div class="line black"></div>
    <div class="cleaner-h1"></div>
    </div><!--end title-->


    @foreach ($all_gates as $one)
        <div class="new-1">
            <a href="{{ url('gate/'.$one->id) }}">
                <img src="{{ url('Admin/images/gate/'.$one->image) }}" class="img-responsive"/>
                <h3>{!! str_limit($one->description , 120) !!}</h3>
                <p><i class="fa fa-times-circle"></i> {{ $one->created_at->diffForHumans() }} </p>
            </a>
        </div><!--end-new-1-->
    @endforeach

    </div><!--end videos-->

    <div class="cleaner-h3"></div>

    <div class="adv-medium">
        @foreach (\App\Setting::get() as $one)
                <a href="#"><img src="{{ url('Admin/images/setting/'.$one->add2) }}" class="img-responsive"/></a>
        @endforeach
    </div><!--end adv-->



    <div class="cleaner-h3"></div>

    <div class="newsletter">
    <img src="{{ url('Site') }}/images/newsletter.png" class="img-responsive"/>

    <h4>يمكنك الان الاشتراك فى
    <span>نشرتنا الاخبارية </span></h4>

    <div class="cleaner-h3"></div>

    <form method="post" action="{{ url('admin/email_follow') }}">
        @csrf
        <input type="email" name="email" placeholder="من فضلك ادخل البريد الالكترونى"/>
        <input type="submit" class="email_follow">
            {{-- <a><i class="fa fa-send"></i></a> --}}
    </form>

    </div><!--end newletter-->

    </div><!--end col-4-->

    </div><!--end row-->
    </div><!--end container-->


    <div class="cleaner-h4"></div>

@endsection

@section('footer')

@endsection
