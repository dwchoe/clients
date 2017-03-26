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
.shadow {
	-moz-box-shadow: 3px 3px 4px #000;
	-webkit-box-shadow: 3px 3px 4px #000;
	box-shadow: 3px 3px 4px #000;

	/* For IE 8 */
	-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000')";
	/* For IE 5.5 - 7 */
	filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000');
}
</style>
</head>

<body>

<?php 
    $default = "skinCare"; 	
    include 'include/header.php';
?>
  
<table width="800" align="center">
  	<tr>
		<td colspan="3">
			<p align="left" class="style4"><u><font color="#ff0694">Skin Care</font></u></p>
			
			<img src="img/skin_care/skin_care_face.jpeg" width="123" height="123" class="shadow">
			&nbsp;&nbsp;
			<img src="img/skin_care/skin_care_candle.jpeg"  class="shadow">
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<p align="left" class="style6"><strong>Facial</strong>
		</td>
	</tr>
	<tr>
		<td width="200" valign="top">Express Facial (15 minutes)</td>
		<td width="40" valign="top">$30</td>
		<td>deep pore cleansing, exfoliation, revitalizing masque, skin balancing moisturizer<br>
		Perfect for: moms on the go and busy professionals</td>
	</tr>
	<tr>
		<td valign="top">Seoul Facial (30 minutes)</td>
		<td valign="top">$50</td>
		<td>deep pore cleansing, exfoliation, revitalizing masque, head massage, hand massage, skin balancing moisturizer<br>
		Perfect for: anti-aging, acne, sun damage or rejuvenation</td>
	</tr>
	<tr>
		<td colspan="3">
			<p align="left" class="style6"><strong>Sugaring Wax</strong>
		</td>
	</tr>
	<tr>
		<td>Brow</td>
		<td>$15</td>
		<td></td>
	</tr>
	<tr>
		<td>Lip</td>
		<td>$15</td>
		<td></td>
	</tr>
	<tr>
		<td>Chin</td>
		<td>$15</td>
		<td></td>
	</tr>
	<tr>
		<td>Full Face</td>
		<td>$45</td>
		<td></td>
	</tr>
	<tr>
		<td>Knuckles</td>
		<td>$20</td>
		<td></td>
	</tr>
	<tr>
		<td>Toes</td>
		<td>$20</td>
		<td></td>
	</tr>
	<tr>
		<td colspan="3">
			<p align="left" class="style6"><strong>Facial Coloring</strong>
		</td>
	</tr>
	<tr>
		<td>Brow Tinting</td>
		<td>$15</td>
		<td></td>
	</tr>
	<tr>
		<td>Lash Tinting</td>
		<td>$15</td>
		<td></td>
	</tr>
</table>

<?php
	include 'include/footer.php';
?>

</body>
</html>
