<!--<h1>Страница авторизации</h1>-->
<!--<p>-->
<!--<form action="" method="post">-->
<!--    <table class="login">-->
<!--        <tr>-->
<!--            <th colspan="2">Авторизация</th>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Логин</td>-->
<!--            <td><input type="text" name="login"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Пароль</td>-->
<!--            <td><input type="password" name="password"></td>-->
<!--        </tr>-->
<!--        <th colspan="2" style="text-align: right">-->
<!--            <input type="submit" value="Войти" name="btn"-->
<!--                   style="width: 150px; height: 30px;"></th>-->
<!--    </table>-->
<!--</form>-->
<!--</p>-->
<!---->


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
<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
    <p style="color:green">Авторизація пройшла успішно.</p>
<?php } elseif($login_status=="access_denied") { ?>
    <p style="color:red">Логін і/чи пароль були введені не вірно.</p>
<?php } ?>