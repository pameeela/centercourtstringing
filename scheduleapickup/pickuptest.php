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

<div id="liquid-round">
    <div class="top"><span></span></div>
		<div class="center-content">

<div id="header">
<?php include("../header2.inc.php"); ?>
</div>
<div id="nav">
<?php include("../nav.inc.php"); ?>
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
	

	
		?>
		</div>
	
<div id="footer">
<?php include("../footer.inc.php"); ?>
</div> <!--end footer-->

</div><!--end center content-->

    <div class="bottom"><span></span></div>
</div><!--end liquid-round-->
</div><!--end container-->

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