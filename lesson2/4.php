<?php
echo "Первый аргумент: ", $arg1 = rand( -99, 99), "<br>";
echo "Второй аргумент: ", $arg2 = rand( -99, 99), "<br>";
echo "Математическая операция ", $operation = "mult", "<br>";
function mathOperation($arg1, $arg2, $operation) {
	//Сумма
	function sumNum($num_1, $num_2){
		return $num_1 + $num_2;
	}
	//Разность
	function difNum($num_1, $num_2){
		return $num_1 - $num_2;
	}
	//Умножение
	function multNum($num_1, $num_2){
		return $num_1 * $num_2;
	}
	//Деление
	function divNum($num_1, $num_2){
		return $num_1 / $num_2;
	}
	switch ($operation) {
		case 'sum': {
			$result = sumNum($arg1, $arg2);
			break;
		}
		
		case 'dif': {
			$result = difNum($arg1, $arg2);
			break;
		}
		case 'mult': {
			$result = multNum($arg1, $arg2);
			break;
		}
		case 'div': {
			$result = divNum($arg1, $arg2);
			break;
		}
	}
	return $result;
}
echo $arg1, $operation, $arg2, " = ", mathOperation($arg1, $arg2, $operation) ;
