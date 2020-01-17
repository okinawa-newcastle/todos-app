<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">TODOS PAGE</h1>

        <div class="card">
            <div class="card-header">
              Todos
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($todos as $todo)
                    <li class="list-group-item">
                        {{ $todo->name }}
                        <button class="btn btn-primary btn-sm float-right">Edit</button>
                    </li>
                    @endforeach
                </ul>
            </div>
          </div>
        </div>
    </div>
    
</body>
</html>