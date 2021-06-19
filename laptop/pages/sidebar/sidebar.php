 
 <aside class ="aside-left">
				<div class="title-loc-sp">
					<p>LỌC SẢN PHẨM</p>
				</div>
				<div class = "danhmuc">
					<h4 id = "title">DANH MỤC</h4>
					<div class="line-ngang"></div>
					<div class = "list-choice">
							<ul>
								<?php
		$sql_danhmuc="SELECT * FROM tbl_danhmuc,tbl_nhomsp WHERE tbl_danhmuc.id_nhomsp = tbl_nhomsp.id_nhomsp GROUP BY tbl_danhmuc.id_danhmuc HAVING tbl_nhomsp.id_nhomsp=2";
		$query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
		while ($row=mysqli_fetch_array($query_danhmuc)) {
			?> 				
			<li>
				<a href="laptop.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
			</li>
			<?php
		}
		?>											
							</ul>
					</div>
				</div>

				<div class = "khoanggia">
					<h4 id = "title">KHOẢNG GIÁ</h4>
					<div class="line-ngang"></div>
					<div class = "list-choice2"> 
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Dưới 10 triệu</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 10 triệu - 15 triệu </a></li> 
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 15 triệu - 20 triệu </a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 20 triệu - 25 triệu </a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 25 triệu - 30 triệu</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 30 triệu - 35 triệu</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 35 triệu - 40 triệu</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 40 triệu - 45 triệu</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 45 triệu - 50 triệu</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 50 triệu - 55 triệu</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 55 triệu - 60 triệu</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Trên 60 triệu</a></li>
								<a id = "loc" href="#">Lọc</a> 
							</ul>
					</div>
				</div>

				<div class = "nhu_cau_use">
					<h4 id = "title">NHU CẦU SỬ DỤNG</h4>
					<div class="line-ngang"></div>
						<div class = "list-choice2"> 
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Laptop Gaming</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Đồ họa, Kiến trúc </a></li> 
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Phổ thông, Văn phòng</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Mỏng nhẹ, Thời trang </a></li>
							</ul>
						</div>
				</div>

				<div class = "ram">
					<h4 id = "title">RAM</h4>
					<div class="line-ngang"></div>
						<div class = "list-choice2"> 
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 4GB</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 8GB </a></li> 
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 16GB </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 32GB </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> >32GB</a></li>
							</ul>
						</div>
				</div>

				<div class = "cpu">
					<h4 id = "title">CPU</h4>
					<div class="line-ngang"></div>
						<div class = "list-choice2"> 
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Intel Celeron/Pentinum</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Intel Core i3 </a></li> 
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Intel Core i5 </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Intel Core i7 </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Intel Core M3 </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> AMD Ryzen 5</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Microsoft SQ1</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Microsoft SQ2</a></li>
							</ul>
						</div>
				</div>

				<div class = "rom">
					<h4 id = "title">Ổ CỨNG</h4>
					<div class="line-ngang"></div>
						<div class = "list-choice2"> 
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Chỉ có SSD</a></li>
                            	<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Chỉ có HDD </a></li> 
							</ul>
						</div>
				</div>
 
				<div class = "card_vga">
					<h4 id = "title">VGA - CARD MÀN HÌNH</h4>
					<div class="line-ngang"></div>
						<div class = "list-choice2"> 
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> VGA NVIDIA </a></li>
                            	<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> VGA Onboard </a></li>  
							</ul>
						</div>
				</div>

				<div class = "kich_thuoc_man">
					<h4 id = "title">KÍCH THƯỚC MÀN HÌNH </h4>
					<div class="line-ngang"></div>
						<div class = "list-choice2"> 
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 12.3 inch</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 12.5 inch </a></li> 
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 12.4 inch</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 13.3 inch </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 13.5 inch </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 13 inch </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 15 inch </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Kích thước khác </a></li>
							</ul>
						</div>
				</div>
				<div class="clear"></div>
			</aside>
