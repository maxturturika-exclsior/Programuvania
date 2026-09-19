<?php
$result;
$isCompleted = false;
$appName ="My App";
$taskTitle = "Learn PHP operators";
$taskTimeEstimate = "1 hour";

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
        <h1> <?= $appName ?></h1>
        <ul>
            <li class="<?= $isCompleted == true ? 'task-done' : 'task-pending' ?>">
                <?= $result ?> <?= $taskTitle ?>
            </li>
            <li><?=$taskTimeEstimate?></li>
        </ul>
    </header>
    <main>


    </main>    
</body>
</html>