<!DOCTYPE html>
<html>
<head>
    <title>User Notes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>User Notes</h1>
    <h2><?php
        echo 'Hello' .' '. $_SESSION['user_name'];
        ?></h2>
    <div class="row">
        <div class="col">
            <a href="/dashboarduser/create_note/" class="btn btn-primary float-start">Додати новий нотаток</a>
        </div>
        <div class="col">
            <a href="/dashboarduser/logout/" class="btn btn-secondary float-end">Вийти</a>
        </div>
    <!-- Список нотатків -->
    <table class="table">

        <thead>
        <tr>
            <th>Заголовок</th>
            <th>Текст</th>
            <th>Створений/Оновлений</th>
            <th>Дії</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $notes){
        ?>
        <tr>

            <td><?php echo $notes['title']?></td>
            <td><?php echo $notes['content']?></td>
            <td><?php echo $notes['created_at']?>/<?php echo $notes['updated_at']?></td>
            <td>
                <!-- Кнопки редагування та видалення -->
                <a href="/dashboarduser/update_note/<?php echo $notes['id'] ?>" class="btn btn-primary">Редагувати</a>
                <a href="/dashboarduser/delete_note/<?php echo $notes['id'] ?>" class="btn btn-danger">Видалити</a>
            </td>
            <?php
            };
            ?>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>