<?php 
include('php/connect.php');
include('php/login.php');

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="T@-TRACK SECURE POINT">
    <meta name="author" content="Eisong">
    <meta name="url" content="http://www.maxcowrange.com">
    <meta name="copyright" content="MaxCow Range">
    <meta name="robots" content="index,Buy cow, Range, Affordable cow">
    
    
    <title>Rolling - Freelancer Portfolio Template</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
      <style>
          .this a{
              color: white;
              background-color: cadetblue;
              padding: 5px;
          }
          .this{
              color: white;
              background-color: cadetblue;
              padding: 3px;
              
          }
          .puss{
              margin-top: -590px;
          }
            @media screen and (max-width: 1300px) {
            .puss {
            margin-top:  -80vh;        
              }
            }
      
      </style>
 </head>

  <body onload =<?php echo $var ?>>
    
    
	
	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->

    
    
    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-6">
                        <div class="logo">
                            <a href="index.php">T@-TRACK SECURE POINT</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="index.php">Home<div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="aboutus.html">About</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#services">services</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="home-section-background" data-stellar-background-ratio="0.6" style="height: 70px">
            
        </div>

        
    </header>
    <!-- Home & Menu Section End-->
    
    
    
    
    <!-- About Start -->
    <section id="about"  class="about-section puss">
         <div class="row">
             <div class="container">
                <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:px;">
                <div class="about-me">
                  
                 
                 <form action="index.php" method="post" id="login">
                   <h2>Login</h2>
                     <div class="col-sm-12">
						  <select id="subject" class="form-group form-control" name="person">
							<option value="" selected disabled>Login as</option>
							<option>Manager</option>
							<option>Admin</option>
							<option>User</option>
						   </select>
                          </div>
                    
					  <div class="col-sm-6">
						<div class="form-group">
						  <input type="text" id="name" class="form-control" placeholder="Username" name="uname">
						 </div>
                        </div>
								
                       <div class="col-sm-6">
					    <div class="form-group">
						 <input type="password" id="passs" class="form-control" placeholder="Password" name="pass" >
						 </div>
                        </div>
                        
                      
                   
                    <!-- <div class="text-left" style="margin-left: 15px;">   -->    
		   <input type="submit" class="this" style="margin-bottom: 15px" name="submit">
	               <a  onclick="sign();">dont have an account? signup</a>   <!-- </div> -->
                       
                  </form>



                  <!-- ////////////////////////////////////////////////////////////////// -->

                     <form action="index.php" method="post" id="sign">
                       <h2>signup</h2>
                     <div class="col-sm-12">
              <select id="subject" class="form-group form-control" name="sperson" required="">
              <option value="" selected disabled>Signup as</option>
              <option>Manager</option>
              <option>Admin</option>
              <option>User</option>
               </select>
                          </div>
                      <div class="col-sm-6">
            <div class="form-group">
              <input type="text" id="fname" class="form-control" placeholder="Firstname" name="sfname" required="">
             </div>
                        </div>

         <div class="col-sm-6">
            <div class="form-group">
              <input type="text" id="lname" class="form-control" placeholder="Lastname" name="slname" required="">
             </div>
                        </div>

            <div class="col-sm-6">
            <div class="form-group">
              <input type="text" id="uname" class="form-control" placeholder="Username" name="suname" required="">
             </div>
                        </div>
                
                       <div class="col-sm-6">
              <div class="form-group">
             <input type="password" id="pass" class="form-control" placeholder="Password" name="spass" required="">
             </div>
                        </div>

                              <div class="col-sm-6">
              <div class="form-group">
             <input type="password" id="confam" class="form-control" placeholder="Confirm Password" name="conpass" required="">
             </div>
                        </div>
                               <div class="col-sm-6">
              <div class="form-group">
             <input type="email" id="email" class="form-control" placeholder="email" name="semail" required="">
             </div>
                        </div>
                      
                   <div class="col-sm-6">
            <div class="form-group">
              <input type="number" id="phone" class="form-control" placeholder="Phone Number" name="sphone">
             </div>
                        </div>

                        <div class="col-sm-6">
            <div class="form-group">
              <input type="text" id="address" class="form-control" placeholder="Address" name="saddress">
             </div>
                        </div>
                    <!-- <div class="text-left" style="margin-left: 15px;">   -->    
       <input type="submit" class="this" style="margin-bottom: 15px" name="ssubmit">
                 <a  onclick="log();">have an account? login</a>   <!-- </div> -->
                       
                  </form>
             <?php echo $u; ?>
              </div>
             </div>
             
              <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive  " src="images/bg/cdd.jpg" draggable="false" alt="cow">
              </div>
             </div>
              
                
             </div>
       </section>
       <!-- About End -->
      <section id="about" class="about-section" >
         <div class="row">
             <div class="container">
               
              <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="images/bg/grp.jpg" draggable="false" alt="">
              </div>
                
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-me">
                  
                  <h2 style="padding-top: 50px;">About</h2>
                  
                  <p style="margin-top: -10px">
                      <b>T@-TRACK SECURE POINT</b> cow tracker is designed to recover thousands of stolen cows, resolve cattle ownership disputes, as well as drastically reduce or eliminate unnecessary killing of Ranchers.<br>
                      <span class="this"><a href="aboutus.html">Read More</a></span>
                    </p>
                    
                    
                 </div>
             
              </div>
                
          </div>
          </div>
       </section>

    
    <!-- Portfolio Start -->
    
     <!-- Contact End -->
       
        <section id="services" class="testimonial-section section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h1 class="text-center">Services</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="testimonial-carousel-list margin-top-20">
                
                    <div class="testimonial-word text-center">
                    
                        <h2 style="font-size: 25px">Livestock Security</h2>
                        <p>We Work with farmers to create off the shelf and bespoke farm and livestock security and asset tracking monitoring and recovery solutions.</p>
                    </div>
                    
                    <div class="testimonial-word text-center">
                    
                        <h2 style="font-size: 25px">Real Time Data Network</h2>
                        <p>Here in T@TRACK SECURE POINT take care of Data Network system feeds back real-time data on the location and security of your livestock and other valuable assets.</p>
                    </div>
                    
                    <div class="testimonial-word text-center">
                    
                        <h2 style="font-size: 25px">Asset Monitoring</h2>
                        <p>Creates farm asset monitoring, tracking, security and recovery solutions with GPS, Radio Frequency Identification(RFI), and IoT technologies and real-time data feedback.</p>
                    </div>
                    
                    <div class="testimonial-word text-center">
                    
                        <h2 style="font-size: 25px">Predictive Maintenance</h2>
                        <p>With T@TRACK SECURE POINT you can monitor the location and status of your assets 24/7 for security, predictive maintenance and increased productivity while reducing the reliance on manual labour. </p>
                    </div>
                    <div class="testimonial-word text-center">
                    
                        <h2 style="font-size: 25px">Geo Fencing</h2>
                        <p>Introducing Geo-fencing You can also secure your farm perimeter, individual fields, storage, outbuildings and farm house.</p>
                    </div>
                    <div class="testimonial-word text-center">
                    
                        <h2 style="font-size: 25px">Tracking Solutions</h2>
                        <p>All of our security and tracking solutions also act as a deterrent and preventative measure against damage and loss as well as a means of tracking and monitoring your assets.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
        
        
    <!-- Footer Start -->
    <footer id="contact" class="footer-section">
        <div class="container">
            <div class="row">
               
      <div class="col-md-4 text-left">
       <p><span><a href="#about" class="smoth-scroll">T@-TRACK SECURE POINT</a></span> 
          </div>
               
            <div class="col-md-4 text-left">
                <p>CONTACT US</p>
                <p><i class="fa fa-phone"></i> +234-08168360199, 00234-9026-607399</p>
                <p><i class="fa fa-envelope"></i> racygeo@gmail.com </p>
                <p><i class="fa fa-map-marker"></i> University of Calabar, Calabar;
		              Department of Computer Science,
		          Faculty of Physical Science,
		          Graduating Set of 2019.</p>
               </div>
              
             <div class="col-md-4 uipasta-credit text-right">
                <p>© Copyright 2019 <a href="" target="_blank" title="UiPasta"> Diamonk-Link</a></p>
                </div>
                
             </div>
        </div>
        
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/scot.js"></script>
  
  
  </body>
 </html>