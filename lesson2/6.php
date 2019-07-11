<?php
echo "Число: ", $val = rand( -99, 99), "<br>";
echo "Степнь: ", $pow = rand( -99, 99), "<br>";
function power($val, $pow) {
	// Проверка $val
	if ($val == 0) {
		return 0;
	}
	elseif ($val == 1){
		return 1;
	}
	// Проверка $pow
	if ($pow == 0) {
		return 1;
	}
	elseif ($pow == 1) {
		return $val;
	}
	elseif ($pow < 0) {
		return power(1/$val, -$pow);
	}
	return $val*power($val, $pow-1);
}
echo "Результат=", power($val, $pow);

