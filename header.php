<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- css links -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="js/basic-jquery-slider/bjqs.css">

<!-- scripts -->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/basic-jquery-slider/js/bjqs-1.3.min.js"></script>
<script src ="js/menu.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42292500-1', 'nutsandvolts.ca');
  ga('send', 'pageview');

</script>
<!-- End of scripts -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuts and Volts Inc.</title>
</head>

<?php
	$page = $_SERVER['REQUEST_URI'];
?>

<body>
<div id="container">
    <div id="main-content">
        <!--<div id="header" class="content">  	
            <div id="logo" onclick='window.location.href="index.php"'></div>
            <div id="logo-subtext">24 hour breakdown service: (519)-212-5269</div>
		</div>-->
		<div id="header2">
			<div class="content">
				<div id="logo2">
				    <img id="logo-image" src="../images/logo.png" onclick='window.location.href="index.php"'/>
                    <div id="location-info">
                      Cambridge Ont. - Main Office / Flesherton Ont. - Branch
                    </div>
				</div>
				<div id="callus"></div>
			</div>
		</div>
		
		
            <div id="nav-menu-wrapper">
            	<table id="nav-menu" class="content">
                	<tr>
                 		<td>
                        	<div data="index.php" class="nav-wrapper
							<?php								
								if (strpos($page,'index') !== false)
									echo " active";
							?>
                            ">
	                        	<div id="menu-home" class="nav-menu-icon"></div>
	                            <div>Home</div>
                            </div>
                        </td>
                 		<td>
                        	<div data="services.php" class="nav-wrapper
							<?php								
								if (strpos($page,'services') !== false)
									echo " active";
							?>
                            ">
	                        	<div id="menu-services" class="nav-menu-icon"></div>
	                            <div>Services</div>
                            </div>
                        </td>
                 		<td>
                        
                        	<div data="about.php" class="nav-wrapper
							<?php								
								if (strpos($page,'about') !== false)
									echo " active";
							?>
                            ">
	                        	<div id="menu-about" class="nav-menu-icon"></div>
	                            <div>About</div>
                            </div>
                        </td>
                 		<td>
                        	<div data="contact.php" class="nav-wrapper
							<?php								
								if (strpos($page,'contact') !== false)
									echo " active";
							?>
                            ">
	                        	<div id="menu-contact" class="nav-menu-icon"></div>
	                            <div>Contact</div>
                            </div>
                        </td>
                    </tr>
                 </table>
        	</div>			
        </div>
