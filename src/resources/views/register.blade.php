<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"/>
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
        <div class="register__content">
            <div class="register__content-heading">
                <h2>Register</h2>
            </div>
            <form class="form" action="">
                <div class="form__text">
                    <label for="name">お名前</label>
                    <br/>
                    <input type="text" name="name" placeholder="例:山田 太郎">
                </div>
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