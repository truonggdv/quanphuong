@extends('admin_layout')
@section('admin_content')
<?php
//Bước 1: Kết nối PHP với MYSQL
    $conn = mysqli_connect('localhost','root','','elaravel');

//Bước 2: Thông báo ngôn ngữ sử dụng trong CSDL cho PHP
    mysqli_query($conn,"SET_NAMES 'utf8'");
    $sql = "SELECT * FROM ";
    $sql1 = "SELECT * FROM tbl_order_details";
    $result = mysqli_query($conn,$sql1);
    $sum = 0;
    while ($row = mysqli_fetch_assoc($result)){
    	$sum += $row['product_price'];
	}   

?>
<h3 style="color: #af2e2e; text-align: center;">THỐNG KÊ</h3>
<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Sản phẩm</h4>
					<h3><?php echo mysqli_num_rows(mysqli_query($conn,$sql."tbl_product")); ?></h3>	
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Danh mục</h4>
						<h3><?php echo mysqli_num_rows(mysqli_query($conn,$sql."tbl_category_product")); ?></h3>					
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Thương hiệu</h4>
						<h3><?php echo mysqli_num_rows(mysqli_query($conn,$sql."tbl_brand")); ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>			
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Đơn hàng</h4>
						<h3><?php echo mysqli_num_rows(mysqli_query($conn,$sql."tbl_order")); ?></h3>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd" style="width:;">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Doanh thu</h4>
						<h4><?php echo number_format($sum); ?></h4>				
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>			   
		</div>	
@endsection