<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"/>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="login__content">
            <div class="login__content-heading">
                <a>Login</a>
            </div>
            <form class="form" action="">
                <div class="form__text">
                    <label for="mail">メールアドレス</label>
                    <br/>
                    <input type="text" name="mail" placeholder="例:test@example.com">
                </div>
                <div class="form__text">
                    <label for="pass">パスワード</label>
                    <br/>
                    <input type="text" name="pass" placeholder="例:coachtech116">
                </div>
                <button>ログイン</button>
            </form>
        </div>
    </main>

</body>
</html>