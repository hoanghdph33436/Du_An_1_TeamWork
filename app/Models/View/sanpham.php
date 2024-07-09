<?php
    function loadnew_sanpham(){
        $sql = "SELECT * FROM `san_pham` ORDER BY id_sanpham desc limit 0,5";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadluotxem_sanpham(){
        $sql = "SELECT * FROM `san_pham` ORDER BY luotXem desc limit 12";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadone_sanpham($id_sanpham){
        $sql ="SELECT * FROM `san_pham` WHERE id_sanpham =".$id_sanpham;
        $listsp = pdo_query_one($sql);
        return $listsp;
    }
    function loadcungloai_sanpham($id_dm){
        $sql = "SELECT * FROM `san_pham` WHERE id_dm=".$id_dm." limit 0,9";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_dmsp($s="",$id_sanpham=0){
        $sql = "SELECT * FROM `san_pham` WHERE 1";
        if($id_sanpham>0){
            $sql.=" and `id_dm`=".$id_sanpham;
        }else if($s!=""){
            $sql.=" and ten_sanpham like '%".$s."%'";
        }
        $sql.=" ORDER BY id_sanpham desc limit 16";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function sp_update_view($id_sanpham){
        $sql = "update san_pham set luotXem = luotXem + 1 where id_sanpham = ".$id_sanpham;
        $listsanpham =pdo_query($sql);
        return $listsanpham;
    }
    
?>