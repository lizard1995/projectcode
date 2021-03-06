
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Digital Interactive Application, Touch Walls,Video Walls, Touch Terminal,Real Estate 3D Application">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">  
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap" rel="stylesheet">
         <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141927891-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141927891-1');
    </script>
    
    <title>Our Products | VridInno Tech Labs | Bangalore</title>
  </head>
  <body>
 <header class="navbar my-nav site-header"> <!-- Starting of header bar -->
    <div class="container px-0"> <!-- start of container -->
      <div class="row m-0 w-100 align-items-center"><!-- starting of row -->
        <div class="col col-12 col-lg-2 px-4"><!-- starting of col3 -->
          <div class="image-box">
           <a href="index.html"><img src="assets/img/Layer 2.svg"></a>
          </div>
          <div class="humbargerBtn">
            <span></span> 
            <span></span>
            <span></span>
          </div>
        </div><!-- ending of col3 -->

         <div class="col col-12 col-lg-10 "><!-- starting of col9 -->    
          
           <nav class="sitenva pr-0 pr-md-3">
            <ul class="justify-content-center float-lg-right float-xl-right float-xxl-right">
              <li class="hasDropdown"><a class="aset" href="#">Who We Are <span class="downArow"></span></a>
                <ul class="dropdownbox dropdown">                
                  <li><a href="aboutus.html">About us</a></li>
                  
                  <li><a href="our_team.html">Our Team</a></li>
                  
                </ul>
              </li>
              <li class="hasDropdown"><a class="aset" href="#">Our Solution <span class="downArow"></span></a>
                <ul class="dropdownbox dropdown1"> 
                  <li><a href="webdesign_services.html">Web design Services</a></li>
                  <li><a href="digitalmarketing_services.html">Digital Marketing</a></li>
                  <li><a href="development_service.html">Development Services</a></li>
                  <li><a href="ui&ux_services.html">UI & UX Solutions</a></li>
                  <li><a href="mobileapp_services.html">Mobile app Solutions</a></li>
                  <li><a href="branding_services.html">Branding Services</a></li>
                  <li><a href="website_3D_Visualization.html">3D Visualizations</a></li>
                  
                  
                </ul>

              </li>
              <li class="hasDropdown"><a class="aset" href="#">Our Sectors <span class="downArow"></span></a>
                <ul class="dropdownbox dropdown2">
                  <li><a href="industry_sector.html">Industrial</a></li>
                  <li><a href="medical_sector.html">Medical</a></li>
                  <li><a href="our_event.html">Events</a></li>
                  <li><a href="retail_sector.html">Retail</a></li>
                  <li><a href="immovable_sector.html">Immovable</a></li>
                  <li><a href="museography_sector.html">Museography</a></li>
                  <li><a href="education_sector.html">Education</a></li>
                  <li><a href="public_sector.html">Public Service</a></li>
                </ul>
              </li>
              
              <li><a href="our_product.html">Products</a></li>
              <li><a href="contactus.html">Contact us</a></li>
            </ul>
          </nav>

        </div><!-- ending of col9 -->
      </div><!-- ending of row -->
      
    </div><!-- end of container -->
    
  </header><!-- ending of header bar -->


<section class="py-5 product-customer">
 	<div class="container">

