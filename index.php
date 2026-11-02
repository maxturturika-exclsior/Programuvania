<?php
$tasks = [
    [
        'id' => 1,
        'title' => 'Learn php basics: arrays, variables and functions',
        'priority' => 'High',
        'is_completed' => false,
        'time' => '2 hours',
        'repository' => 'Programuvaniya',
        'date' => '21 september',
    ],
    [
        'id' => 2,
        'title' => 'Practice PHP functions and conditions',
        'priority' => 'Medium',
        'is_completed' => true,
        'time' => '1 hour',
        'repository' => 'Programuvaniya',
        'date' => '22 september',
    ],
    [
        'id' => 3,
        'title' => 'Create a database for the project',
        'priority' => 'High',
        'is_completed' => false,
        'time' => '3 hours',
        'repository' => 'Programuvaniya',
        'date' => '23 september',
    ],
    [
        'id' => 4,
        'title' => 'Review HTML and CSS basics',
        'priority' => 'Low',
        'is_completed' => true,
        'time' => '1 hour',
        'repository' => 'Programuvaniya',
        'date' => '24 september',
    ],
];
$taskTimeEstimate = "1 hour";

function formatTitle($text, $maxLength = 20) {
    if (mb_strlen($text) >= $maxLength)
        return mb_substr($text, 0, $maxLength) . "...";
    else
        return $text;
}

function getCurrentGreeting() {
    $currentTime = date('H:i');
    if ($currentTime >= "06:00" && $currentTime <= "11:59") {
        return "Доброго ранку";
    } elseif ($currentTime >= "12:00" && $currentTime <= "17:59") {
        return "Добрий день";
    } else {
        return "Добрий вечір";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список завдань</title>
    <style>
        .task-pending {
            color: gray;
        }
        .task-done {
            color: green;
            text-decoration: line-through;
        }
        .btn-add {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 12px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn-add:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1><?= getCurrentGreeting() ?></h1>
        
        <a href="create.php" class="btn-add">Додати нове завдання</a>

        <ul>
        <?php foreach ($tasks as $task): ?>
            <li class="<?= !$task['is_completed'] ? 'task-pending' : 'task-done' ?>">
                <?= htmlspecialchars(formatTitle($task['title'])) ?> | 
                <?= htmlspecialchars($task['date']) ?> | 
                Пріоритет: <?= htmlspecialchars($task['priority']) ?> | 
                Час: <?= htmlspecialchars($task['time']) ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </header>
    <main>
    </main>
</body>
</html>
