<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="{{ asset('css/formmain.css')}}" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
	</head>
	<body>
		<div class="overlay">
			<div class="modal">
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
						<input type="text" id="1" />

						<label for="2">Mật khẩu mới</label>
						<input type="text" id="2" />

						<label for="3">Nhập lại mật khẩu</label>
						<input type="text" id="3" />

						<div class="modal-form-btn">
							<button class="modal-form-quit btn">Hủy</button>
							<button class="modal-form-update btn">Cập nhật</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="app">
			<header class="header header-with-search">
				<img src="{{ asset('img/img-logo.jpg')}}" alt="" class="header-logo" />
				<div class="header-title">
					<h1 class="header-main-title">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
					<p class="header-sub-title">THUYLOI UNIVERSITY</p>
				</div>
			</header>
			<div class="content">
				<div class="content-nav">
					<div class="content-nav-input">
						<i class="fa-solid fa-magnifying-glass"></i>
						<input type="text" placeholder="Tìm kiếm" />
					</div>
					<div class="content-nav-user">
						<span>Nguyễn Văn Đức</span>
						<i class="fa-regular fa-circle-user"></i>
						<div class="user-info">
							<div class="user-info-content">
								<i class="fa-solid fa-lock"></i>
								<span>Đổi mật khẩu</span>
							</div>

							<div class="user-info-content">
								<i class="fa-solid fa-lock"></i>
								<span>Đổi mật khẩu</span>
							</div>
						</div>
					</div>
				</div>
				<div class="content-main">
					<h2 class="content-main-heading">Bieu mau cua ban</h2>
					<div class="content-main-wrap-element">
						<a href="#" class="content-main-element">
							<div class="content-main-img"></div>
							<p class="content-main-sub-img">tao moi</p>
						</a>

						<a href="#" class="content-main-element">
							<div class="content-main-img"></div>
							<p class="content-main-sub-img">tao moi</p>
						</a>

						<a href="#" class="content-main-element">
							<div class="content-main-img"></div>
							<p class="content-main-sub-img">tao moi</p>
						</a>

						<a href="#" class="content-main-element">
							<div class="content-main-img"></div>
							<p class="content-main-sub-img">Khảo sát sinh viên chương trình tiêu chuẩn...</p>
						</a>

						<a href="#" class="content-main-element">
							<div class="content-main-img"></div>
							<p class="content-main-sub-img">Khảo sát sinh viên chương trình tiêu chuẩn...</p>
						</a>

						<a href="#" class="content-main-element">
							<div class="content-main-img"></div>
							<p class="content-main-sub-img">Khảo sát sinh viên chương trình tiêu chuẩn...</p>
						</a>

						<a href="#" class="content-main-element">
							<div class="content-main-img"></div>
							<p class="content-main-sub-img">Khảo sát sinh viên chương trình tiêu chuẩn...</p>
						</a>

						<a href="#" class="content-main-element">
							<div class="content-main-img"></div>
							<p class="content-main-sub-img">Khảo sát sinh viên chương trình tiêu chuẩn...</p>
						</a>
					</div>
				</div>
			</div>
			<div class="redirect">
				<a href="" class="link link-active">1</a>
				<a href="" class="link">2</a>
				<a href="" class="link">3</a>
				<a href="" class="link">4</a>
				<a href="" class="link">
					<i class="fa-solid fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</body>
</html>