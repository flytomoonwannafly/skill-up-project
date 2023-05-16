<?php
if (empty($data)) {
    $data_action = '/dashboarduser/create_note/';
    $title = '';
    $content = '';
} else {
    $data_action = '#';
    $title = $data['title'];
    $content = $data['content'];
}
?>

<form action="<?php echo $data_action; ?>" method="POST">
    <!-- Ваші поля форми тут -->
    <input type="text" name="title" placeholder="Заголовок" value="<?php echo $title ?>">
    <input type="text" name="content" placeholder="Контент" value="<?php echo $content ?>">
    <!-- Інші поля форми -->

    <button type="submit" name="submit">Зберегти</button>
</form>
