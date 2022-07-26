<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アカウント</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
        <h2>アカウント</h2>

        {{ link_to_route('business.lead', 'リード', [], ['class' => 'btn btn-outline-primary ']) }}
        {{ link_to_route('business.suggestion', '提案', [], ['class' => 'btn btn-outline-primary']) }}
        {{ link_to_route('business.client', '顧客', [], ['class' => 'btn btn-outline-primary']) }}
        {{ link_to_route('business.estimate', '予実', [], ['class' => 'btn btn-outline-primary']) }}
        {{ link_to_route('business.account', 'アカウント', [], ['class' => 'btn btn-primary']) }}<br>

        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>商品</td>
                <td>ああああ</td>
            </tr>
            </thead>
        </table>
</body>
</div>
</body>
</html>
