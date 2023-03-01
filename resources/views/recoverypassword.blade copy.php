<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recoverypassword.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>
    <title>FormRecovery</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <img class="logo-img" src="{{ asset('img/img-logo.jpg') }}" alt="Logo">
            <h1 class="title-heading_1">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
            <h2 class="title-heading_2">THUY LOI UNIVERSITY</h2>

        </header>
        <div class="img-tlu">
            <img class="img-bg" src="{{ asset('img/img_form-survey.jpg') }}" alt="">
            <form class="recovery-password" action="">
                <h1 class="recovery-title">Khôi phục mật khẩu </h1>
                <span class="recovery-email">Nhập địa chỉ email</span>
                <input class="recovery-input" type="email" placeholder="2051063880@e.tlu.edu.vn">
               <a href="{{ asset('api/verifycode') }}">
                <button type="button"  class="recovery-btn">Gửi </button>
               </a>
            </form>
        </div>
    </div>
</body>   
</html>