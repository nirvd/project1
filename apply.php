<?php
include("include/connection.php");

if (isset($_POST['apply'])){
    $firstname = $_POST['fname'];
    $surname = $_POST['sname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['con_pass'];

    $error = array();

    if(empty($firstname)){
        $error['apply'] = "Enter Firstname";
    }elseif(empty($surname)){
        $error['apply'] = "Enter Surname";
    }elseif(empty($username)){
        $error['apply'] = "Enter Username";
    }elseif(empty($email)){
        $error['apply'] = "Enter Email Address";
    }elseif(empty($gender == "")){
        $error['apply'] = "Enter Gender";
    }elseif(empty($phone)){
        $error['apply'] = "Enter Phone Number";
    }elseif(empty($country)){
        $error['apply'] = "Enter Country";
    }elseif(empty($password)){
        $error['apply'] = "Enter Password";
    }elseif(empty($confirm_password)){
        $error['apply'] = "Both Password do not match";
    }

    if(count($error)==0){
        

      
    }

    if(isset($error['apply'])){
        $s = $error['apply'];

        $show = "<h5 class='text-center alert alert-danger'>$s</h5>";
    }else{
        $show = "";
    }

    }


     

?>

    
   




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url();">
    <?php
    include("include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6-my-3 jumbotron">
                <h5 class="text-center">apply now</h5>
                <div>
                    <?php echo $show; ?>   
                </div>
                <form method="post">
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" name="fname" class="form-control"
                        autocomplete="off" placeholder="Firstname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>">
                    </div>
                    
                    <div class="form-group">
                    <label>Surname</label>
                    <input type="text" name="fname" class="form-control"
                        autocomplete="off" placeholder="Surname" value="<?php if(isset($_POST['sname'])) echo $_POST['sname']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="fname" class="form-control"
                        autocomplete="off" placeholder="Username" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="fname" class="form-control"
                        autocomplete="off" placeholder="Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>>
                    </div>

                    <div class="form-group">
                        <label>Select Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" name="phone" class="form-control"
                        autocomplete="off" placeholder="Phone Number" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>>
                    </div>

                    <div class="form-group">
                        <label>Select Country</label>
                        <select name="Country" class="form-control">
                            <option value="">Select Country</option>
                            <option value="Nepal">Nepal</option>
                            <option value="India">India</option>
                            <option value="China">China</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control"
                        autocomplete="off" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="con_pass" class="form-control"
                        autocomplete="off" placeholder="Confirm Password">
                    </div>

                    <input type="submit" name="apply" value="Apply Now" class="btn brn-succes">
                    <p>I already have an account<a href="doctor.php">Click here</a></p>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>