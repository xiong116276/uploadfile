<?php
    header("Content-Type:application/json,charset=utf-8");

    $conn=mysqli_connect('bdm28760038.my3w.com','bdm28760038','aa116276','bdm28760038_db',3306);

    $sql="SET NAMES UTF8";
    mysqli_query($conn,$sql);

    $sql="UPDATE imgsrc set src='images/headUp.png' where did = 1";
    $result=mysqli_query($conn,$sql);
    $response = array();
    if(!$result){
    		$response["msg"]="上传失败！";
    }else{
    		$response["msg"]="上传成功！";
    }

    $filename = substr($_FILES['photo']['name'],0);

    if(move_uploaded_file($_FILES['photo']['tmp_name'], '../images/headUp.png')){
        $response['isSuccess'] = true;
    }else{
        $response['isSuccess'] = false;
    }
    echo json_encode($response);
?>