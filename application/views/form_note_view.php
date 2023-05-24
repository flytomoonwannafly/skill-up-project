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
    <div class="mb-3">
        <label for="title" class="form-label">Заголовок</label>
        <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Контент</label>
        <textarea class="form-control" name="content" rows="5"><?php echo $content ?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Зберегти</button>
</form>