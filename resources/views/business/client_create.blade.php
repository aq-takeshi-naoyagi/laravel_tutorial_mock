<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>顧客登録</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1>顧客登録</h1>
    </header>
    {{ Form::open(['route' => 'business.client_add']) }}
    <div class="form-group">
        {{ Form::label('company_name', '企業名：',) }}
        {{ Form::text('company_name', null, ['class' => 'form-control']) }}
        {{ Form::label('person_name', '担当者名：') }}
        {{ Form::text('person_name', null, ['class' => 'form-control']) }}
        {{ Form::label('contact', '連絡先：') }}
        {{ Form::text('contact', null, ['class' => 'form-control']) }}
        {{ Form::label('nda_availability', 'NDA契約有無：') }}
        {{ Form::label('nda_availability', '未契約') }}
        {{ Form::radio('nda_availability','0', true) }}
        {{ Form::label('nda_availability', '契約済') }}
        {{ Form::radio('nda_availability','1') }}
    </div>
    <div class="form-group">
        {{ Form::submit('登録', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
</div>
</body>
</html>
