<?php

/*
Define an Interface which has method gmtokg() &kgtogm(). Create Class Convert which implements
this interface & convert the value kg to gm and gm to kg.
*/
interface calculate_distance
{
	function gmtokg();
	function kgtogm();
}

class distance
{
	protected $dist;
	public function __construct($dist)
	{
		$this->dist = $dist;
	}
	public function gmtokg()
	{
		$result = $this->dist / 1000;
		echo "<br>$this->dist Grams = $result KG <br>";
	}
	public function kgtogm()
	{
		$result = $this->dist * 1000;
		echo "<br>$this->dist KG = $result Grams <br>";
	}
}
$d = new distance(30);
$d->gmtokg();
$d->kgtogm();
?>