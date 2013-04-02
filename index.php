<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'jiehuei@gmail.com'; // Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nComments:\n $comments";
		$headers = 'From: My Site <noreply@kayleelim.com>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Kaylee's Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/curtain.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="shortcut icon" href="img/favicon.ico">

		<script type="text/javascript" src="//use.typekit.net/dqz0kfp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <script src="js/libs/modernizr-2.6.2.min.js"></script>
        
        
        <style type="text/css">
          .wf-loading .blog-title,
          .wf-loading .post-title {
            /* Hide the blog title and post titles while web fonts are loading */
            visibility: hidden;
            -moz-visibility: hidden;
            -webkit-visibility: hidden;
          }
        </style>
        
    </head>

    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <h1 class="hideText">Kaylee's portfolio</h1>
            <span class="nameSmall"><a href="index.php">Kaylee</a></span>
            <nav>
                <ul>
                    <li><a href="#bakery" class="curtainLinks">Work</a></li>
                    <li><a href="contact.php">Contact me</a></li>
                    <li><a href="img/cv.pdf">C.V.</a></li>
                </ul>
            </nav>
        </header>

		<ol class="curtains">

		    <li id="intro" class="cover">
		    	
		    	<h1 class="name">Kaylee Lim</h1>
				
		    	<div id="splashContainer">
		    		<img src="img/bokeh/sparkles2.png" class="background" alt="sparkles"/>
		    		<img src="img/bokeh/bokeh1.png" class="bokeh1" alt="bokeh"/>
		    		<img src="img/bokeh/bokeh2.png" class="bokeh2" alt="bokeh"/>
		    	<div>

		    </li>

		    <li id="bakery" class="cover">
		    
		    	<div class="wideViewport bakeryPort">
		    	
		    		<div class="contentStrip">
		    			
		    			<div class="contentWrapper">
		    			
			    			<div class="option">
			    				<img src="img/arrowKeys.png" class="arrowKeys" alt="arrowkeys"/>
			    			</div>	
		    			
					    	<a href="#nextSlide" class="nextBtn"></a>
					    	
					    	<div class="iMac">
					    	
					    		<a href="http://kaylee-l.dmlive.co.nz/summatives/bakery/"  target="_blank" class="link"/>
					    			<div class="screen bakery">
					    				<img src="img/screen/bakery.jpg" id="test" />
					    				<img src="bakery2.jpg" id="test2" />​
					    			</div>
					    		</a>
					    		
					    		<div class="cupWrap">
						    		<div class="coffeeCup">
						    			<img src="img/cup.png" alt="cup" class="cup"/>
						    		</div>
						    		
						    		<!--div class="steam">
						    		</div>
						    		<div class="steam">
						    		</div>
						    		<div class="steam">
						    		</div>
						    		<div class="steam">
						    		</div>
						    		<div class="steam">
						    		</div>
						    		<div class="steam">
						    		</div>
						    		<div class="steam">
						    		</div-->
						    		
					    		</div>					    	
					    		
					    	</div>
					    	
					    	<h2>La Voie Francaise</h2>
					    	<p class="subtitle">Responsive // Wordpress + php // JQuery // HTML5 + CSS</p>
				    	
				    	</div>

						<div class="contentWrapper" id="bakeryInfo">
						
					    	<a href="#nextSlide" class="nextBtn"></a>
					    	<a href="#prevSlide" class="prevBtn"></a>
					    	
					    	<h3>// Responsive - Mobile version of website.</h3>
					    	
					    	<div class="mobileWrap">
					    	
					    		<div class="phoneWrap top">
					    			<img src="img/phone2.png" alt="phone" class="phone"/>
					    			
					    			<div class="phoneImgWrap">
					    				<img src="img/phoneBlog.jpg" alt="mobileImg" class="mobileImg"/>
					    			</div>
					    		</div>
					    		
					    		<div class="phoneWrap">
					    			<img src="img/phone.png" alt="phone" class="phone"/>
					    			
					    			<div class="phoneImgWrap">
					    				<img src="img/phoneGallery.jpg" alt="mobileImg" class="mobileImgCenter"/>
					    			</div>
					    		
					    		</div>

								<div class="phoneWrap top">
									<img src="img/phone2.png" alt="phone" class="phone"/>
									
									<div class="phoneImgWrap">
										<img src="img/phoneMap.jpg" alt="mobileImg" class="mobileImg"/>
									</div>
								</div>
													    
					    	</div>
					  
						</div>	
						
						<div class="contentWrapper" id="bakeryInfo2">
						
							<a href="#nextSlide" class="nextBtn spin"></a>
							<a href="#prevSlide" class="prevBtn"></a>
							
							<h3>// Responsive - iPad version of website.</h3>
							
							<div class="ipad">
								<img src="img/preview/bakery2.png" alt="bakery2">
							</div>
						
						</div>		
										    
				    </div><!--content strip-->
				    
				</div><!--wide viewport-->
				
		    </li>

			<li id="wow" class="cover">
				<div class="wideViewport bakeryPort">
				
					<div class="contentStrip">
						
						<div class="contentWrapper" id="wow">
							
							<div class="option">
								<img src="img/arrowKeys.png" class="arrowKeys" alt="arrowkeys"/>
							</div>		
						
					    	<a href="#nextSlide" class="nextBtn"></a>
					    	
						    <div class="iMac">
						    	<a href="http://kaylee-l.dmlive.co.nz/summatives/02/"  target="_blank" class="link"/>
						    		<div class="screen wow">World of Wearable Art</div>
						    	</a>
						    </div>
						    
						    <h2>World of Wearable Art</h2>
						    <p class="subtitle"> Design // JQuery + Javascript // HTML5 & CSS</p>
						    
						</div>
						
						<div class="contentWrapper" id="wowInfo">
						
							<a href="#nextSlide" class="nextBtn"></a>
							<a href="#prevSlide" class="prevBtn"></a>
							
							<div class="screenshot">
								<img src="img/preview/wow1.jpg" alt="wow1">
							</div>
							
							<div class="description">
						    	<p>This website makes use of the parallax illusion, and the navigation remains hidden until the user points the mouse at the little arrow at the top of the page.</p>
						    </div>
						</div>
						
						<div class="contentWrapper" id="wowInfo2">
						
							<a href="#nextSlide" class="nextBtn spin"></a>
							<a href="#prevSlide" class="prevBtn"></a>
							
							<div class="screenshot">
								<img src="img/preview/wowCat.jpg" alt="wow2" class="wowCat">
							</div>
							
							<!--div class="description">
						    	<p>The Categories page makes use of popovers and a pyramid layout.</p>
						    </div-->
						</div>
						
					</div>
					
				</div>
			</li>

		    <li id="midGirth" class="cover">
		    	<div class="wideViewport bakeryPort" id="middlePort">
		    	
		    		<div class="contentStrip">
		    			
		    			<div class="contentWrapper" id="midGirth">
		    				
		    				<div class="option">
		    					<img src="img/arrowKeys.png" class="arrowKeys" alt="arrowkeys"/>
		    				</div>		
		    			
		    		    	<a href="#nextSlide" class="nextBtn"></a>
		    		    	
						        <div class="iMac">
						        	<a href="http://middlegirth.gladeye.org/"  target="_blank" class="link"/>
						        		<div class="screen midGirth">Middle Girth</div>
						        	</a>
						        </div>
						        
						        <h2>Middle Girth</h2>
						        <p class="subtitle"> Responsive // JQuery + Javascript // HTML5 & CSS // Wordpress</p>
						 </div>
						 
						 <div class="contentWrapper" id="mid">
						 
						 	<a href="#nextSlide" class="nextBtn"></a>
						 	<a href="#prevSlide" class="prevBtn"></a>
						 	
						 	<div class="screenshot">
						 		<img src="img/preview/middle.jpg" alt="middleGirth">
						 	</div>
						 	
						     <p class="description">Middle Girth is a Wordpress site based on a food trail and adventure around Middle Earth. It was a group project and I was the front end developer.</p>
						 </div>
						 
						 <div class="contentWrapper" id="mid2">
						 	
						 	<a href="#nextSlide" class="nextBtn spin"></a>
						 	<a href="#prevSlide" class="prevBtn"></a>
						 	
						 	<div class="screenshot">
						 		<img src="img/preview/middle2.jpg" alt="middleGirth">
						 	</div>
						 	
						 	 <p class="description">Interactive map of Middle Girth</p>
						 	
						 </div>
						 
					</div>
					
				</div>
		        
		    </li>

		    <!--li id="jirka" class="cover">
		        <div class="iMac">
		        	<a href="http://kaylee-l.dmlive.co.nz/formatives/metaphor03/index.html" target="_blank" class="link">
		        		<div class="screen jirka">Jirka</div>
		        	</a>
		        </div>
		        <h2>Artist website</h2>
		        <p class="subtitle"> Responsive // HTML5 & CSS // Design </p>
		    </li-->

		    <li id="dug" class="cover">
		    	
		    	<div class="option">
		    		<img src="img/arrowKeys.png" class="arrowKeys" alt="arrowkeys"/>
		    	</div>	
		    	
		        <div class="iMac">
		        	<a href="http://downundergear.co.nz" target="_blank" class="link">
		        		<div class="screen dug">Downundergear</div>
		        	</a>
		        </div>
		        
		        <h2>Downundergear</h2>
		        <p class="subtitle"> Shopify // Liquid & CSS // E-commerce </p>
		    </li>

		    <li id="ams" class="cover">
		    
		    	<div class="option">
		    		<img src="img/arrowKeys.png" class="arrowKeys" alt="arrowkeys"/>
		    	</div>	
		    	
		        <div class="iMac">
		        	<a href="http://www.malaysianz.org.nz/" target="_blank" class="link">
		        		<div class="screen ams">Auckland Malaysian Society</div>
		        	</a>
		        </div>
		        
		        <h2>Auckland Malaysian Society</h2>
		        <p class="subtitle"> Wordpress // HTML & CSS </p>
		    </li>
		    
		    <li id="techxpert" class="cover">
		    	<div class="wideViewport bakeryPort" id="techxpertPort">
		    	
		    		<div class="contentStrip">
		    			
		    			<div class="contentWrapper" id="techxpert">
		    				
		    				<div class="option">
		    					<img src="img/arrowKeys.png" class="arrowKeys" alt="arrowkeys"/>
		    				</div>		
		    			
		    		    	<a href="#nextSlide" class="nextBtn"></a>
		    			        
		    			        <div class="iMac">
		    			        	<a href="http://kaylee-l.dmlive.co.nz/formatives/brandmerger/" target="_blank" class="link">
		    			        		<div class="screen techxpert">Techxpert</div>
		    			        	</a>
		    			        </div>
		        
		    			        <h2>Techxpert</h2>
		    			        <p class="subtitle"> HTML5 & CSS // Design </p>
		    			 </div>
		    			 
		    			 <div class="contentWrapper" id="wowInfo">
		    			 
		    			 	<a href="#nextSlide" class="nextBtn"></a>
		    			 	<a href="#prevSlide" class="prevBtn"></a>
		    			 	
		    			 	<div class="screenshot">
		    			 			<img src="img/preview/techxpert2.jpg" alt="tech2">
		    			 	</div>
		    			 	
		    			 	<div class="description">
		    			     	<p>This website is one of the first built during the course, it's not as polished and not very well coded, but it's here to show how much I've learnt in a year!</p>
		    			     </div>
		    			 </div>
		    			 
		    			 <div class="contentWrapper" id="wowInfo">
		    			 
		    			 	<a href="#nextSlide" class="nextBtn spin"></a>
		    			 	<a href="#prevSlide" class="prevBtn"></a>
		    			 	
		    			 	<div class="screenshot">
		    			 		<img src="img/preview/techxpert3.jpg" alt="tech3">
		    			 	</div>
		    			 	
		    			 	<div class="description">
		    			     	<p>Another screenshot from techxpert</p>
		    			     </div>
		    			 </div>
		    			 
		    		</div>
		       
		       </div>
		    </li>
		    
		    <!--li id="contact" class="cover"> 	        
		    		        
		        <div class="formContainerMain">
					
					<form method="post" action="contact.php" id="contactform">
						<fieldset>
							<legend class="formLegend">Let's talk</legend>
							
							<div class="clearfix">
								<div class="input">
									<input type="text" placeholder="Name" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
								</div>
							</div>	
		
							<div class="clearfix">
								<div class="input">
									<input type="text" placeholder="E-mail" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
								</div>
							</div>
		
							<div class="clearfix">
								<div class="input">
									<textarea rows="8" placeholder="Message" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
								</div>
							</div>
							<div class="actions">
								<input type="submit" value="SEND" name="submit" id="submitButton" class="submitBtn" title="Click here to submit your message!" />
							</div>
						</fieldset>
					</form>
				</div> <!--formContainerMain-->
				
				<!--div class="alertMessage">
				
					<?php if(isset($hasError)) { //If errors are found ?>
						<p class="alert-message error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
					<?php } ?>
					
					<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
						<div class="alert-message success">
							<p class="alertColor"><strong>Message Sent!</strong></p>
							<p>Thank you for dropping me a message <strong><?php echo $name;?></strong>! Your email was sent and I'll be in touch with you soon.</p>
						</div>
					<?php } ?>
					
				</div>
		    </li-->

		</ol>

        <div class="footer-container">
            <footer class="wrapper">
                <h3>footer</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/libs/jquery.zlayer.full.js"></script>
        <script src="js/libs/curtain.js"></script>
         <script src="js/custom.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
