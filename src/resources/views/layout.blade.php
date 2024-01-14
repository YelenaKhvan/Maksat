<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/svg/favicon.svg" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <header class="d-flex py-3 mb-4 my-custom-class-header">
            <img src="/svg/logo.svg" alt="Logo" width="168.41" height="45.36" class="my-custom-class-logo">
                
            
            <ul class="my-custom-class-nav">
                <li class="nav-item my-custom-class-nav"><a href="/home" class="nav-link" aria-current="page">Главная</a></li>
                <li class="nav-item my-custom-class-nav"><a href="/partners" class="nav-link">Мои партнеры</a></li>
                <li class="nav-item my-custom-class-nav"><a href="/experts" class="nav-link">Эксперты и исполнители</a></li>
                <li class="nav-item my-custom-class-nav"><a href="/services" class="nav-link">Сервисы для развития</a></li>
                <li class="nav-item my-custom-class-nav"><a href="/edu" class="nav-link">Мероприятия и обучение</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        @yield('main_content')
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>