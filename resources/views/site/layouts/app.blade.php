<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        امانة المنطقة الشمالية
        @yield('title')
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/style.css"/>

    <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/jssocials.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/jssocials-theme-classic.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/js/animate/animate.css"/>

    @yield('header')

</head>

<body>


    @include('Site/layouts/navbar')

    @yield('content')

    @include('Site/layouts/footer')


    <script type="text/javascript" src="{{ url('Site') }}/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript" src="{{ url('Site') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('site') }}/js/jssocials.min.js"></script>
    <script type="text/javascript" src="{{ url('Site') }}/js/animate/wow.min.js"></script>
    <script type="text/javascript" src="{{ url('Site') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ url('Site') }}/js/jquery.tickerNews.min.js"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
        new WOW().init();
        $(function(){
                _Ticker = $(".TickerNews").newsTicker();
            });

        $( function() {
            $( "#tabs" ).tabs();
      } );
    </script>
    <script>
        $("#shareRoundIcons").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
        });                
    </script>
    @yield('footer')
</body>
</html>
