<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta name="google-site-verification" content="0QW3jKsbHBGLvnLgLIoSHRuxjHBUI_MMQ0wn9J-4eo4" />
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
 <link href="../stylesheet.css" rel="stylesheet" type="text/css" /> 
  <link rel="icon" href="../images/favicon.ico" type="image/jpg" />
<title>Center Court - Schedule a racquet pick-up</title>
</head>
<body>
<div id="container">
<div id="header">
<a href="http://centercourtstringing.com"><img src="../images/logoonly.jpg" alt="Center Court" style="float:left;margin: 0 0 0 2em;" /></a>
<a href="http://centercourtstringing.com"><img src="../images/lettersonly.jpg" alt="Center Court" style="margin: .5em 0 0 12em;" /></a>
<h4 class="top">45 Grove St. &#149; New Canaan, CT &#149; 203-966-2543 &#149; <a href="mailto:centercourtstringing@yahoo.com">centercourtstringing@yahoo.com</a></h4>
</div>
<div id="nav">
<ul>
<li><a href="http://centercourtstringing.com/">Home</a></li>
<li><a>Stringing<!--[if gte IE 7]><!--></a><!--<![endif]-->
<!--[if lte IE 6]><table><tr><td><![endif]-->
  <ul><!-- Start About drop-down menu -->
  <li><a href="/scheduleapickup">Schedule a pick-up</a></li>
  <li><a href="/options.htm">Stringing options</a></li>
  </ul><!-- End About drop-down menu -->
  <!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li><!-- End About -->
 <!-- End About drop-down menu -->
<li><a href="/platform">Platform Tennis</a></li>
<li><a href="/directions.htm">Directions</a></li>
</ul>
</div>
	<div id="phpscreen">
<?php
	//retrieve details from POST submission
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$retrieval = $_POST['retrieval'];
	$needed = $_POST['needed'];
	$string = $_POST['string'];
	$outofstock = $_POST['outofstock'];
	$tension = $_POST['tension'];
	$scale = $_POST['scale'];
	$extras= $_POST['extras'];
	$notes = $_POST['notes'];
	
	//validate sumbitted data
	if (empty($name)){
	die('<p class="center">Please provide your name.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	
	if (empty($email)){
	die('<p class="center">Please provide your email.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	
	if (empty($phone)){
	die('<p class="center">Please provide your phone number.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	
	if (empty($address)){
	die('<p class="center">Please provide your address.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	if (empty($city)){
	die('<p class="center">Please provide your city.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	if (empty($needed)){
	die('<p class="center">Please provide the date and time you need your racquet.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	//formulate email message
	$to = 'centercourtstringing@yahoo.com';
	$from = 'centercourtstringing.com';
	$subject = 'Contact from centercourtstringing.com';
	$body = "
	Name: $name\r\n
	Email: $email\r\n
	Phone number: $phone\r\n
	Address: $address\r\n
	City: $city\r\n
	Retrieval method: $retrieval\r\n
	Needed by: $needed\r\n
	String type: $string\r\n
	Similar or upgrade OK: $outofstock\r\n
	Tension: $tension\r\n
	Unsure scale: $scale\r\n
	Extras: $extras\r\n
	Special requests or notes: $notes\r\n";
	if(mail($to, $subject, $body, "From $from")){
		echo '<p>Your pick-up has been requested. You should receive confirmation shortly via e-mail or phone. If you do not hear from us by the end of the day, please call Center Court Tennis Shop at 203-966-2543.</p><p class="center"><a href="http://centercourtstringing.com">Return to home page</a></p>';
	}else{
		die('<p>Sorry, there was a mail delivery error. please call Center Court Tennis Shop at 203-966-2543 to schedule your pick-up.</p><p class="center"><a href="http://centercourtstringing.com">Return to home page</a></p>');
		}
		?>
		</div>
		</div>
		<div id="footer">
Center Court | 45 Grove St. | New Canaan, CT | 203-966-2543 | <a href="mailto:centercourtstringing@yahoo.com">centercourtstringing@yahoo.com</a>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18191457-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></body> </html> 