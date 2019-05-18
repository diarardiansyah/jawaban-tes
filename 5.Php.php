<!DOCTYPE html>
<html>
<head>
	<title>Mencari Nilai Tertinggi Dan Terendah</title>
</head>
<body>

<h2>Nilai Tertinggi Dan Terendah</h2>

<?php

error_reporting(0);
 $nilai = Array(2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31,10);         
 echo 'Nilai terbesar dari bilangan Array [2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31,10] adalah <b style=fontsize:34px;>'.max($nilai).'</b>';
 echo "<br>";
 echo 'Nilai terendah dari bilangan Array [2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31,10] adalah <b style=fontsize:34px;>'.min($nilai).'</b>';


?>
</body>
</html>