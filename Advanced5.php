<?php
	$start = microtime(true);

	$array = array();

	for($q = 0; $q < 20; $q++){
		array_push($array, rand(0,20));
	}

	var_dump($array);


// CODE TO SORT ARRAY SELECTING MIN VALUE
	$count = 0;
	for($j = 0; $j < count($array); $j++){
		$min = $array[$j];
		$minindex = $j;
		for($i = $j; $i < count($array); $i++){
			if($array[$i] < $min){
				$min = $array[$i];
				$minindex = $i;
				$count += 1;
			}

		}

		$place = $array[$j];
		$array[$j] = $min;
		$array[$minindex] = $place;
	}


// // CODE TO SORT ARRAY SELECTING BOTH MIN AND MAX VALUES.
// 	$count = 0;
// 	for($j = 0; $j < count($array)/2; $j++){
// 		$min = $array[$j];
// 		$max = $array[$j];
// 		$minindex = $j;
// 		$maxindex = $j;
// 		for($i = $j; $i < count($array) - $j; $i++){
// 			if($array[$i] < $min){
// 				$min = $array[$i];
// 				$minindex = $i;
// 				$count += 1;
// 			}
// 			if($array[$i] > $max){
// 				$max = $array[$i];
// 				$maxindex = $i;
// 				$count += 1;
// 			}	

// 		}

// 		$place = $array[$j];
// 		$array[$j] = $min;
// 		$array[$minindex] = $place;
// 		$place2 = $array[(count($array) - 1 - $j)];
// 		$array[(count($array) - 1 - $j)] = $max;
// 		$array[$maxindex] = $place2;
		
// 	}

	echo 'A total of '.$count.' sort(s) took place resulting in the following sorted array:'.'<br>';
	var_dump($array);
	$end = microtime(true);
	$time = $end - $start;
	echo 'PHP took '.$time.' second(s) to sort the array!';
?>
