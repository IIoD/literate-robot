<!DOCTYPE html>
<html>
<head>
	<title>GPIO over PHP</title>
</head>
<body>
<form method="GET" action="gpio.php">
<input type="submit" value="Licht ein" name="Lichtein">
<input type="submit" value="Licht aus" name="Lichtaus">
</form>

<?php
$modeon17 = trim(@shell_exec("/usr/local/bin/gpio -g mode 17 out"));
if (isset($_GET[Lichtein])){
$val = trim(@shell_exec("user/local/bin/gpio -g write 17 1"));	
echo "Licht ist an";	
}
else if (isset($_GET[Lichtaus])){
$val = trim(@shell_exec("user/local/bin/gpio -g write 17 0"));		
echo "Licht ist aus";	
}
?>

</body>
</html>