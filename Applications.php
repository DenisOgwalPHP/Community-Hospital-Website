<?php session_start();
if (isset($_SESSION['kacoshes'])) {
} else {
 echo '<script type="application/javascript">';
	echo 'window.location.href="loginform.php";';
	echo '</script>';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Community Hospital Lugoba| Online Applications</title>

    <link rel="shortcut icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	 <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i> info@communityhospitallugoba.org</li>
                            <li><i class="fas fa-phone-square"></i> +256 393 292311</li>
							 <!--<li><i class="fas fa-map-marker"></i></li>-->
							<marquee behavior="scroll" direction="left" ><b>Welcome to Community Hospital Lugoba Website</b></marquee>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a href="https://twitter.com/community_Hosp" target="_blank"><i class="fab fa-twitter"></i></a></li>
						   <li><a href="https://www.facebook.com/profile.php?id=100086687952632" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                        <img src="assets/images/logo.png" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>    
                    </div>
                    <div id="menu" class="col-lg-9 col-md-9 d-none d-md-block nav-item">
                        <ul>
						
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>  
                            <li><a href="gallery.html">Gallery</a></li>
							<li><a href="Jobs panel.html">Jobs</a></li>
                            <li><a href="contact_us.html">Contact Us</a></li>
							<li style="background-color: #1ac2f9;border-top:0;" class="btn btn-secondary dropdown-toggle"  data-toggle="dropdown" >Clinical Medicine School
							<li class="dropdown-menu">
							<a  href="aboutschool.html" class="dropdown-item">About School</a>
							<a  href="requirements.html" class="dropdown-item">Admission Requirements</a>
							<!--<a  href="feesstructure.html" class="dropdown-item">Fees Structure</a>-->
							<a  href="Applications.php" class="dropdown-item">Applications</a>
							</li>
							</li>
                        </ul>
                    </div>
                    <!--<div class="col-sm-2 d-none d-lg-block appoint">
                        <button class="btn btn-info">Book an Appointment</button>
                    </div>-->
                </div>

            </div>
        </div>
    </header>
    


  <div class="page-nav no-margin row">
                   <div class="container">
                       
                   </div>
               </div>
       
    <!-- ######## Page  Title End ####### -->
    
      



    <div class="container form-container">
      <div class=" col-lg-12 mx-auto login-container">
          <div class="row form-header">
              <div class="col-md-2 logocol">
                <img src="assets/images/kacoshes.jpg" alt="">
              </div>
              <div class="col-md-10 headcol">
                <h4>Kawempe Community School Of Health Sciences</h4>
                <p>Be True, Save Life</p>
                <p class="cinfo">
                    <span><i class="fas fa-phone"></i> +256 393247054</span>
                    <span><i class="fas fa-envelope"></i> kawempechealthsciences@gmail.com</span>
                    <span><i class="fas fa-map-marker-alt"></i> Community Hospital Building, Jinja Karoli Road <br>P.o Box 111648 Kampala-Uganda</span>
                </p>
               
              </div>
          </div>
		 <div class="form-body">
            <div class="form-title row">
              <h4>Applications</h4>
            </div>
			<table style="width:100%;">
			<thead>
			<th style="width:12%;">Intake</th> 
			<th style="width:24%;">Course Applied For</th>
			<th style="width:20%;">Student Names</th>
			<th style="width:12%;">Mobile No.</th>
			<th style="width:20%;">Email</th>
			<th style="width:12%;">Document</th>
			</thead>

			<tbody>
			<?php
			require_once('connect/connect.php');
                      $sales7 = "SELECT * FROM `studentapplication`  order by ID Desc LIMIT 100";
                      $result7 = mysqli_query($link, $sales7);
					    while ($row7 = mysqli_fetch_assoc($result7)) {
                        echo " <tr>";
                        echo  "<td>" . $row7['Intake'] . "</td>";
                        echo  "<td>" . $row7['Program'] . "</a></td>";
                        echo  "<td>" . $row7['StudentNames'] . "</td>";
						echo  "<td>" . $row7['MobileNumber'] . "</td>";
                        echo  "<td>" . $row7['Email'] . "</td>";
                        echo  "<td><a href='ApplicationDocs/". $row7['Email'] .".pdf'>Academic Docs</a> </td>";
						echo " </tr>";
						}
			?>
			</tbody>

			</table>
      </div>
    </div> 
    </div> 
	
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Community Hospital Lugoba Kawempe, is under Community Health Plan Uganda is a non-governmental, Private Not for Profit organization, the hospital offering 24hours services to both outpatients and inpatients including accidents and emergencies.
                    </p>
                    <p>On average we receive about 500 patients per month with various medical conditions and the majority being children and mothers.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="about_us.html">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="services.html">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="blog.html">Blogs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="gallery.html">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="contact_us.html">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Community Hospital Lugoba <br>
                        Jinja Kaloli RD, Lugoba, Kawempe <br>
                        Kampala <br>
                        Phone: +256 393 292311 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">info@communityhospitallugoba.org</a><br>
                        Web: <a href="smart-eye.html" class="">www.communityhospitallugoba.org</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://ditherug.tech"><script>document.write(new Date().getFullYear());</script> &copy; All Rights Reserved | Designed and Developed by Dither Technologies (U) LTD</a>
                
                <span>
              <a href="https://twitter.com/community_Hosp" target="_blank"><i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/profile.php?id=100086687952632" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
    
    </body>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>


</html>