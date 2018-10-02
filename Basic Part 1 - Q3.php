<!-- Basic PHP Questions - Part 1 - Q3 -->

<!DOCTYPE HTML>
<html>
<body>

<?php
// Basic use of functions in PHP.
function Equasion1($x){
	echo pow($x,2)+3*$x-5;
}
function Equasion2($x){
	echo 3*pow($x,2)-4*$x-7;
}
Equasion1(4);
echo"<br/>";
Equasion2(4);

// Note to self $x^2 doesn't work only pow($x,2) works.

?>

</body>
</html>