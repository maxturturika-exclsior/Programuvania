<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Створити завдання</title>
</head>
<body>

    <form action="create.php" method="POST">
        <label for="title">Назва завдання:</label>
        <input type="text" name="title" id="title">

        <br><br>

        <label for="description">Опис завдання:</label>
        <textarea name="description" id="description"></textarea>

        <br><br>

        <label for="priority">Пріоритет:</label>
        <select name="priority" id="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>

        <br><br>

        <button type="submit">Зберегти</button>
    </form>

    <br>
    <a href="index.php">Повернутись до списку</a>
    
</body>
</html>
