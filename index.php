<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change quote</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            background-color: paleturquoise;
        }

h2 { font-size: 40px;
    font-style: normal;
    color: palevioletred;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    
 }
        #quote {
            font-family: monospace;
            font-size: 30px;
           padding: 17px;
         max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div id="quote">
    <?php
    $quotes = [
        "Appreciate what you have and never compare yourself with others",

        "Stop comparing yourself to others",

        "The grass will always seem to be greener on the other side but it doesn't mean that it is actually greener."
        ];

    
    $randomQuotes = $quotes[array_rand($quotes)];
    ?>
    <h2>Refresh to change </h2>
    <p><?php echo $randomQuotes; 
    ?></p>
</div>

</body>
</html>



