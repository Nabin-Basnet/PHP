<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['phone'];

    // validating name
    if(empty($_POST['name'])){
        echo "name is required";
    }
    else{
        $name =htmlspecialchars($_POST['name']);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $nameErr="only letter are allowed";
        }
    }

    // validation for email
    if(empty($_POST['email'])){
        echo "email is required";
    }
    else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailerr="invalid email format";
    
        }

    }

    // validating phone
    if(empty($_POST['phoe'])){
        $phoneerr="phone number is required";
    }
    else{
        $phone=htmlspecialchars($_POST["phone"]);
        if(!preg_match("/^[0-9]{10}$/",$phone)){
            $phoneerr="phome number is required";

        }
    }


    // final result
    if(empty($nameerr) && empty($emailerr) && empty($phoneerr)){
        echo "form submitted sucessfully";
        echo "name:$name<br> email: $email <br> Phone:$phone";
    }
    else{
        echo "error: <br>";
        echo $nameErr."  ".$emailerr. " ".$phoneerr;
    }

   
}
?>