<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILEs["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array(
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "png" => "image/png",
            "gif" => "image/gif"
        );

        $fileName = $_FILES["photo"]["name"];
        $fileType = $_FILES["photo"]["type"];
        $fileSize = $_FILES["photo"]["size"];

        $ext = pathInfo($fileName, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed))
            die("Error: Please select valid format file");

        //allow max size 5MB
        $maxSize = 5*1024*1024;
        if($fileSize >  $maxSize)
            die("Error: File size is over max size allow");

        if(in_array($fileType, $allowed))
        {
            if(file_exist("upload/".$fileName)){
                echo $fileName ."is already exists...";
            }
            else{
                move_uploaded_file($_FILES["photo"]["tmp_name"],
                    "upload/".fileName);
                echo "Your file was uploaded successfully...";
            }
        }
        else{
            echo "ERROR: ...";
        }
    }
    else{
        echo "ERROR ..." .$_FILES["photo"]["error"];
    }
}
