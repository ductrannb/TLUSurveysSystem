<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/newform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formsendtarget.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formsetting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/statisticalformtest.css') }}">
    
</head>
<style>
    body {font-family: Arial;}
    .tabcontent{
        display: none;
    }
    #Question {
        display: block
    }
    #wrapper{
        margin-bottom: 30px;
        margin-left: -50px;
    }
    .switch-toggle{
        cursor: pointer;
        width: 40px;
        height: 20px;
        appearance: none;
        background-color: #333;
        border-radius:26px ;
        position: relative;
    }
    .switch-toggle::before{
        content: '';
        width: 14px;
        height: 14px;
        top: 3px;
        left: 3px;
        position: absolute;
        background-color: #fff;
        border-radius: 50%;
    }
    .switch-toggle:checked{
        background-color: #61FC18;
       
    }
    .switch-toggle:checked::before{
        left: 22px;
    }
    </style>
<body>
    <div class="app">
        <div class="header">
                    <div class="logo-img">
                        <img  src="{{ asset('img/img-logo.jpg') }}" alt="Logo">
                    </div>
                   
                    <div>
                        <h1 class="title-heading_1">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
                        <h2 class="title-heading_2">THUY LOI UNIVERSITY</h2>
                    </div>
                    
            </div>
         
            <div class="content">
                <div class="row">
                    <div class="col">
                        <div class="nav">
                            <ul class="menu"> 
                                <button type="button" onclick="openTabs(event,'Question')"class="menu-item tablinks col-2 active">Câu hỏi</button>
                                <button type="button" onclick="openTabs(event,'Reply')"   class="menu-item tablinks col-2">Câu trả lời</button>
                                <button type="button" onclick="openTabs(event,'Setting')" class="menu-item tablinks col-2">Cài đặt</button> 
                                <button type="button" onclick="openTabs(event,'Send')"    class="btn-submit tablinks col-6">Gửi</button>
                            </ul>
                           
                        </div>
                <!-- Question -->
                <div id="Question" class="tabcontent">
                    <form  class="form_option-question container" action="">
                        <div class="heading-title">
                            <input class="form_option--title" placeholder="Tiêu Đề">
                            <input class="form_option--description" type="text" placeholder="Mô tả...">
                        </div>

                        <div class="form_option--email">
                            <span style="color:red">*</span><span class="form_option-input">Email</span>
                            <input class="form_option--input" type="text" name="" id="form_option--input" placeholder="Email hợp lệ">
                        </div>

                        <div class="form_option--selection">
                            <div class="row">
                                <input type="text" class="col-8" placeholder="Câu hỏi">
                                
                                <div class="dropdown col-4">
                                   
                                        <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <p class="dropdown-title">Trắc nghiệm</p>
                                           <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
                                        </button>
                                    <ul class="dropdown-menu">
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
                                    </ul>
                                  </div>
                                <div class="option">
                                    <div  class="content-option root">
                                        <input  name="option" class=" ip-option" type="radio">
                                        <input type="text" placeholder="Tùy chọn">
                                        <i class="fa-solid fa-xmark  option-icon"></i><br>
                                    </div>
                                </div>
                                <div class="option--add">
                                    <input class="" type="radio">
                                    <span   class="option-add">Thêm tùy chọn</span>
                                </div>
                                
                               
                                <div class="border">

                                </div>
                                <div class="col-7"> 
                                </div>
                                <div class="option-btn col-5">
                                    <p class="form_option--require col-4">Bắt buộc</p>
                                    <div  id="wrapper">
                                    <input type="checkbox" name="" class="switch-toggle">
                                    </div>
                                    <div class="boder-end"></div>
                                    
                                </div>
                                    <div class="col-11"></div>
                                    <i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
                            </div>
                            
                        </div>
                    </form>
                    <div class="form-tool">
                        <form class="form-option-tool" action="">
                            <i  class="plus-tool icon-tool">
                                <img class="" src="{{ asset('img/plus.svg') }}" alt="">
                            </i>
                            <i class="image-tool icon-tool">
                                <img class="" src="{{ asset('img/image.svg') }}" alt="">
                            </i>
                            
                        </form>
                    </div>
                </div>     
                {{-- Setting --}}
                <div id="Setting" class="tabcontent">
                        <form class="form_option--setting container " action="">
                            <h1 style="padding: 20px;">Cài đặt</h1>
                            <div class="border-setting"></div>
                            <div class="setting-exam">
                             <span class="oder-exam col-4">Đặt làm bài kiểm tra</span>
                             <span class="points-title col-8">Chỉ định các giá trị điểm, đặt câu trả lời và tự động cung cấp ý kiến phản hồi</span>
                            </div>
                            <div  id="wrapper" class="col-12">
                             <input  type="checkbox" name="" class="switch-toggle">
                         </div>
                            
                         </form>
                       
                      </div>
                        
                      {{-- Send target --}}
                      <div id="Send" class="tabcontent">
                        <div class="form-send-target ">
                            <div class="form-submit">
                                <h1 class="form-submit-title col-12">Gửi biểu mẫu</h1>
                                <div class="border-submit"></div>
                                <span class="form-submit-code">Mã phiếu khảo sát:</span>
                                <input class="form-submit-link col-12" type="text" placeholder="links:">
                                <i class="fa-regular fa-copy icon-copy"></i>
                                <div class="col-11 btn-end">
                                    <button class="btn--end col-1" >Kết thúc</button>
                                </div>
                                
                            </div>
                            <div class="send-blur"></div>
                        </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col">
                                            <form  class="form_option-question container " action="">
                                               
                                                <div class="heading-title">
                                                    <input class="form_option--title" placeholder="Tiêu Đề">
                                                <input class="form_option--description" type="text" placeholder="Mô tả...">
                                                </div>
                                                <div class="form_option--email">
                                                    <span style="color:red">*</span><span class="form_option-input">Email</span>
                                                    <input class="form_option--input" type="text" name="" id="form_option--input" placeholder="Email hợp lệ">
                                                </div>
                    
                                                <div class="form_option--selection">
                                                    <div class="row">
                                                        <input type="text" class="col-8" placeholder="Câu hỏi">
                                                        
                                                        <div class="dropdown col-4">
                                                           
                                                                <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <p class="dropdown-title">Trắc nghiệm</p>
                                                                   <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
                                                                </button>
                                                            <ul class="dropdown-menu">
                                                              <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
                                                              <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
                                                              <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
                                                              <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
                                                            </ul>
                                                          </div>
                                                          <div class="option ">
                                                            <div class="content-option">
                                                                <input class=" ip-option" type="radio">Tùy chọn<i class="fa-solid fa-xmark  option-icon "></i><br>
                                                            </div>
                                                            <input class="" type="radio">
                                                            <span class="option-add "> Thêm tùy chọn </span>
                                                            <span class="">hoặc</span> 
                                                            <a href="" class="option-add-or"> thêm"Câu trả lời khác"</a>
                                                        </div>
                                                        <div class="border">
                    
                                                        </div>
                                                        <div class="col-7"> 
                                                        </div>
                                                        <div class="option-btn col-5">
                                                            <p class="form_option--require col-4">Bắt buộc</p>
                                                            <div  id="wrapper">
                                                            <input type="checkbox" name="" class="switch-toggle">
                                                            </div>
                                                            <div class="boder-end"></div>
                                                           
                                                        </div>
                                                        <div class="col-11"></div>
                                                        <i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                            
                                        </div>
                                    </div>
                                    
                                </div>       
                           
                        </div>
                        <!-- Reply -->
                        <div id="Reply"  class="tabcontent">
                            <div class="appp">
                                <form class="form_option--reply container " action="">
                                    <div class="heading--title">
                                        <h1 class="form_option-title">20 Câu trả lời</h1>
                                        <h2 class="title-list">Danh sách</h2>
                                    </div>
                                        <ul class="list-member">
                                            <li class="list-member-name col-11">Nguyễn Văn A <div class="list-icon col-1"><img class="list-member-icon " src="{{ asset('img/eye.png') }}" alt=""><i class="icon-download fa-solid fa-download"></i></div> </li><br>
                                            <li class="list-member-name col-11">Nguyễn Văn B <div class="list-icon col-1"><img class="list-member-icon"       src="{{ asset('img/eye.png') }}" alt=""><i class="icon-download fa-solid fa-download"></i></div></li><br>
                                            <li class="list-member-name col-11">Nguyên Văn C <div class="list-icon col-1"><img class="list-member-icon"       src="{{ asset('img/eye.png') }}" alt=""><i class="icon-download fa-solid fa-download"></i></div></li><br>
                                            <li class="list-member-name col-11">Nguyên Văn D <div class="list-icon col-1"><img class="list-member-icon"       src="{{ asset('img/eye.png') }}" alt=""><i class="icon-download fa-solid fa-download"></i></div></li>
                                       </ul>
                                       <div class="boder-list-member"></div>
                                       <h2 class="title-list-point">Điểm số</h2>
                                       <div class="title--list-point">
                                        <p class="list-point col-10">Danh sách</p>
                                        <p class="point-title col-2">Điểm <br>/10</p>
                                       </div>
                                      
                                       <ul class="list--point">
                                        <li class="list-point-member col-11">Nguyễn Văn A <span class="list-point-number col-1">1</span> </li>
                                        <li class="list-point-member  col-11">Nguyễn Văn B <span class="list-point-number col-1">1</span> </li>
                                        <li class="list-point-member  col-11">Nguyễn Văn C <span class="list-point-number col-1">1</span> </li>
                                        <li class="list-point-member  col-11">Nguyễn Văn D <span class="list-point-number col-1">1</span> </li>
                                        <li class="list-point-member  col-11">Nguyễn Văn E <span class="list-point-number col-1">1</span> </li>
                                        <li class="list-point-member  col-11">Nguyễn Văn F <span class="list-point-number col-1">1</span> </li>
                                        <li class="list-point-member  col-11">Nguyễn Văn G <span class="list-point-number col-1">1</span> </li>
                                        </ul>
                                        <div class="border-list-point"></div>
                                        <div class="chart-pie">
                                            <p class="question-chart-pie">Câu hỏi <br> <span class="reply-chart-pie">x câu trả lời</span> </p>
                                        </div>
                                        <canvas id="myChart" style="width:100%;max-width:600px;margin-left:200px;"></canvas>
                                        <script src="{{ asset('js/chart/chartpice.js') }}"></script>
                                        <div class="boder-chart-pie"></div>
                                        <p class="question-chart-horizontal">Câu hỏi <br> <span class="reply-chart-horizontal">x câu trả lời</span> </p>
                                        <div class="horizontal-chart">
                                            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
                                            <canvas id="horizontal" style="width:100%;max-width:600px;height: 250px;"></canvas>
                                            <script  src="{{ asset('js/chart/horizontal.js') }}" type="text/javascript"></script>
                                            <div class="boder-chart-horizontal"></div>
                                            <div class="chart-column">
                                                <p style="padding: 20px;">Điểm số </p>
                                                <p class="chart-point">Biểu đồ điểm số</p>
                                                <p class="chart-quantity">Số lượng</p>
                                                <canvas id="columnChart"  style="width:100%;max-width:800px;height: 300px;"></canvas> 
                                                    <span class="chart-poin-end ">Điểm số</span>    
                                                 <script  src="{{ asset('js/chart/column.js') }}" type="text/javascript"></script>
                                                
                                               </div>
                                            </div>
                                        
                                    </form>
                             
                            </div>
                          
                            </div>
                {{-- Short answer --}}
                <div id="ShortAnswer" class="tabcontent">
                        <form class="form_option-shortanswer container " action="">
                    
                        <div class="heading-title">
                            <input class="form_option--title" placeholder="Tiêu Đề">
                        <input class="form_option--description" type="text" placeholder="Mô tả...">
                        </div>
                        <div class="form_option--email">
                            <span style="color:red">*</span><span class="form_option-input">Email</span>
                            <input class="form_option--input" type="text" name="" id="form_option--input" placeholder="Email hợp lệ">
                        </div>

                        <div class="form_option--selection">
                            <div class="row">
                                <input type="text" class="col-8" placeholder="Câu hỏi">
                                
                                <div class="dropdown col-4">
                                   
                                        <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <p class="dropdown-title">Trả lời ngắn</p>
                                           <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
                                        </button>
                                    <ul class="dropdown-menu">
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
                                    </ul>
                                  </div>
                                  <div class="col-12">
                                    <input class="text-paragraph" type="" placeholder="Văn bản trả lời ngắn">
                                </div>
                                <div style="margin-top: 100px" class="border">
                                
                                </div>
                                <div class="col-7"> 
                                </div>
                                <div class="option-btn col-5">
                                    <p class="form_option--require col-4">Bắt buộc</p>
                                    <div  id="wrapper">
                                    <input type="checkbox" name="" class="switch-toggle">
                                    </div>
                                    <div class="boder-end"></div>
                                </div>
                                <div class="col-11"></div>
                                <i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
                            </div>
                        </div>
                        
                    </form>
                    <div class="form-tool">
                        <form class="form-option-tool" action="">
                            <i  class="plus-tool-answer icon-tool">
                                <img class="" src="{{ asset('img/plus.svg') }}" alt="">
                            </i>
                            <i class="image-tool icon-tool">
                                <img class="" src="{{ asset('img/image.svg') }}" alt="">
                            </i>
                            
                        </form>
                    </div>
                    </div>
                                
                {{-- Paragraph --}}
                <div id="Paragraph" class="tabcontent">
                    <form class="form_option-paragraph container " action="">
                        
                        <div class="heading-title">
                            <input class="form_option--title" placeholder="Tiêu Đề">
                        <input class="form_option--description" type="text" placeholder="Mô tả...">
                        </div>
                        <div class="form_option--email">
                            <span style="color:red">*</span><span class="form_option-input">Email</span>
                            <input class="form_option--input" type="text" name="" id="form_option--input" placeholder="Email hợp lệ">
                        </div>

                        <div class="form_option--selection">
                            <div class="row">
                                <input type="text" class="col-8" placeholder="Câu hỏi">
                                
                                <div class="dropdown col-4">
                                   
                                        <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <p class="dropdown-title">Đoạn</p>
                                           <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
                                        </button>
                                    <ul class="dropdown-menu">
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
                                    </ul>
                                  </div>
                                  <div class="col-12">
                                    <input class="text-paragraph" type="" placeholder="Văn bản trả lời dài">
                                </div>
                                <div style="margin-top: 100px" class="border">
                                
                                </div>
                                <div class="col-7"> 
                                </div>
                                <div class="option-btn col-5">
                                    <p class="form_option--require col-4">Bắt buộc</p>
                                    <div  id="wrapper">
                                    <input type="checkbox" name="" class="switch-toggle">
                                    </div>
                                    <div class="boder-end"></div>
                                    
                                </div>
                                <div class="col-11"></div>
                                <i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
                            </div>
                        </div>
                    </form>
                    <div class="form-tool">
                        <form class="form-option-tool" action="">
                            <i class="plus-tool-paragraph icon-tool">
                                <img class="" src="{{ asset('img/plus.svg') }}" alt="">
                            </i>
                            <i class="image-tool icon-tool">
                                <img class="" src="{{ asset('img/image.svg') }}" alt="">
                            </i>
                            
                        </form>
                    </div>
                  </div>
                {{-- Multiple-Choice --}}
                <div id="Multiple" class="tabcontent">
                    <form class="form_option-multiple container " action="">
                        
                        <div class="heading-title">
                            <input class="form_option--title" placeholder="Tiêu Đề">
                        <input class="form_option--description" type="text" placeholder="Mô tả...">
                        </div>
                        <div class="form_option--email">
                            <span style="color:red">*</span><span class="form_option-input">Email</span>
                            <input class="form_option--input" type="text" name="" id="form_option--input" placeholder="Email hợp lệ">
                        </div>

                        <div class="form_option--selection">
                            <div class="row">
                                <input type="text" class="col-8" placeholder="Câu hỏi">
                                
                                <div class="dropdown col-4">
                                   
                                        <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <p class="dropdown-title">Trắc nghiệm</p>
                                           <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
                                        </button>
                                    <ul class="dropdown-menu">
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
                                      <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
                                    </ul>
                                  </div>
                                  <div class="option">
                                    <div  class="content-option-multiple root">
                                        <input name="radio" class=" ip-option" type="radio">
                                        <input type="text" name="" id="" placeholder="Tùy chọn">
                                        <i class="fa-solid fa-xmark  option-icon-multiple option-icon"></i><br>
                                    </div>
                                </div>
                                    <div class="option--add">
                                    <input class="" type="radio">
                                    <span  class="option-add option-add-multiple">Thêm tùy chọn</span>
                                </div>
                                <div class="border">

                                </div>
                                <div class="col-7"> 
                                </div>
                                <div class="option-btn col-5">
                                    <p class="form_option--require col-4">Bắt buộc</p>
                                    <div  id="wrapper">
                                    <input type="checkbox" name="" class="switch-toggle">
                                    </div>
                                    <div class="boder-end"></div>
                                </div>
                                <div class="col-11"></div>
                                <i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
                        </div>
                        </div>
                    </form>
                    <div class="form-tool">
                        <form class="form-option-tool" action="">
                            <i class="plus-tool-multiple icon-tool">
                                <img class="" src="{{ asset('img/plus.svg') }}" alt="">
                            </i>
                            <i class="image-tool icon-tool">
                                <img class="" src="{{ asset('img/image.svg') }}" alt="">
                            </i>
                            
                        </form>
                    </div>
                  </div>
                {{-- Check Box --}}
                <div id="CheckBox" class="tabcontent">
                        <form class="form_option-checkbox container " action="">
                            
                            <div class="heading-title">
                                <input class="form_option--title" placeholder="Tiêu Đề">
                            <input class="form_option--description" type="text" placeholder="Mô tả...">
                            </div>
                            <div class="form_option--email">
                                <span style="color:red">*</span><span class="form_option-input">Email</span>
                                <input class="form_option--input" type="text" name="" id="form_option--input" placeholder="Email hợp lệ">
                            </div>

                            <div class="form_option--selection">
                                <div class="row">
                                    <input type="text" class="col-8" placeholder="Câu hỏi">
                                    
                                    <div class="dropdown col-4">
                                       
                                            <button style="margin-top:20px ;" class="btn btn-secondary col-10" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <p class="dropdown-title">Hộp kiểm</p>
                                               <i  class="fa-solid fa-angle-down dropdown-icon--down "></i>
                                            </button>
                                        <ul class="dropdown-menu">
                                          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Paragraph')" type="button">Đoạn</button></li>
                                          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'ShortAnswer')" type="button">Trả Lời Ngắn</button></li>
                                          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'CheckBox')" type="button">Hộp kiểm</button></li>
                                          <li><button class="dropdown-item tablinks" onclick="openTabs(event,'Multiple')" type="button">Trắc nghiệm</button></li>
                                        </ul>
                                      </div>
                                      <div class="option">
                                        <div  class="content-option-checkbox root">
                                            <input class=" ip-option" type="checkbox">
                                            <input type="text" name="" id="" placeholder="Tùy chọn">
                                            <i class="fa-solid fa-xmark  option-icon"></i><br>
                                        </div>
                                    </div>
                                        <div class="option--add">
                                        <input class="" type="checkbox">
                                        <span  class="option-add option-add-checkbox">Thêm tùy chọn</span>
                                    </div>
                                    
                                    <div class="border">

                                    </div>
                                    <div class="col-7"> 
                                    </div>
                                    <div class="option-btn col-5">
                                        <p class="form_option--require col-4">Bắt buộc</p>
                                        <div  id="wrapper">
                                        <input type="checkbox" name="" class="switch-toggle">
                                        </div>
                                        <div class="boder-end"></div>
                                    </div>
                                    <div class="col-11"></div>
                                    <i  class="col-1 fa-regular btn-icon-trash fa-trash-can"></i>
                                </div>
                            </div>
                            
                        </form>
                        <div class="form-tool">
                            <form class="form-option-tool" action="">
                                <i class="plus-tool-checkbox icon-tool">
                                    <img class="" src="{{ asset('img/plus.svg') }}" alt="">
                                </i>
                                <i class="image-tool icon-tool">
                                    <img class="" src="{{ asset('img/image.svg') }}" alt="">
                                </i>
                                
                            </form>
                        </div>
                      </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/chart/close.js') }}"></script>
<script src="{{ asset('js/chart/tabs.js') }}"></script>
<script src="{{ asset('js/chart/addform.js') }}"></script>
</html>

