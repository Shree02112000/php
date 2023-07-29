<?php
$email ="shreesenthil@gmail.com tfdd";

$email=filter_var($email,FILTER_SANITIZE_EMAIL);

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("VALID EMAIL ID");
}else{
    echo ("invalid email id");
}
?>