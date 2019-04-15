<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $to='selvarajahharrish@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Subject: ".$subject "\n". "Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo ""
    }
}