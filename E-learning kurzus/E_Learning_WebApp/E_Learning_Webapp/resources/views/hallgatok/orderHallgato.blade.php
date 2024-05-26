
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hallgató eltávolítása</title>
</head>
<body>
    @extends('layouts.app')
@extends('layouts.header')

    <div class="container ">
        <div class="jumbo text-black">
            <div class="jumbotron text-black">
                <h1 id="h1" class="display-1">Üdv a Hallgató módosító oldalon!</h1>
                <p class="lead ">!!!FEJLESZTÉS ALATT!!!</p>
                <button   href="{{ route('Kurzusok.kurzusok') }}" class="btn btn-warning">Vissza a kurzusokhoz!</button>
                
                <hr class="my-3">
             </div>
        </div>
    </div>
</body>
</html>
