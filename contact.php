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
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Kaylee's Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/curtain.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="shortcut icon" href="favicon.ico">

		<script type="text/javascript" src="//use.typekit.net/dqz0kfp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <script src="js/libs/modernizr-2.6.2.min.js"></script>
    </head>

    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <h1 class="hideText">Kaylee's portfolio</h1>
            <span class="nameSmall"><a href="index.html">Kaylee</a></span>
            <nav>
                <ul>
                    <li><a href="index.html">Work</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact me</a></li>
                    <li><a href="img/cv.pdf">C.V.</a></li>
                </ul>
            </nav>
        </header>
        
        <div class="body-container">
        	
	        <h3 class="">Let's talk</h3> 	        
	        
	        <div class="formContainer">
				
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
			</div><!--formContainer-->
			
			<div class="alertMessage">
			
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
			
			<div class="mapWrap">
				<span class="city">I'm currently based in Auckland</span>
				<img src="img/map.png" class="map"/>
			</div>

		</div><!--body container-->
		
		
        <div class="footer-container">
            <footer class="wrapper">
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/libs/curtain.js"></script>
         <script src="js/custom.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
