<!-- Basic PHP Questions - Part 1 - Q6 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q6</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

  <p><label for="Hours">Enter amount of hours worked: </label><input type="text" name="Hours" id="Hours" /></p>
  <p><label for="hourlyPay">Enter your hourly pay: </label><input type="text" name="hourlyPay" id="hourlyPay" /></p>

  <p><input type="submit" name="button" id="button" value="Submit" /></p>

</form>
</body>

</html>

<?php
if ((isset($_POST['Hours'])) && (isset($_POST['hourlyPay']))){
$hourlyPay = $_POST['hourlyPay'];
$Hours = $_POST['Hours'];
echo "$Hours at $hourlyPay = " . $Hours * $hourlyPay;
}?>