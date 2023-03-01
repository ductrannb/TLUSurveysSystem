<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nosubmit.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>
    <title>FormSubmit</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <img class="logo-img" src="{{ asset('img/img-logo.jpg') }}" alt="Logo">
            <h1 class="title-heading_1">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
            <h2 class="title-heading_2">THUY LOI UNIVERSITY</h2>
           <div class="navbar">
                <div class="navbar-option">
                    <a class="navbar-titlte" href="">Câu hỏi</a>
                    <a class="navbar-titlte" href="">Câu trả lời</a>
                    <a class="navbar-count" href="">0</a>
                    <a class="navbar-titlte" href="">Cài đặt</a>
                    <button class="navbar-btn">Gửi</button>
                </div>
           </div>
           <form class="form_option--reply" action="">
                <h1 class="title-reply">0 Câu trả lời</h1>
           </form>
        </header>
    </div>
</body>   
</html>