<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset='utf-8'>
    <title>ログインフォーム</title>
</head>
<body>
@isset($errors)
    <p style="color:red">{{ $errors->first('message') }}</p>
@endisset
<form name="loginform" action="/login" method="post">
    {{ csrf_field() }}
    <dl>
        <dt>メールアドレス：</dt>
        <dd><input type="text" name="email" size="30"></dd>
    </dl>
    <dl>
        <dt>パスワード：</dt>
        <dd><input type="password" name="password" size="30"></dd>
    </dl>
    <button type='submit' name='action'>ログイン</button>
</form>
</body>
</html>
