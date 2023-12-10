<!doctype html>
<html class="no-js" lang="en">
   <!-- start head -->
@include('includes.head')
   <!-- End head -->
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
		@include('includes.header')
		<!--header-top end -->

		<!-- top-area Start -->
		@include('includes.toparea')
		<!-- top-area End -->

		@yield('content')

	
		<!--footer start-->
        @include('includes.footer')
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->
@include('includes.footerjs')
    </body>
	
</html>