<div class="container">
    <div class="card card-register mx-auto mt-5" style="width: 400px">
        <div class="card-header">Регистрация</div>
        <div class="card-body">
            <form action="/account/register" method="post">
                <div class="form-group">
                    <label>Логин</label>
                    <input class="form-control" type="text" name="login">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Регистрация</button>
            </form>
        </div>
    </div>
</div>