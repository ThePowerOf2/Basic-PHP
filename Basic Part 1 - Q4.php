<!-- Basic PHP Questions - Part 1 - Q4 -->

<!DOCTYPE HTML>
<html>
<body>

<?php
// Declaring X and Y.
$x = 101;
$y = 202;

// Showing pre-swapped values of X and Y.
echo "Pre-Swap!";
echo "</br>X = ";
echo $x;
echo "<br/>Y = ";
echo $y;

// Swapping X and Y.
swap($x,$y);

// Showing swapped values of X and Y.
echo "<br/><br/>Swapped!";
echo "<br/>X = ";
echo $x;
echo "<br/>Y = ";
echo $y;

// Swap function passing the values by reference.
// Also note to self functions can be found even at the end of the program.
function swap(&$x,&$y){
	$tmp = $x;
	$x = $y;
	$y = $tmp;
}
?>

</body>
</html>