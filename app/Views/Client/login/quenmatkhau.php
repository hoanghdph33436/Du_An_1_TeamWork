<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="">HOMe</a>
				<span><i class="fa fa-caret-right"></i></span>
				<span>Tài Khoản</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->
			
					
			
			<!-- PERSONAL-INFOMATION START -->
			<div class="personal-infomation">
				<form class="primari-box personal-info-box" id="personalinfo" method="post" action="index.php?act=quenmatkhau">
					<h3 class="box-subheading">Quên tài khoản</h3>
						<div class="form-group primary-form-group p-info-group">
							<label for="">Email<sup>*</sup></label>
							<input type="email" name="email" id="guiemail"
								class="form-control input-feild" require>
						</div>
						<div class="submit-button">
                                    <button type="submit" name="guiemail" id="SubmitCreate" class="btn main-btn" >
                                    <span>
											<i class="fa fa-lock submit-icon"></i>
											Xác nhận
										</span>
                                    </button>
									
						</div>
						
						<div class="submit-button">
									<a href="#" id="SubmitCreate" class="btn main-btn">
										<span>
											<i class="fa fa-user submit-icon"></i>
											Nhập lại
										</span>
									</a>
						</div>
						<?php if(isset($thongBao) && $thongBao != ""){
                      				echo $thongBao;
                				}?>
				</form>
			</div>
			<!-- PERSONAL-INFOMATION END -->
            <div >
    </div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->