<?php
// 8.2.2012 - Daewon Choe
// remove schedule with Dani button

// connecting to Insect database
$dbhost = 'seoulsalon.db.3179710.hostedresource.com';
$dbuser = 'seoulsalon';
$dbpass = 'Andover10';

/**
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$dbname = 'seoulsalon';
mysql_select_db($dbname);

$sql = 'select * from special';
$result = mysql_query($sql);
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seoul Salon</title>
<link href="Seoul.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url();
	background-repeat: no-repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
}
.style5 {
	font-size: 18px;
	font-style: italic;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('buttons/ourProductsOne.jpg','buttons/StylistOne.jpg','buttons/ContactOne.jpg','buttons/clientTestimonialsOne.jpg','buttons/renovationsOne.jpg','buttons/ourServicesOne.jpg')">
<div align="center">
  <table width="600" height="936" border="0">
    <tr>
      <td colspan="2">
      	<p class="style5">Thank you for selecting Seoul Salon. St. Pauls top chair rental salon!</p>
      	
      	<p><img src="img/SeoulLogo/Seoul6.jpg" width="363" height="78" /></p>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="left"><img src="buttons/homeGrey.jpg" width="37" height="13" /> &#8226; <a href="Services.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Services','','buttons/ourServicesOne.jpg',1)"><img src="buttons/ourServicesBase.jpg" name="Services" width="74" height="13" border="0" id="Services" /></a> &#8226; <a href="Products.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Products','','buttons/ourProductsOne.jpg',1)"><img src="buttons/ourProductsBase.jpg" name="Products" width="78" height="13" border="0" id="Products" /></a> &#8226; <a href="Stylists.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Stylist','','buttons/StylistOne.jpg',1)"><img src="buttons/StylistBase.jpg" name="Stylist" width="37" height="13" border="0" id="Stylist" /></a> &#8226; <a href="Contacts.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Contact','','buttons/ContactOne.jpg',1)"><img src="buttons/ContactBase.jpg" name="Contact" width="49" height="13" border="0" id="Contact" /></a> &#8226; <a href="Client Testimonials.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Testimonial','','buttons/clientTestimonialsOne.jpg',1)"><img src="buttons/clientTestimonialsBase.jpg" name="Testimonial" width="109" height="13" border="0" id="Testimonial" /></a> &#8226; <a href="Renovations.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Renovations','','buttons/renovationsOne.jpg',1)"><img src="buttons/renovationsBase.jpg" name="Renovations" width="72" height="13" border="0" id="Renovations" /></a>
      </td>
    </tr>
    <tr>
      <td width="390" height="352" valign="top" border="0" bgcolor="#ffffff">
      	<img src="bg/main.jpg" alt="Main" width="390" height="350" />
      </td>
      <td width="200" align="center" valign="top" bordercolor="#ffffff" bgcolor="#ffffff">
      	<!--
      	<img src="img/store/IMG_1245.jpg" alt="MainPhoto" width="197" height="350" />
      	
      	<img src="img/staff/Group_10232012.jpg" alt="MainPhoto"/>
      	-->
      	<img src="img/staff/Group_10232012.jpg"/>
      	&nbsp;  	
      </td>
    </tr>
    <tr>
      <td colspan="2" valign="top" bordercolor="#FF0066" bgcolor="#FFFFFF">
      <table>
      <tr>
      	<td width="590" align="left">
      		<img src="img/promo/promo_special_no_star.gif"/>
      	</td>
      </tr>

		<!--
		<php
		$counter=1;
		while($row = mysql_fetch_array($result)) {
		>
		<tr>
			<td valign="top" align="left">
      			<font face="arial" size="2">
      				<php if ( $counter != 1 ) { >
						<img src="img/store/horizontal_pink_lg_bar.gif">
					<php } >
					<php echo $row['message']; >

				</font>
			</td>
		</tr>

		<php
		$counter++;
		}
		>
		-->

      <tr>
      	<td valign="top" align="left">
      		<font face="arial" size="2">
      		<table border="0">
      			<tr valign="top">
      				<td width="178">
      					<a href="Stylists.php"><img src="img/staff/Nicole_crop_10232012.jpg" border="0"/></a>
      					<a href="scheduleNicole.php">
      						<img src="img/store/schedule_button_out_Nicole.jpg" onmouseover="this.src='img/store/schedule_button_over_Nicole.jpg';" onmouseout="this.src='img/store/schedule_button_out_Nicole.jpg';" border="0">
			      		</a>
			      	</td>
      				<td>			      		
			      		<b>Nicole's Special</b><br>
								- receive $10.00 off your first salon visit<br>
								- for each referral sent into Nicole each customer will receive $10.00<br>
								  &nbsp;&nbsp;off per referral<br>
								- The new customer will also receive $10.00 off (unlimited referrals!)<br>
									&nbsp;&nbsp;(valid only with Nicole, not valid with other promotions)
								<br><br>
							</td>
						</tr>
						<tr valign="top">
							<td>
								<a href="Stylists.php"><img src="img/staff/Jeannie_crop_10232012.jpg" border="0"/></a>
							</td>
							<td>					
								<b>Jeanie's Special</b><br>
								- receive an eyelash or brow tint on sale for $10.00. (regular price<br>
									&nbsp;&nbsp;$15.00) with Jeanie.<br>
								&nbsp;&nbsp;(valid only with Jeanie, not valid with other promotions)
								<br><br>
							</td>
						</tr>
						<tr valign="top">
							<td>
								<a href="Stylists.php"><img src="img/staff/Mandy_crop_10232012.jpg" border="0"/></a>
							</td>
							<td>					
								<b>Mandy's Special</b><br>
								- receive $5.00 off your first salon service with Mandy.<br>
								&nbsp;&nbsp;(valid only with Mandy, not valid with other promotions)
							</td>
						</tr>
					</table>
				</font>
			</td>
    </tr>

	<tr>
      <td colspan="2" valign="top" bordercolor="#FF0066" bgcolor="#FFFFFF">
        <p align="center">Seoul 274 Snelling Ave S, St. Paul, MN,  (651) 699.6441<br/>
      	<a href="Email.php">seoulsaloninc@live.com</a></p>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
