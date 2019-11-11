<div class="container">
    <div class="card card-login mx-auto mt-5" style="width: 400px">
        <div class="card-header">Вход</div>
        <div class="card-body">
            <form action="/account/login" method="post">
                <div class="form-group">
                    <label>Логин/Email</label>
                    <input class="form-control" type="text" name="login">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Вход</button>
            </form>
        </div>
    </div>
</div>