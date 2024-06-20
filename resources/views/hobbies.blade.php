<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hobbies</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <button style="background-color: transparent; border: none">
                <li class="nav-item"><a href="/about_me" class="nav-link">About Me</a></li>
            </button>
            <button style="background-color: transparent; border: none">
                <li class="nav-item"><a href="/skills" class="nav-link">Skills</a></li>
            </button>
            <button style="background-color: transparent; border: none">
                <li class="nav-item"><a href="/hobbies" class="nav-link active" aria-current="page">Hobbies</a></li>
            </button>
          </ul>
        </header>
    </div>

    <div style="text-align: center;">
        <h1>Hobbies</h1>
        <ul style="display: inline-block; text-align: left">
            <li>{{$hobby_one}}</li>
            <li>{{$hobby_two}}</li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>