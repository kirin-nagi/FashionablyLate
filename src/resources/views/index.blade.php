<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
            <form class="form">
                <div class="form-group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="last-name" placeholder="例 山田" />
                            <input type="text" name="first-name" placeholder="例 太郎" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション入れる-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group">
                        <div class="form__input--radio">
                            <input type="radio" name="gender" value="male">男性
                            <input type="radio" name="gender" value="female">女性
                            <input type="radio" name="gender" value="other">その他
                        </div>
                        <div class="form__error">
                            <!--バリデーション入れる-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例 text@exmple.com" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション入れる-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__group--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-text">
                            <input type="tel" name="tel1" placeholder="080" />  -
                            <input type="tel" name="tel2" placeholder="1234" />  -
                            <input type="tel" name="tel3" placeholder="5678" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション入れる-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-text">
                            <input type="text" name="address" placeholder="例 東京都渋谷区千駄1-2-3" />
                        </div>
                        <div class="form__error">
                            <!--バリデーションを入れる-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-text">
                            <input type="text" name="building" placeholder="千駄々谷マンション101" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション入れる-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-item">
                        <div class="form__input-select">
                            <select class="form__input-select" name="category_id">
                                <option value="">選択してください</option>
                            </select>
                        </div>
                        <div class="form__error">
                            <!--バリデーション入れる-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__group--item">お問い合わせ内容</span>
                        <span class="form__group--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-text">
                            <input type="text" name="message" placeholder="お問い合わせ内容をご記載ください" />
                        </div>
                        <div class="form__error">
                            <!--バリデーションをいれる-->
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