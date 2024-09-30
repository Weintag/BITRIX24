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
        <div class="row">
            <div class="col-md-8 offset-md-2 px-4">
                <div class="lc-block mb-4">
                    <div editable="rich">
                        <h2>Добро пожаловать на сайт!</h2>
                    </div>
                </div>
                <div class="lc-block mb-4">
                    <div editable="rich">
                        <p>На данном сайте можете кратко ознакомиться с таблицей сущности "Сделки" - Колмыков Даниил Иванович, контактной информацией разработчика и интересным анекдотом.&nbsp;</p>
                    </div>
                </div>
                <div class="lc-block" style="letter-spacing:5px">
                    <blockquote class="blockquote ">
                        <p editable="inline" class="mb-0"><b>Weintag</b></p>
                    </blockquote>
                </div>
                <div class="lc-block text-secondary">
                    <div editable="rich">
                        <p>Good luck!</p>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
@include('layouts.footer')
</html>