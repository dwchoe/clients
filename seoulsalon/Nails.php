<?php
// 8.2.2012 - Daewon Choe
// remove Dani info
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seoul Salon - Services</title>
<link rel="stylesheet" type="text/css" href="include/style.css">
<style type="text/css">
.shadow {
	-moz-box-shadow: 3px 3px 4px #000;
	-webkit-box-shadow: 3px 3px 4px #000;
	box-shadow: 3px 3px 4px #000;

	/* For IE 8 */
	-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000')";
	/* For IE 5.5 - 7 */
	filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000');
}
<!--
.style1 {font-size: 12px}
.style3 {font-family: "Adobe Garamond Pro"}
.style4 {
	font-family: "Adobe Garamond Pro";
	font-weight: bold;
	font-size: 16px;
}
.style6 {
	font-family: "Adobe Garamond Pro";
	font-size: 16px;
}
.style7 {font-size: 16px; }
.style8 {font-weight: bold; font-family: "Adobe Garamond Pro";}
-->
</style>
</head>

<body>

<?php 
    $default = "nails"; 	
    include 'include/header.php';
?>
  
<table width="800" align="center">
  	<tr>
		<td colspan="3">
			<p align="left" class="style4"><u><font color="#ff0694">Nail Care</font></u></p>
			
			<img src="img/nails/nail_superior.jpeg" width="107" height="107" class="shadow">
			&nbsp;&nbsp;
			<img src="img/nails/nail_image1.jpeg" width="162" height="107" class="shadow">
			&nbsp;&nbsp;
			<img src="img/nails/nail_image2.jpeg" class="shadow">
			
			<p align="left" class="style6"><strong>Safety and Sanitation</strong><br />

			We pride ourselves in using disposable files, buffers, and pedicure sponges.<br><br>

			Medical grade sanitation equipment and a strict adherence to sanitary salon conditions.<br><br>

			Our goal is to provide and achieve the highest quality services by delivering personalized customer service.
		</td>
	</tr>
	<tr>
		<td colspan=“3”>
			<p align="left" class="style6"><strong>Manicure</strong>
		</td>
	</tr>

	<tr>
		<td width="200">Express Manicure</td>
		<td width="40">$15</td>
		<td>soak, shape, cuticle trim, buff, and polish</td>
	</tr>
	<tr>
		<td>Classic Manicure</td>
		<td>$25</td>
		<td>soak, shape, cuticle trim, exfoliating scrub, buff, polish, moisturizing hand massage, and hot towel</td>
	</tr>
	<tr>
		<td>Gel Manicure (No Chip)</td>
		<td>$45</td>
		<td>soak, shape, cuticle trim, exfoliating scrub ,buff, gel polish, moisturizing hand massage, and hot towel</td>
	</tr>
	<tr>
		<td colspan="3">
			<p align="left" class="style6"><strong>Foot Care</strong>
		</td>
	</tr>
	<tr>
		<td>Express Pedicure</td>
		<td>$25</td>
		<td>soak, shape, cuticle trim, buff, and polish</td>
	</tr>
	<tr>
		<td>Classic Pedicure</td>
		<td>$35</td>
		<td>soak, shape, cuticle trim, exfoliating scrub, callus treatment,buff, polish, moisturising leg/foot massage, and hot towel</td>
	</tr>
	<tr>
		<td>Gel Pedicure (No Chip)</td>
		<td>$55</td>
		<td>soak, shape, cuticle trim, exfoliating scrub, callus treatment,buff, gel polish, moisturising leg/foot massage, and hot towel</td>
	</tr>
	<tr>
		<td colspan="3">
			<p align="left" class="style6"><strong>Add-On Services</strong>
		</td>
	</tr>
	<tr>
		<td>Polish Change (Hands)</td>
		<td>$12</td>
		<td></td>
	</tr>
	<tr>
		<td>Polish Change (Feet)</td>
		<td>$15</td>
		<td></td>
	</tr>
	<tr>
		<td>Nail Removal</td>
		<td>$14</td>
		<td></td>
	</tr>
	<tr>
		<td colspan="3">
			<p align="left" class="style6"><strong>Children Services (12 years and under)</strong>
		</td>
	</tr>
	<tr>
		<td>Manicure</td>
		<td>$15</td>
		<td></td>
	</tr>
	<tr>
		<td>Pedicure</td>
		<td>$28</td>
		<td></td>
	</tr>
	<tr>
		<td>Manicure and Pedicure</td>
		<td>$40</td>
		<td></td>
	</tr>
</table>

<?php
	include 'include/footer.php';
?>

</body>
</html>
