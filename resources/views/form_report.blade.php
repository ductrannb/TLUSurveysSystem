<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/responform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>
    <title>ResponForm</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <img class="logo-img" src="{{ asset('img/img-logo.jpg') }}" alt="Logo">
            <h1 class="title-heading_1">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
            <h2 class="title-heading_2">THUY LOI UNIVERSITY</h2>
        </header>
        <form class="form-respon" action="">
            <h1 class="heading-title">THỐNG KÊ KẾT QUẢ SỬ DỤNG CSDL SÁCH & Tạp chí điện tử Ngoại văn và bộ dữ liệu Fiingroup</h1>
            <span class="record-title">Hệ thống đã ghi lại câu trả lời của bạn</span>
            <span class="opinion-title">Đóng góp ý kiến cho chúng tôi</span>
            <a class="review-survey" href="">Xem lại bài khảo sát</a>
            <button class="btn-end">End</button>
        </form>
        <form class="form-opinion" action="">
            <input class="form-opinion-input" name="" type="text">
        </form>
    </div>
</body>   
</html>
