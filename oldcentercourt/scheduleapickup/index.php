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
<?php include("../header.inc.php"); ?>
</div>

	  <div id="nav">
        <?php include("../nav.inc.php"); ?>
      </div>
	  
	<div id="pickup">
	<h2>Schedule a pick-up</h2>
	<p class="center">Pick-up and delivery service is available for New Canaan, Darien, Greenwich and Stamford.<br/>* indicates a required field.</p>
	<form action="pickup.php" method="post">
	<p>Name* <input type="text" size="30" name="name">&nbsp;&nbsp;Phone* <input type="text" size="14" name="phone" />&nbsp;&nbsp;E-mail* <input type="text" size="35" name="email" /></p>
	<p style="float:left;margin-right:1em;line-height:2em;">Street address* <br /><input type="text" size="40" name="address" /><br />City* <select name="city"><option value=""></option><option value="Stamford">Stamford</option><option value="NewCanaan">New Canaan</option><option value="Greenwich">Greenwich</option><option value="Darien">Darien</option></select><p/><p><input type="radio" name="retrieval" value="Delivery" /> Pick-up and delivery ($2)<br /><input type="radio" name="retrieval" value="Pick-up" /> Pick-up only ($1 - you will retrieve racket from Center Court Tennis Shop in New Canaan)</p>
	<p style="clear:both;">Racket needed by* <input type="text" size="20" name="needed"> (Rackets needed within 24 hours must be dropped off at Center Court)</p>
	<p>String request <input type="text" size="40" name="string"></p>
	<p>If your preferred string is out of stock, can we recommend a similar string or upgrade for the same price? <input type="radio" name="outofstock" value="Yes" /> Yes <input type="radio" name="outofstock" value="No" /> No</p>
	<p style="float:left;margin-right:2em;">Tension request <input type="text" size="20" name="tension"></p>
	<p>Unsure about tension? Mark on the scale your desired effect.<br />
	Power <input type="radio" name="scale" value="power4" />&nbsp;&nbsp;<input type="radio" name="scale" value="power3" />&nbsp;&nbsp;<input type="radio" name="scale" value="power2" />&nbsp;&nbsp;<input type="radio" name="scale" value="power1" />&nbsp;&nbsp;<input type="radio" name="scale" value="midline" />&nbsp;&nbsp;<input type="radio" name="scale" value="control1" />&nbsp;&nbsp;<input type="radio" name="scale" value="control2" />&nbsp;&nbsp;<input type="radio" name="scale" value="control3" />&nbsp;&nbsp;<input type="radio" name="scale" value="control4" /> Control</p>
	<p>Extras: <input type="checkbox" name="extras" value="overgrip" /> Overgrip <input type="checkbox" name="extras" value="replacement" /> Replacement grip <input type="checkbox" name="extras" value="dampener" /> Vibe dampener </p>
	<p>Special requests/notes <br /><textarea rows="8" cols="50" name="notes"></textarea></p>
	<p class="center"><input type="submit" value="Request pick-up"></p>

</form>
	</div></div>
<div id="footer">
<?php include("../footer.inc.php"); ?>
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