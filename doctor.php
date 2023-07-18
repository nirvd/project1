<?php
 include("include/connection-php");

 if (isset($_POST['login'])){
    $uname = $_POST['uname'];
    $password = $_POST['pass'];
    
    $error = array();
    $q = "SELECT * FROM doctors WHERE username-'$uname' AND password= '$password'";
    $qq = mysqli_query ($connect,$q);
    $row = mysqli_fetch_array($qq);
    
    if (empty ($uname)) {
        $error['login'] = "Enter Username";
    }elseif(empty($password)){
        $error['login'] = "Enter Password";
    }elseif($row['status'] == "Pendding"){
        $error['login'] = "Please wait for the admin to confirm";
    }elseif($row['status'] == "rejected"){
        $error['login'] == "try again later";
    }

    if (count($error)==0) {
        $query = "SELECT * FROM doctors WHERE usernmae='$uname' AND paswword='$$password'";
    }
    $res = mysqli_query($connect,$query);

    if (mysqli_num_rows($res)){
        echo "<script>alert('done')</script>";
        $_SESSION['doctor'] = $uname;
    }else{
        echo "<script>alert('invalid Account')</script>";
    }
}
if (isset($error['login'])){
    $1 = $error['login'];
    $show = "<h5 class='text-center alert alert-danger'>$1</h5>";
}else{
    $show = "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
</head>
<body style="background-image: url();">
    <?php
    include("include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
              <div class="col-md-3">
                <div class="col-md-6">
                    <h5 class="text-center my-5">Doctors locale_get_display_name</h5>
                    <div>
                        <?php echo $show; ?>
                    </div>

                    <form method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control"
                            autocomplete="off" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="pass" class="form-control"
                            autocomplete="off">
                        </div>
                        <input type="submit" name="login" class="btn btn-success" value="login">

                        <p>i dont have an account<a href="apply.php">Apply now!</p>
                    </form>
                </div>
              </div>  
            </div>
        </div>
    </div>
    
</body>
</html>