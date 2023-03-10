<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formsendtarget.css') }}">
    <link rel="stylesheet" href="{{ asset('css/statisticalformtest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formsetting.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    body {font-family: Arial;}
    .tabcontent {
      display: none;
    }
    #wrapper{
        position: absolute;
        right: 0;
        min-height: 100vh;
        right: 146px;
        top: 2px;
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
        <header class="header">
            <img class="logo-img" src="{{ asset('img/img-logo.jpg') }}" alt="Logo">
            <h1 class="title-heading_1">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
            <h2 class="title-heading_2">THUY LOI UNIVERSITY</h2>
           <div class="navbar"> 
            <div class="navbar-option ">
                <button type="button" class="navbar-title tablinks" onclick="openTabs(event, 'Question')">Câu hỏi</button>
                <button type="button" class="navbar-title tablinks" onclick="openTabs(event, 'Reply')">Câu trả lời</button>
                <button type="button" class="navbar-title tablinks" onclick="openTabs(event, 'Setting')">Cài đặt</button>
                <button type="button" class="navbar-btn tablinks" onclick="openTabs(event,'Send')">Gửi</button>
            </div>
           </div>
               
           <div class="form_option--question" action="">
            <input class="form_option--title" placeholder="Tiêu Đề">
            <input class="form_option--description" type="text" placeholder="Mô tả...">
            <div class="form_option--email">
                <p class="form_option--sympol">*</p>
                <p class="form_option--text">Email</p>
                <input class="form_option--input" type="text" name="" id="" placeholder="Email hợp lệ">
            </div>
    
            <form class="form_option--selection" action="">
                <input class="form_option--heading" placeholder="Câu hỏi">
                
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
                    <div id="wrapper">
                        <input type="checkbox" name="" class="switch-toggle">
                    </div>
                    <img class="btn-icon-trash" src="./img/trash.png" alt="">
                </div>
                <div class="dropdown">
                    
                    <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="dropdown-btn">Trắc nghiệm</p>
                        <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                    </button>
                   
                    <div class="dropdown-menu ">
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'ShortAnswer')"> Trả lời ngắn</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Paragraph')"> Đoạn</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Multiple')"> Trắc nghiệm</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'CheckBox')"> Hộp kiếm</button>
                    </div>
                </div>
                </form>
              
             </div>
             <form id="tool" class="form_option--tool active" action="">
                <img class="tool-circle" src="./img/tool1.png" alt="">
                <img class="tool-plus" src="./img/tool2.png" alt="">
                <i  class="fa-solid fa-image toll-img"></i>
            </form>
        <div id="Question" class="tabcontent">
            <div class="form_option--question" action="">
            <input class="form_option--title" placeholder="Tiêu Đề">
            <input class="form_option--description" type="text" placeholder="Mô tả...">
            <div class="form_option--email">
              <p class="form_option--sympol">*</p>
              <p class="form_option--text">Email</p>
              <input class="form_option--input" type="text" name="" id="" placeholder="Email hợp lệ">
            </div>
  
            <form class="form_option--selection" action="">
              <input class="form_option--heading" placeholder="Câu hỏi">

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
                  <div id="wrapper">
                    <input type="checkbox" name="" class="switch-toggle">
                  </div>
                  <img class="btn-icon-trash" src="./img/trash.png" alt="">
              </div>
              <div class="dropdown">
                  
                  <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <p class="dropdown-btn">Trắc nghiệm</p>
                      <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                  </button>
                 
                  <div class="dropdown-menu ">
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'ShortAnswer')"> Trả lời ngắn</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Paragraph')"> Đoạn</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Multiple')"> Trắc nghiệm</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'CheckBox')"> Hộp kiếm</button>
                    </div>
              </div>
          </form>
     </div>
     <form  class=" form_option--tool" action="">
        <img class="tool-circle" src="./img/tool1.png" alt="">
        <img class="tool-plus" src="./img/tool2.png" alt="">
        <i  class="fa-solid fa-image toll-img"></i>
    </form>
  </div>
  
  <div id="Reply"  class="tabcontent">
    <div class="form_option--reply" action="">
        <h1 class="title-heading">Câu trả lời</h1>
        <h2 class="title-list">Danh sách</h2>
        <ul class="list-member">
             <li class="list-member-name">Nguyễn Văn A <img class="list-member-icon" src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></li><br>
             <li class="list-member-name">Nguyễn Văn B <img class="list-member-icon" src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></li><br>
             <li class="list-member-name">Nguyên Văn C <img class="list-member-icon" src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></li>
        </ul>
        <h2 class="title-point">Điểm số</h2>
        <div class="title-poin-heading">
             <p class="list-title">Danh sách</p>
             <p class="point-title">Điểm <br>/10</p>
        </div>
        <ul class="list-point">
             <li class="list-point-member">Nguyễn Văn A <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguyễn Văn B <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguyễn Văn C <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguyễn Văn D <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguyễn Văn E <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguyễn Văn F <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguyễn Văn G <span class="list-point-number">1</span> </li>
        </ul>
        <div class="chart-pie">
         <p class="question-chart-pie">Câu hỏi <br> <span class="reply-chart-pie">x câu trả lời</span> </p>
        </div>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        <script src="./js/chart/chartpice.js"></script>
        <div class="boder-chart-horizontal"></div>
        <div class="boder-chart-pie"></div>
        <div class="chart-horizontal">
         <p class="question-chart-horizontal">Câu hỏi <br> <span class="reply-chart-horizontal">x câu trả lời</span> </p>
        </div>
        <div class="horizontal-chart">
         <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
         <canvas id="horizontal" style="width:100%;max-width:600px;height: 150px;"></canvas>
          <script  src="./js/chart/horizontal.js" type="text/javascript"></script>
        </div>
       
        <div class="chart-column">
         <p>Điểm số </p>
         <p class="chart-point">Biểu đồ điểm số</p>
         <p class="chart-quantity">Số lượng</p>
         <span class="chart-poin-end">Điểm số</span>

         <canvas id="columnChart" style="width:100%;max-width:800px;height: 300px;"></canvas>
          <script  src="./js/chart/column.js" type="text/javascript"></script>
        </div>
        </div>
  </div>
  
  <div onclick="close()" id="Setting" class="tabcontent">
    <form class="form_option--setting" action="">
        <h1 class="form_option--title">Cài đặt</h1>
        <p class="oder-title">Đặt làm bài kiểm tra</p>
        <span class="points-title">Chỉ định các giá trị điểm, đặt câu trả lời và tự động cung cấp ý kiến phản hồi</span> 
        <div id="wrapper" style="top:160px">
            <input type="checkbox" name="" class="switch-toggle">
        </div>
   </form>
   
  </div>
  <div id="Send" class="tabcontent">
    <form class="form-submit" action="">
        <h1 class="form-submit-title">Gửi biểu mẫu</h1>
        <span class="form-submit-code">Mã phiếu khảo sát:</span>
        <input class="form-submit-link" type="text" placeholder="links:">
        <i class="fa-regular fa-copy icon-copy"></i>
        <button class="btn-end" >Kết thúc</button>
    </form>
  </div>
  <!-- Short answer-->
 <div id="ShortAnswer" class="tabcontent">
    <div class="form_option--question" action="">
        <input class="form_option--title" placeholder="Tiêu Đề">
        <input class="form_option--description" type="text" placeholder="Mô tả...">
        <div class="form_option--email">
            <p class="form_option--sympol">*</p>
            <p class="form_option--text">Email</p>
            <input class="form_option--input" type="text" name="" id="" placeholder="Email hợp lệ">
        </div>

        <form class="form_option--selection" action="">
            <input class="form_option--heading" placeholder="Câu hỏi">
            
            <input class="form-option-shortanswer" type="" placeholder="Văn bản trả lời ngắn">
            <div class="form_option--btn">
                <p class="form_option--require">Bắt buộc</p>
                <div id="wrapper">
                    <input type="checkbox" name="" class="switch-toggle">
                </div>
                <img class="btn-icon-trash" src="./img/trash.png" alt="">
            </div>
            <div class="dropdown">
                
                <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="dropdown-btn">Trả lời ngắn</p>
                    <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                </button>
               
                <div class="dropdown-menu ">
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'ShortAnswer')"> Trả lời ngắn</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Paragraph')"> Đoạn</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Multiple')"> Trắc nghiệm</button>
                    <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'CheckBox')"> Hộp kiếm</button>
                    </div>
            </div>
            </form>
          
         </div>
     </div>
     <!-- multiple-choice -->
     <div id="Multiple" class="tabcontent">
        <div class="form_option--question" action="">
            <input class="form_option--title" placeholder="Tiêu Đề">
            <input class="form_option--description" type="text" placeholder="Mô tả...">
            <div class="form_option--email">
                <p class="form_option--sympol">*</p>
                <p class="form_option--text">Email</p>
                <input class="form_option--input" type="text" name="" id="" placeholder="Email hợp lệ">
            </div>
    
            <form class="form_option--selection" action="">
                <input class="form_option--heading" placeholder="Câu hỏi">
                
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
                    <div id="wrapper">
                        <input type="checkbox" name="" class="switch-toggle">
                    </div>
                    <img class="btn-icon-trash" src="./img/trash.png" alt="">
                </div>
                <div class="dropdown">
                    
                    <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="dropdown-btn">Trắc nghiệm</p>
                        <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                    </button>
                   
                    <div class="dropdown-menu ">
                        <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'ShortAnswer')"> Trả lời ngắn</button>
                        <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Paragraph')"> Đoạn</button>
                        <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Multiple')"> Trắc nghiệm</button>
                        <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'CheckBox')"> Hộp kiếm</button>
                        </div>
                </div>
                </form>
              
             </div>
         </div>
         <!-- Check box -->
         <div id="CheckBox" class="tabcontent">
            <div class="form_option--question" action="">
                <input class="form_option--title" placeholder="Tiêu Đề">
                <input class="form_option--description" type="text" placeholder="Mô tả...">
                <div class="form_option--email">
                    <p class="form_option--sympol">*</p>
                    <p class="form_option--text">Email</p>
                    <input class="form_option--input" type="text" name="" id="" placeholder="Email hợp lệ">
                </div>
        
                <form class="form_option--selection" action="">
                    <input class="form_option--heading" placeholder="Câu hỏi">
                   
                    <div class="form_selection">
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
                        <div id="wrapper">
                            <input type="checkbox" name="" class="switch-toggle">
                        </div>
                        <img class="btn-icon-trash" src="./img/trash.png" alt="">
                    </div>
                    <div class="dropdown">
                        
                        <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="dropdown-btn">Hộp kiểm</p>
                            <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                        </button>
                       
                        <div class="dropdown-menu ">
                            <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'ShortAnswer')"> Trả lời ngắn</button>
                            <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Paragraph')"> Đoạn</button>
                            <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Multiple')"> Trắc nghiệm</button>
                            <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'CheckBox')"> Hộp kiếm</button>
                            </div>
                    </div>
                    </form>
                  
                 </div>
             </div>
             <!-- paragraph -->
             <div id="Paragraph" class="tabcontent">
                <div class="form_option--question" action="">
                    <input class="form_option--title" placeholder="Tiêu Đề">
                    <input class="form_option--description" type="text" placeholder="Mô tả...">
                    <div class="form_option--email">
                        <p class="form_option--sympol">*</p>
                        <p class="form_option--text">Email</p>
                        <input class="form_option--input" type="text" name="" id="" placeholder="Email hợp lệ">
                    </div>
            
                    <form class="form_option--selection" action="">
                        <input class="form_option--heading" placeholder="Câu hỏi">
                      
                        <input class="form-option-shortanswer" type="" placeholder="Văn bản trả lời dài">
                        <div class="form_option--btn">
                            <p class="form_option--require">Bắt buộc</p>
                            <div id="wrapper">
                                <input type="checkbox" name="" class="switch-toggle">
                            </div>
                            <img class="btn-icon-trash" src="./img/trash.png" alt="">
                        </div>
                        <div class="dropdown">
                            
                            <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="dropdown-btn">Đoạn</p>
                                <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                            </button>
                           
                            <div class="dropdown-menu ">
                                <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'ShortAnswer')"> Trả lời ngắn</button>
                                <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Paragraph')"> Đoạn</button>
                                <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Multiple')"> Trắc nghiệm</button>
                                <button type="button" class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'CheckBox')"> Hộp kiếm</button>
                                </div>
                        </div>
                        </form>
                      
                     </div>
                 </div>
 </div>
  <script src="{{ asset('js/chart/tabs.js') }}"></script>
     </div>
</header>
    </div>
</body>   
</html>