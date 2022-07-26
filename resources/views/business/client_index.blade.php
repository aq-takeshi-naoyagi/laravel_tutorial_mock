<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>顧客情報詳細</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1>顧客情報詳細</h1>
    </header>
    <p>ID：{{ $client->id }}</p>
    <p>企業名：{{ $client->company_name }}</p>
</div>
</body>
</html>
