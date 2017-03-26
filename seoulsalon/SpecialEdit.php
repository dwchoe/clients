<?php
// connecting to Insect database
$dbhost = 'seoulsalon.db.3179710.hostedresource.com';
$dbuser = 'seoulsalon';
$dbpass = 'Andover10';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$dbname = 'seoulsalon';
mysql_select_db($dbname);

$sql = 'select * from special';
$result = mysql_query($sql);

// reading form
$message1 = $_POST['message1'];
$message2 = $_POST['message2'];
$update1 = $_POST['update1'];
$update2 = $_POST['update2'];
$updateSql;
$status;

if ( $update1 == "update" ) {
	$updateSql = "update special set message='" . $message1 . "' where id=1";
	$status = mysql_query($updateSql);
	echo 'successfully updated<br>';

	// reload
	$result = mysql_query($sql);
}
else if ( $update2 == 'update' ) {
	$updateSql = "update special set message='" . $message2 . "' where id=2";
	$status = mysql_query($updateSql);
	echo 'successfully updated';

	// reload
	$result = mysql_query($sql);
}

?>

<html>

<head>
<title>Special Edit</title>
</head>

<body>


<?php
$counter=1;
while($row = mysql_fetch_array($result)) {
?>

<form action="SpecialEdit.php" method="post">
<table>
<tr>
	<td>
		<textarea name="message<?php echo $counter; ?>" rows="15" cols="70" align="left"><?php echo $row['message']; ?></textarea>
	</td>
	<td valign="top">
		<input type="submit" name="update<?php echo $counter; ?>" value="update">
	</td>
</tr>

<?php
$counter++;
}
?>

<tr>
	<td>
		formatting hints:<br>
		&lt;br&gt; - carriage return<br>
		&lt;b&gt;bold&lt;/b&gt; - <b>bold</b><br>
		&lt;i&gt;italics&lt;/i&gt; - <i>italics</i><br>
</table>
</form>

</body>

</html>