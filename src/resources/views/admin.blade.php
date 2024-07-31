<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"/>
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
        <div class="admin__content">
            <div class="admin__content-heading">
                <h2>Admin</h2>
            </div>
            <div class="admin__search">
                <input type="text" name="name" placeholder="名前やメールアドレスを入力してください">
                <select name="gender" placeholder="性別"></select>
                <select name="type" placeholder="お問い合わせの種類"></select>
                <select name="time" placeholder="年/月/日"></select>
                <button>検索</button>
                <button>リセット</button>
            </div>
            <div class="">
                <button class="export">エクスポート</button>
            </div>
            <table>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>