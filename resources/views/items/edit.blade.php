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
    @if ($errors->any())
    <div class="error">
        <p>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1>商品更新フォーム</h1>
    <form action="/items/{{ $item->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="name">商品名</label>
            <input type="text" name="name" id="" value="{{ old('name', $item->name) }}">
        </p>
        <p>
            <label for="description">商品詳細</label>
            <input type="text" name="description" id="" value="{{ old('description', $item->description) }}">
        </p>
        <p>
            <label for="price">価格</label>
            <input type="number" name="price" id="" value="{{ old('price', $item->price) }}">
        </p>
        <p>
            <label for="seller">出品者</label>
            <input type="text" name="seller" id="" value="{{ old('seller', $item->seller) }}">
        </p>
        <p>
            <label for="seller">電子メール</label>
            <input type="text" name="email" id="" value="{{ old('email', $item->email) }}">
        </p>
        <p>
            <label for="image_url">商品画像URL</label>
            <input type="text" name="image_url" id="" value="{{ old('image_url', $item->image_url) }}">
        </p>
        <input type="submit" value="更新">
    </form>
</body>
</html>
