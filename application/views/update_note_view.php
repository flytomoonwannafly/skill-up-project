<form action="" method="POST">
    <!-- Ваші поля форми тут -->
    <label for="title">Заголовок</label>
    <input type="text" name="title" value="<?php echo $data['title']; ?>">
    <label for="content">Контент</label>
    <input type="text" name="content" placeholder="Контент" value="<?php echo $data['content']; ?>">
    <!-- Інші поля форми -->

    <button type="submit" name="submit">Зберегти</button>
</form>