<nav class="navbar visible-xs">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            {{--  <a class="navbar-brand" href="index.html"><img class="img-responsive logo" src="images/logo.png"/></a>  --}}
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('site') }}/images/logo.png" class="img-responsive logo"/>
            </a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            
                    <li class="{{ Request::is('/') ? 'current' : null }}"><a href="{{ url('/') }}">الرئيسية</a> </li>
                    <li class="{{ Request::is('princes') ? 'current' : null }}" ><a href="{{ url('princes') }}">الامراء</a> </li>

                    <li class="{{ Request::is('ameen') ? 'current' : null }}" ><a href="{{ url('ameen') }}">الامناء</a></li>

                    {{-- <li class="dropdown"><a>امناء المنطقة الشمالية</a>
                     <ul class="submenu">


                        </ul>


                    </li> --}}

                    <li class="dropdown {{ Request::is(['amana' , 'calends','gardens' , 'gate','gayza' , 'advertisment']) ? 'current' : null }}" ><a>الامانة</a>
                         <ul class="submenu">
                            <li><a href="{{ url('amana') }}">عن الامانة</a></li>
                            <li><a href="{{ url('calends') }}">الاشتراطات واللوائح</a></li>
                            <li><a href="{{ url('gardens') }}">الحدائق والمنتزهات</a></li>
                            <li><a href="{{ url('gate') }}">جديد البوابة</a></li>
                            <li><a href="{{ url('gayza') }}">جوائز البوابة</a></li>
                            <li><a href="{{ url('advertisment') }}">اعلانات الامانة</a></li>
                        </ul>
                    </li>





                     <li class="dropdown {{ Request::is(['news' , 'articles','investment' , 'challengs']) ? 'current' : null }}"><a>الاخبار</a>
                         <ul class="submenu">
                            <li><a href="{{ url('news') }}">الاخبار</a></li>
                            <li><a href="{{ url('articles') }}">المقالات الصحفية اليومية</a></li>
                            <li><a href="{{ url('investment') }}">الفرص الاستثمارية</a></li>
                            <li><a href="{{ url('challengs') }}">المنافسات</a></li>
                        </ul>
                    </li>

                        <li class="{{ Request::is('sub_sites') ? 'current' : null }}"><a href="{{ url('sub_sites') }}">المواقع الفرعية</a> </li>

                        <li class="{{ Request::is('contact') ? 'current' : null }}"><a href="{{ url('contact') }}">اتصل بنا</a> </li>
            </ul>
            
           
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->  
      </nav> 

