<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>提案案件</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1>提案案件</h1>
    </header>

    {{ link_to_route('business.lead', 'リード', [], ['class' => 'btn btn-outline-primary ']) }}
    {{ link_to_route('business.suggestion', '提案', [], ['class' => 'btn btn-primary']) }}
    {{ link_to_route('business.client', '顧客', [], ['class' => 'btn btn-outline-primary']) }}
    {{ link_to_route('business.estimate', '予実', [], ['class' => 'btn btn-outline-primary']) }}
    {{ link_to_route('business.account', 'アカウント', [], ['class' => 'btn btn-outline-primary']) }}<br>

</div>
</body>
</html>
