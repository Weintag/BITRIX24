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
        <form action="{{route('webhook', $deal['ID'])}}" method="post">
            @csrf
            @method('PATCH')
        <tr>
            <th><input type="text" name="ID" value="{{ old('ID', $deal['ID']) }}"></th>
            <th><input type="text" name="TITLE" value="{{ old('TITLE', $deal['TITLE']) }}"></th>
            <th><input type="text" name="COMPANY_ID" value="{{ old('COMPANY_ID', $deal['COMPANY_ID']) }}"></th>
            <th><input type="text" name="COMMENTS" value="{{ old('COMMENTS', $deal['COMMENTS']) }}"></th>
            <th><input type="text" name="STAGE_ID" value="{{ old('STAGE_ID', $deal['STAGE_ID']) }}"></th>
            <th><input type="text" name="DATE_CREATE" value="{{ old('DATE_CREATE', $deal['DATE_CREATE']) }}"></th>
            <th><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Сохранить</a></div></th>
                     <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Подтверждение</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Точно хотите изменить данные сделки?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
          <button type="submit" class="btn btn-primary">Да</button>
        </div>
      </div>
    </div>
  </div>
        </tr>
        </form>
    </table>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
@include('layouts.footer')
</html>
