<?php

setcookie("username", "John", time()+3600);

echo $_COOKIE("username");

if(isset($_COOKIE["username"]))
{
    echo "Hi ".$_COOKIE["username"];
}
else{
    echo "Hi guest";
}
