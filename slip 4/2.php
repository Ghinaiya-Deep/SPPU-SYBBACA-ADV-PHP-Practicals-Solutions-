<?php
$xml=simplexml_load_file("2.xml") or die("Unavle to open file");

foreach($xml->children() as $data)
{
    $runs=$data->runs;
    $wic=$data->wickets;
    $notout=$data->notout;
    $name=$data->player;
    if($runs>=1200 && $wic>=50)
    {
        echo "<br>";
        echo "<br>Player Name : ".$name;
        echo "<br>Runs : ".$runs;
        echo "<br>Wickets : ".$wic;
        echo "<br>Not Out : ".$notout;
    }
}


?>