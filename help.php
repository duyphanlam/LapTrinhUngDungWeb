<?php
require'connect.php';
if(isset($_POST['searching'])) {
    $van_de = $_POST['van_de'];

    if (!empty($van_de)){
        $sql = "INSERT INTO `help` (`van_de`) value('$van_de')";

        if($conn->query($sql)=== true){
            header("Location: 8.xac_nhan_hotro.php");
        }
        else{
            echo "lỗi{$sql}".$conn->error;
        }
    }
    else{
        header("Location: 4.1.ho_tro_sai.php");
    }
}
?>