 <?php
 $sql_product="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
 $query_product=mysqli_query($mysqli,$sql_product);
?>
<main>
		<div class="slideShow">
			<div class="banner-picture">			
					<div class="picture">
						<a href=""> <img id="slide" src="https://hanoicomputercdn.com/media/banner/13_May9c2aeb433f29955747262743a48dfe57.jpg"></a> 
					</div>
					<div class="picture">	
						<a href=""> <img id="slide" src="https://hanoicomputercdn.com/media/banner/17_May209be90077b2f8e4b01be34e5f1742c4.jpg" ></a> 
					</div>
					<div class="picture">
						<a href=""> <img id="slide" src="https://hanoicomputercdn.com/media/banner/20_Mayb15c99cdea3bd9dc727922b4c7dc75da.jpg" ></a> 
					</div>
					<div class="picture">
						<a href=""> <img id="slide" src="https://hanoicomputercdn.com/media/banner/03_May6536796430d644186d56b0e05039595a.png" ></a> 
					</div>
					<div class="picture">
						<a href=""> <img id="slide" src="https://hanoicomputercdn.com/media/banner/13_Maye0d87bef9194806d10a8931f6502b906.jpg" ></a> 
					</div>
					<div class="button">
						<a id="prev" onclick="prevSlide()" title="preview"><i class="fa fa-angle-left" style="font-size: 20px;"></i> </a>
						<a id="next" onclick="nextSlide()" title="next"><i class="fa fa-angle-right" style="font-size: 20px;"></i></a> 
					</div>
					
			 </div>

			<div class="banner-picture2">	
					<a href=""> <img id="banner" src="https://hanoicomputercdn.com/media/banner/19_May8558fd748768ebe2c92f3b3d9b74df07.png"></a>
					<a href=""> <img id="banner" src="https://hanoicomputercdn.com/media/banner/27_May77ee6961a012de260a7337b7403b81f4.png"></a>
					<a href=""> <img id="banner" src="https://hanoicomputercdn.com/media/banner/19_Mayac21e6bee674c1af7c1c38d3151b6796.png"></a>
					<a href=""> <img id="banner" src="https://hanoicomputercdn.com/media/banner/19_May955a4f7c7379d1be6bba1ad53cc90ee6.png"></a>
			</div>
		</div>
			
			<!-- <div class="laptop">
				<div class="list-title">
					<div class="list-title1">
						<div class="title">
							<p>LAPTOP, MÁY TÍNH XÁCH TAY</p>
						</div>
						<div class="list-laptop">
							<a href="#"> Laptop Asus </a>
							<div class="linedoc"></div>
							<a href="#">Laptop Dell</a>
							<div class="linedoc"></div>
							<a href="#">Laptop HP</a>
							<div class="linedoc"></div>
							<a href="#">Laptop Lenovo</a>
							<div class="linedoc" ></div>
							<a href="#">Laptop Acer</a>
							<div class="linedoc" ></div>
							<a href="#">Laptop MSI</a>
						</div>
					</div>
					<div class="see-more">
						<a href="laptop.php">Xem tất cả</a>
					</div>
				</div>
				<div class="list-sp">
					<div class="list-sp1">
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/52019_laptop_lg_gram_14zd90n_v_ax55a5_i5_1035g7_8gb_ram_512gb_ssd_14_0_inch_fhd_fp_xam_bac_model_2020_1.png" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop LG Gram 14ZD90N-V.AX55A5 (i5 1035G7/8GB RAM/512GBSSD/14.0 inch FHD/FP/Xám Bạc) (model 2020)</a></p>
							<p id="giacu" >30.489.000 đ </p>
							<span id="giamoi">26.489.000đ </span>
							<span><a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/52020_laptop_lg_gram_15zd90n_v_ax56a5_i5_1035g7_8gb_ram_512gb_ssd_15_6_inch_fhd_fp_xam_bac_model_2020_1.png" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop LG Gram 15ZD90N-V.AX56A5 (i5 1035G7/8GB RAM/512GBSSD/15.6 inch FHD/FP/Trắng) (model 2020)</a></p>
							<p id="giacu" >31.989.000 đ </p>
							<span id="giamoi">27.989.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/47380_laptop_dell_latitude_3400_l3400i5ssd_i5_8265u_8gb_ddr4_256gb_ssd_14_0_hd_dos_1.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Dell Latitude 3400 L3400I5SSD (i5 8265U/8GB RAM/256GB SSD/14 inch HD/WL+BT/Dos/Đen)</a></p>
							<p id="giacu" >18.699.000 đ </p>
							<span id="giamoi">16.389.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/49796_sf3.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Acer Swift SF314-57G-53T1(NX.HJESV.001) (i5 1035G1/8GB RAM/512GB SSD/MX250 2GB/14 inch FHD</a></p>
							<p id="giacu" >20.989.000 đ </p>
							<span id="giamoi">19.490.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/50989_laptop_dell_inspiron_7490_6rkvn1_i7_10510u_16gb_ram_512gb_ssd_14_fhd_mx250_2gb_win_10_bac99.jpeg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Dell Inspiron 7490 (6RKVN1) (i7 10510U/16GB RAM/512GB SSD/14 inch FHD/MX250 2GB/Win 10/Bạc)</a></p>
							<p id="giacu" >34.689.000 đ </p>
							<span id="giamoi">32.989.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
					</div>
				</div>
			</div> -->

			<!-- <div class="laptop">
				<div class="list-title">
					<div class="list-title1">
						<div class="title">
							<p>PC GAMING, ĐỒ HỌA</p>
						</div>
						<div class="list-laptop">
							<a href="#"> PC chơi game </a>
							<div class="linedoc"></div>
							<a href="#">PC Live Stream, Streamer, Youtuber</a>
							<div class="linedoc"></div>
							<a href="#">PC Đồ họa, Render</a>
							<div class="linedoc"></div>
							<a href="#">PC chơi game Lenovo</a>
							<div class="linedoc"></div>
							<a href="#">PC chơi game Asus</a>
							<div class="linedoc" ></div>
							<a href="#">PC chơi game MSI</a>
						</div>
					</div>
					<div class="see-more">
						<a href="./PC Gaming, Streaming.html">Xem tất cả</a>
					</div>
				</div>
				<div class="list-sp">
					<div class="list-sp1">
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/59186_pc_gaming_e1.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop LG Gram 14ZD90N-V.AX55A5 (i5 1035G7/8GB RAM/512GBSSD/14.0 inch FHD/FP/Xám Bạc) (model 2020)</a></p>
							<p id="giacu" >30.489.000 đ </p>
							<span id="giamoi">26.489.000đ </span>
							<span><a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/52020_laptop_lg_gram_15zd90n_v_ax56a5_i5_1035g7_8gb_ram_512gb_ssd_15_6_inch_fhd_fp_xam_bac_model_2020_1.png" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop LG Gram 15ZD90N-V.AX56A5 (i5 1035G7/8GB RAM/512GBSSD/15.6 inch FHD/FP/Trắng) (model 2020)</a></p>
							<p id="giacu" >31.989.000 đ </p>
							<span id="giamoi">27.989.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/47380_laptop_dell_latitude_3400_l3400i5ssd_i5_8265u_8gb_ddr4_256gb_ssd_14_0_hd_dos_1.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Dell Latitude 3400 L3400I5SSD (i5 8265U/8GB RAM/256GB SSD/14 inch HD/WL+BT/Dos/Đen)</a></p>
							<p id="giacu" >18.699.000 đ </p>
							<span id="giamoi">16.389.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/49796_sf3.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Acer Swift SF314-57G-53T1(NX.HJESV.001) (i5 1035G1/8GB RAM/512GB SSD/MX250 2GB/14 inch FHD</a></p>
							<p id="giacu" >20.989.000 đ </p>
							<span id="giamoi">19.490.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/50989_laptop_dell_inspiron_7490_6rkvn1_i7_10510u_16gb_ram_512gb_ssd_14_fhd_mx250_2gb_win_10_bac99.jpeg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Dell Inspiron 7490 (6RKVN1) (i7 10510U/16GB RAM/512GB SSD/14 inch FHD/MX250 2GB/Win 10/Bạc)</a></p>
							<p id="giacu" >34.689.000 đ </p>
							<span id="giamoi">32.989.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
					</div>
				</div>
			</div> 

			<div class="laptop">
				<div class="list-title">
					<div class="list-title1">
						<div class="title">
							<p>PC VĂN PHÒNG, MINI PC</p>
						</div>
						<div class="list-laptop">
							<a href="#"> Máy tính để bàn Dell </a>
							<div class="linedoc"></div>
							<a href="#">Máy tính để bàn HP</a>
							<div class="linedoc"></div>
							<a href="#">Máy tính để bàn Asus </a>
							<div class="linedoc"></div>
							<a href="#">Máy tính để bàn Lenovo</a>
							<div class="linedoc"></div>
							<a href="#">Máy tính để bàn Acer</a>
						</div>
					</div>
					<div class="see-more">
						<a href="./PC_vanphong,mini_PC.html">Xem tất cả</a>
					</div>
				</div>
				<div class="list-sp">
					<div class="list-sp1">
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/52019_laptop_lg_gram_14zd90n_v_ax55a5_i5_1035g7_8gb_ram_512gb_ssd_14_0_inch_fhd_fp_xam_bac_model_2020_1.png" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop LG Gram 14ZD90N-V.AX55A5 (i5 1035G7/8GB RAM/512GBSSD/14.0 inch FHD/FP/Xám Bạc) (model 2020)</a></p>
							<p id="giacu" >30.489.000 đ </p>
							<span id="giamoi">26.489.000đ </span>
							<span><a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/52020_laptop_lg_gram_15zd90n_v_ax56a5_i5_1035g7_8gb_ram_512gb_ssd_15_6_inch_fhd_fp_xam_bac_model_2020_1.png" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop LG Gram 15ZD90N-V.AX56A5 (i5 1035G7/8GB RAM/512GBSSD/15.6 inch FHD/FP/Trắng) (model 2020)</a></p>
							<p id="giacu" >31.989.000 đ </p>
							<span id="giamoi">27.989.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/47380_laptop_dell_latitude_3400_l3400i5ssd_i5_8265u_8gb_ddr4_256gb_ssd_14_0_hd_dos_1.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Dell Latitude 3400 L3400I5SSD (i5 8265U/8GB RAM/256GB SSD/14 inch HD/WL+BT/Dos/Đen)</a></p>
							<p id="giacu" >18.699.000 đ </p>
							<span id="giamoi">16.389.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/49796_sf3.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Acer Swift SF314-57G-53T1(NX.HJESV.001) (i5 1035G1/8GB RAM/512GB SSD/MX250 2GB/14 inch FHD</a></p>
							<p id="giacu" >20.989.000 đ </p>
							<span id="giamoi">19.490.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/50989_laptop_dell_inspiron_7490_6rkvn1_i7_10510u_16gb_ram_512gb_ssd_14_fhd_mx250_2gb_win_10_bac99.jpeg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Dell Inspiron 7490 (6RKVN1) (i7 10510U/16GB RAM/512GB SSD/14 inch FHD/MX250 2GB/Win 10/Bạc)</a></p>
							<p id="giacu" >34.689.000 đ </p>
							<span id="giamoi">32.989.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
					</div>
				</div>
			</div> 

			<div class="laptop">
				<div class="list-title">
					<div class="list-title1">
						<div class="title">
							<p>CAMERA QUAN SÁT</p>
						</div>
						<div class="list-laptop">
							<a href="#"> Camera quan sát </a>
							<div class="linedoc"></div>
							<a href="#">Đầu ghi hình KTS</a>
							<div class="linedoc"></div>
							<a href="#">Phụ kiện Camera</a>
							<div class="linedoc"></div>
							<a href="#">Ổ cứng Camera</a>
						</div>
					</div>
					<div class="see-more">
						<a href="camera.php">Xem tất cả</a>
					</div>
				</div>
				<div class="list-sp">
					<div class="list-sp1">
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/52019_laptop_lg_gram_14zd90n_v_ax55a5_i5_1035g7_8gb_ram_512gb_ssd_14_0_inch_fhd_fp_xam_bac_model_2020_1.png" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop LG Gram 14ZD90N-V.AX55A5 (i5 1035G7/8GB RAM/512GBSSD/14.0 inch FHD/FP/Xám Bạc) (model 2020)</a></p>
							<p id="giacu" >30.489.000 đ </p>
							<span id="giamoi">26.489.000đ </span>
							<span><a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/52020_laptop_lg_gram_15zd90n_v_ax56a5_i5_1035g7_8gb_ram_512gb_ssd_15_6_inch_fhd_fp_xam_bac_model_2020_1.png" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop LG Gram 15ZD90N-V.AX56A5 (i5 1035G7/8GB RAM/512GBSSD/15.6 inch FHD/FP/Trắng) (model 2020)</a></p>
							<p id="giacu" >31.989.000 đ </p>
							<span id="giamoi">27.989.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/47380_laptop_dell_latitude_3400_l3400i5ssd_i5_8265u_8gb_ddr4_256gb_ssd_14_0_hd_dos_1.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Dell Latitude 3400 L3400I5SSD (i5 8265U/8GB RAM/256GB SSD/14 inch HD/WL+BT/Dos/Đen)</a></p>
							<p id="giacu" >18.699.000 đ </p>
							<span id="giamoi">16.389.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/49796_sf3.jpg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Acer Swift SF314-57G-53T1(NX.HJESV.001) (i5 1035G1/8GB RAM/512GB SSD/MX250 2GB/14 inch FHD</a></p>
							<p id="giacu" >20.989.000 đ </p>
							<span id="giamoi">19.490.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
						<div class="description-laptop">
							<p id = "picture"> <a href="#"> <img src="https://hanoicomputercdn.com/media/product/50989_laptop_dell_inspiron_7490_6rkvn1_i7_10510u_16gb_ram_512gb_ssd_14_fhd_mx250_2gb_win_10_bac99.jpeg" style="width: 180px; height: 180px;"> </a> </p>
							<p><a href="#">Laptop Dell Inspiron 7490 (6RKVN1) (i7 10510U/16GB RAM/512GB SSD/14 inch FHD/MX250 2GB/Win 10/Bạc)</a></p>
							<p id="giacu" >34.689.000 đ </p>
							<span id="giamoi">32.989.000đ </span>
								<span>	<a href="#"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a></span>
						</div>
					</div>
				</div>
			</div> -->
			

<div class="top_product">TOP sản phẩm bán chạy  >></div>
<ul class="list_product">
<?php
		while ($row = mysqli_fetch_array($query_product)) {
 	# code...
?> 	
				<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
					<img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>">
					
					<p>Mã SP:<?php echo $row['masp']?> </p>
					
					<P class="title_product"><?php echo $row['tensanpham']?></P>
					<p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
					<p class="cate_product"><?php echo $row['tendanhmuc']?></p>
					</a>
				</li>
				<?php
			}
				?>
			</ul>

			
</main>
