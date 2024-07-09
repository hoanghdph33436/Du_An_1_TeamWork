<?php
ob_start();
	session_start();
	include("../../Models/View/user.php");
	include("../../Models/View/pdo.php");
	include("../../Models/View/sanpham.php");
	include("../../Models/View/danhmuc.php");
	
	$listspnew = loadnew_sanpham();
	$listspluotxem =loadluotxem_sanpham();
	$listdm=load_all_dm();
	if (isset($_POST['id_sanpham'])) {
		$id_sanpham= $_GET['id_sanpham'];
		$listsanpham=sp_update_view($id_sanpham);
	}
	if(isset($_GET['id_dm'])){
        $id_dm = $_GET['id_dm'];
        $listdmsp = loadall_dmsp($s="",$id_dm);
    }else{
        $listdmsp = loadall_dmsp($s="",$id_dm=0);
    }
	include("header.php");
	if (isset($_GET['act'])&&($_GET['act']!="")) {
		$act=$_GET['act'];
		switch ($act) {
			case 'dangnhap':
				// $listuser = load_all_user();
                // if(isset($_POST['btn-dangnhap'])){
                //     $matKhau = $_POST['matKhau'];
                //     $taiKhoan = $_POST['taiKhoan'];
                //     $listkh = loadone_khachhang($taiKhoan);
                //     if($matKhau==$listkh['matKhau']){
                //         $_SESSION['id_u']=$listkh['id'];
                //         $_SESSION['ten_user']=$listkh['ten_user'];
                //        header("Location:index.php");
                //     }
                //     else{
                //         $thongbaologin ="Sai tài khoản hoặc mật khẩu";
                //         include "view/client/login.php";
                //     }
                // }
					if (isset($_POST['btn-dangnhap'])&&($_POST['btn-dangnhap'])=="") {
						$taiKhoan=$_POST['taiKhoan'];
						$matKhau=$_POST['matKhau'];
						$checkuser = checkuser($taiKhoan,$matKhau);
						if (is_array($checkuser)) {
							$_SESSION['taiKhoan']=$checkuser;
							header("Location:index.php");
						}else{
							$thongBao="Tài khoản không tồn tại. Vui lòng đăng kí tài khoản!";
						}
					}
                include "login/dangnhap.php";
				break;
			case 'dangki':
					if(isset($_POST['btn-dangky'])&&($_POST['btn-dangky'])==""){
						$hoTen = $_POST['hoTen'];
						$soDienThoai = $_POST['soDienThoai'];
						$email = $_POST['email'];
						$diaChi = $_POST['diaChi'];
						$taiKhoan=$_POST['taiKhoan'];
						$matKhau=$_POST['matKhau'];
						$ngay_sinh=$_POST['ngay_sinh'];
						$id_role = 2;
						$trangThai = "Hoạt động";
						if($hoTen==""||$soDienThoai=="" ||$email==""||$diaChi=="" || $taiKhoan ==""||$matKhau==""){
							$thongbao ="Vui lòng nhập đủ dữ liệu !";
						}
						else{
							insert_user($hoTen, $soDienThoai, $email, $diaChi, $taiKhoan, $matKhau,$ngay_sinh, $trangThai, $id_role);
							$thongbao ="Đăng ký thành công";
						}
					}
				include "login/dangki.php";
				break;
			case 'sanphamchitiet':
					$id_sanpham = $_GET['id_sanpham'];
					$id_dm = $_GET['id_dm'];
                	$listspcl = loadcungloai_sanpham($id_dm);
					$listonesp = loadone_sanpham($id_sanpham);
					$listsanpham=sp_update_view($id_sanpham);
					include "sanphamchitiet.php";
				break;
			case 'sanpham':
				if(isset($_POST['btn'])){
                    $id = $_POST['id_dm'];
                    $s = $_POST['s'];
                    $listdmsp = loadall_dmsp($s,$id);
                }
                else{
                    $listdmsp = loadall_dmsp($s="",$id=0);
                }
				
					include "sanpham.php";
				break;
			case 'dangxuat':
					session_unset();
					header("Location:index.php");
				break;
			case 'edit_taikhoan':
					if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
							$hoTen = $_POST['hoTen'];
							$soDienThoai = $_POST['soDienThoai'];
							$email = $_POST['email'];
							$diaChi = $_POST['diaChi'];
							$taiKhoan=$_POST['taiKhoan'];
							$matKhau=$_POST['matKhau'];
							$ngay_sinh=$_POST['ngay_sinh'];
							$id_role = 2;
							$trangThai = "Hoạt động";
						update_taikhoan($hoTen, $soDienThoai, $email, $diaChi, $taiKhoan, $matKhau,$ngay_sinh, $trangThai, $id_role);
						$thongBao="Chúc mừng bạn đã cập nhật thành công !";
	
					}
					$listuser=load_all_user();
					include ("login/edit_taikhoan.php");
					break;

			case 'quenmatkhau':
				if(isset($_POST['guiemail']) && ($_POST['guiemail']=="")){

                    $email = $_POST['email'];	

                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongBao = "Mật khẩu của bạn là: ".$checkemail['matKhau'];
                    }else{
                        $thongBao = "Email không tồn tại !";
                    }
                }
                include "login/quenmatkhau.php";
                break;
			case 'loadsp':
				$id=$_GET['id_dm'];
				$listdmsp = loadcungloai_sanpham($id_dm);
				include "sanpham.php";
			default:
				include("home.php");
       		break;
    }
 	}else{
    	include("home.php");
 	}
 	include("footer.php");
ob_end_flush();
?>
	

	