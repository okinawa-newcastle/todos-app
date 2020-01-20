<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">TOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/todos">Todos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/todos/create">Todo New</a>
            </li>
          </ul>
       @yield('content')
    </div>
    
</body>
</html>