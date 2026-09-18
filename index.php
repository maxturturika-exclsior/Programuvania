<?php
$appName ="My App";
$taskTitle = "Learn PHP operators";
$taskTimeEstimate = "1 hour";
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1> <?= $appName ?></h1>
        <ul>
            <li><?=$taskTitle?></li>
            <li><?=$taskTimeEstimate?></li>
        </ul>
    </header>
    <main>


    </main>    
</body>
</html>