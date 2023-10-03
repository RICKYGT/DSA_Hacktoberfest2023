<!DOCTYPE html>
<html>
<head>
    <title>Unique Word App</title>
</head>
<body>
    <h1>Unique Words:</h1>
    <ul>
        <?php
        // List of unique words
        $uniqueWords = array("Book", "Pencil", "Computer", "Guitar", "Cat", "Forest");

        // Shuffle the words
        shuffle($uniqueWords);

        // Display the list of unique words
        foreach ($uniqueWords as $word) {
            echo "<li>$word</li>";
        }
        ?>
    </ul>
</body>
</html>
