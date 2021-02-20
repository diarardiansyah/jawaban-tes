<?php

class Biodata {

	public $name = "Diar Ardi";
	public $address = "Jl Chentiong 1 RT 04/09 Depok West Java";
	public $hoobies = ["gaming", "football", "movie", "programming"];
	public $is_married = FALSE;
	public $school = "Pamulang University";
	public $skills = ["Php", 80, "Html", 85, "Css", 80];

public function __construct($name, $address, $hoobies, $is_married, $school, $skills) {

	$this->name = $name;
	$this->address = $address;
	$this->hoobies = $hoobies;
	$this->is_married = $is_married;
	$this->school = $school;
	$this->skills = $skills;
}

public function getBiodata() {
	return "$this->name, $this->address, $this->hoobies, $this->is_married, $this->school, $this->skills";
	
	}

}

$biodata1 = new biodata("Diar Ardiansyah", "Jl Chentiong 1 RT 04/09 Depok West Java", "Gaming", FALSE, "Pamulang University", "Php 80");

"<br>";
echo "biodata :".$biodata1->getBiodata();
