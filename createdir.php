<?php

$dir = "testdir";

if(!file_exists($dir)){
    //create directory
    if(mkdir($dir))
    {
        echo "Create dir successfully...";
    }
    else{
        echo "ERROR when create dir...";
    }
}
else{
    echo "ERROR: Dir already exists...";
    rmdir($dir);
}