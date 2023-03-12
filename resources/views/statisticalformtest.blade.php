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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="./css/newform.css">
    <link rel="stylesheet" href="./css/statisticalformtest.css">
    <script src="./js/chart/tabs.js"></script>
</head>
<style>
    body {font-family: Arial;}
    .tabcontent{
        display: none;
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
                    <img class="logo-img" src="./img/img-logo.jpg" alt="Logo">
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
                                <button type="button" onclick="openTabs(event,'Question')"class="menu-item tablinks">Câu hỏi</button>
                                <button type="button" onclick="openTabs(event,'Reply')"   class="menu-item tablinks">Câu trả lời</button>
                                <button type="button" onclick="openTabs(event,'Setting')" class="menu-item tablinks">Cài đặt</button> 
                                <button type="button" onclick="openTabs(event,'Send')"    class="btn-submit tablinks">Gửi</button>
                            </ul>
                           
                        </div>
                        
                        <form class="form_option--reply container " action="">
                            <div class="heading--title">
                                <h1 class="form_option-title">20 Câu trả lời</h1>
                                <h2 class="title-list">Danh sách</h2>
                            </div>
                                <ul class="list-member">
                                    <li class="list-member-name col-11">Nguyễn Văn A <div class="list-icon col-1"><img class="list-member-icon " src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></div> </li><br>
                                    <li class="list-member-name col-11">Nguyễn Văn B <div class="list-icon col-1"><img class="list-member-icon"       src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></div></li><br>
                                    <li class="list-member-name col-11">Nguyên Văn C <div class="list-icon col-1"><img class="list-member-icon"       src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></div></li><br>
                                    <li class="list-member-name col-11">Nguyên Văn D <div class="list-icon col-1"><img class="list-member-icon"       src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></div></li>
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
                                <script src="./js/chart/chartpice.js"></script>
                                <div class="boder-chart-pie"></div>
                                <p class="question-chart-horizontal">Câu hỏi <br> <span class="reply-chart-horizontal">x câu trả lời</span> </p>
                                <div class="horizontal-chart">
                                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
                                    <canvas id="horizontal" style="width:100%;max-width:600px;height: 250px;"></canvas>
                                    <script  src="./js/chart/horizontal.js" type="text/javascript"></script>
                                    <div class="boder-chart-horizontal"></div>
                                    <div class="chart-column">
                                        <p style="padding: 20px;">Điểm số </p>
                                        <p class="chart-point">Biểu đồ điểm số</p>
                                        <p class="chart-quantity">Số lượng</p>
                                        <canvas id="columnChart"  style="width:100%;max-width:800px;height: 300px;"></canvas> 
                                            <span class="chart-poin-end ">Điểm số</span>    
                                         <script  src="./js/chart/column.js" type="text/javascript"></script>
                                        
                                       </div>
                                </div>
                                
                        </form>
                    </div>
                </div>
                
            </div>
    </div>

</body>
</html>
