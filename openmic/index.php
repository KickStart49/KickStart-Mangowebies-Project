<?php require_once("dbconnect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mango Webies :: Openmic</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<META NAME="ROBOTS" CONTENT="INDEX,FOLLOW">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Lato:300,400,700,900|Cabin+Sketch:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox/fancybox.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/fancybox.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
</head>

<body>
<!-- Start header -->
<header>
	<div class="header-top">
		<div class="container">
			<div class="logo">
				<a href="./"><img src="images/logo.png" alt="logo"></a>	
			</div>	
			<div class="header-right">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#about-us">About Us</a></li>
					<li><a href="#our-team">Our Team</a></li>
					<li><a href="#gallery-section">Gallery</a></li>
					<li><a href="#Schedule">Schedule</a></li>
					<li><a href="#sponsor">sponsors</a></li>
					<li><a href="#contact-us">Contact Us</a></li>
					<li><a href="http://127.0.0.1/openmic/login">Login</a></li>
				</ul>	
			</div>	
			<a href="javascript:void(0)" class="visible-xs visible-sm" id="toggle-menu"><i class="fa fa-bars" aria-hidden="true"></i></a> 
		</div>
	</div>
</header>
<!-- End hearder -->
<!-- Start Banner section -->
<div class="banner-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7 ">
				<div class="banner-text">
					<h2>Innovate your inner soul</h2>	
					<p>An open mic is a platform where an artist can perform and show their  original piece of art wether it may be Poetry, music, Standup Comedy and Story Telling, Drama.</p>
				</div>	
			</div>
			<div class="col-md-5 ">
				<div class="banner-timer">
					<h2>Our Upcoming Event</h2>
					<p>Mango Express Open Mic 6.0</p>
					<div id="countdown"></div>
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSd0lfvjWOCCzGq6B6chra3-3DvTQka1S3-v_8_V-UO5aQFBIg/viewform" target="_blank" class="btn btn-gradient">Register Now</a>
					
					<ul class="banner-social-icon">
						<li><a href="https://www.facebook.com/atmangoexpress/" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com/atmangoexpress/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Banner section -->
<!-- Start about-us section -->
<section class="about-us" id="about-us">
	<div id="abt-bg"></div>
	<div class="container">
		<div class="sec-title">
			<h2>About Us</h2>
			<div class="sec-title-border">
				<div class="sec-title-subborder">
			    </div>	
			</div>	
		</div>
		<div class="about-content">
			<div class="row">
				<div class="col-md-6">
					<div class="about-us-left">
						<p>MangoWebies is a start-up belonging to Gandhinagar, Gujarat. MangoWebies is associated with web designing and web development along with social media marketing. It is dedicated towards art and literature to serve society.</p>
						<div id="accordion">
							<div class="panel panel-default">
							    <div class="panel-heading">
							        <h4>
							          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Vision <i class="fa fa-plus" aria-hidden="true"></i></a>
							        </h4>
							      </div>
							      <div id="collapse1" class="panel-collapse collapse ">
							      	<div class="panel-body">
							      		To bridge the gap between artist and industries so as to keep up the spirit of art and literature also to ensure engagement among artists and to evolve as a pioneer of amalgamation of literature,commercial and industrial sector.
							    	</div>
							      </div>
							</div>
							    <div class="panel panel-default">
							        <div class="panel-heading">
								        <h4>
								          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Mission <i class="fa fa-plus" aria-hidden="true"></i></a>
								        </h4>
							      	</div>
							     	<div id="collapse2" class="panel-collapse collapse">
							        	<div class="panel-body">To enroll and engage young talent giving them exposure and platform to showcase talent and to grow new aspect of art through collaboration among various other sectors.
							        	</div>
							      	</div>
							    </div>
							</div> 
					</div>
				</div>
				<div class="col-md-6">
						<div class="about-us-right">
							<div class="video-container">
					   			<a id="intro-video" href="https://www.youtube.com/channel/UCHLQZR0PXlhm6I9J3uoib2g">
					     			<img src="images/video-icon.png"/>
					     		</a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="programs-container row">
	     	<div class="col-md-6">
			    <div class="program-item">
				   <img src="images/Poetry.png">
				   <h4>Poetry</h4>
				   <p>Poetry is an form of litrature performed with an rythmic and meaningful sentences derived from greek word meaning making. It contains figures of speech like metaphor,similie and metonymy.</p>
				</div>
		 	</div>
			<div class="col-md-6">
			    <div class="program-item">
				   <img src="images/story-telling.png">
				   <h4>Story Telling</h4>
				   <p>Story telling is an activity of sharing stories related to society, culture as well as one's personal feelings. Previously it was used as an medium spread awareness to people.</p>
				</div>
		 	</div>
		 	<div class="col-md-6">
			    <div class="program-item">
				   <img src="images/music.png">
				   <h4>Music</h4>
				   <p>Music is the most popular way of art beautifully depicted through the use of various musical instruments to create a perfectly pitched and soothing tune.</p>
				</div>
		 	</div>
		 	<div class="col-md-6">
			    <div class="program-item">
				   <img src="images/drama.png">
				   <h4>Drama</h4>
				   <p>Drama also known as "play" is an piece of fiction depicted by performing it using various facial expressions and also by body language.</p>
				</div>
		 	</div>
	    </div>
	</div>	
</section>
<!-- End about-us section -->
<!-- Start our-team section -->
<section class="our-team" id="our-team">
	<div class="container">
		<div class="sec-title">
			<h2>Our Team</h2>
			<div class="sec-title-border">
				<div class="sec-title-subborder">
			    </div>	
			</div>		
		</div>	
		<!-- logo -->
		<div class="row">
			 <div class="col-md-6  col-sm-6 text-center">
				<div class="m&w-image">
					<img src="images/mango-webies.png">
				</div>
			 </div>
			<div class="col-md-6  col-sm-6 text-center">
				<div class="c&e-image">
					<img src="images/C&E.png">
				</div>
			 </div>
		</div>
	</div> 
</section>
<!-- End our-team section -->
<!-- Start Gallary section -->
<section class="gallery-section" id="gallery-section">
	<div>
		<div class="sec-title">
			<h2>Gallery</h2>
			<div class="sec-title-border">
				<div class="sec-title-subborder">
			    </div>	
			</div>	
		</div>
		<div id="owl-demo">

			<?php $execute=mysqli_query($connect,"SELECT image FROM gallary");
    			while($datarow = mysqli_fetch_array($execute)){     
      			$image = $datarow["image"];?>

        		<a class="item" id="item" href="images/event-<?php echo $image;?>">
        			<img src="uploads/<?php echo $image;?>" alt="Image">
        		</a>

        		<?php } ?>
  		</div>
	</div>	
</section> 
<!-- End  Gallary section -->
<!-- Start Schedule -->
<section class="Schedule" id="Schedule">
	<div class="container">
		<div class="sec-title">
			<h2>Schedule</h2>
			<div class="sec-title-border">
				<div class="sec-title-subborder">
			    </div>	
			</div>	
		</div>
		<?php	$execute=mysqli_query($connect,"SELECT * FROM schedule");
			    while($datarow = mysqli_fetch_array($execute)){     
			      $eventname = $datarow["eventname"];
			      $date = $datarow["date"];
			      $time = $datarow["time"];
			      $address = $datarow["address"];
			      $description = $datarow["description"];
			      $day = date("l",strtotime(str_replace('-','/', $date)));?>

			      <div class="schedule col-md-12">
						<div class="schedule-title">
							<div class="left"><?php echo $day; ?></div>
							<div class="right"><?php echo $date; ?></div>
						</div>
					</div>
					<div class="schedule col-md-12">
						<div class="schedule-event">
							<div class="row">
								<div class="col-sm-3">
									<div class="time"><?php echo $time; ?></div>
									<div class="location"><?php echo $address; ?></div>
								</div>
								<div class="col-sm-9">
									<div class="event-title"><?php echo $eventname; ?></div>
									<div class="event-content">
										<?php echo $description; ?>  
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
	</div>
</section>
<!-- End Schedule -->
<!-- Start sponsor -->
<section class="sponsor"  id="sponsor">
	<div class="container">
		<div class="sec-title">
			<h2>Sponsor</h2>
			<div class="sec-title-border">
				<div class="sec-title-subborder">
			    </div>	
			</div>	
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="sponsor-img">
					<img src="images/sponsor1.png">	
				</div>	
			</div>	
			<div class="col-md-4 col-sm-4">
				<div class="sponsor-img">
					<img src="images/sponsor2.png">	
				</div>	
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sponsor-img">
					<img src="images/sponsor3.png">	
				</div>	
			</div>
			<div class="col-md-4 col-sm-4 ">
				<div class="sponsor-img ">
					<img src="images/sponsor4.png">	
				</div>	
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sponsor-img">
					<img src="images/sponsor5.png">	
				</div>	
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sponsor-img">
					<img src="images/sponsor6.png">	
				</div>	
			</div>
		</div>	
	</div>	
</section>
<!-- End sponsor -->
<!-- Start get-in-touch -->
<section class="get-in-touch"  id="contact-us">
	<div class="container">
		<div class="sec-title">
			<h2>Get In Touch</h2>
			<div class="sec-title-border">
				<div class="sec-title-subborder">
			    </div>	
			</div>	
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
					<div class="contact-item text-center">
						<i class="mdi-comment-account-outline"></i>
						<div class="contact-info">
							<img src="images/location1.png">
							<h4 class="dark-color">Come And Meet Us</h4>
							<p>
							A-305, Supermall-1,, Infocity, <br>
							Gandhinagar, Gujarat 382007
							</p>
						</div>
					</div>
			</div>
			<div class="col-md-3 col-sm-6">
					<div class="contact-item text-center">
						<i class="mdi-cellphone-android"></i>
						<div class="contact-info">
							<img src="images/phone.png">
							<h4 class="dark-color">Give Us A Call</h4>
							<p>+91 7016714970</p>
						</div>
					</div>
			</div>
			<div class="col-md-3 col-sm-6">
					<div class="contact-item text-center">
						<i class="mdi-xml"></i>
						<div class="contact-info">
							<img src="images/email1.png">
							<h4 class="dark-color">Send Us A Message</h4>
							<p><a href="mailto:withlove@hook.com">mangowebies@gmail.com</a></p>
						</div>
					</div>
			</div>
			<div class="col-md-3 col-sm-6">
					<div class="contact-item text-center">
						<i class="mdi-android-studio"></i>
						<div class="contact-info">
							<img src="images/other-icon.png">
							<h4 class="dark-color">Something Else</h4>
							<p>Feeling Really Well</p>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
<!--start  contactus -->	
<section class="contact-us"  id="contact-us">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sec-title">
					<h2>Send Us Message</h2>
					<div class="sec-title-border">
						<div class="sec-title-subborder">
						</div>	
					</div>	
				</div>
				<form method="post" name="registration" class="myform" id="myform">
					<div class="row">
						<div class="col-md-12 form-group">
							<img src="images/user.png">
							<input class="form-control" id="name" type="text" placeholder="Full Name">
						</div>
						<div class="col-md-12  form-group">
							<img src="images/email-icon.png">
							<input class="form-control" id="email" type="text" placeholder="Email-ID">
						</div>
						<div class="col-md-12  form-group">
							<img src="images/phone.png">
							<input class="form-control" id="phone" type="text" placeholder="Contact Number">
						</div>
						<div class="col-md-12 form-group ">
							<img src="images/chat.png">
				            <textarea class="form-control" id="comment" placeholder="Message"></textarea>
			    		</div>
					</div>
					<button type="Submit" class="btn btn-gradient">Submit</button>
			    </form>	
			</div>
		</div>
	</div>
</section>
<!--start  contactus -->	
<!--Start Footer  -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-info">
					<img src="images/logo.png">
					<ul class="social-icon" style="margin-top: 15px;">
						<li><a target="_blank" href="https://www.facebook.com/atmangoexpress/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/atmangoexpress/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
					<p>&copy; Copyright 2018 - All Rights Reserved.</p>
				</div>
			</div>	
		</div>	
	</div>
</footer>
<!--End Footer -->
<script>
	    // Set the date we're counting down to
	    var countDownDate = new Date("june 10, 2018 16:00:00").getTime();
	    // Update the count down every 1 second
	    var x = setInterval(function() {
	    // Get todays date and time
	    var now = new Date().getTime();
	    // Find the distance between now an the count down date
	    var distance = countDownDate - now;
	    // Time calculations for days, hours, minutes and seconds
	    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    // Display the result in the element with id="demo"
	    document.getElementById("countdown").innerHTML = '<span>'+ days + "<span>Days</span></span><span>" + hours + "<span>Hours</span></span><span>"
	    + minutes + "<span>Min</span></span><span>" + seconds + "<span>Sec</span></span>";
	    // If the count down is finished, write some text 
	    if (distance < 0) {
	      clearInterval(x);
	      document.getElementById("countdown").innerHTML = "Coming Soon";
	    }
	   }, 1000);
</script>     
</body>
</html>