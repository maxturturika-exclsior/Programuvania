
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


![alt text](image-6.png)

Контрольні питання: 

1. Індексовані масиви використовують числові індекси, починаючи з 0. Асоціативні масиви використовують іменовані ключі, наприклад рядки.
$colors = ['red', 'green', 'blue'];
echo $colors[0]; // red

$task = [
    'title' => 'Learn PHP',
    'priority' => 'High'
];
echo $task['title'];

2. Цикл foreach містить масив, який перебирається, змінну для поточного елемента та тіло циклу, де виконується потрібний код.
foreach зручніший за for, оскільки автоматично перебирає всі елементи масиву, не потребує лічильника та перевірки індексів.
3. Якщо звернутися до ключа, якого немає, наприклад $task['deadline'], PHP видасть попередження Warning: Undefined array key, а значення буде відсутнім (null).
4. endforeach; — це частина альтернативного синтаксису PHP. Він зручний для шаблонів, де PHP-код чергується з HTML, оскільки робить межі циклу зрозумілішими. Звичайний синтаксис із фігурними дужками теж працює.
5. 
-count($array) — повертає кількість елементів масиву.
-sort($array) — сортує масив за значеннями в порядку зростання.
-array_push($array, $value) — додає елемент у кінець масиву.
-array_merge($array1, $array2) — об'єднує кілька масивів в один.