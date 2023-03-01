<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/newform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>
    <title>NewForm</title>
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
           <div class="form_option--question" action="">
                <h1 class="form_option--title">Tiêu đề</h1>
                <input class="form_option--description" type="text" placeholder="Mô tả...">
                <div class="form_option--email">
                    <p class="form_option--sympol">*</p>
                    <p class="form_option--text">Email</p>
                    <input class="form_option--input" type="text" name="" id="" placeholder="Email hợp lệ">
                </div>

                <form class="form_option--selection" action="">
                    <h2 class="form_option--heading">Câu hỏi</h2>
                    <div class="form_selection">
                        <div class="form_selection--cancel">
                            <i class="fa-solid fa-xmark option-cancel"></i><br>
                            <i class="fa-solid fa-xmark "></i>
                        </div>
                        
                        <input class="form_selection--one" type="radio"> Tuỳ chọn 1 <br>
                        <input class="form_selection--two" type="radio"> Tùy chọn 2   
                       <div class="form_option--add">
                        <input class="form_selection--three" type="radio"> 
                        <a class="form-add form-add-selection"> Thêm tùy chọn </a>
                        <span class="form-add">hoặc</span> 
                        <a href="" class="form-add form-add-reply"> thêm"Câu trả lời khác"</a>
                       </div>
                    </div>
                    <div class="form_option--btn">
                        <p class="form_option--require">Bắt buộc</p>
                        <i class="fa-solid fa-toggle-on btn-icon-toggle"></i>
                        <img class="btn-icon-trash" src="{{ asset('img/trash.png') }}" alt="">
                    </div>
                    <div class="dropdown">
                        
                        <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="dropdown-btn">Trắc nghiệm</p>
                            <i  class="fa-regular fa-circle-dot dropdown-icon--radio"></i>
                            <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                        </button>
                       
                        <ul class="dropdown-menu ">
                        <li><a class="dropdown-item dropdown-selection" href="#">Trả lời ngắn</a></li>
                        <li><a class="dropdown-item dropdown-selection" href="#">Đoạn</a></li>
                        <li><a class="dropdown-item dropdown-selection" href="#">Trắc nghiệm</a></li>
                        <li><a class="dropdown-item dropdown-selection" href="#">Hộp kiếm</a></li>
                        </ul>
                    </div>
                </form>

                     <!-- Checkbox option -->
            <form class="form_option--checkbox" action="">
                <h2 class="form_option--heading">Câu hỏi</h2>
                <div class="form_selection--checkbox">
                    <div class="form_selection--cancel">
                        <i class="fa-solid fa-xmark option-cancel"></i><br>
                        <i class="fa-solid fa-xmark "></i>
                    </div>
                    
                    <input class="form_selection--one" type="checkbox"> Tuỳ chọn 1 <br>
                    <input class="form_selection--two" type="checkbox"> Tùy chọn 2   
                   <div class="form_option--add">
                    <input class="form_selection--three" type="checkbox"> 
                    <a class="form-add form-add-selection"> Thêm tùy chọn </a>
                    <span class="form-add">hoặc</span> 
                    <a href="" class="form-add form-add-reply"> thêm"Câu trả lời khác"</a>
                   </div>
                </div>
                <div class="form_option--btn">
                    <p class="form_option--require">Bắt buộc</p>
                    <i class="fa-solid fa-toggle-on btn-icon-toggle"></i>
                    <img class="btn-icon-trash" src="{{ asset('img/trash.png') }}" alt="">
                </div>
                <div class="dropdown">
                    
                    <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="dropdown-btn">Hộp kiểm</p>
                        <i class="fa-regular fa-square-check dropdown-icon--checkbox"></i>
                        <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                    </button>
                   
                    <ul class="dropdown-menu ">
                    <li><a class="dropdown-item dropdown-selection" href="#">Trả lời ngắn</a></li>
                    <li><a class="dropdown-item dropdown-selection" href="#">Đoạn</a></li>
                    <li><a class="dropdown-item dropdown-selection" href="#">Trắc nghiệm</a></li>
                    <li><a class="dropdown-item dropdown-selection" href="#">Hộp kiếm</a></li>
                    </ul>
                </div>
            </form>

                 <!-- Checkbox option -->
                 <form class="form_option--checkbox1" action="">
                    <h2 class="form_option--heading">Câu hỏi</h2>
                    <div class="form_selection--checkbox">
                        <div class="form_selection--cancel">
                            <i class="fa-solid fa-xmark option-cancel"></i><br>
                            <i class="fa-solid fa-xmark "></i>
                        </div>
                        
                        <input class="form_selection--one" type="checkbox"> Tuỳ chọn 1 <br>
                        <input class="form_selection--two" type="checkbox"> Tùy chọn 2   
                       <div class="form_option--add">
                        <input class="form_selection--three" type="checkbox"> 
                        <a class="form-add form-add-selection"> Thêm tùy chọn </a>
                        <span class="form-add">hoặc</span> 
                        <a href="" class="form-add form-add-reply"> thêm"Câu trả lời khác"</a>
                       </div>
                    </div>
                    <div class="form_option--btn">
                        <p class="form_option--require">Bắt buộc</p>
                        <i class="fa-solid fa-toggle-on btn-icon-toggle"></i>
                        <img class="btn-icon-trash" src="{{ asset('img/trash.png') }}" alt="">
                    </div>
                    <div class="dropdown">
                        
                        <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="dropdown-btn">Hộp kiểm</p>
                            <i class="fa-regular fa-square-check dropdown-icon--checkbox"></i>
                            <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                        </button>
                       
                        <ul class="dropdown-menu ">
                        <li><a class="dropdown-item dropdown-selection" href="#">Trả lời ngắn</a></li>
                        <li><a class="dropdown-item dropdown-selection" href="#">Đoạn</a></li>
                        <li><a class="dropdown-item dropdown-selection" href="#">Trắc nghiệm</a></li>
                        <li><a class="dropdown-item dropdown-selection" href="#">Hộp kiếm</a></li>
                        </ul>
                    </div>
                </form>
           </div>
          
          
            <form class="form_option--tool" action="">
                <img class="tool-circle" src="{{ asset('img/tool1.png') }}" alt="">
                <img class="tool-plus" src="{{ asset('img/tool2.png') }}" alt="">
                <i  class="fa-solid fa-image toll-img"></i>
            </form>
        </header>
    </div>
</body>   
</html>