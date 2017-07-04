<?php
$filename = substr($_FILES['photo']['name'],0);
$response = array();
if(move_uploaded_file($_FILES['photo']['tmp_name'], $filename)){
    $response['isSuccess'] = true;
    $response['photo'] = $filename;
}else{
    $response['isSuccess'] = false;
}
echo json_encode($response);
?>