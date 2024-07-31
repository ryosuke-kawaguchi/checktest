<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合わせフォーム確認ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}"/>
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
        <div class="confirm__content">
            <div class="confirm__heading">
                <p>Confirm</p>
            </div>
            <form class="form">
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="name" value="サンプルテキスト"/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <input type="text" name="gender" value="サンプルテキスト"/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="mail" value="サンプルテキスト"/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="tel" value="サンプルテキスト"/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="adress" value="サンプルテキスト"/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="サンプルテキスト"/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="type" value="サンプルテキスト"/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="textarea" value="サンプルテキスト"/>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" action="/thanks" method="post">送信</button>
                    <button class="form__button-modify" action="/" method="post">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
