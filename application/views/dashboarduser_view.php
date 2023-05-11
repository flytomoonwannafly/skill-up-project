<?php
//var_dump($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Notes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>User Notes</h1>

    <!-- Кнопка "Додати новий нотаток" -->
    <div class="mb-3">
        <a href="/dashboarduser/display_form/" class="btn btn-primary">Додати новий нотаток</a>
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
                <a href="edit_note.php?id=1" class="btn btn-primary">Редагувати</a>
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