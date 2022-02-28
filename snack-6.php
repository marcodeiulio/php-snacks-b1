<?php
//# Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno

$students = [
	[
	  'name' => 'Michele',
	  'lastname' => 'Papagni',
	  'votes' => [8, 5, 7, 6]
	],
	[
	  'name' => 'Fabio',
	  'lastname' => 'Forghieri',
	  'votes' => [10, 2, 4]
	],
	[
	  'name' => 'Roberto',
	  'lastname' => 'Marazzini',
	  'votes' => [2, 8]
	]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>

		<?php foreach($students as $student) { ?>
		<li>
			<ul>
				<li>Nome: <?= $student['name'] ?></li>
				<li>Cognome: <?= $student['lastname'] ?></li>
				<li>Media: <?php $average = array_sum($student['votes']) / count($student['votes']);
				echo round($average, 2); ?></li>
			</ul>
		</li>
		<?php } ?>
	</ul>
</body>
</html>