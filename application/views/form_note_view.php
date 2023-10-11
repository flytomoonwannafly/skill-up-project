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
<style>
    #errorMessages {
        color: red;
    }
</style>
<form id="noteForm" action="<?php echo $data_action; ?>" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Заголовок</label>
        <input type="text" id="title" class="form-control" name="title" value="<?php echo $title ?>">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Контент</label>
        <textarea class="form-control" id="content" name="content" rows="5"><?php echo $content ?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Зберегти</button>
</form>
<div id="errorMessages"></div>


<script>
    document.getElementById('noteForm').addEventListener('submit', function(event) {
        // Перевірка, чи заповнені поля перед відправкою форми
        var titleField = document.getElementById('title');
        var textField = document.getElementById('content');
        var errorMessages = document.getElementById('errorMessages');
        errorMessages.innerHTML = '';

        if (titleField.value.trim() === '' || textField.value.trim() === '') {
            errorMessages.innerHTML = 'Заповніть обов\'язкові поля.';
            event.preventDefault(); // Зупинка відправки форми
        }
    });
</script>