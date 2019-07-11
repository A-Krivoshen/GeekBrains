<?php
$a = rand( 0, 99);
$b = rand( 0, 99);

function operationNum($num_1=0, $num_2=0){
	if ($num_1>=0 && $num_2>=0) {
		return 'Разность = '.($num_1 - $num_2);
	}
	elseif ($num_1<0 && $num_2<0) {
		return 'Произведение = '.($num_1 * $num_2);
	}
	return  'Сумма = '.($num_1 + $num_2);
}
echo(operationNum($a, $b));
?>
