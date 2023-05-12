<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Увійти до свого акаунту</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="login">Логін</label>
                            <input type="text" class="form-control" id="login" name="login" placeholder="Введіть логін">
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Введіть пароль">
                        </div>
                        <button type="submit" name='btn' class="btn btn-primary btn-block">Увійти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if($data){ extract($data); ?>
<?php if($is_logined == false) { ?>
        <p style="color:red">Логін і/чи пароль були введені не вірно.</p>
    <?php
}} ?>