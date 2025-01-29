<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    //GET FORM DATA
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    $to="ataliasinethemba@gmail.com"
    
    $message="Name: $name\n Email: $email\n Message: $message";

    if(mail($t0,$message)){
        echo"Thank you for your message, I'll get back to you soon.";

    } else{
        echo "Sorry, something went wrong please try again.";
    }else{
        echo"nvslid request"
    }
    

}
?>