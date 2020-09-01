<?php
       if(isset($_POST['submit'])){
           $name=$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
           $msg=$_POST['msg'];

           $to='lowzz260299@gmail.com';
           $subject='Form submission';
           $message="Name: ".$name."\n"."phone: ".$phone."\n"."message: "."\n".$msg;
           $headers="From: ".$email;

           if(mail($to,$subject,$message,$headers)){
               echo "<h1>sent successfully"." ".$name."</h1>";
           }
           else{
               echo "something wrong"
           }
       }
?>
    