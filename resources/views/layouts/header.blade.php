<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
             <nav class="navbar navbar-dark bg-dark py-4">
            <div class="container">
                <a class="navbar-brand" href="{{route('render-index')}}">
                    <img class="img-fluid me-1" src="https://cdn1.flamp.ru/e841d44d4245d6d28310b994af0d96b5.jpg" alt="my brand" width="80px" height="80px">
                </a>
                <button class="navbar-toggler d-block" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc_hm" aria-controls="nav_lc_hm" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="nav_lc_hm">
                    <ul class="navbar-nav my-3 my-lg-0 ms-lg-3">
                        <li class="nav-item me-4"><a class="nav-link" href="{{route('render-deals')}}">Таблица с данными сущности «Сделки» Битрикс24</a></li>
                        <li class="nav-item me-4"><a class="nav-link" href="{{route('render-contact')}}">Контактные данные разработчика</a></li>
                        <li class="nav-item me-4"><a class="nav-link" href="{{route('render-joke')}}">Интересный анекдот</a></li>
                    </ul>
                </div>
            </div>
        </nav>    
        </header>
</body>
</html>
