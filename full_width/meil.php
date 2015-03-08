<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {

?>



<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
	
	<!-- Basic -->
	<title>Margo | Contact</title>
	
	<!-- Define Charset -->
	<meta charset="utf-8">
	
	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Page Description and Author -->
	<meta name="description" content="Margo - Responsive HTML5 Template">
	<meta name="author" content="iThemesLab">
	
	
	<!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
	
	<!-- Margo CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	
	<!-- Responsive CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
	<!-- Color CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/jade.css" title="jade" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/peach.css" title="peach" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/sky-blue.css" title="sky-blue" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen" />

	
	
	<!-- Margo JS  -->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/modernizrr.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/count-to.js"></script>
	<script type="text/javascript" src="js/jquery.textillate.js"></script>
	<script type="text/javascript" src="js/jquery.lettering.js"></script>
	<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax.js"></script>
	<script type="text/javascript" src="js/contact.form.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
</head>
<body>

	<!-- Container -->
	<div id="container">
		
		  
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header" >
                        <!-- Stat Toggle Nav Link For Mobiles -->
                
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="index.html">
                           <div ><a href="index.html">   <img src="images/logo.png" style="height: 117px; padding-left: 177px" > <img/> </a> </div> 
                        </a>
                    </div>
                    <div class="navbar-collapse collapse" align="center">
                        <!-- Stat Search -->
                        
                        <!-- End Search -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav " style="padding-left: 153px" >
                            <li>
                                <a class="active" href="index.html">Почетна</a>
                            
                            </li>
                            <li>
                                <a href="about.html">За нас</a>
                                <ul class="dropdown">
                                    <li><a href="about.html">Историјат</a>
                                    </li>
                                    <li><a href="mission.html">Мисија и визија</a></li>
                                    
                                    <li><a href="card.html">Лична карта</a>
                                    </li>
                                    <li><a href="work.html">Услови за работа</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li> <a href="teacher.html">Кадар</a></li>
                              <li> <a href="students.html">Ученици</a></li>
                               <li> <a href="parents.html">Родители</a></li>
                                <li> <a href="activities.html">Активности</a>
                                	<ul class="dropdown">
                                    <li><a href="work_calendar.html">Работен календар</a>
                                    </li>
                                    <li><a href="eko_calendar.html">Еколошки календар</a></li>
                                    
                                    
                                    
                                </ul>
                                	
                                </li>
                                 <li> <a href="projects.html">Проекти</a></li>
                                 
                                 <li> <a href="gallery.html">Галерија</a>
                            
                                 </li>
                                
                        
                            <li><a href="contact.html">Контакт</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
		
		
		<!-- Start Map --> 
		<div id="map" data-position-latitude="41.688237" data-position-longitude="22.809916"></div>
		<script>
			(function ( $ ) {
				$.fn.CustomMap = function( options ) {
					
					var posLatitude = $('#map').data('position-latitude'),
					posLongitude = $('#map').data('position-longitude');
					
					var settings = $.extend({
						home: { latitude: posLatitude, longitude: posLongitude },
						text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
						icon_url: $('#map').data('marker-img'),	
						zoom: 15
					}, options );
					
					var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);
					
					return this.each(function() {	
						var element = $(this);
						
						var options = {
							zoom: settings.zoom,
							center: coords,
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							mapTypeControl: false,
							scaleControl: false,
							streetViewControl: false,
							panControl: true,
							disableDefaultUI: true,
							zoomControlOptions: {
								style: google.maps.ZoomControlStyle.DEFAULT
							},
							overviewMapControl: true,	
						};
						
						var map = new google.maps.Map(element[0], options);
						
						var icon = { 
							url: settings.icon_url, 
							origin: new google.maps.Point(0, 0)
						};
						
						var marker = new google.maps.Marker({
							position: coords,
							map: map,
							icon: icon,
							draggable: false
						});
						
						var info = new google.maps.InfoWindow({
							content: settings.text
						});
						
						google.maps.event.addListener(marker, 'click', function() { 
							info.open(map, marker);
						});
						
						var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];
						
						map.setOptions({styles: styles});
					});

};
}( jQuery ));

