<?php

if (isset($_FILES['myjson'])){

    $img = $_FILES['myjson']['name'];
    $tmpimg = $_FILES['myjson']['tmp_name'];

    //To get file extension
    //$fileExt = pathinfo($img, PATHINFO_EXTENSION) ;

    move_uploaded_file($tmpimg, "./uploaded_json/$img");

    echo "[success] json ($img) uploaded successfully.";
    exit();
}
else{
	echo "[error] there is no data with name [myjson]";
}

?>
