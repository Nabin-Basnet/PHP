<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['phone'];
    echo "hello my name is ".$name." and my gmail and contact number is ".$email." & ".$contact;
}
?>