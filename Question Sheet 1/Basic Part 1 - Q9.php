<!-- Basic PHP Questions - Part 1 - Q9 -->

<!DOCTYPE HTML>
<html>
<body>

<head>
	<title>q9</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

  <p><label for="Month">Enter a month as a number: </label><input type="text" name="Month" id="Month" /></p>

  <p><input type="submit" name="button" id="button" value="Submit" /></p>

</form>
</body>

</html>

<?php
if (isset($_POST['Month'])){
	$Month = $_POST['Month'];
	switch($Month){
		case 1:
			echo "This is Janurary!";
			break;
		case 2:
			echo "This is Feburary!";
			break;
		case 3:
			echo "This is March!";
			break;
		case 4:
			echo "This is April!";
			break;
		case 5:
			echo "This is May!";
			break;
		case 6:
			echo "This is June!";
			break;
		case 7:
			echo "This is July!";
			break;
		case 8:
			echo "This is August!";
			break;
		case 9:
			echo "This is September!";
			break;
		case 10:
			echo "This is October!";
			break;
		case 11:
			echo "This is November!";
			break;
		case 12:
			echo "This is December!";
			break;
		default:
			echo "This is not a month!";
			break;
	}
}
?>