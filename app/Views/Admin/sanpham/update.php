<?php 
    
  if(is_array($sp)){
    extract($sp);
  }
  $hinhpart = "../../../public/upload/".$img;
  if(is_file($hinhpart)){
      $hinh = "<img src='".$hinhpart."' height = '60px'>";
  }else{
      $hinh = "No Photo";
  }

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sản phẩm</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" action="index.php?act=updatesp" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id_sanpham"  value="<?=$id_sanpham?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TÊN SẢN PHẨM</label>
                    <input type="text" name="ten_sanpham" value="<?= $ten_sanpham ?>" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">DUNG LƯỢNG</label>
                    <input type="text" name="dungLuong" class="form-control" id="exampleInputEmail1" placeholder="Nhập dung lượng" value="<?=$dungLuong?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SỐ LƯỢNG</label>
                    <input type="text" name="soLuong" class="form-control" id="exampleInputEmail1" placeholder="Nhập số lượng" value="<?=$soLuong?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TRẠNG THÁI</label>
                    <select name="trangThai" id="">
                      <?php
                        if ($trangThai=="Hết hàng") {
                          $s = "Selected";
                        }else{
                          $s="";
                        }
                      ?>
                      <option value="Còn hàng">Còn hàng</option>
                      <option value="Hết hàng" <?php echo $s?>>Hết hàng</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>MÀU SẮC:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="mauSac" value="<?= $mauSac ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">HÌNH ẢNH:</label>
                    <input type="file" name="img" class="form-control"  value="<?= $hinh ?>" id="exampleInputEmail1" placeholder="HÌNH ẢNH">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">LƯỢT XEM:</label>
                    <input type="text" name="luotXem" class="form-control"  value="<?= $luotXem ?>" id="exampleInputEmail1" placeholder="LƯỢT XEM">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NGÀY NHẬP:</label>
                    <input type="text" name="ngay_nhap"  class="form-control datetimepicker-input"  value="<?= $ngay_nhap ?>" id="exampleInputEmail1" placeholder="NGÀY NHẬP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">GIÁ</label>
                    <input type="text" name="gia"  class="form-control datetimepicker-input"  value="<?= $gia ?>" id="exampleInputEmail1" placeholder="GIÁ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MÔ TẢ:</label>
                    <input type="text" name="moTa"  class="form-control datetimepicker-input"  value="<?= $moTa ?>" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <select class="form-control select2" style="width: 100%;" name="id_dm">
                      <?php 
                        foreach ($listdm as $dm){
                        extract($dm);
                        echo '<option value="'.$id_dm.'">'.$ten_dm.'</option>';
                      }
                       ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="capnhat">Submit</button>
                </div>
                <?php
                  if(isset($thongBao) && $thongBao != ""){
                      echo $thongBao;
                  }
                ?>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
