<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>teine leht</title>
</head>
<body>
	<a href="index.php?test=katsetus kas nii toimib">Esimesele lehele</a>

		 <?php 
	 $example = array("name" => "klaabu", "lastname" => "nipi"); ?>
	<?php print_r($_GET); ?>
	<br>
	<?php echo "<p>" . $_GET['name'&'lastname'] . "</p>"; ?>
	<?php $username = $_GET["name"&"lastname"]; ?>



</body>
</html>