 <?php
 $sql_product="SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_nhomsp WHERE tbl_danhmuc.id_nhomsp = tbl_nhomsp.id_nhomsp AND tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc GROUP BY tbl_sanpham.id_sanpham HAVING tbl_nhomsp.id_nhomsp=4 ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";

 $query_product=mysqli_query($mysqli,$sql_product);
?>	
<!-- <div class="main"> -->
		<div class="main2">
				<div class="duong-dan">
					<a href="index.php">Trang chủ</a>
					&nbsp<i class="fa fa-angle-right"></i>&nbsp
					<a href="./Laptop,maytinhxachtay.html">Laptop, máy tính xách tay</a>
				</div>
				<div class="list-article-top">
						<div class="hangmoi">
							<a href = "#"><b>Hàng Mới</b></a>
						
							<a href = "#"><b>Xem Nhiều</b></a>
						
							<a href = "#"><b>Giá Giảm Nhiều</b></a>
						
							<a href = "#"><b>Giá Tăng Dần</b></a>

							<a href = "#"><b>Giá Giảm Dần</b></a>
						</div>
						<select title="list-sort" class="locsp">
							<option value="0">Lọc sản phẩm</option>
							<option value="#">Đánh giá</option>
							<option value="#">Tên A->Z</option>
						</select>
					<div class="list-nextpage"> 
								<a href = "#" class="first-page">1</a>
								<a href = "#">2</a>
								<a href = "#">3</a>
								<a href = "#">4</a>
								<a href = "#">5</a>
								<a href = "#">6</a>
								<a href = "#"><b>next</b></a>
						</div>
				</div>
				
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
						
						<div class="clear"></div>
						
				<div class="doc-them">
					<div class="doc-them2">
					<h3>Những điều cần lưu ý khi chọn mua laptop</h3><br>
					<p>Để có thể sở hữu được một sản phẩm chất lượng và ưng ý nhất thì bạn cần xem xét các yếu tố như sau khi mua laptop:</p><br>
					<i class="fa fa-angle-double-right"></i>&nbsp<span id="note1">Sản phẩm chính hãng:&nbsp</span> 
					<span>Tốt nhất là bạn nên lựa chọn những laptop có thương hiệu nổi tiếng. Điều này phần nào đã chứng minh được chất lượng của laptop. Những thương hiệu được nhiều người ưa chuộng trong thời gian dài thì chắc chắn là sản phẩm có các ưu điểm nổi bật, mang đến nhiều giá trị tối ưu cho người dùng khi sử dụng sản phẩm. Khi đã chọn các thương hiệu nổi tiếng thì hàng chính hãng cũng là điều bạn nên đặc biệt quan tâm bởi vì hàng giả, hàng nhái hiện nay trên thị trường có rất nhiều.</span>
					<br><br>
					<i class="fa fa-angle-double-right"></i>&nbsp<span id="note1" >Cấu hình sản phẩm:&nbsp</span> 
					<span>Đây là vấn đề mà bạn cần nghiên cứu trước, đặc biệt là đối với những người không có kiến thức chuyên môn trong lĩnh vực công nghệ. Nắm được một số đặc điểm cấu hình cơ bản của laptop không chỉ giúp bạn lựa chọn được laptop dễ dàng hơn mà bạn còn có thể biết được loại nào đáp ứng được các yêu cầu sử dụng của mình. Tùy vào mục đích để học tập, làm việc, chơi game hay giải trí đơn thuần mà sẽ có những dòng máy chuyên dụng mang đến cho bạn những trải nghiệm mượt mà hơn.</span>
					<br><br>
					<i class="fa fa-angle-double-right"></i>&nbsp<span id="note1">Giá cả hợp lý:&nbsp</span>
					<span>Tất nhiên giá cả luôn là vấn đề khiến nhiều người đắn đo suy nghĩ mỗi khi muốn mua một thứ gì đó và đối với laptop cũng vậy. Tìm được các cửa hàng có mức giá phù hợp thì sẽ giúp bạn tiết kiệm được chi phí hơn. Do đó, bạn có thể tham khảo tình hình giá cả chung trước rồi so sánh giá ở một vài nơi thì chắc chắn sẽ chọn được chỗ bán sản phẩm mà bạn muốn mua với mức giá tốt nhất.</span>
					<br><br>
					<h3>Nên mua laptop ở đâu</h3>
					<br>
					<p>Trong cuộc sống hiện đại bây giờ, một chiếc laptop hay PC sẽ giúp ích cho chúng ta trong rất nhiều việc như học tập, giải trí, làm việc..Tuy nhiên trên thị trường lại có rất nhiều các thương hiệu laptop kèm theo rất nhiều kiểu dáng, cấu hình khiến bạn khó lựa chọn. Không chỉ vậy, ngay cả khi lựa chọn được mẫu ưng ý, việc mua laptop ở đâu uy tín cũng là câu hỏi mà nhiều bạn đang tự đặt ra !</p><br>
					<img src="https://nhiet.vn/wp-content/uploads/2018/06/C%E1%BB%ADa-h%C3%A0ng-m%C3%A1y-t%C3%ADnh-TPHCM-C%C3%B4ng-ty-TNHH-DV-TM-H%E1%BB%A3p-Th%C3%A0nh-Th%E1%BB%8Bnh.jpg" style="width: 900px;">
					<br><br>
					<p>Với sự phát triển của vô vàn các thương hiệu, cửa hàng, siêu thị điện máy phân phối laptop thì TOPLaptop là một trong những doanh nghiệp hàng đầu tại Hà Nội về phân phối bán lẻ các sản phẩm công nghệ, linh kiện máy tính, laptop. Được thành lập từ 2020, với gần 2 năm phát triển và hoạt động trong lĩnh vực bán lẻ công nghệ, TOPLaptop đã tạo dựng được danh tiếng của mình trên thị trường và trong lòng khách hàng ! Đây cũng chính là địa chỉ mà bạn có thể chọn cho mình một chiếc laptop ưng ý với cấu hình tốt với chi phí phù hợp nhất !</p>
					<br>
					<img src="https://intphcm.com/data/upload/banner-khai-truong-dep.jpg" style="width: 900px;">
					<br>
					</div>
				</div>
		</div>
	<!-- </div> -->