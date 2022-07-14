
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="">
        <h2 class="col-12">Авторизация</h2>
        <div class="mb-3 col-12 col-md-4">
        <td>Логин</td>
        <td><input type="text" name="login" placeholder="введите логин..."></td>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
        <td>Пароль</td>
        <td><input type="password" name="password" placeholder="введите пароль..."></td>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
        <input type="submit" class="btn btn-secondary" value="Войти" name="btn"
	style="width: 150px; height: 30px;"></th>
           
        </div>
    </form>
</div>>

<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>