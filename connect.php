<?php

$con=new mysqli('localhost', 'root', '', 'crud with php');
if($con){
    echo "Connection successfull";
}
else{
    die(mysqli_error($con));
}