jQuery(document).ready(function() {
	jQuery('#map').CustomMap();
});
</script>
<!-- End Map -->




<!-- Start Content -->
<div id="content">
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-8">
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Контактирајте не!</span></h4>
				
				<!-- Start Contact Form -->
				<div id="contact-form" class="contatct-form">
					<div class="loader"></div>
					<form  class="contactForm" name="cform" method="post">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Име и презиме: <span class="required">*</span></label>
								<span class="name-missing" >Внесете го вашето име и презиме</span>  
								<input id="name" name="subject" type="text" value="" size="30">
							</div>
							<div class="col-md-4">
								<label for="e-mail">E-mail:<span class="required">*</span></label>
								<span class="email-missing">Внесете ја вашата e-mail адреса</span> 
								<input id="e-mail" name="email" type="text" value="" size="30">
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="message">Коментар</label>
								<span class="message-missing">Ваш коментар, забелешка или предлог.</span>
								<textarea id="message" name="comment" cols="45" rows="10"></textarea>
								<input type="submit" name="submit" class="button" id="submit_btn" value="Прати порака">
							</div>
						</div>
					</form>
				</div>
				<!-- End Contact Form -->
				
			</div>
			
			<div class="col-md-4">
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Информации</span></h4>
				

				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:10px;"></div>
				
				<!-- Info - Icons List -->
				<ul class="icons-list">
					<li><i class="fa fa-globe">  </i> <strong>Адреса:</strong> ул. „Борис Кидрич“  бр. 1   2315 Русиново </li>
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> rusinski_rusinovo@yahoo.com</li>
					<li><i class="fa fa-mobile"></i> <strong>Телефон:</strong> 033/ 448-522</li>
				</ul>
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:15px;"></div>
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Работно време: </span></h4>
				
				<!-- Info - List -->
				<ul class="list-unstyled">
					<li><strong>Понеделник - Петок</strong> - 8:00 -  16:00</li>
					
				</ul>
				
			</div>
			
		</div>
		
	</div>
</div>
<!-- End content -->

   
        
        <!-- Start Footer Section -->
        <footer>
            <div class="container">
                <div class="row footer-widgets">
                    
                    
                    <!-- Start Contact Widget -->
                    <div class="col-md-3 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <h4><img src="images/logo_small.png" class="img-responsive" alt="Footer Logo" /></h4>
                            
                            <ul>
                                <li><span>ООУ „Никола Петров Русински“ </span> <br/>  с. Русиново – Општина Берово <br/> ул. „Борис Кидрич“  бр. 1   2315 Русиново</li>
                          
                                
                            </ul>
                        </div>
                       
                    </div><!-- .col-md-3 -->
                    <!-- End Contact Widget -->
                     <div class="col-md-3">
                         
                        <div class="footer-widget contact-widget" style="float: right">
                        	<ul>
                        	<li> <span> тел/факс: </span>033/ 448-522  </li>
                                <li> <span>моб.тел:  </span>071/246-210  </li>
                                <li> <span> E - mail:</span> rusinski_rusinovo@yahoo.com</li>
                                <li><span> Директор: </span> Лиљана Буровска</li>
                                </ul>
                        </div>
                    </div>

                    
                </div><!-- .row -->

                <!-- Start Copyright -->
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2015 ООУ „Никола Петров Русински“ | Сите права се задржани  </p>
                        </div><!-- .col-md-6 -->
                        <div class="col-md-6">
                            <ul class="footer-nav">
                                <li><a href="index.html"> Почетна</a>
                                </li>
                                <li><a href="about.html">За нас</a>
                                </li>
                                <li><a href="teacher.html">Кадар</a>
                                </li>
                                <li><a href="students.html">Ученици</a>
                                </li>
                                    <li><a href="parents.html">Родители</a>
                                </li>
                                
                                <li><a href="activities.html">Активности</a>
                                </li>
                                <li><a href="projects.html">Проекти</a>
                                </li>
                            
                                <li><a href="contact.html"> Контакт  </a>
                                </li>
                            </ul>
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                </div>
                <!-- End Copyright -->

            </div>
        </footer>
        <!-- End Footer Section -->
        
        
    </div>
    <!-- End Full Body Container -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>


</body>
</html>