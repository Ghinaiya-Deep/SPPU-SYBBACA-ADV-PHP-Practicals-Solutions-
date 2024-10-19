<?php
$pname = $_GET['pname'];
$xml = simplexml_load_file('2.xml');
$flag = 0;
foreach($xml->children() as $val)
{
	if(strtolower($pname) == strtolower($val->name))
	{
		echo "<br>Name : " . $val->name;
		echo "<br>Country : " . $val->country;
		echo "<br>wickets : " . $val->wicket;
		echo "<br>Runs : " . $val->runs;
		$flag = 1;
		break;
	}
}
if($flag == 0)
{
	echo "No Data Found";
}

?>