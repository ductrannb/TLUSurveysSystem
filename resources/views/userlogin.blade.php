<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/userlogin.css') }}">
    <title>UserLogin</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <img class="bg-img" src="{{ asset('img/img_form-survey.jpg') }}" alt="">
            <img class="logo-img" src="{{ asset('img/img-logo.jpg') }}" alt="">
            <div class="title-heading">
            <h2 class="title-heading_1 hide-on-mobile-tablet">TRƯỜNG ĐẠI HỌC THỦY LỢI</h2>
            <h2 class="title-heading_2">HỆ THỐNG KHẢO SÁT TRỰC TUYẾN</h2>
            </div>
            <form class="form_user" action="">
                <h1 class="form_user--title">Đăng Nhập Hệ Thống</h1>
                <input class="form_user--input" type="text" placeholder="Mã Phiếu Khảo Sát">
                <button class="form_user--btn">Khảo Sát</button>
            </form>
        </header>
    </div>
</body>
</html>