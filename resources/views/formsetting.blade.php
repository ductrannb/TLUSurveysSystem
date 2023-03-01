<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formsetting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>
    <title>FormSetting</title>
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
           <form class="form_option--setting" action="">
                <h1 class="form_option--title">Cài đặt</h1>
                <p class="oder-title">Đặt làm bài kiểm tra</p>
                <span class="point-title">Chỉ định các giá trị điểm, đặt câu trả lời và tự động cung cấp ý kiến phản hồi</span>
                <p class="value-poin">Giá trị điểm</p>
                <span class="see-total">Người trả lời có thể xem tổng số điểm và số điểm nhận được cho mỗi câu hỏi</span>
              
                    <p class="value-poin-default">Giá trị điểm mặc định cho câu hỏi</p>
                    <span class="value-new-point">Giá trị điểm cho mọi câu hỏi mới</span>
                    <input class="point-question" type="number" name="" id="" value="1">
                    <span class="text">điểm</span>
                
               <div class="btn-icon">
                    <i class="fa-solid fa-toggle-on btn-icon-toggle"></i>
               </div>
           </form>
           
        </header>
    </div>
</body>   
</html>