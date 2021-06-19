 
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
		$sql_danhmuc="SELECT * FROM tbl_danhmuc,tbl_nhomsp WHERE tbl_danhmuc.id_nhomsp = tbl_nhomsp.id_nhomsp GROUP BY tbl_danhmuc.id_danhmuc HAVING tbl_nhomsp.id_nhomsp=4";
		$query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
		while ($row=mysqli_fetch_array($query_danhmuc)) {
			?> 				
			<li>
				<a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
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
									<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Dưới 500 ngàn</a></li>
									<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 500 ngàn - 1 triệu </a></li> 
									<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 1 triệu - 3 triệu </a></li>
									<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 3 triệu - 5 triệu </a></li>
									<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 5 triệu - 7 triệu</a></li>
									<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 7 triệu - 9 triệu</a></li>
                                    <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 9 triệu - 11 triệu</a></li>
                                    <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> 11 triệu - 13 triệu</a></li>
									<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Trên 13 triệu</a></li>
									<a id = "loc" href="#">Lọc</a> 
							</ul>
					</div>
				</div>

				<!-- <div class = "nhu_cau_use">
					<h4 id = "title">NHU CẦU SỬ DỤNG</h4>
					<div class="line-ngang"></div>
						<div class = "list-choice2"> 
							
						</div>
				</div> -->
				<div class = "do-phan-giai">
					<h4 id = "title">ĐỘ PHÂN GIẢI</h4>
					<div class="line-ngang"></div>
						<div class = "list-choice2"> 
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Camera Analog</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Camera 1MP</a></li> 
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Camera 2MP</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Camera 3MP</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Camera 4MP</a></li>
                                <li> <i class="fa fa-square-o"></i>&nbsp<a href = "#"> Camera 5MP</a></li>
							</ul>
						</div>
				</div>
				<div class="clear"></div>
			</aside>
