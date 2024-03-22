<?php
    require('C:\xampp\htdocs\harbor-lights-master\admin\inc\essentials.php');
    require("C:\Users\HP\harbor-lights-master\admin\inc\db_config.php");

    session_start();
    if((isset($_SESSION['adminLogin'])&& $_SESSION['adminLogin']==true))
    {
        redirect('dashboard.php');
    // //     echo "<script>
    // //     window.location.href='dashboard.php';
    // // </script>";
    }


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\links.php');?>
    <style>
        div.login-form{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:400px;
        }
        body {
            background-color: #f8f9fa; /* Adjust to your background color */
        }
        .login-form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            text-align: center;
        }
        .custom-bg {
            background-color: #007bff; /* Adjust to your button background color */
        }
    </style>
</head>
<body>
    <div class="login-form text-center rounded bg-white shadow overflow-hidden p-4">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-8">
                <div class="mb-3 p-2">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>


    <?php
    if(isset($_POST['login']))
    {
        $frm_data = filteration($_POST);
        $query = "SELECT * FROM `admin_cred` WHERE `admin_name` = ? AND `admin_pass` = ?";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
        $res = select($query, $values, "ss");
        if($res->num_rows==1){
            $row=mysqli_fetch_assoc($res);
            // session_start();
            $_SESSION['adminLogin']=true;
            $_SESSION['adminId']=$row['sr_no'];
            echo"<script>
            window.location.href='dashboard.php';
            </script>";
            // redirect('C:\xampp\htdocs\harbor-lights-master\admin\inc\dashboard.php');
            redirect('inc\dashboard.php');


        }else{
            alert("error","Login failed - Invalid Cresentials!");
            echo '<style>.custom-alert { position: fixed; top: 25px; right: 25px; z-index: 9999; }</style>';

        }
    }

    // function redirect($url){
    //     echo"<script>
    //         window.location.href='$url';
    //     </script>";
    // }
    ?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php require("C:\Users\HP\harbor-lights-master\admin\inc\script.php")?>
</body>
</html>
