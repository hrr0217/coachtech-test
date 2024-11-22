<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="content-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="need">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="first_name" placeholder="山田">
                            <input type="text" name="last_name" placeholder="太郎">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="need">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--check">
                            <label class="check-box"><input type="radio" name="1" value="men"checked>>男性</label>
                            <label class="check-box"><input type="radio" name="2" value="women">女性</label>
                            <label class="check-box"><input type="radio" name="3" value="other">その他</label>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="need">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-text">
                            <input type="email" name="email" placeholder="例test@example.com">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="need">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-text">
                            <input name="no1" value="" placeholder="080">
                            <p>-</p>
                            <input name="no2" value="" placeholder="1234">
                            <p>-</p>
                            <input name="no3" value="" placeholder="5678">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title"></div>
                        <span class="form__label--item">住所</span>
                        <span class="need">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" name="address" placeholder="例 東京都渋谷区千駄ヶ谷1-2-3">
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title"></div>
                    <span class="form__label--item">建物</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" name="building" placeholder="例 千駄ヶ谷マンション101">
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title"></div>
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="need">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input-select">
                        <select name="options">
                            <option value="" selected placeholder="選択して下さい"></option>
                        </select>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title"></div>
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="need">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input-textarea">
                        <textarea name="content" rows="4" cols="40" placeholder="お問い合わせ内容をご記録下さい"></textarea>
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