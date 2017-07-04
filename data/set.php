<?php
	header("Content-Type:application/json,charset=utf-8");
	$conn=mysqli_connect("127.0.0.1","root","","img",3306);

	$sql="SET NAMES UTF8";
	mysqli_query($conn,$sql);

	$sql="SELECT * FROM imgsrc WHERE did = 2";
	$result=mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);
    $output = array();

    if(!$result){
    	$output["msg"]="上传失败！";
    }else{
    	$output["msg"]=$row;
    }
    echo json_encode($output);
?>