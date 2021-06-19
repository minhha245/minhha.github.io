<button id="scrolltop" onclick="scrollTop()" title="go to top"> <i class="fa fa-arrow-up"></i>Top</button>
	<!--tao thanh slide down a bar on scroll page-->
	<div id="slideDown">
		<div id = "thanh-menu">
			<ul>
				<li><a id="title-scrolldown" href="#"> Danh mục sản phẩm &nbsp<i class="fa fa-angle-down"></i></a>
					<ul class = "list-danhmuc">
						<li><a href="laptop.php"><i class="fa fa-laptop"></i>&nbsp Laptop, Máy tính xách tay</a></li>
						<li><a href="#"><i class="fa fa-usb" style="font-size: smaller"></i>&nbsp Phụ kiện laptop, PC, khác</a></li>
						<li><a href="#"><i class="fa fa-desktop"></i>&nbsp PC Gaming, Streaming</a></li>
						<li><a href="#"><i class="fa fa-server"></i>&nbsp PC đồ họa, máy chủ</a></li>
						<li><a href="./PC_vanphong,mini_PC.html"><i class="fa fa-desktop"></i>&nbsp PC văn phòng, mini PC</a></li>
						<li><a href="#"><i class="fa fa-microchip"></i>&nbsp Linh kiện máy tính</a></li>
						<li><a href="#"><i class="fa fa-desktop"></i>&nbsp Màn hình máy tính</a></li>
						<li><a href="#"><i class="fa fa-microphone"></i>&nbsp Loa, tai nghe, mic, webcam</a></li>
						<li><a href="camera.php"><i class="fa fa-video-camera"></i>&nbsp Camera, TB an ninh</a></li>
						<li><a href="thietbi.php"><i class="fa fa-save"></i>&nbsp Thiết bị lưu trữ, USB, thẻ</a></li>
						<li><a href="thietbi.php"><i class="fa fa-wifi"></i>&nbsp Thiết bị mạng, phần mềm</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="search-bar">
<form action="index.php?quanly=timkiem" method="POST">
			<input type="text" name="tukhoa" placeholder="Nhập tên sản phẩm, từ khóa cần tìm">
			<button type="submit" name="timkiem"> <i class = "fa fa-search"></i></button>

			</form>
		</div>

	
		<div class="action-for-user">
		
			<div class="action-item">
				<div class="item4">
					<span class="icon"><i class="fa fa-user"></i></span>
					<span class="sign-in">
						<a href="index.php?quanly=dangky">Đăng ký</a>
						<a href="index.php?quanly=dangnhap">Đăng nhập</a>
					</span>
				</div>
				<div class="hoverlogin">
					<span class="log-in">
						<a href="index.php?quanly=dangnhap">Đăng nhập</a>
						<a href="index.php?quanly=dangky">Đăng ký</a>
					</span>
					<a href="#">
						<div class="logingoogle">
							<div class="iconlogin"><i class="fa fa-google"></i></div>
							<div class="logintxt">Đăng nhập bằng Google</div>
						</div>
					</a>
					<a href="#">
						<div class="loginfb">
							<div class="iconlogin"><i class="fa fa-facebook"></i></div>
							<div class="logintxt">Đăng nhập bằng Facebook</div>
						</div>
					</a>
					<a href="#">
						<div class="loginzalo">
							<div class="iconlogin"><i class="fa fa-comment"></i></div>
							<div class="logintxt">Đăng nhập bằng Zalo</div>
						</div>
					</a>
				</div>
			</div>
		
			<div class="line"></div>
			<div class="action-item">
				<div class="item5">
					<div class="gio-hang">
						<span class="icon"><i class="fa fa-shopping-bag"></i></span>
						<a href="index.php?quanly=giohang">Giỏ hàng</a>
					</div>
					<div class = "itemgiohang">
						<!-- <p class="total"><b>Tổng cộng</b> : 
							<span class="red">
								<u>vnđ</u>
							</span>
						</p> -->
						<span class="checkout">
							<a href="index.php?quanly=giohang">Thanh toán ngay</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>