<div class="fotter">
        <div class="container">
        <div class="row">

        <img src="images/fotter.png" class="img-responsive pos-fotter"/>

        <div class="col-md-3">
        <h3>عن الامانة </h3>
        <div class="line-fotter"></div>
        <p class="fotter-p">
            {{ str_limit(strip_tags(\App\Honest::first()->description) , 300) }}
        </p>

        </div><!--end col-3-->


        <div class="col-md-3">
        <h3>اخر الاخبار </h3>
        <div class="line-fotter"></div>


        @foreach(\App\News::orderBy('id' , 'DESC')->limit(3)->where('status', 1)->get() as $one)
            <div class="new-fotter">
                <a href="{{ url('news/'.$one->id) }}">
                    <img src="{{ url('Admin/images/news/'.$one->image)}}" class="img-responsive"/>
                    <h6>{{ $one->title }}</h6>
                </a>
            </div><!--end new-fotter-->
        @endforeach

        </div><!--end col-3-->


        <div class="col-md-3">
        <h3>الامانة </h3>
        <div class="line-fotter"></div>
        <ul>
        <li><a href="{{ url('amana') }}"><i class="fa fa-arrow-circle-left"></i>عن الأمانه</a></li>
        <li><a href="{{ url('calends') }}"><i class="fa fa-arrow-circle-left"></i>الأشتراطات واللوائح</a></li>
        <li><a href="{{ url('gate') }}"><i class="fa fa-arrow-circle-left"></i>جديد البوابة</a></li>
        <li><a href="{{ url('princes') }}"><i class="fa fa-arrow-circle-left"></i> الأمراء</a></li>
        <li><a href="{{ url('ameen') }}"><i class="fa fa-arrow-circle-left"></i> الأمناء</a></li>
        <li><a href="{{ url('gayza') }}"><i class="fa fa-arrow-circle-left"></i>جوائز الأمانة</a></li>

        </ul>
        </div><!--end col-3-->

        <div class="col-md-3">
        <h3>الاخبار </h3>
        <div class="line-fotter"></div>
        <ul>
        <li><a href="{{ url('news') }}"><i class="fa fa-arrow-circle-left"></i>الأخبار</a></li>
        <li><a href="{{ url('articles') }}"><i class="fa fa-arrow-circle-left"></i>المقالات الصحفيه اليوميه</a></li>
        <li><a href="{{ url('investment') }}"><i class="fa fa-arrow-circle-left"></i>الفرص الإستثماريه</a></li>
        <li><a href="{{ url('challengs') }}"><i class="fa fa-arrow-circle-left"></i> المنافسات</a></li>

        </ul>
        </div><!--end col-3-->


        </div><!--end row-->
        </div><!--end container-->
        </div><!--end fotter-->

        <div class="strip-fotter">
        <p>جميع الحقوق محفوظة <a href="{{ url('/') }}">لأمانه الحدود الشماليه</a></p>
        </div>
