<!-- 
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
 -->


<?php 

$my_arr = [];

while (count($my_arr) < 15) {
	$new_num = rand(0, 100);
	if (! in_array($new_num, $my_arr)) {
		array_push($my_arr, $new_num);
	}
}

var_dump($my_arr);