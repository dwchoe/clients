<?php

$subject = $_POST["subject"];
$msg = $_POST["email"] . "\n" . $_POST["message"];
$submit = $_POST["submit"];
$confirmation = "";

mail('seoulsaloninc@live.com',$subject,$msg);

if ($submit == "submit" ) {
	$confirmation = "Your email was sent!";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seoul Salon - Contacts</title>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
<style type="text/css">
<!--
.style1 {font-family: "Adobe Garamond Pro"}
-->
</style>
</head>

<body onload="MM_preloadImages('buttons/ourServicesOne.jpg','buttons/ourProductsOne.jpg','buttons/StylistOne.jpg','buttons/clientTestimonialsOne.jpg','buttons/homeOne.jpg','buttons/renovationsOne.jpg')">

<table width="555" border="0" align="center">
  <tr>
    <td colspan="2"><img src="img/SeoulLogo/Seoul6.jpg" width="363" height="78" /></td>
  </tr>
  <tr>
    <td colspan="2"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','buttons/homeOne.jpg',1)"><img src="buttons/homeBase.jpg" name="Image10" width="37" height="13" border="0" id="Image10" /></a> &#8226; <a href="Services.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','buttons/ourServicesOne.jpg',1)"><img src="buttons/ourServicesBase.jpg" alt="4" name="Image4" width="74" height="13" border="0" id="Image4" /></a> &#8226; <a href="Products.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','buttons/ourProductsOne.jpg',1)"><img src="buttons/ourProductsBase.jpg" alt="3" name="Image5" width="78" height="13" border="0" id="Image5" /></a> &#8226; <a href="Stylists.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','buttons/StylistOne.jpg',1)"><img src="buttons/StylistBase.jpg" alt="5" name="Image9" width="37" height="13" border="0" id="Image9" /></a> &#8226; <a href="Contacts.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Contact','','buttons/ContactOne.jpg',1)"><img src="buttons/ContactBase.jpg" name="Contact" width="49" height="13" border="0" id="Contact" /></a> &#8226; <a href="Client Testimonials.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','buttons/clientTestimonialsOne.jpg',1)"><img src="buttons/clientTestimonialsBase.jpg" alt="1" name="Image8" width="109" height="13" border="0" id="Image8" /></a> &#8226; <a href="Renovations.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','buttons/renovationsOne.jpg',1)"><img src="buttons/renovationsBase.jpg" name="Image11" width="72" height="13" border="0" id="Image11" /></a>
    <br>
    <a href="mmbauble.php"><img src="buttons/mmbauble_buttonBase.gif" border="0"></a></td>
  </tr>
</table>


<iframe src ="http://daewon-choe.blogspot.com" width="100%" height="600">
     <p>Your browser does not support iframes.</p>
</iframe>

</body>
</html>
