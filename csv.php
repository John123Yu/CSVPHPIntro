<?php
$file = fopen("us-500.csv", "r+");
$fileProcessed = fgetcsv($file);
// print_r(fgetcsv($file));
// fclose($file);
$count = 0;
?>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
ul li {
	display: block;
}

</style>
<body>
	<?php
		foreach ($fileProcessed as  $value) {
			if($count % 12 == 0) {
				$row = $count / 12;
				echo "<h2> $row </h2>";
				echo "<ul>";
			} elseif ($count % 12 == 11) {
				echo "</ul>"; 
			}
			else {
				echo "<li> $value </li>";
			}
			$count++;
		}	
	?>
</body>
</html>