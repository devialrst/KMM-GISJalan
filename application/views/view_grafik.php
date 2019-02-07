<!DOCTYPE html>
<html>
	<style>
	 #chart{
	   z-index:-10;} 
	</style>
	<head>
	    <title>Strive Personal Bootstrap Responsive website Template | Home :: w3layouts</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta charset="utf-8" />
	    <meta name="keywords" content="Strive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	    <script>
	        addEventListener("load", function () {
	            setTimeout(hideURLbar, 0);
	        }, false);

	        function hideURLbar() {
	            window.scrollTo(0, 1);
	        }
	    </script>
	    <!-- Custom Theme files -->
	    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	    <!-- nav -->
	    <link href="css/menufullpage.css" rel="stylesheet">
	    <!-- font-awesome icons -->
	    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	    <!-- //Custom Theme files -->
	    <!-- online-fonts -->
	    <link href="//fonts.googleapis.com/css?family=Fira+Sans+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	        rel="stylesheet">
	    <!-- //online-fonts -->
	    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="js/highcharts.js" type="text/javascript"></script>
		<script src="js/exporting.js" type="text/javascript"></script>
		<script src="js/offline-exporting.js" type="text/javascript"></script>
	</head>
	
	<body>
		<div class="inner-banner-agile">
	        <header>
	            <!--nav -->
	            <a href="#menu" class="menu-link">
	                <span>toggle menu</span>
	            </a>
	            <nav id="menu" class="panel">
	                <ul>
	                    <li>
	                        <a href="<?php echo base_url(); ?>" class="active">Beranda</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo base_url(); ?>datajalan">Data Jalan</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo base_url(); ?>laporanjalan">Laporan Jalan</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo base_url(); ?>control_grafik">Grafik Jalan</a>
	                    </li>
	                </ul>
	            </nav>
	            <!-- //nav -->
	            <!-- logo -->
	            <div class="logo_wthree">
	                <a href="index.html">
	                    <i class="fab fa-node-js"></i>
	                </a>
	            </div>
	            <!-- //logo -->
	        </header>
	    </div>
		
		<div id="chart"></div>
			<section class="main-sec-w3 pb-5">
		        <div class="container">
		       		 <div class="wthree-inner-sec">
		                <div class="sec-head">
		                    <h1 class="sec-title-w3 text-capitalize">grafik jalan</h1>
		                    <span class="block"></span>
		                    <br>
		                    <div class="grafik_panjang" style="width: 50%; height: 100%;"></div>
	                    	<script type="text/javascript">
	                    		$('.grafik_panjang').highcharts({
								 		chart: {
								 			renderTo: 'chart',
								 			type: 'line',
								 		},

								 		title: {
								 			text: 'Grafik Panjang Jalan',
								 			x: -20
								 		},

								 		subtitle: {
								 			text: 'Count visitor',
								 			x: -20
								 		},

								 		xAxis: {
								 			categories: ['Baik', 'Sedang', 'Rusak', 'Rusak Berat']
								        },

								        yAxis: {
								        	title: {
								        		text: 'Panjang Jalan (km)'
								        	}
								        },

								        series: [
								        	{name: 'Grafik Kerusakan Jalan',
								        	data: <?php echo json_encode($grafik); ?>}
								        ],

								        credits:{
								        	enabled: true,
								        	text : 'Infrastruktur Kabupaten Karanganyar',
								        },

								        plotOptions: {
										  column: {
										  	colorByPoint: true,
										   colors: [
										     '#50B432', 
										     '#ED561B', 
										     '#DDDF00', 
										     '#24CBE5', 
										     '#64E572', 
										     '#FF9655', 
										     '#FFF263', 
										     '#6AF9C4'
										   ]
										}
									}
								});
							</script>
							<br>
							<div class="grafik_rusak" style="width: 50%; height: 100%;"></div>
	                    	<script type="text/javascript">
	                    		$('.grafik_rusak').highcharts({
								 		chart: {
								 			renderTo: 'chart',
								 			type: 'column',
								 		},

								 		title: {
								 			text: 'Grafik Kerusakan Jalan',
								 			x: -20
								 		},

								 		subtitle: {
								 			text: 'Count visitor',
								 			x: -20
								 		},

								 		xAxis: {
								 			categories: ['Baik', 'Sedang', 'Rusak', 'Rusak Berat']
								        },

								        yAxis: {
								        	title: {
								        		text: 'Panjang Jalan (km)'
								        	}
								        },

								        series: [
								        	{name: 'Grafik Kerusakan Jalan',
								        	data: <?php echo json_encode($grafik); ?>}
								        ],

								        credits:{
								        	enabled: true,
								        	text : 'Infrastruktur Kabupaten Karanganyar',
								        },

								        plotOptions: {
										  column: {
										  	colorByPoint: true,
										   colors: [
										     '#50B432', 
										     '#ED561B', 
										     '#DDDF00', 
										     '#24CBE5', 
										     '#64E572', 
										     '#FF9655', 
										     '#FFF263', 
										     '#6AF9C4'
										   ]
										}
									}
								});
							</script>
		               	</div>
		            </div>
		        </div>
			</section>

		<footer>
	        <div class="cpy-right text-center py-4">
	            <p class="text-white">© 2018 Strive. All rights reserved | Design by
	                <a href="http://w3layouts.com"> W3layouts.</a>
	            </p>
	        </div>
	    </footer>
		<script src="js/jquery-2.2.3.min.js"></script>
	    <!-- //js -->
	    <!-- few java snippets-->
	    <script src="js/strive.js"></script>
	    <!-- banner text animation -->
	    <!-- //banner text animation -->
	    <!-- nav -->
	    <script src="js/menuFullpage.min.js"></script>
	    <!-- //nav -->
	    <!-- smooth scroll -->
	    <script src="js/SmoothScroll.min.js "></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.js"></script>
	</body>
</html>