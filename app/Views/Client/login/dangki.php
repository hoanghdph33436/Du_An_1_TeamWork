<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right	"></i></span>
				<span>Authentication</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->
			
			<h2 class="page-title">Create an account</h2>			
			
			<!-- PERSONAL-INFOMATION START -->
			<div class="personal-infomation">
				<form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
					<h3 class="box-subheading">Your personal information</h3>
					<div class="personal-info-content">
						<div class="form-group primary-form-group p-info-group">
							<label for="firstname">Họ tên<sup>*</sup></label>
							<input type="text" value="" name="hoTen" 
								class="form-control input-feild">
						</div>
						<div class="form-group primary-form-group p-info-group">
							<label for="lastname">Số điện thoại<sup>*</sup></label>
							<input type="text" value="" name="soDienThoai" 
								class="form-control input-feild">
						</div>
						<div class="form-group primary-form-group p-info-group">
							<label for="email">Email<sup>*</sup></label>
							<input type="email" value="" name="email" id="email"
								class="form-control input-feild">
						</div>
						<div class="form-group primary-form-group p-info-group">
							<label for="email">Địa chỉ<sup>*</sup></label>
							<input type="text" value="" name="diaChi"
								class="form-control input-feild">
						</div>
						<div class="form-group primary-form-group p-info-group">
							<label for="email">Tên đăng nhập<sup>*</sup></label>
							<input type="t" value="" name="taiKhoan"
								class="form-control input-feild">
						</div>
						<div class="form-group primary-form-group p-info-group">
							<label for="password">Password <sup>*</sup></label>
							<input type="password" value="" name="matKhau"
								class="form-control input-feild">
						</div>
						<div class="form-group primary-form-group p-info-group">
							<label>Ngày sinh</label>
							<input type="date" name="ngay_sinh" class="form-control input-feild">
						</div>
						<div class="submit-button">
                                    <button type="submit" name="btn-dangky" id="SubmitCreate" class="btn main-btn" >
                                    <span>
											<i class="fa fa-lock submit-icon"></i>
											Đăng ký
										</span>
                                    </button>
									
						</div>
						
						<div class="submit-button">
									<a href="index.php?act=dangnhap" id="SubmitCreate" class="btn main-btn">
										<span>
											<i class="fa fa-user submit-icon"></i>
											Đăng nhập
										</span>
									</a>
						</div>
						
						
					</div>
					<?php if(isset($thongBao) && $thongBao != ""){
                      		echo $thongBao;
                	}?>
				</form>
			</div>
			<!-- PERSONAL-INFOMATION END -->
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->