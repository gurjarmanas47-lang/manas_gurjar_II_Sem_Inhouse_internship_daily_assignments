<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header("location:login.php");
    exit();
}
?>
<html>
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
 include ("header.php");


<div class="container-fluid">
    <div class="row">
    <div class="col-md-3">
        <a href="updatepassword.php">update password</a>
        <br>
        <a href="updateprofile.php">update profile</a>
</div>
<div class ="col-md-9">
