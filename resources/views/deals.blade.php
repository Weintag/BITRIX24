<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bootstrap.css', 'resources/css/app.css', 'resources/js/bootstrap.js'])
    <title>{{$title}}</title>
</head>
@include('layouts.header')
<body class="bg-light">
    <div class="container py-3 text-center">
    <h3>Сделки - Колмыков Даниил Иванович</h>
    </div>
    <table class="table table-striped max-width">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Отвественный</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Стадия</th>
            <th scope="col">Дата создания</th>
        </tr>
        </thead>
        @foreach($res['result'] as $r)
        <tr>
            <th>{{$r['ID']}}</th>
            <th>{{$r['TITLE']}}</th>
            <th>{{$r['COMPANY_ID']}}</th>
            <th>{{$r['COMMENTS']}}</th>
            <th>{{$r['STAGE_ID']}}</th>
            <th>{{$r['DATE_CREATE']}}</th>
            <th><div><a href="{{route('render-update', $r['ID'])}}" method="post">Редактировать</a></div></th>
        </tr>
       @endforeach
    </table>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
@include('layouts.footer')
</html>