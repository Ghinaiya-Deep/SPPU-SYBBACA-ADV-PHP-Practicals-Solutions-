<?php
// Load XML file
$xml = simplexml_load_file("2.xml");

// Display details of book by selecting the publication from the user
if (isset($_POST['publication'])) {
    $publication = $_POST['publication'];
    $selectedBooks = $xml->xpath("//php[publication='$publication']");

    echo "<h2>Books published by $publication</h2>";
    if (count($selectedBooks) > 0) {
        echo "<ul>";
        foreach ($selectedBooks as $book) {
            echo "<li>Title: {$book->title} | Price: {$book->price} </li>";
        }
        echo "</ul>";
    } else {
        echo "No books found for the selected publication.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
    <h1>Select a publication to view books:</h1>
    <form method="POST">
        <select name="publication">
            <option value="">Select Publication</option>
            <?php 
            // Extract unique publication values from XML
            $publications = array_unique($xml->xpath("//php/publication"));
            foreach ($publications as $publication) : 
            ?>
                <option value="<?php echo $publication; ?>"><?php echo $publication; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="View Books">
    </form>
</body>
</html>
