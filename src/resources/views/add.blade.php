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
                <h2>Confirm</h2>
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
                    <button class="form__button-submit">送信</button>
                    <button class="form__button-modify">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合わせフォーム入力ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
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
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/confirm" method='post'>
                @csrf
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input type="text" name="last_name" placeholder="山田">
                            <input type="text" name="first_name" placeholder="太郎">
                        </div>
                        <div class="form__error">
                            <!--バリデーション後に入力-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input type="radio" name="gender" value="men">男性
                            <input type="radio" name="gender" value="women">女性
                            <input type="radio" name="gender" value="other">その他
                        </div>
                        <div class="form__error">
                            <!--バリデーション後に入力-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input type="text" name="email" placeholder="例:test@example.com">
                        </div>
                        <div class="form__error">
                            <!--バリデーション後に入力-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input type="text" name="tel" placeholder="090">
                            <span>-</span>
                            <input type="text" name="tel" placeholder="1234">
                            <span>-</span>
                            <input type="text" name="tel" placeholder="5678">
                        </div>
                        <div class="form__error">
                            <!--バリデーション後に入力-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input type="text" name="adress" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                        </div>
                        <div class="form__error">
                            <!--バリデーション後に入力-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">建物名</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
                        </div>
                        <div class="form__error">
                            <!--バリデーション後に入力-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <select name="select" placeholder=選択してください>
                            </select>
                        </div>
                        <div class="form__error">
                            <!--バリデーション後に入力-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <textarea name="textarea" clos="30" rows="4" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                        <div class="form__error">
                            <!--バリデーション後に入力-->
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>