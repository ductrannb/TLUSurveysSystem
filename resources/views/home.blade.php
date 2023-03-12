<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DashBoard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/formmain.css') }}" />

</head>

<body>
    <div class="container">
        <div class="overlay">
            <div class="modal" id="modal-change-password">
                <div class="modal-header">
                    <i class="modal-header-icon fa-solid fa-lock"></i>
                    <span>Đổi mật khẩu</span>
                    <i class="modal-header-quit fa-solid fa-xmark"></i>
                </div>
                <div class="modal-content">
                    <div class="modal-content-lock">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="modal-form">
                        <label for="1">Mật khẩu hiện thời</label>
                        <input type="text" name="password" id="1" />

                        <label for="2">Mật khẩu mới</label>
                        <input type="password" name="new_password" id="2" />

                        <label for="3">Nhập lại mật khẩu</label>
                        <input type="password" name="re_confirm" id="3" />

                        <div class="modal-form-btn">
                            <button class="modal-form-quit btn">Hủy</button>
                            <button class="modal-form-update btn">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="password-notify">
				<i class="password-notify-icon fa-regular fa-circle-check"></i>
				<p class="password-notify-title">Đổi mật khẩu thành công! Vui lòng sử dụng mật khẩu mới để đăng nhập</p>
				<button class="password-notify-btn">Xác nhận</button>
			</div>
        </div>
        <div class="app">
            <header class="header header-with-search">
                <img src="{{ asset('img/img-logo.jpg') }}" alt="" class="header-logo" />
                <div class="header-title">
                    <h1 class="header-main-title">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
                    <p class="header-sub-title">THUYLOI UNIVERSITY</p>
                </div>
            </header>
            <div class="content">
                <div class="content-nav">
                    <div class="content-nav-input">
                        @csrf
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Tìm kiếm" name='name' id='name' />
                        <div class="search-results" id="search-results">
                        </div>
                    </div>
                    <div class="content-nav-user">
                        <div id="user-title">
                            <span>{{ auth()->user()->fullname }}</span>
                            <i class="fa-regular fa-circle-user"></i>
                        </div>
                        <div class="user-info" id='user-info'>
                            <div class="user-info-content user-info-content-pass" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-lock"></i>
                                <span>Đổi mật khẩu</span>
                            </div>

                            <div class="user-info-content">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Đăng xuất</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-main">
                    <h2 class="content-main-heading">Biểu mẫu của bạn</h2>
                    <div class="content-main-wrap-element">
                        <div class="content-link-item">
                            <a href="/survey/create" class="content-main-element">
                                <img class=" content-main-img" src="{{ asset('img/new_survey.jpg') }}" alt="">
                            </a>
                            <p class="content-main-sub-img">Tạo mới</p>
                        </div>
                        @foreach ($surveys as $survey)
                            <div class="content-link-item">
                                <a href="{{route('view_survey', ['user_id'=>auth()->id(),'id'=>$survey->id])}}" class="content-main-element">
                                    <img class="content-main-img" src="{{ asset('img/survey_avt.png') }}" alt="">
                                </a>

                                <p class="content-main-sub-img">{{ $survey->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $surveys->links() }}
        </div>
    </div>

{{-- <script src="{{ asset('js/chart/home.js') }}"></script> --}}
</body>

</html>
<script>
    $(document).ready(function() {

        $('#name').keyup(function() {
            var query = $(this).val();
            if (query != '') {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('home2') }}",
                    method: "POST",
                    dataType: 'json',
                    data: {
                        query: query,
                        _token: _token
                    },
                    success: function(get_data) {
                        // $('#form_list').fadeIn();
                        // $('#form_list').html(
                        //     data
                        // );
                        data = get_data
                        output = '';
                        output += '<ul>';
                        for (value in data) {
                            output += '<li> <a href = "survey/view?user_id={{auth()->id()}}&id=' +
                                data[value].id +
                                '"> ' +
                                data[value].name +
                                '</a></li>'
                        }
                        output += '</ul>';
                        $('#search-results').html(output);
                    }
                });
            }
        });


        // $(document).on('click', 'li', function() {
        //     $('#name').val($(this).text());
        //     $('#form_list').fadeOut();
        // });

    });
</script>
