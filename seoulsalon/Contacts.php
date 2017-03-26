<?php
// 8.2.2012 - Daewon Choe
// remove schedule with Dani button

// 10.10.2012 - Daewon
// add Mandy
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seoul Salon - Contacts</title>
<link rel="stylesheet" type="text/css" href="include/style.css">
<style type="text/css">
<!--
.style1 {font-family: "Adobe Garamond Pro"}
-->
</style>
</head>

<body>

<?php 
    $default = "contacts"; 
    include 'include/header.php';
?>
  
<table width="800" border="0" align="center">
  <tr>
    <td width="228" height="264" rowspan="2" valign="top" bgcolor="#FFFFFF">
    	<!-- changed on 10/9/2012
    	<p class="style1">&nbsp;</p>
      <div align="right"><em>Contact Nicole at <a href="Email.php">seoulsaloninc@live.com</a></em></div>
      <div align="right">
        <p>
        	<em><br />
          274 Snelling Ave S<br />
          St,Paul, MN, 55105<br />
        	</em>
        </p>
        <p>
        	<em>To schedule an appointment call:<br />
          Nicole or Jeanie<br />
					651-699-6441<br />
					<br/>
         </em>
        </p>
      </div>
      <div align="right">
      	<em>Business Hours:<br />
        Tues-Sat by appointment only.<br />
      	</em>
      </div>
      -->
      <p class="style1">&nbsp;</p>
      <p>
      	<em><br />
        274 Snelling Ave S<br />
        St. Paul, MN, 55105<br />
      	</em>
      </p>
      <p>
      	<em>To schedule an appointment <br>
      	call: 651-699-6441
				<br/>
       </em>
      </p>
      
      <div>
      	<em>email: <a href="Email.php">seoulsaloninc@live.com</a>
      	</em>
      </div>
      <div>      
      
      </div>
      
      <br>
      
      
    </td>
    <td width="317" align="center" valign="middle" bgcolor="#FFFFFF"><p>&nbsp;</p>
    <p><img src="img/store/IMG_1248.jpg" alt="1" width="373" height="280" align="left" /></p></td>
  </tr>
  <tr>
    <td height="212" align="center" valign="top" bgcolor="#FFFFFF"><img src="img/store/IMG_1249.jpg" alt="2" width="373" height="280" align="left" /></td>
  </tr>
  <!--
  <tr>
  	<td></td>
  	<td align="right">
  		
  		<a href="scheduleNicole.php"><img src="img/store/schedule_button_out_Nicole.jpg" onmouseover="this.src='img/store/schedule_button_over_Nicole.jpg';" onmouseout="this.src='img/store/schedule_button_out_Nicole.jpg';" border="0"></a>
  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	</td>  	
  </tr>
  -->
  <tr>
  	<td colspan="2">
  		<br>
  		Map / Click the "View Larger Map" link to get directions
  		<br>
  		<iframe style="height: 300px; width: 800px;" src="http://www.mapquest.com/embed?hk=1m9kq1z" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>
  	</td>
  </tr>
</table>

<?php
	include 'include/footer.php';
?>

</body>
</html>
