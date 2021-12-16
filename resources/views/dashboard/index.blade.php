<!DOCTYPE html>
<html lang="{{App::getLocale() == 'ar'? 'ar' : 'en'}}" dir="{{App::getLocale() == 'ar'? 'rtl' : 'ltr'}}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>
	{{--
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/dashboard/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="/dashboard/LTR/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/dashboard/LTR/assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="/dashboard/LTR/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="/dashboard/LTR/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="/dashboard/global_assets/js/plugins/loaders/pace.min.js"></script>
	<script src="/dashboard/global_assets/js/core/libraries/jquery.min.js"></script>
	<script src="/dashboard/global_assets/js/core/libraries/bootstrap.min.js"></script>
	<script src="/dashboard/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="/dashboard/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="/dashboard/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="/dashboard/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="/dashboard/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="/dashboard/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="/dashboard/global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="/dashboard/LTR/assets/js/app.js"></script>
	<script src="/dashboard/global_assets/js/demo_pages/dashboard.js"></script>
	<!-- /theme JS files -->
	--}}
	@include('dashboard.layouts.head')

</head>

<body>

	<!-- Main navbar -->
	
	@include('dashboard.layouts.mainNavbar')
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			@include('dashboard.layouts.mainSidebar')
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				@include('dashboard.layouts.pageHeader')
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">

                     @yield('contents')

					</div>
					<!-- /main charts -->

                     {{--
					<!-- Dashboard content -->
					<div class="row">
			


					</div>
					<!-- /dashboard content -->
					--}}

					<!-- Footer -->
				@include('dashboard.layouts.footer')
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