<div class="strip hidden-xs">
        <div class="container">
        <div class="row">

        <div class="cleaner-h1"></div>

        <div class="col-lg-7 wow fadeInRight">

        <ul class="social-header pull-left">
        <li><a href="{{ url('/') }}">الرئيسية </a></li>
        <li class="non-border"><a href="{{ url('contact') }}">اتصل بنا </a></li>
        </ul>

        </div><!--end col-3-->




        <div class="col-lg-5 wow fadeInLeft">

            
        <ul class="social">
            <li><a href="{{ \App\Setting::first()->facebook }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="{{ \App\Setting::first()->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="{{ \App\Setting::first()->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="{{ \App\Setting::first()->instegram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
        </ul>


        </div><!--end col-3--><!--end social-->

        <div class="cleaner-h1"></div>



        </div><!--end row-->
        </div><!--end container-->
        </div><!--end strip-->

        <div class="header hidden-xs">
        <div class="container">
        <div class="row">

        <div class="cleaner-h2"></div>

        <div class="col-md-4 wow fadeInRight">
            <a href="{{ url('/') }}">
                <img src="{{ url('site') }}/images/logo.png" class="img-responsive logo"/>
            </a>
        </div><!--end col-4-->

        <!--<div class="col-md-8 wow fadeInLeft">
        <ul>
        <li><a href="about-us.html">الامراء </a></li>
        <li><a href="our-team.html">امناء المنطقه الشماليه </a></li>
        <li><a href="Products.html">المنطقه الشماليه </a></li>
        <li><a href="why.html">الامانه </a></li>
        <li><a href="contact-us.html">الاخبار </a></li>
        <li><a href="why.html">المواقع الفرعية </a></li>
        </ul>
        </div>--><!--end col-8-->

        <div class="cleaner-h2"></div>

        </div><!--end row-->
        </div><!--end container-->
        </div><!--end header-->

         <header class="main-header hidden-xs">


               <div class="header-lower">
                    <div class="container">
                        <div class="row clearfix">
                            <!--Main Menu-->
                            <nav class="col-md-12 col-sm-12 col-xs-12 main-menu">


                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation">

                                        <li class="{{ Request::is('/') ? 'current' : null }}"><a href="{{ url('/') }}">الرئيسية</a> </li>
                                        <li class="{{ Request::is('princes') ? 'current' : null }}" ><a href="{{ url('princes') }}">الامراء</a> </li>

                                        <li class="{{ Request::is('ameen') ? 'current' : null }}" ><a href="{{ url('ameen') }}">الامناء</a></li>

                                        {{-- <li class="dropdown"><a>امناء المنطقة الشمالية</a>
                                         <ul class="submenu">


                                            </ul>


                                        </li> --}}

                                        <li class="dropdown {{ Request::is(['amana' , 'calends','gardens' , 'gate','gayza' , 'advertisment']) ? 'current' : null }}" ><a>الامانة</a>
                                             <ul class="submenu">
                                                <li><a href="{{ url('amana') }}">عن الامانة</a></li>
                                                <li><a href="{{ url('calends') }}">الاشتراطات واللوائح</a></li>
                                                <li><a href="{{ url('gardens') }}">الحدائق والمنتزهات</a></li>
                                                <li><a href="{{ url('gate') }}">جديد البوابة</a></li>
                                                <li><a href="{{ url('gayza') }}">جوائز البوابة</a></li>
                                                <li><a href="{{ url('advertisment') }}">اعلانات الامانة</a></li>
                                            </ul>
                                        </li>





                                         <li class="dropdown {{ Request::is(['news' , 'articles','investment' , 'challengs']) ? 'current' : null }}"><a>الاخبار</a>
                                             <ul class="submenu">
                                                <li><a href="{{ url('news') }}">الاخبار</a></li>
                                                <li><a href="{{ url('articles') }}">المقالات الصحفية اليومية</a></li>
                                                <li><a href="{{ url('investment') }}">الفرص الاستثمارية</a></li>
                                                <li><a href="{{ url('challengs') }}">المنافسات</a></li>
                                            </ul>
                                        </li>

                                            <li class="{{ Request::is('sub_sites') ? 'current' : null }}"><a href="{{ url('sub_sites') }}">المواقع الفرعية</a> </li>

                                            <li class="{{ Request::is('contact') ? 'current' : null }}"><a href="{{ url('contact') }}">اتصل بنا</a> </li>




                                    </ul>
                                </div>
                            </nav>
                            <!--Main Menu End-->

                            <!--Social Links-->
                           <!-- <div class="col-md-3 col-sm-12 col-xs-12 social-outer">
                                <div class="social-links text-right">
                                    <a href="#" class="fa fa-facebook-f"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                    <a href="#" class="fa fa-google"></a>
                                    <a href="#" class="fa fa-pinterest-p"></a>
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div>

            </header>

            <div class="new-header">
             <div class="TickerNews">

               <div class="latest">
            <h4>اخر الاخبار</h4>
            </div><!--end latesta-->
                    <div class="ti_wrapper" style="direction:ltr">
                        <div class="ti_slide">
                            <div class="ti_content">
                                @foreach (\App\NewsNavbar::orderBy('id' , 'DESC')->limit(15)->where('status' , 'active')->get() as $news)
                                    <div class="ti_news"><a href="{{ $news->url }}" target="_blank">{{ $news->name }}</a></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
              </div><!--end-strip-news-->

              <div class="cleaner"></div>