<?php
	if(isset($_POST['submit12'])){
		$name=$_POST['full-name1'];
		$email=$_POST['email-input1'];
		$phone=$_POST['phone-number1'];
		$budget=$_POST['budget1'];
		$des=$_POST['des1'];

		$to='info@vridinnotechlabs.com'; // Receiver Email ID, Replace with your email ID
		$subject='Vridinno Client details';
		$message="Name :".$name."\n". "Email :".$email."\n"."Phone :".$phone."\n". "Budget :".$budget. "\n"."Description :"."\n\n".$des;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
</div>
</section>

<footer class="address-title"><!-- so address title -->
      <div class="container"> <!-- so of container -->
        <div class="row m-0 py-5"><!--  so of row -->
          <div class="col col-12 col-4 col-md-12 col-lg-3 col-xl-3 col-add p-0 m-0"><!-- so of col -->
            <div class="address-vrid">

            <div class="image-box1 ">
              <img src="assets/img/Vertical Component.svg">
              
            </div>
          </div>
            
          </div><!-- eo of col -->
          <div class="col col-12 col-8 col-md-12 col-lg-2 col-xl-2 text-center col-add mb-3 pl-3 p-0"><!-- so of col -->
             <ul class="list-add">
              <li><a href='aboutus.html'>Who We Are</a></li>
              <li><a href="our_product">Our Team</a></li>
              <li><a href='our_product.html'>Products</a></li>
              <li><a href='contactus.html'>Contact us</a></li>
            </ul>

            
          </div><!-- so of col -->
          <div class="col col-12 col-6 col-md-12 col-lg-4 col-xl-4 text-center col-add pl-4 pr-4 p-0 m-0 "><!-- so of col -->
            <div class="heading-add mb-2">
              <h2>Contact us</h2>
             <p>E-mail us - info@vridinnotechlabs.com</p>
              <p> Phone - +91 93429 66600</p>
              
            </div>
             <div class="heading-add-contact py-3">
              <h3>Address</h3>
              <p>No 77, 2nd floor, Giga77, West of Chord Road, Beside Mahalakshmi Metro Station, 1st R Block, Rajajinagar, Bengaluru, Karnataka, India 560086</p>
              
            </div>

            
          </div><!-- so of col -->
         <div class="col col-12 col-md-12 col-lg-3 col-xl-3 p-0"><!-- so of col -->
            <div class="heading-add-connect">
              <h2>Connect with Us</h2>
              <div class="icon-img-box">
                <div class="row py-5 m-auto">
                  <div class="col col-4">
                    <div class="iconbox">
                     <a href="https://www.linkedin.com/company/vridinno-tech-labs-pvt-ltd" target="_blank"><i class="icon-Group-10"></i></a> 
                    </div>
                  </div>
                  <div class="col col-4">
                    <div class="iconbox1">
                     <a href="https://www.facebook.com/vridinno/" target="_blank">  <i class="icon-Path-86"></i></a> 
                    </div>
                  </div>
                  <div class="col col-4 ">
                    <div class="iconbox">
                     <a href="https://instagram.com/vridinno_tech_labs?igshid=14j0ahosbdnfh" target="_blank"><i class="icon-Path-87"></i></a> 
                    </div>
                  </div>
                </div><!-- eo of row -->
                <div class="row pb-5 m-auto">
                  <div class="col col-4">
                    <div class="iconbox">
                     <a href="https://twitter.com/vridinno?s=08" target="_"><i class="icon-Path-81"></i></a> 
                    </div>
                  </div>
                  <div class="col col-4">
                    <div class="iconbox">
                     <a href="https://www.youtube.com/channel/UCyhBE4MA691RMlfMTyLOH-g" target="_blank"><i class="icon-Path-80"></i></a> 
                    </div>
                  </div>
                  <div class="col col-4 m-0">
                    <div class="iconbox pl-1">
                     <a href="https://wa.me/+919342966600" target="_blank"><i class="icon-Group-11"></i></a>
                    </div>
                  </div>
                </div><!-- eo of row -->
             </div>
            </div>

            
          </div><!-- so of col -->
          
          
        </div> <!-- eo of row -->

        
      </div> <!-- eo of container -->
      <div class="copy-write">
          <div class="container">
            <div class="row">
              <div class="col col-12 col-line">
                <h2>© Vridinno Tech labs Pvt ltd 2019 © All rights reserved</h2>
                
              </div>
              
            </div>
          </div>
        </div>
    </footer>

   



   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vridinno.js"></script>

  </body>
</html>




