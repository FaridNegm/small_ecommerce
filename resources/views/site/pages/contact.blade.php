@extends('Site.layouts.app')

@section('title')
    | الأخبار
@endsection

@section('header')

@endsection

@section('content')


<div class="container">
        <div class="row">
        
        <div class="cleaner-h4"></div>    
            <div class="cleaner-h2"></div>
        
        <div class=" new-1 ameen pad">
        
        
        
            
            
            <div class="col-md-6">
           <form class="contact-us" method="post" action="{{ url('admin/message') }}">
            @csrf
           <label>اسم المرسل</label>
           <input type="text" name="name"/>
           
           <label>البريد الإلكترونى</label>
           <input type="email" name="email"/>
           
           <label>رقم الجوال</label>
           <input type="text" name="phone"/>
           
           
           
           <label>الرسالة</label>
           <textarea name="message"></textarea>
           
           {{--  <a href="#" class="btn btn-gemy">ارسال</a>  --}}
           <input type="submit" class="btn btn-gemy" value="ارسال"/>
           </form>
            </div><!--end col-6-->
            
            <div class="cleaner-h3 visible-xs"></div>
            
            <div class="col-md-6">
            
            <h4 class="cont-h4">
            ​​​​​يمكنك التواصل عزيزنا الزائر مع امانة منطقة الحدود الشمالية من خلال قنوات الاتصال التالية: </h4>
                
                 
                  <div class="social-linkss">
               <p><i class="fa fa-phone"></i><span>هاتف</span> {{ $contacts['phone'] }}</p>
               <p><i class="fa fa-fax"></i><span>فاكس</span> {{ $contacts['fax'] }}</p>
               <p><i class="fa fa-phone"></i><span>الرقم الموحد</span> {{ $contacts['number'] }} </p>
               
               <p><i class="fa fa-envelope"></i><span>الايميل الالكترونى</span> {{ $contacts['email'] }} </p>
               
                </div>
                 
                 <div class="social-linkss">
                                    <a href="{{ $contacts['facebook'] }}" class="fa fa-facebook-f"></a>
                                    <a href="{{ $contacts['twiiter'] }}" class="fa fa-twitter"></a>
                                    <a href="{{ $contacts['instegram'] }}" class="fa fa-instagram"></a>
                                    <a href="{{ $contacts['gmail'] }}" class="fa fa-google"></a>
                                    <a href="{{ $contacts['linkedin'] }}" class="fa fa-linkedin"></a>
                                </div>
            
            </div><!--end col-6-->
              
            <div class="cleaner-h2"></div>  
        
        </div>
        
         
            <div class="cleaner-h2"></div>
        
        </div><!--end row-->
        </div><!--end container-->
        
        
        <div class="cleaner-h4"></div>
        
@endsection

@section('footer')

@endsection
