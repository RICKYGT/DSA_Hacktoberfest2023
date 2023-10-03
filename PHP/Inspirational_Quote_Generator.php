<!DOCTYPE html>
<html>
<head>
    <title>Inspirational Quote Generator</title>
</head>
<body>
    <h1>Inspirational Quote:</h1>
    <p>
        <?php
        // List of inspirational quotes
        $quotes = array(
            "Believe you can and you're halfway there. -Theodore Roosevelt",
            "The only way to do great work is to love what you do. -Steve Jobs",
            "Don't watch the clock; do what it does. Keep going. -Sam Levenson",
            "The only limit to our realization of tomorrow will be our doubts of today. -Franklin D. Roosevelt"
        );

        // Get a random quote
        $randomQuote = $quotes[array_rand($quotes)];

        // Display the random quote
        echo $randomQuote;
        ?>
    </p>
</body>
</html>
