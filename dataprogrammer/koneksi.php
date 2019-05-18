<?php

//komeksi ke db

$koneksi = mysqli_connect("localhost","root","","porgrammer");

if (mysqli_connect_errno()) {
	echo "koneksi database gagal : " . mysqli_connect_error();
}