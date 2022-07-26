<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>顧客</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1>顧客</h1>
    </header>

    {{ link_to_route('business.lead', 'リード', [], ['class' => 'btn btn-outline-primary ']) }}
    {{ link_to_route('business.suggestion', '提案', [], ['class' => 'btn btn-outline-primary']) }}
    {{ link_to_route('business.client', '顧客', [], ['class' => 'btn btn-primary']) }}
    {{ link_to_route('business.estimate', '予実', [], ['class' => 'btn btn-outline-primary']) }}
    {{ link_to_route('business.account', 'アカウント', [], ['class' => 'btn btn-outline-primary']) }}
    {{ link_to_route('business.client_create', '新規登録', [], ['class' => 'btn btn-outline-primary']) }}<br>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>id</td>
            <td>企業名</td>
            <td>担当者名</td>
            <td>連絡先</td>
            <td>NDA契約有無</td>
            <td></td>

        </tr>
        </thead>
        <tr>
            <th>aaaa</th>
            <th>aaaa</th>
            <th>aaaa</th>
            <th>aaaa</th>
            <th>aaaa</th>

        </tr>
{{--        @foreach($clients as $client)--}}
{{--            <tr>--}}
{{--                <td>{{ link_to_route('business.client_index', $client->id, ['client' => $client->id]) }}</td>--}}
{{--                <td>{{$client->company_name}}</td>--}}
{{--                <td>{{$client->person_name}}</td>--}}
{{--                <td>{{$client->contact}}</td>--}}
{{--                @if($client->nda_availability === 0)--}}
{{--                <td>未契約</td>--}}
{{--                @else--}}
{{--                    <td>契約済</td>--}}
{{--                @endif--}}
{{--            </tr>--}}
{{--        @endforeach--}}
    </table>
</div>
</body>
</html>
