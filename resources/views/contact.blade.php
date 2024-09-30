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
    <div class="container py-5 text-center">
    <div class="lc-block mb-4">
        <div editable="rich">
    <h3>Контактная информация разработчика</h3>
        </div>
    </div>
    <div>
        <p>ФИО: Колмыков Даниил Иванович</p>
        <p>Email: daniil.kolmykov@yandex.ru</p>
        <p>Телефон: +79509721597</p>
    </div>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
@include('layouts.footer')
</html>