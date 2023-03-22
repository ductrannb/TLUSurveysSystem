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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/formmain.css') }}" />

</head>

<body>
    <div class="container">
        <div class="overlay" id='modal-change-password'>
            <div class="modal">
                <div class="modal-header">
                    <i class="modal-header-icon fa-solid fa-lock"></i>
                    <span>Đổi mật khẩu</span>
                    <i class="modal-header-quit fa-solid fa-xmark" id="btn-close-modal"></i>
                </div>
                <div class="modal-content">
                    <div class="modal-content-lock">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="modal-form">
                        <form method='POST' action="{{ route('password.update2') }}">
                            @csrf
                            <label for="1">Mật khẩu hiện thời</label>
                            <input type="text" name="old_password" id="1" />

                            <label for="2">Mật khẩu mới</label>
                            <input type="password" name="password" id="2" />

                            <label for="3">Nhập lại mật khẩu</label>
                            <input type="password" name="password_confirmation" id="3" />

                            <div class="modal-form-btn">
                                <button type='button' class="modal-form-quit btn" id="btn-close-modal-2">Hủy</button>
                                <button class="modal-form-update btn" type="submit">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="app">

            @if(session('success'))
                <div class="password-notify">
                    <i class="password-notify-icon fa-regular fa-circle-check"></i>
                    <p class="password-notify-title">Đổi mật khẩu thành công! Vui lòng sử dụng mật khẩu mới để đăng nhập</p>
                    <a href="{{route('logout')}}" class="password-notify-btn">Xác nhận</a>
                </div>
            @endif
            <header class="header header-with-search">
                <img src="{{ asset('img/img-logo.jpg') }}" alt="" class="header-logo" />
                <div class="header-title">
                    <h1 class="header-main-title">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
                    <p class="header-sub-title">THUYLOI UNIVERSITY</p>
                </div>
            </header>
            <div class="content">
                <div class="content-nav">
                    <div class="content-nav-input" id='search-input'>
                        @csrf
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input class="search-input" type="text" placeholder="Tìm kiếm" name='name' id='name' />
                        <div class="search-results" id="search-results">
                        </div>
                        <i class="search-btn-x fa-solid fa-xmark" id="quit"></i>
                    </div>
                    <div class="content-nav-user">
                        <div id="user-title">
                            <span>{{ auth()->user()->fullname }}</span>
                            <i class="fa-regular fa-circle-user"></i>
                        </div>
                        <div class="user-info" id='user-info'>
                            <div class="user-info-content user-info-content-pass" id="btn-open-modal">
                                <i class="fa-solid fa-lock"></i>
                                <span>Đổi mật khẩu</span>
                            </div>

                            <div class="user-info-content">
                                <a href="/logout">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    <span>Đăng xuất</span>
                                </a>
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
                            <div class="content-link-item content-link-item--parrent-icon">
                                <a href="{{route('view_survey', ['user_id'=>auth()->id(),'id'=>$survey->id])}}" class="content-main-element">
                                    <img class="content-main-img" src="{{ asset('img/survey_avt.png') }}" alt="">
                                </a>

                                <p class="content-main-sub-img">{{ $survey->name }}</p>
                                <div class="content-link-item-icon">
                                    <i class=" fa-solid fa-ellipsis"></i>
                                    <a href="{{ route('survey.delete', ['survey_id' => $survey->id]) }}" class="content-link-item-btn">Xóa</a>
                                </div>
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
                        data = get_data
                        output = '';
                        output += '<ul>';
                        for (value in data) {
                            output += '<li> <i class="fa-solid fa-magnifying-glass"></i>'
                            output += ' <a href = "survey/view?user_id={{auth()->id()}}&id=' +
                                data[value].id +
                                '"> ' +
                                data[value].name +
                                '</a></li>'
                        }
                        output += '</ul>';
                        $('#search-results').css("display", "block");
                        $('#search-results').html(output);
                        $('#search-input').css("border-radius", "20px 20px 0 0");
                        $('#quit').css("display", "block");
                    }
                });
            }
        });

        const quitBtn = document.getElementById('quit')
        const searchInput = document.querySelector('.search-input')
        quitBtn.onclick = () => {
            $('#search-results').css("display", "none");
            $('#quit').css("display", "none");
            $('#search-input').css("border-radius", "20px");
            searchInput.value = '';
        }

        
        const modal = $('#modal-change-password')
        const btn_open = document.getElementById('btn-open-modal')
        const btn_close_1 = document.getElementById('btn-close-modal')
        const btn_close_2 = document.getElementById('btn-close-modal-2')
        
        
        btn_open.onclick = () => {
            modal.css('display', 'flex')
        }
        btn_close_1.onclick = () => {
            modal.css('display', 'none')
        }
        btn_close_2.onclick = () => {
            modal.css('display', 'none')
        }

        // btn delete "..."
        const deleteIcons = document.querySelectorAll('.content-link-item-icon')
        const deleteItemBtns = document.querySelectorAll('.content-link-item-btn')
        let isOpen = false;
        deleteIcons.forEach((deleteIcon, i) => {
            deleteIcon.onclick = function(e) {
                e.stopPropagation();
                if(isOpen) {
                    isOpen = false;
                    deleteItemBtns[i].classList.remove('active')
                } else {
                    isOpen = true;
                    deleteItemBtns[i].classList.add('active')
                }
            }

            const app = document.querySelector('.app')

            app.onclick = () => {
                for(deleteItemBtn of deleteItemBtns) {
                    deleteItemBtn.classList.remove('active')
                }
            }
        })

        
    });
</script>
