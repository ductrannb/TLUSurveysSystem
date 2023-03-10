<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/responseform.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body>
        <div class="app">
            <header class="header">
                <img src="./assets/img/logo.jpg" alt="" class="header-logo" />
                <div class="header-title">
                    <h1 class="header-main-title">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
                    <p class="header-sub-title">THUYLOI UNIVERSITY</p>
                </div>
            </header>
            <div class="content">
                <div class="content-wrap">
                    <h2 class="content-heading">
                        THỐNG KÊ KẾT QUẢ SỬ DỤNG CSDL Sách & Tạp chí điện tử
                        Ngoại văn và bộ dữ liệu Fiingroup
                    </h2>
                    <p class="content-sub-title">
                        Hệ thống đã ghi lại câu trả lời của bạn
                    </p>
                    <p class="content-sub-title">
                        Đóng góp ý kiến cho chúng tôi
                    </p>
                    <div class="content-field">
                        <input
                            type="text"
                            placeholder="ý kiến của bạn......"
                            class="content-input"
                        />
                    </div>
                    <div class="handle">
                        <p class="handle-link">Xóa hết câu trả lời</p>
                        <input type="submit" value="End" class="btn" />
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
