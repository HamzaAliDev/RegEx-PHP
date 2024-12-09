<!DOCTYPE html>
<html>
<body>

<!-- preg-match return 1 if found -->
<?php
$str = "Hi Ali Hamza w3schools.com is a good website for learning web technologies.";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); 
?>

<!-- how many times pattern found in string -->
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>

<!-- replace match  with desire string -->
<?php
$str = "Visit Microsoft for learning web technologies.";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
?>

</body>
</html>
