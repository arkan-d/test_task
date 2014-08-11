<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @var array       $config      Global blog configuration
 * @var string      $title       Page Title
 * @var string|View $content     Page content
 *
 * @author     Denys Arkan <denys.ark@gmail.com>
 * @copyright  Copyrights (c) 2014 Denys Arkan
 */
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo isset($title) ? $title :  'Clients'  ?></title>
		<link rel="shortcut icon" href="favicon.ico">
		<link href="<?php echo URL::base(); ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<link href="assets/css/theme.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>		
       
	       <!--  jquery plguin -->
		<script src="<?php echo URL::base(); ?>assets/js/login.js"></script>
		<script src="<?php echo URL::base(); ?>assets/js/modernizr.custom.js"></script>
		

	    <!--scroll-->
 		<script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!--//scroll-->
		
		
	</head>
	<body>
		<!----start-container----->
		<div class="header-bg" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"><h1><a href="/">CLIENTS</a></h1></div>
					</div>
					<div class="col-md-8">					
	 					<div class="h_right">
	 							
						   <div class="right">
							<ul class="menu list-unstyled">						                   
								<li class="login"><div class="log_box">
						    		   <div id="loginContainer" style="display:none;">
						                  	<a href="#" id="loginButton" class=""><span>LOGIN</span></a>               
							                <div id="loginBox" style="display: none;">                
							                    <form id="loginForm">	
							                        <fieldset id="body">
							                            <fieldset>
							                            	<input type="text"   name="email" id="email" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
							                                <input type="password" class="textbox" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
							                            </fieldset>
							                            <input type="submit" id="log" value="Sign in">
							                            <label for="checkbox"><i><a href="">Lost Password ?</a></i></label>
							                        </fieldset>
							                    </form>
							                </div>
						              </div>
						            <div class="clearfix"></div>
						          </div>	          						
	           <!-- end_login_box --></li>
							</ul>
							</div>
								
												
							
						</div>
						
					</div>	      
				</div>
			</div>
        </div>	
       <!----start-images-slider---->
		
<!--- features--->
<div class="container">
<div class="row">
		<div class="content-feature-grids" id="features">
						<h3> Features</h3>
						<p>Lorem Ipsum is simply dummy text of the printing</p>
						
						
			<?php echo isset($content) ? $content : '' ?>	
						
						
						
						
				<div class="clearfix"></div>		
				</div>
	</div>
</div>

<div class="footer">
	<div class="container">
		<div class="row">
 			<div class="col-md-12">	
				<div class="copy-right">
					<p>&#169 Copyright 2014. All Rights Reserved  </p>	
				</div>	
			</div>
		</div>
    </div>
</div>
<!-- scroll_top_btn -->
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/easing.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>

