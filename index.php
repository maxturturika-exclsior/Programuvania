<?php
$result;
$isCompleted = false;
$appName ="My App";
$taskTitle = "Learn PHP basics - operators, variables, functions and string";
$taskTimeEstimate = "1 hour";
function formatTitle($text, $maxLenght = 20) {
    if ((strlen($text)) >= $maxLenght)
        return substr($text, 0, $maxLenght) . "...";
    else
        return $text;
}

function getCurrentGreeting($Time){
    if ((date($Time)) >= "06:00" && (date($Time)) <= "11:59")
        echo "Доброго ранку";
    elseif ((date($Time)) >= "12:00" && (date($Time)) <= "17:59")
        echo "Добрий день";
     elseif ((date($Time)) >= "18:00" && (date($Time)) <= "23:59")
        echo "Добрий вечір";
}

$result = ($isCompleted == true) ? "Виконано!" : "В процесі";
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .task-done {
            color: green;
            text-decoration: line-through;
        }

        .task-pending {
            color: gray;
        }
    </style>
</head>
<body>
    <header>
        <h1> <?= getCurrentGreeting(date('H:i:s')) ?> </h1>
        <ul>
            <li class="<?= $isCompleted == true ? 'task-done' : 'task-pending' ?>">
                <?= $result ?> <?= formatTitle($taskTitle) ?>
            </li>
            <li><?=$taskTimeEstimate?></li>
        </ul>
    </header>
    <main>


    </main>    
</body>
</html>