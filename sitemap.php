<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
	<title>GEOILOCATE | Sitemap</title>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.html">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    <link rel = "stylesheet" media = "screen" href = "js/style-switcher/color-switcher.css" />
    <link rel="stylesheet" href="js/sticky-menu/core.css">
</head>

<body>
	<div class="site_wrapper">
        <!-- HEADER -->
        <div class="header_inner">
            <header id="header">
                <!-- Top header bar -->
                <div id="trueHeader">
                    <div class="wrapper">
                        <div class="container">
                            <!-- Logo -->
                            <div class="one_fourth"><a href="./" id="logo"></a></div>
                            
                            <!-- Menu -->
                            <div class="three_fourth last">
                                <nav id="access" class="access" role="navigation">
                                    <div id="menu" class="menu">
                                        <ul id="tiny">
                                            <li><a href="./">Home</a></li>  
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Services <i class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="service-enterprise-gis.html">Enterprise GIS</a></li>
                                                    <li><a href="service-geodata.html">GeoData</a></li>
                                                    <li><a href="service-geocoding.html">GeoCoding</a></li>
                                                    <li><a href="service-surveying.html">Surveying</a></li>
                                                    <li><a href="service-remote-sensing.html">Remote Sensing</a></li>
                                                    <li><a href="service-geoforms.html">GeoForms</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="blog/">Blog</a></li>
                                            <li class="last"><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- end header -->
        
        <div class="clearfix"></div>
        
        <div class="page_title">
        	<div class="container">
                <div class="title"><h1>Sitemap</h1></div>
                <div class="pagenation">&nbsp;<a href="./">Home</a> <i>/</i> Sitemap</div>
            </div>
        </div>
        <!-- end page title -->
        
        <!-- Content -->
        <div class="container">
        	<div class="content_fullwidth">
            	<div class="one_full">
                	<ul style="margin:0; padding:0">
                    	<li style="margin-bottom:5px"><a href="./">Home</a></li>  
                        <li style="margin-bottom:5px"><a href="about.html">About</a></li>
                        <li style="margin-bottom:5px">
                        	Services <i class="fa fa-angle-down"></i>
                            <ul style="margin:0; padding:0 0 0 10px">
                                <li><a href="service-enterprise-gis.html">Enterprise GIS</a></li>
                                <li><a href="service-geodata.html">GeoData</a></li>
                                <li><a href="service-geocoding.html">GeoCoding</a></li>
                                <li><a href="service-surveying.html">Surveying</a></li>
                                <li><a href="service-remote-sensing.html">Remote Sensing</a></li>
                                <li><a href="service-geoforms.html">GeoForms</a></li>
                            </ul>
                        </li>
                        <li style="margin-bottom:5px"><a href="projects.html">Projects</a></li>
                        <li style="margin-bottom:5px"><a href="blog/">Blog</a> <i class="fa fa-angle-down"></i>
                        	<ul style="margin:0; padding:0 0 0 10px">
							<?php
                                include("login/ajax/dbconnect.php");
								$b_sql = "select `link`, `title` from `blog` order by `article_id`";
                                $b_res = mysql_query($b_sql);
                                while ($b_row = mysql_fetch_assoc($b_res)) {
                                    $b_link = $b_row['link'];
                                    $b_title = $b_row['title'];
                                    echo "<li style='margin-bottom:5px'><a href='blog/{$b_link}'>{$b_title}</a></li>";
                                }
                            ?>
                        	</ul>
                        </li>
                        <li style="margin-bottom:5px"><a href="contact.html">Contact</a></li>
                        <li style="margin-bottom:5px"><a href="sitemap.php">Sitemap</a></li>
                    </ul>
                    <div class="clearfix divider_line2"></div>
                </div>
                <!-- end section -->
            </div>
        </div>
    </div>
    <!-- end content area -->
    
    <div class="clearfix mar_top5"></div>
    
    <!-- Footer -->
    <div class="container">
        <div class="one_half">
            <h2><strong>About GEOILOCATE</strong></h2>
            <p class="pmargin">
                GEOILOCATE is a wholly black-owned consulting company offering services and products within the following domains - Geographical
                Information System (GIS), Remote Sensing, Location Based Services (LBS) and Surveying.
            </p>
            <p>
            	We pride ourselves in providing services and products that meet and solve your business needs.
                <a href="about.html">Read more</a>.
            </p>
        </div><!-- end section -->
        
        <div class="one_fourth">
            <h2><strong>Services</strong></h2>
            <ul>
                <li><a href="service-enterprise-gis.html">Enterprise GIS</a></li>
                <li><a href="service-geodata.html">Geodata</a></li>
                <li><a href="service-geocoding.html">Geocoding</a></li>
                <li><a href="service-geocoding.html">Surveying</a></li>
                <li><a href="service-remote-sensing.html" >Remote Sensing</a></li>
                <li><a href="service-geoforms.html" >Geoforms</a></li>
            </ul>
        </div><!-- end section -->
        
        <div class="one_fourth last">
            <h2><strong>Quick Links</strong></h2>
            <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="blog/">Blog</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="sitemap.php">Sitemap</a></li>
            </ul>
        </div><!-- end section -->
    </div>
    
    <div class="clearfix mar_top5"></div>
    
    <div class="copyright_info">
        <div class="container">
            <div class="one_half">
                <strong>64 Kennington Road, Nahoon, East London, South Africa</strong>
            </div>
            <div class="one_half last" align="right">
                <span>&copy; 2014 <a href="./">GEOILOCATE</a>. All rights reserved.
                <br/>Designed and Developed by <a href="http://www.sevenlemons.net" style="text-decoration:none">Seven Lemons Design Studio</a></span>
            </div>
        </div>
    </div>
    <!-- end copyright info -->
    
    <a href="#" class="scrollup">Scroll</a>
    
    <!-- ######### JS FILES ######### -->
    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="js/universal/jquery.js"></script>
    
    <!-- style switcher -->
    <script src="js/style-switcher/jquery-1.js"></script>
    <script src="js/style-switcher/styleselector.js"></script>
    
    <!-- main menu -->
    <script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/mainmenu/selectnav.js"></script>
    <script type="text/javascript" src="js/mainmenu/scripts.js"></script>
    
    <!-- scroll up -->
    <script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			});
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 500);
				return false;
			});
		});
	</script>
    <script type="text/javascript" src="js/sticky-menu/core.js"></script>
</body>
</html>