<!DOCTYPE html>
{{-- <html lang="en"> --}}
<html direction="rtl" dir="rtl" style="direction: rtl" >
	<head>
		<meta charset="utf-8" />
		<title>
            Farid Negm | @yield('title')
        </title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->
		{{-- <link href="{{ url('admin') }}/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('admin') }}/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('admin') }}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> --}}

        <link href="{{ url('admin') }}/assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('admin') }}/assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
		<link href="{{ url('admin') }}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />

		<link rel="shortcut icon" href="{{ url('admin') }}/assets/demo/default/media/img/logo/favicon.ico" />

        <script src="{{ asset('js/app.js') }}" defer></script>

	@yield('header')
	</head>

	<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <div class="m-grid m-grid--hor m-grid--root m-page" id="admin_app">

        @include('admin/layouts/navbar')

        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <Sidebar></Sidebar>

            @yield('content')
        </div>

        @include('admin/layouts/footer')

    </div>

    <script src="{{ url('admin') }}/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="{{ url('admin') }}/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
    <script src="{{ url('admin') }}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
    <script src="{{ url('admin') }}/assets/app/js/dashboard.js" type="text/javascript"></script>

    @yield('footer')

</body>
</html>
