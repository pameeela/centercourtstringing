<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
 <link href="../stylesheet.css" rel="stylesheet" type="text/css" /> 
  <link rel="icon" href="../images/favicon.ico" type="image/jpg" />
<title>Schedule a racket pick-up</title>
</head>
<body><div id="header">
</div>

<div id="container">
<a href="http://centercourtstringing.com"><img src="../images/logo_200.gif" alt="Center Court logo" class="logo" /></a>
<a href="http://centercourtstringing.com"><img src="../images/center_court_letters.jpg" alt="Center Court" class="letters"/></a>
<div id="nav">
<ul>
<li><a href="http://centercourtstringing.com/">Home</a></li>
<li><a href="/scheduleapickup">Schedule a pick-up</a></li>
</ul>
</div>
	<div id="main">
	<div id="phpscreen">
<?php
	//retrieve details from POST submission
	$name1 = $_POST['name1'];
	$email1 = $_POST['email1'];
	$phone1 = $_POST['phone1'];
	$club1 = $_POST['club1'];
	$birthdate1 = $_POST['birthdate1'];
	$APTAnumber1 = $_POST['APTAnumber1'];
	$shirt1 = $_POST['shirt1'];
	$name2 = $_POST['name2'];
	$email2 = $_POST['email2'];
	$phone2 = $_POST['phone2'];
	$club2 = $_POST['club2'];
	$birthdate2 = $_POST['birthdate2'];
	$APTAnumber2 = $_POST['APTAnumber2'];
	$shirt2 = $_POST['shirt2'];
	$payment = $_POST['payment'];
	
	//validate sumbitted data
	if (empty($name1)){
	die('<p class="center">Please provide your name.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	
	if (empty($email1)){
	die('<p class="center">Please provide your email.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	
	if (empty($phone1)){
	die('<p class="center">Please provide your phone number.</p> <form><p class="center"><input type="button" value="Go back" onClick="history.go(-1);return true;"> </p></form>');
	}
	//formulate email message
	$to = 'nicholas.bergman@yahoo.com';
	$from = 'centercourtstringing.com';
	$subject = 'Contact from centercourtstringing.com';
	$body = "
	Player 1\r\n
	Name: $name1\r\n
	Email: $email1\r\n
	Phone number: $phone1\r\n
	Club: $club1\r\n
	Birthdate: $birthdate1\r\n
	APTA number: $APTAnumber1\r\n
	Shirt size: $shirt1\r\n
	Player 2\r\n
	Name: $name2\r\n
	Email: $email2\r\n
	Phone number: $phone2\r\n
	Club: $club2\r\n
	Birthdate: $birthdate2\r\n
	APTA number: $APTAnumber2\r\n
	Shirt size: $shirt2\r\n
	Payment method: $payment";
	if(mail($to, $subject, $body, "From $from")){
		echo '<p>Your entry has been sumbitted. If you chose to pay by check, please make payable to Center Court Tennis, and mail to 45 Grove St. New Canaan, CT 06840. To pay by credit card, call Nick Bergman at (203) 253-7435.</p><p class="center"><a href="http://centercourtstringing.com">Return to home page</a></p>';
	}else{
		die('<p>Sorry, there was a mail delivery error. Please call Nick Bergman at (203) 253-7435.</p><p class="center"><a href="http://centercourtstringing.com">Return to home page</a></p>');
		}
		?>
		</div>
		</div>
		</div>
		<div id="footer">
Center Court | 45 Grove St. New Canaan, CT | 203-966-2543
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