

<!DOCTYPE html>
<html>
<head>
<title>Sekolah Dasar Kristen Citra Bangsa</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kids School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'> -->
<!-- <link href='//fonts.googleapis.com/css?family=Peralta' rel='stylesheet' type='text/css'> -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">


	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
		
		(function () {
			size_li = $("#myList2 li").size();
			y=1;
			$('#myList2 li:lt('+y+')').show();

			$('#loadMore2').click(function () {
				console.log("load more 2");
				var lsize = $("#myList2 li").size();
				y= (y+1 <= lsize) ? y+1 : lsize;
				$('#myList2 li:lt('+y+')').show();
			});

			$('#showLess2').click(function () {
				console.log("show less 2");
				y=(y-1<0) ? 1 : y-1;
				console.log("y = " + y);
				console.log("filtered = " + $('#myList2 li').not(':lt('+y+')').size())
				$('#myList2 li').not(':lt('+y+')').hide();
			});

		})();
		
		(function () {
			size_li = $("#myList1 li").size();
			x=1;
			$('#myList1 li:lt('+x+')').show();

			$('#loadMore1').click(function () {
				var lsize = $("#myList1 li").size();
				x= (x+1 <= lsize) ? x+1 : lsize;
				$('#myList1 li:lt('+x+')').show();
			});

			$('#showLess1').click(function () {
				x=(x-1<0) ? 1 : x-1;
				console.log("x = " + x);
				$('#myList1 li').not(':lt('+x+')').hide();
			});
			
		})();
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- body -->
	<div class="body-content">
		<div class="container">
			<div class="body-content1">
			<!-- header -->
				<div class="logo-search">
					<div class="logo">
						<h3><a href="index.html">Sekolah<span class="color">Dasar</span><span class="color1">Kristen</span><span class="color2">Citra</span> <span>Bangsa</span></a></h3>
					</div>

					<div class="clearfix" align= "right"> <img src= "images/15.png"> </div>
				</div>
			<!-- //header -->
			<!-- nav -->
				<div class="navigation">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav class="stroke">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index1.php">Home</a></li>
									<li><a href="gallery.php" class="hvr-rectangle-out">Gallery</a></li>
									<li><a href="Alumny.php" class="hvr-rectangle-out">Alumny</a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			<!-- //nav -->
			<!-- banner -->
				<div class="banner">
					<div class="banner-grids">
						<div class="banner-left">
							<div class="banner-left1">
								<div class="banner-left1-grid">
									<img src="images/sekola2.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a>
												Fasilitas
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sekolah Dasar Citra Bangsa mempunyai lapangan serba guna yang digunakan saat pelajaran olahraga </p>
										</div>
									</div>
								</div>
								<div class="banner-left1-grid">
									<img src="foto/10.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a >
												Fasilitas
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sekolah Dasar Citra Bangsa mempunyai kelas yang nyaman dan kedap suara sehingga siswa-siswi dapat belajar dengan baik</p>
										</div>
									</div>
								</div>
							</div>
							<div class="banner-left2">
								<div class="banner-left1-grid">
									<img src="foto/20150309_090610.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a >
												Fasilitas
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Guru- guru yang ada merupakan guru yang berkompeten dalam bidangnya masing- masing</p>
										</div>
									</div>
								</div>
								<div class="banner-left1-grid">
									<img src="foto/10267765_10154183502170604_6276627093051970782_n.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a >
												Fasilitas
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sekolah Citra Bangsa mempunyai bus antar jemput yang sangat aman dan nyaman </p>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="banner-right">
							<section class="slider">
								<div class="flexslider">
									<ul class="slides">
										<li>
											<div class="services-grid-right-grid1">

											</div>
										</li>
										<li>
											<div class="services-grid-right-grid2">

											</div>
										</li>
										<li>
											<div class="services-grid-right-grid3">

											</div>
										</li>
										<li>
											<div class="services-grid-right-grid3">

											</div>
										</li>
									</ul>
								</div>
							</section>
									<!--FlexSlider-->
									<script defer src="js/jquery.flexslider.js"></script>
									<script type="text/javascript">
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									</script>
									<!--End-slider-script-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner -->
			<!-- banner-bottom -->
				<div class="banner-bottom">
					<div class="banner-bottom-grids">
						<div class="col-md-4 banner-bottom-grid">
							<h3>Welcome To <span>Citra Bangsa Christian Primary School</span></h3>
							<h2><i>"Kata Pengantar"</i></h2>
							<p>Setiap detik yang kita lalui dalam hidup sangat berharga, begitu pula pilar - pilar kenangan membuat kita lebih menghargai sebuah kehidupan. Maka jangan biarkan lepas begitu saja tanpa peninggalan yang berarti</p>
							<div class="more">
								<a href="sekolah.php" class="hvr-rectangle-out">Read More...</a>
							</div>
						</div>
						<?php
              //  include 'koneksi.php';
              //  $sql = mysql_query("SELECT * FROM tbl_informasi");
							//  while ($row=mysql_fetch_array($sql)) {
                        ?>
						<div class="col-md-4 banner-bottom-grid">
							<h3><span>Pengumuman</span></h3>

							<div class="load_more">
								<ul id="myList1">
									<?php
										$mysqli = new mysqli('127.0.0.1', 'root', '', 'citrabangsa');

										if ($mysqli->connect_errno) {
											echo "Hell break lose";
										}

										$qstr = "SELECT * FROM tbl_informasi";
										$result = $mysqli->query($qstr);

										// echo "Res = " . $result;
										if ($result && $result->num_rows !== 0) {
											for ($i = 0; $i < $result->num_rows; $i++) {
												$pengumuman = $result->fetch_array();
												$jud = str_replace(' ', '%20', $pengumuman['tanggal']);
												$jud = $pengumuman['tanggal'];
												echo '<li>' .
													'<div class="l_g">' .
														'<div class="banner-bottom-grid1">' .
															'<div class="col-xs-4 banner-bottom-grid-left">' .
																'<img src="foto/2.jpg" alt=" "  class="img-responsive" />' .
																
															'</div> ' .
															'<div class="col-xs-8 banner-bottom-grid-left">' .
																'<td><h4><a href="pengumuman.php?tanggal=' . $jud . '">' .
																	'<td>' . $pengumuman["tanggal"] . '</td>' .
																	'<td>' . $pengumuman["judul"] . '</td>' .
																'</a></h4></td>' .
															'</div>' .
															'<div class="clearfix"> </div>' .
														'</div>' .
													'</div>' .
												'</li>';
											}
										}
									?>
								</ul>
									<div class="foo" id="loadMore1" class="hvr-rectangle-out">Load more</div>
									<div class="foo" id="showLess1" class="hvr-rectangle-out">Show less</div>
							</div>
						</div>


						<?php
						// }
						?>
							
							<div class="col-md-4 banner-bottom-grid">
							<h3>Renungan</h3>
								<div class = "loadMore">
								<script>
								</script>
								<ul id="myList2">
								<?php
								$mysqli = new mysqli('127.0.0.1', 'root', '', 'citrabangsa');

										if ($mysqli->connect_errno) {
											echo "Hell break lose";
										}

										$qstr = "SELECT * FROM tbl_renungan";
										$result = $mysqli->query($qstr);

										// echo "Res = " . $result;
										if ($result && $result->num_rows !== 0) {
											for ($i = 0; $i < $result->num_rows; $i++) {
												$pengumuman = $result->fetch_array();
												$jud = str_replace(' ', '%20', $pengumuman['tanggal_ren']);
												$jud = $pengumuman['tanggal_ren'];
												echo '<li>' .
									'<div class="l_g">' .
									'<div class="banner-bottom-grid1">' .
									'<div class="col-xs-4 banner-bottom-grid1">'.
										'<img src="foto/alkitab.jpg" alt=" " class="img-responsive" />'.
									'</div>'.
											'<div class=" col-xs-8 banner-bottom-grid1">'.
											'<td><h5><a href="renungan.php?tanggal_ren=' . $jud . '">' .
											'<td>' . $pengumuman["tanggal_ren"] . '</td>' .
											'<td>' . $pengumuman["judul_ren"] . '</td>' .
											'</h5></a></td>'.
											'</div>'.
												'<div class="clearfix"> </div>' .
												'</div>'.
										'</div></li>' ;
											}
										}
								?>
								</ul>
								<div class="foo" id="loadMore2" class="hvr-rectangle-out">Load more</div>
								<div class="foo" id="showLess2" class="hvr-rectangle-out">Show less</div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner-bottom -->
			</div>
		</div>
	</div>
<!-- //body -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-copy">
				<p>&copy 2016 Ilmu Komputer .UNDANA</a></p>
				<script>
					$(function () {
					  $('[data-toggle="tooltip"]').tooltip()
					})
				</script>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
