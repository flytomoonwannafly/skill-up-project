<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Реєстрація на сайті</h3>
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
<!--                        <div class="form-group">-->
<!--                            <label for="confirm-password">Підтвердження пароля</label>-->
<!--                            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Підтвердьте пароль">-->
<!--                        </div>-->
                        <button type="submit" name='btn' class="btn btn-primary btn-block"  >Зареєструватись</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if($data){ extract($data); ?>
    <?php if($is_uniq  == true){ ?>
        <p style="color:green">Ви успішно зареєструвались.</p>
    <?php } elseif($is_uniq == false) { ?>
        <p style="color:red">Таке ім'я вже зареєстроване.</p>
        <?php

    }} ?>