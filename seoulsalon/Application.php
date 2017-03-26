<?php

$to = "seoulsaloninc@live.com";
$header = "From:daewon.choe@gmail.com \r\n";
$subject = "Job Application";

$availablity = $_POST['availability'] == "Full Time" ? "Full Time" : "Part Time";
$weekends = $_POST['weekends'] == "Yes" ? "Yes" : "No";
$evenings = $_POST['evenings'] == "Yes" ? "Yes" : "No";

$message = 	"First Name: " . $_POST["firstName"] . "\n" .
			"Last Name: " . $_POST["lastName"] . "\n" . 
			"Email: " . $_POST["email"] . "\n" .
			"Phone: " . $_POST["phone"] . "\n" .
			"Address: " . $_POST["address"] . "\n" .
			"City: " . $_POST["city"] . "\n" .
			"State: " . $_POST["state"] . "\n" .
			"Zip: " . $_POST["zip"] . "\n" .
			"Availability: " . $availablity . "\n" .
			"Weekends: " . $weekends . "\n" .
			"Evenings: " . $evenings . "\n" .
			"Position Desired: " . $_POST["position"] . "\n" .
			"Desired Pay: " . $_POST["desired_pay"] . "\n" .
			"Educational Experience: " . $_POST["experience"] . "\n" .
			"Employment History: " . $_POST["employment_history"] . "\n" .
			"References: " . $_POST["references"] . "\n" .
			"Additional Comments: " . $_POST["comments"] . "\n";
$submit = $_POST["submit"];
$confirmation = "";

if ($submit == "submit" ) {
	$retval = mail ($to,$subject,$message,$header);
	if( $retval == true )  {
    	$confirmation = "Message sent successfully...";
	}
	else {
		$confirmation = "Message could not be sent...";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seoul Salon - Contacts</title>
<link rel="stylesheet" type="text/css" href="include/style.css">
<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>
</head>

<body>

<?php 
    $default = "careers"; 
    include 'include/header.php';
?>
  
<table width="800" border="0" align="center">
  <tr>
  	  <td colspan="2">
  		<?php echo $confirmation; ?>
  	  </td>
  </tr>
  
  <?php
  if ($confirmation == "" ) {
  ?>
  <tr>
	  <td colspan="2" height="10">
	  </td>
  </tr>

  <form method="post" action="Application.php">
  <tr>
    <td width="140" align="right">
     	First Name:
    </td>
    <td>
	    <input type="text" name="firstName" size="30">
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Last Name:
    </td>
    <td>
	    <input type="text" name="lastName" size="30">
    </td>
  </tr>
  <tr>
      <td width="140" align="right">
       	Email:
      </td>
      <td>
  	    <input type="text" name="email" size="52">
      </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Phone:
    </td>
    <td>
	    <input type="text" name="phone" size="30">
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Address:
    </td>
    <td>
	    <input type="text" name="address" size="30">
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	City:
    </td>
    <td>
	    <input type="text" name="city" size="30">
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	State:
    </td>
    <td>
	    <input type="text" name="state" size="2">
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Zip:
    </td>
    <td>
	    <input type="text" name="zip" size="9">
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Availability:
    </td>
    <td>
	    <input type="radio" name="availability" value="Full Time">Full Time
	    <input type="radio" name="availability" value="Part Time">Part Time
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Weekends:
    </td>
    <td>
	    <input type="radio" name="weekends" value="Yes">Yes
	    <input type="radio" name="weekends" value="No">No
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Evenings:
    </td>
    <td>
	    <input type="radio" name="evenings" value="Yes">Yes
	    <input type="radio" name="evenings" value="No">No
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Position Desired:
    </td>
    <td>
    	<select name="position">
    		<option value="stylist">Stylist</option>
    		<option value="other">Other</option>
	    </select>
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Desired Pay:
    </td>
    <td>
	    <input type="text" name="desired_pay" size="9">
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Educational Experience:
    </td>
    <td>
	    <textarea rows="9" cols="50" name="experience"></textarea>
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Employment History:
    </td>
    <td>
	    <textarea rows="9" cols="50" name="employment_history"/></textarea>
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	References:
    </td>
    <td>
	    <textarea rows="9" cols="50" name="references"/></textarea>
    </td>
  </tr>
  <tr>
    <td width="140" align="right">
     	Additional Comments:
    </td>
    <td>
	    <textarea rows="9" cols="50" name="comments"/></textarea>
    </td>
  </tr>
  <tr>
  		<td width="140" valign="top" align="right">
      </td>
		<td colspan="2">
			<input type="submit" name="submit" value="submit">
		</td>
  </tr>
  </form>

  <?php
  }
  ?>
</table>

<?php
	include 'include/footer.php';
?>

</body>
</html>
