<?php 
//# Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
	'teachers' => [
	  [
		'name' => 'Michele',
		'lastname' => 'Papagni'
	  ],
	  [
		'name' => 'Fabio',
		'lastname' => 'Forghieri'
	  ]
	],
	'pm' => [
	  [
		'name' => 'Roberto',
		'lastname' => 'Marazzini'
	  ],
	  [
		'name' => 'Federico',
		'lastname' => 'Pellegrini'
	  ]
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
  	<div style="background-color: grey">
		<ul>
  		<?php foreach ($db['teachers'] as $teacher) { ?>
				<li>name: <?php echo $teacher['name'] ?></li>
				<li>lastname: <?php echo $teacher['lastname'] ?></li>
				<hr>
				<?php		  } ?>
			</ul>
	  </div>
  	<div style="background-color: green">
		<ul>
  		<?php foreach ($db['pm'] as $pm) { ?>
				<li>name: <?php echo $pm['name'] ?></li>
				<li>lastname: <?php echo $pm['lastname'] ?></li>
				<hr>
				<?php		  } ?>
			</ul>
	  </div>

</body>
</html>