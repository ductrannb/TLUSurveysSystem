<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/confirmpassword.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>
    <title>ConfirmPassword</title>
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
            <form class="recovery-password" method="POST" action="/api/reset-password">
                @csrf
                <input type='hidden' name='token' value="{{$token}}">
                <input type='hidden' name='email' value="{{$_GET['email']}}">
                <h1 class="recovery-title">Khôi phục mật khẩu </h1>
                <div class="confirm-password">
                    <span class="confirm-password-title">Nhập mật khẩu mới</span>
                    <input class="confirm-password-input" type="text" placeholder="**********" name='password'>
                    <i class="icon-newconfirm fa-regular fa-eye"></i>
                    <span class="confirm-password-title">Xác nhận lại mật khẩu</span>
                    <input class="confirm-password-input" type="text" placeholder="**********" name='password_confirmation'>
                    <i class="icon-confirm fa-regular fa-eye"></i>
                </div>
                  <a href="{{ asset('forgot-password') }}">
                    <button type="button"  class="recovery-btn-back">Quay lại</button>
                </a>
                    <button type="submit"  class="recovery-btn">Xác nhận </button>
            </form>
            
        </div>
    </div>
</body>   
</html>