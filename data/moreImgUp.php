<?php
    $filename = substr($_FILES['file']['name'],0);

    if(move_uploaded_file($_FILES['file']['tmp_name'], '../updata/'.$filename)){
        $response['isSuccess'] = true;
    }else{
        $response['isSuccess'] = false;
    }
    echo json_encode($response);
?>