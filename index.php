<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mapping</title>
	<link rel="stylesheet" href="https://fonts.typotheque.com/WF-023273-009070.css" />
	<link rel="stylesheet" href="css.css">
<style>
<?php
$details = "details[open] ";
$newdetails = "details[open] ";
while ($d < 6) {
	$colour = mt_rand(0,259);
	$sat = mt_rand(50,87);
	$light = mt_rand(65,92);

	echo "$newdetails{
	box-shadow: inset calc(.3em - 1px) 0 0 white, inset .3em 0 0 hsla($colour,$sat%,$light%,1);
}\n";
	$newdetails = $newdetails . $details;
	$d++;
}

    ?>
</style>
</head>
<body>
<?php include('mapping.php'); ?>
<script src="js.js"></script>
</body>
</html>
