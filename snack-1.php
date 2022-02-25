<!-- SNACK 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name_val = false;
$age_val = false;
$mail_val = false;

if (strlen($_GET['name']) > 2) $name_val = true;
if ($name_val) echo 'name ok, ';

if (is_numeric($_GET['age'])) $age_val = true;
if ($age_val) echo 'age ok, ';

if (str_contains($_GET['mail'], '@') && str_contains($_GET['mail'], '.')) $mail_val = true;
if ($mail_val) echo 'mail ok ';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Snack 1</title>
</head>
<body>
	
<h3>
	<?php
	if ($name_val && $age_val && $mail_val) echo 'Access Granted';
	else echo 'Access Failed';
	?>
</h3>

</body>
</html>