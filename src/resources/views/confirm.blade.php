<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>
<body>
    <div class="header">
        <h1 class="header-title">Fashionably Late</h1>
    </div>

    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>Confirm</h2>
            </div>
            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="confirm__table">
                    <table class="confirm__inner">
                        <tr class="confirm__row">
                            <th class="table__header">お名前</th>
                            <td class="table__text">
                                <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm__row">
                            <th class="table__header">性別</th>
                            <td class="table__text">
                                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm__row">
                            <th class="table__header">メールアドレス</th>
                            <td class="table__text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm__row">
                            <th class="table__header">電話番号</th>
                            <td class="table__text">
                                <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm__row">
                            <th class="table__header">住所</th>
                            <td class="table__text">
                                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm__row">
                            <th class="table__header">建物</th>
                            <td class="table__text">
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm__row">
                            <th class="table__header">お問い合わせの種類</th>
                            <td class="table__text">
                                <input type="text" name="category" value="{{ $contact['category'] }}" readonly  />
                            </td>
                        </tr>
                        <tr class="confirm__row">
                            <th class="table__header">お問い合わせ内容</th>
                            <td class="table__text">
                                <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__btn">
                    <button class="form__btn-submit" type="submit">送信</button>
                    <button class="form__btn-back" type="button" onclick="history.back()">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>