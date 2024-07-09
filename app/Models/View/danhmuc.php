<?php
    function load_all_dm(){
        $sql="select * from danh_muc order by id_dm desc";
        $listdm=pdo_query($sql);
        return  $listdm;
    }
    
?>