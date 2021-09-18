<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auction Create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>商品登録フォーム</h1>
    <form action="/items" method="post">
        @csrf
        <p>
            <label for="name">商品名</label>
            <input type="text" name="name">
        </p>
        <p>
            <label for="description">商品詳細</label>
            <input type="text" name="description">
        </p>
        <p>
            <label for="price">価格</label>
            <input type="number" name="price">
        </p>
        <p>
            <label for="seller">出品者</label>
            <input type="text" name="seller">
        </p>
        <p>
            <label for="seller">電子メール</label>
            <input type="text" name="email">
        </p>
        <p>
            <label for="image_url">商品画像URL</label>
            <input type="text" name="image_url">
        </p>
        <input type="submit" value="登録">
    </form>
</body>
</html>
