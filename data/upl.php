<?php
	header("Content-Type:application/json,charset=utf-8");
	$src=$_REQUEST["src"];
	$conn=mysqli_connect("127.0.0.1","root","","img",3306);

	$output=array();

	if(empty($src)){
		echo "上传为空！";
		return;
	}
	$sql="SET NAMES UTF8";
	mysqli_query($conn,$sql);

	$sql="UPDATE imgsrc set src='$src' where did = 2";
	$result=mysqli_query($conn,$sql);
	$output=array();
	if(!$result){
		$output["msg"]="上传失败！";
	}else{
		$output["msg"]="上传成功！";
	}
	echo json_encode($output);
?>