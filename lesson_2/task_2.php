<?php

$a = Rand(0,15);
$result = 'Числа от '.$a.' до 15: ';

switch($a) {
	case 0:
		$result.=($a++).', ';
	case 1:
		$result.=($a++).', ';
	case 2:
		$result.=($a++).', ';
	case 3:
		$result.=($a++).', ';
	case 4:
		$result.=($a++).', ';
	case 5:
		$result.=($a++).', ';
	case 6:
		$result.=($a++).', ';
	case 7:
		$result.=($a++).', ';
	case 8:
		$result.=($a++).', ';
	case 9:
		$result.=($a++).', ';
	case 10:
		$result.=($a++).', ';
	case 11:
		$result.=($a++).', ';
	case 12:
		$result.=($a++).', ';
	case 13:
		$result.=($a++).', ';
	case 14:
		$result.=($a++).', ';
	case 15:
		$result.=($a++);
	break;
}

echo $result;
