<?php

$con=new mysqli('localhost', 'root', '', 'crud with php');
if(!$con){
    die(mysqli_error($con));
    
}
