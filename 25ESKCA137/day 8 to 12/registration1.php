<?php
include("header.php");
include("db_connect.php");
include("checkregistrationerror.php");

$username = "";
$email = "";
$password = "";
$confirm_password = "";
?>
<div class="container mt-5">
    <div class ="container mt-5">
       <div style="max-width: 400px;">
        <form action ="" method="post">
            <h3 class="text-center mb-3">Registration Form</h3>
            <input type="text" name="username" class="form-control mb-3" placeholder="Username" value="<?php echo $username; ?>">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" value="<?php echo $email; ?>">
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" value="<?php echo $password; ?>">
            <input type="password" name="confirm_password" class="form-control mb-3" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>">
            <button class="btn btn-primary w-100">Register</button>
        </form>
    </div>
    


<?php
include ("footer.php");
?>