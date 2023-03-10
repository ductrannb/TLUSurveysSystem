<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/contactform.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <header class="header">
            <img src="{{ asset('/img/img-logo.jpg') }}" alt="" class="header-logo" />
            <div class="header-title">
                <h1 class="header-main-title">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
                <p class="header-sub-title">THUYLOI UNIVERSITY</p>
            </div>
        </header>
        <div class="content">
            <h1 class="content-heading">
                THỐNG KÊ KẾT QUẢ SỬ DỤNG CSDL Sách & Tạp chí điện tử Ngoại
                văn và bộ dữ liệu Fiingroup
            </h1>
            <span>Có 8 câu hỏi trong cuộc khảo sát này.</span>

            <h2 class="form-name">I. THÔNG TIN CHUNG</h2>
            <form action="" class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="form-input-1" class="form-insert-label">Họ và tên:</label>
                    <input type="text" class="form-input" id="form-input-1" />
                </div>

                <div class="form-warn">
                    <i class="form-warn__icon fa-solid fa-circle-exclamation"></i>
                    <p class="form-warn__title">
                        Đây là một câu hỏi bắt buộc
                    </p>
                </div>
            </form>
            <form action="" class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="form-input-2" class="form-insert-label">Mã sinh viên:</label>
                    <input type="text" class="form-input" id="form-input-2" />
                </div>

                <!-- <div class="form-warn">
						<i class="form-warn__icon fa-solid fa-circle-exclamation"></i>
						<p class="form-warn__title">Đây là một câu hỏi bắt buộc</p>
					</div> -->
            </form>
            <form action="" class="form-insert">
                <div class="form-insert-wrap">
                    <span>*</span>
                    <label for="form-input-3" class="form-insert-label">Email:</label>
                    <input type="email" class="form-input" id="form-input-3" />
                </div>

                <!-- <div class="form-warn">
						<i class="form-warn__icon fa-solid fa-circle-exclamation"></i>
						<p class="form-warn__title">Đây là một câu hỏi bắt buộc</p>
					</div> -->
            </form>

            <h2 class="form-name">II. ĐÁNH GIÁ CỦA SINH VIÊN</h2>
            <form action="" class="form-data">
                <div class="form-data-wrap">
                    <h2 class="form-data-heading">
                        A. Thống kê kết quả sử dụng CSDL sách và tạp chí
                        điện tử Ngoại văn
                    </h2>
                    <p class="form-data-title">
                        2. Mức độ sử dụng các cơ sở dữ liệu tạp chí và sách
                        điện tử
                    </p>
                    <div class="form-data-select">
                        <div></div>
                        <span>Không thường xuyên</span>
                        <span>Thường xuyên</span>
                        <span>Rất thường xuyên</span>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL tạp chí điện tử SAGE
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL tạp chí điện tử Emerald
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL sách điện tử IG Publishing
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL sách điện tử Elsevier
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL sách điện tử Springer
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                </div>
            </form>

            <form action="" class="form-data">
                <div class="form-data-wrap">
                    <p class="form-data-title">
                        3. Các CSDL sách và tạp chí điện tử giúp bạn trong
                        công việc gì?
                    </p>
                    <div class="form-data-select">
                        <div></div>
                        <span>Không thường xuyên</span>
                        <span>Thường xuyên</span>
                        <span>Rất thường xuyên</span>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL tạp chí điện tử SAGE
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL tạp chí điện tử Emerald
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL sách điện tử IG Publishing
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL sách điện tử Elsevier
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                    <div class="form-index">
                        <p class="form-index-title">
                            CSDL sách điện tử Springer
                        </p>
                        <div class="form-index-radio">
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                            <input type="radio" name="value" />
                        </div>
                    </div>
                </div>
            </form>

            <form action="" class="form-data">
                <div class="form-data-wrap">
                    <p class="form-data-title">
                        4. Mức độ hữu ích của các CSDL sách và tạp chí điện
                        tử giúp bạn trong học tập
                    </p>
                    <div class="form-data-choose">
                        <input type="radio" name="data" />Rất hữu ích
                    </div>
                    <div class="form-data-choose">
                        <input type="radio" name="data" />Hữu ích
                    </div>
                    <div class="form-data-choose">
                        <input type="radio" name="data" />Không hữu ích
                    </div>
                </div>
            </form>

            <form action="" class="form-data">
                <div class="form-data-wrap">
                    <p class="form-data-title">
                        5. Mức độ hữu ích của các CSDL sách và tạp chí điện
                        tử giúp bạn trong nghiên cứu
                    </p>
                    <div class="form-data-choose">
                        <input type="radio" name="data" />Rất hữu ích
                    </div>
                    <div class="form-data-choose">
                        <input type="radio" name="data" />Hữu ích
                    </div>
                    <div class="form-data-choose">
                        <input type="radio" name="data" />Không hữu ích
                    </div>
                </div>
            </form>

            <form action="" class="form-data">
                <div class="form-data-wrap">
                    <p class="form-data-title">
                        6. Số bài báo quốc tế có sử dụng thông tin tham khảo
                        từ các CSDL sách & tạp chí điện tử
                    </p>
                    <p class="form-data-sub">
                        (Bạn vui lòng cung cấp số bài báo quốc tế đã sử dụng
                        thông tin tham khảo từ các CSDL sách & tạp chí điện
                        tử nói trên kể từ khi bắt đầu sử dụng các CSDL này
                        đến nay)
                    </p>
                    <span>Cụ thể:</span>
                    <ul class="form-data-list">
                        <li class="form-data-item">Số bài ISI/SCOPUS Q1</li>
                        <li class="form-data-item">Số bài ISI/SCOPUS Q2</li>
                        <li class="form-data-item">Số bài ISI/SCOPUS Q3</li>
                        <li class="form-data-item">Số bài ISI/SCOPUS Q4</li>
                    </ul>
                    <input type="text" placeholder="Câu trả lời của bạn" class="form-data-answer" />
                </div>
            </form>

            <form action="" class="form-data">
                <div class="form-data-wrap">
                    <p class="form-data-title">
                        7. Bạn có đồng ý tiếp tục sử dụng cơ sở dữ liệu
                        FiinPro trong các nghiên cứu của mình hay không?
                    </p>
                    <div class="form-data-choose">
                        <input type="radio" name="data" />Có
                    </div>
                    <div class="form-data-choose">
                        <input type="radio" name="data" />Không
                    </div>
                </div>
            </form>

            <form action="" class="form-data form-data-with-shadow">
                <div class="form-data-wrap">
                    <p class="form-data-title">
                        8. Ưu/nhược điểm của FiinPro mà bạn nhận thấy trong
                        quá trình sử dụng?
                    </p>
                    <input type="text" placeholder="Câu trả lời của bạn" class="form-data-answer" />
                </div>
            </form>

            <div class="handle">
                <input type="submit" value="Gửi" class="submit-form-btn" />
                <p class="delete-form">Xóa hết câu trả lời</p>
            </div>
        </div>
    </div>
</body>

</html>