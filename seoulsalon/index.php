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
<link rel="stylesheet" type="text/css" href="include/style.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oxygen">
<style type="text/css">
span {
	font-family: ‘Oxygen’, sans-serif;
}
</style>
</head>

<body>
<div align="center">

<?php
	$default = "home";
	include 'include/header.php';
?>
    
   <table width="800"> 
    <tr>
      <td valign="top" border="0" bgcolor="#ffffff">
      	<span>
	Welcome to SEOUL SALON INC, your destination for relaxation and rejuvenation. Our professional beauty experts 
	are dedicated to making you look and feel beautiful. You'll get a free consultation before any treatment to find out 
	just what you need to look and feel your best. 

	<br>
	<br>
 

	At SEOUL SALON INC we have some of the twin cities top professional, experienced stylists & nail technicians to give 
	you a full salon experience. Our goal is for you to emerge feeling radiant, refreshed,and renewed. 
	</span>

      </td>
    </tr>
    <tr>
      <td colspan="2" valign="top" bordercolor="#ffffff" bgcolor="#FFFFFF">
      <table border="0">
      	<!--
      <tr>
      	<td width="590" align="left">
      		<img src="img/promo/promo_special_no_star.gif"/>
      	</td>
      </tr>
		-->
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
      				<td>
					<table>
					<tr valign="top">
						<td width="185">
							<a href="scheduleNicole.php">
	      						<img src="img/store/schedule_button_out_Nicole.jpg" onmouseover="this.src='img/store/schedule_button_over_Nicole.jpg';" onmouseout="this.src='img/store/schedule_button_out_Nicole.jpg';" border="0">
	      					</a>
	      					<a href="Stylists.php"><img src="img/staff/nicole_small.jpg" border="0"/></a>
	      					<b>Nicole's Special</b><br>
									-Special offer with your first salon visit<br>
									-We value your introductions, for each new referral receive $10.00 off your next service.
						</td>
						<td>
							<a href="scheduleJeanie.php">
      							<img src="img/store/schedule_button_out_Jeanie.jpg" onmouseover="this.src='img/store/schedule_button_over_Jeanie.jpg';" onmouseout="this.src='img/store/schedule_button_out_Jeanie.jpg';" border="0">
      						</a>
							<a href="Stylists.php"><img src="img/staff/jeanie_small.jpg" border="0"/></a>
							<b>Jeanie's Special</b><br>
							- Receive an eyelash or brow tint on sale for $10.00. (regular price<br>
							&nbsp;&nbsp;$15.00) with Jeanie.<br>
							&nbsp;&nbsp;(valid only with Jeanie, not valid with other promotions)
						</td>
						<td>
							<a href="scheduleRachel.php">
      							<img src="img/store/schedule_button_out_Rachel.jpg" onmouseover="this.src='img/store/schedule_button_over_Rachel.jpg';" onmouseout="this.src='img/store/schedule_button_out_Rachel.jpg';" border="0">
			      			</a>
							<a href="Stylists.php"><img src="img/staff/rachel_small.jpg" border="0"/></a>
							<b>Rachel</b>
						</td>
						<td>
							<a href="scheduleJanell.php">
	      						<img src="img/store/schedule_button_out_Janell.jpg" onmouseover="this.src='img/store/schedule_button_over_Janell.jpg';" onmouseout="this.src='img/store/schedule_button_out_Janell.jpg';" border="0">
	      					</a>
	      					<a href="Stylists.php"><img src="img/staff/janell_small.jpg" border="0"/></a>
							<b>Janell</b>
						</td>
						<td>
					</tr>
					</table>
					</td>
				</tr>
			</table>
			</font>
		</td>
    </tr>
  </table>
  
<?php
	include 'include/footer.php';
?>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
