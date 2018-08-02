<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin</title>

 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="ckeditor/contents.css">
 

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Sekolah Dasar Kristen <span class="lite">Citra Bangsa</span></a>
            <!--logo end-->



            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="">
                            </span>
                            <span class="username">
                                <?php 
                                        include 'koneksi.php';
                                        echo $_SESSION['Nam_admin'];

                                 ?>
                            </span>
                            <b class="caret"></b>
                        </a>
                     <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="admin.php"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
             <?php include 'menuadmin.php'; ?>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
      <form action="" method="post" accept-charset="utf-8">
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
<?php 
	 include 'koneksi.php';
    $NIS=$_GET['NIS'];
    $data = mysql_query("SELECT * FROM siswa where NIS='$NIS'");
    $edit = mysql_fetch_array($data);
 ?>
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA Siswa</th></tr>
        <tr>
          <td width="150">NIS</td>
          <td>
            <div class='col-sm-4'>
              <input type='text' name='NIS' id="NIS" value="<?php echo $edit['NIS'] ?>"  class='form-control' required='required' >
			  <input type="hidden" name="NIS" value="<?php echo $edit['NIS'] ?>">
            </div>             
		</tr>
      <tr>
          <td>Nama</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='nama' id="nama" value="<?php echo $edit['nama'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>
			 <tr>
          <td>Tempat Lahir</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='tempat' id="tempat" value="<?php echo $edit['tempat'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>
		<tr>
          <td>Tanggal Lahir</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='tl' id="tl" value="<?php echo $edit['tl'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>

		<tr>
          <td>Nama Bapak</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='Bapak' id="Bapak" value="<?php echo $edit['Bapak'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>
		
		<tr>
          <td>Nama Ibu</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='Ibu' id="Ibu" value="<?php echo $edit['Ibu'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>
		
		<tr>
          <td>Nama Wali</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='Wali' id="Wali" value="<?php echo $edit['Wali'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>
		
		<tr>
          <td>Pekerjaan Bapak</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='Pekerjaan_Bapak' id="Pekerjaan_Bapak" value="<?php echo $edit['Pekerjaan_Bapak'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>
		
		<tr>
          <td>Pekerjaan Ibu</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='Pekerjaan_Ibu' id="Pekerjaan_Ibu" value="<?php echo $edit['Pekerjaan_Ibu'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>
		
		<tr>
          <td>Pekerjaan Wali</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='Pekerjaan_Wali' id="Pekerjaan_Wali" value="<?php echo $edit['Pekerjaan_Wali'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>

		<td><label>Jenis kelamin </label> </td>
					<td> <select name="JK" id="JK"  value="<?php echo $edit['JK'] ?>"type = "text" >
						<option value ="-"> Tidak ada </option>
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
				</select></td>
			</tr>
		<tr>
          <td>Alamat</td>
         
            <td><textarea name="alamat" id="news"><?php echo $edit['alamat'] ?></textarea>
            <script type="text/javascript">
              var editor = CKEDITOR.replace('news');  
            </script>
            </td>
        </tr>

		<tr>
          <td>No Telepon</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='no_telp' id="no_telp" value="<?php echo $edit['no_telp'] ?>" placeholder='' class='form-control'  value='' >
              </div>
            </td>
        </tr>
    </table>
    
</div>
<input type="submit" name="edit" value="EDIT" class="btn btn-success">
<!--<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">-->
            <a href="tabel_alumny.php" class="btn btn-primary">KEMBALI</a></form>

           </form>

<?php 
     include 'koneksi.php';
if(isset($_POST['edit'])){

    $NIS		= $_POST['NIS'];
	$nama       = $_POST['nama'];
	$tempat     = $_POST['tempat'];
	$tl 		=$_POST['tl'];
	$Bapak 		=$_POST['Bapak'];
	$Ibu		=$_POST['Ibu'];
	$Wali		=$_POST['Wali'];
	$Pekerjaan_Bapak	=$_POST['Pekerjaan_Bapak'];
	$Pekerjaan_Ibu		=$_POST['Pekerjaan_Ibu'];
	$Pekerjaan_Wali		=$_POST['Pekerjaan_Wali'];
	$alamat		=$_POST['alamat'];
	$JK 		=$_POST['JK'];
	$no_telp	=$_POST['no_telp'];

    $sql = mysql_query("UPDATE siswa set nama='$nama',tempat='$tempat',tl='$tl',Bapak='$Bapak',Ibu='$Ibu',Wali='$Wali',
	Pekerjaan_Bapak='$Pekerjaan_Bapak',Pekerjaan_Ibu='$Pekerjaan_Ibu',Pekerjaan_Wali='$Pekerjaan_Wali',
	alamat='$alamat',JK='$JK',no_telp='$no_telp' where NIS='$NIS'");  

    if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_alumny.php';
        </script>
        <?php
    }

}



 ?>


              </div>
                        
          </div> 
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->
  </section>

  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>  
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>    
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });



  </script>

  </body>
</html>