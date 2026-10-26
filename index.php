
<?php
$result;
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
    if (strlen($text) >= $maxLength)
        return substr($text, 0, $maxLength) . "...";
    else
        return $text;
}

function getCurrentGreeting($Time){
    if (date($Time) >= "06:00" && date($Time) <= "11:59")
        echo "Доброго ранку";
    elseif (date($Time) >= "12:00" && date($Time) <= "17:59")
        echo "Добрий день";
    elseif (date($Time) >= "18:00" && date($Time) <= "23:59")
        echo "Добрий вечір";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1><?= getCurrentGreeting('H:i') ?></h1>
        <ul>
        <?php foreach ($tasks as $task): ?>
            <li class="<?= $task['is_completed'] == false ? 'task-pending' : 'task-done' ?>">
                <?php echo formatTitle($task['title']); ?>
                <?php echo $task['date']; ?>
                <?php echo $task['priority']; ?>
                <?php echo $task['time']; ?>
                <style>
                <?php if ($task['is_completed'] == false): ?>
                    .task-pending {
                        color: gray;
                        text-decoration: line-through;
                    }
                <?php else: ?>
                    .task-done {
                        color: green;
                        text-decoration: line-through;
                    }
                <?php endif; ?>
                </style>
            </li>
        <?php endforeach; ?>
        </ul>
    </header>
    <main>
    </main>
</body>
</html>
