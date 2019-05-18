

<?php

function random($panjang) {

	$karakter = 'ABCDEFG1234567891092';

	$string = '';

	for ($i=0; $i < $panjang; $i++) {
		
		$pos = rand(0, strlen($karakter)-1);

		$string .=$karakter($pos);
	}

	return $string;
}

echo random(10);

?>
