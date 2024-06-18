<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Skills</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="/about_me" class="nav-link">About Me</a></li>
            <li class="nav-item"><a href="/skills" class="nav-link active" aria-current="page">Skills</a></li>
            <li class="nav-item"><a href="/hobbies" class="nav-link">Hobbies</a></li>
          </ul>
        </header>
    </div>

    <div style="text-align: center;">
        <h1>Skills</h1>
        <ul style="display: inline-block; text-align: left">
            <li>{{$skill_one}}</li>
            <li>{{$skill_two}}</li>
            <li>{{$skill_three}}</li>
            <li>{{$skill_four}}</li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>