<?php
// Load XML file
$xml = simplexml_load_file("1.xml");

// Parse XML data into an array
$stock = array();
foreach ($xml->children() as $item) {
    $name = (string)$item->name;
    $quantity = (int)$item->quantity;
    $price = (float)$item->price;

    $stock[] = array(
        'name' => $name,
        'quantity' => $quantity,
        'price' => $price
    );
}

// Display the parsed data
echo "<pre>";
print_r($stock);
echo "</pre>";
?>
