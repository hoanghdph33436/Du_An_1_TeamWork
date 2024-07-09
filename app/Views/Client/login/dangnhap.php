<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right"></i></span>
				<span>Sign in / Register</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->
			
			<h2 class="page-title">Sign in / Register</h2>

			<div class="row">
				<div class="col-lg-6">
					<!-- CREATE-NEW-ACCOUNT START -->
					<div class="create-new-account">
						<form class="new-account-box primari-box" id="create-new-account" method="post">
							<h3 class="box-subheading">Create an account</h3>
							<div class="form-content">
								<p>Please enter your email address to create an account.</p>
								<div class="submit-button">
									<a href="index.php?act=dangki" id="SubmitCreate" class="btn main-btn">
										<span>
											<i class="fa fa-user submit-icon"></i>
											Create an account
										</span>
									</a>
								</div>
							</div>
						</form>
					</div>
					<!-- CREATE-NEW-ACCOUNT END -->
				</div>
				<div class="col-lg-6">
					<!-- REGISTERED-ACCOUNT START -->
					<div class="primari-box registered-account">
						<form class="new-account-box" id="accountLogin" method="post" action="index.php?act=dangnhap">
							<h3 class="box-subheading">Đã đăng kí?</h3>
							<div class="form-content">
								<div class="form-group primary-form-group">
									<label for="loginemail">Tên đăng nhập</label>
									<input type="text" value="" name="taiKhoan" id="loginemail"
										class="form-control input-feild">
								</div>
								<div class="form-group primary-form-group">
									<label for="password">Mật khẩu</label>
									<input type="password" value="" name="matKhau" id="password"
										class="form-control input-feild">
								</div>
								<div class="forget-password">
									<p><a href="#">Forgot your password?</a></p>
								</div>
								<div class="submit-button">
                                    <button type="submit" name="btn-dangnhap" class="btn main-btn" >
                                    <span>
											<i class="fa fa-lock submit-icon"></i>
											Đăng nhập
										</span>
                                    </button>
								</div>
							</div>
							<?php if(isset($thongBao) && $thongBao != ""){
                      				echo $thongBao;
                				}?>
								
						</form>
					</div>
					<!-- REGISTERED-ACCOUNT END -->
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->