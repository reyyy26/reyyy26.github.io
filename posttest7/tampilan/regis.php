<?php
require '../aksi/koneksi.php';

if(isset($_POST['register'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    if($password == $cpassword){
        $password = password_hash($password,PASSWORD_DEFAULT);
        $result  = mysqli_query($conn,"SELECT username from user WHERE username = '$username' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('username sudah ada !!!');
            document.location.href='regis.php';
            </script>";
        }else{
            $sql = "INSERT INTO user VALUES ('','$username','$password')";
            $result_query = mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn) > 0){
                echo "<script> alert( 'Registrasi Berhasil!!');
            document.location.href='login.php';
            </script>";
            }else{
                echo "<script> alert( 'Registrasi gagal!!');
                document.location.href='regis.php';
                </script>";
            }
        }
    }else{
        echo "<script> alert('password tidak sama !!!');
        document.location.href='regis.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <title>Registrasi</title>
</head>


<body>
    <div class="form">
        <div class="form-container">
            <h1>Masuk</h1><hr>
            
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username" class="textfield">
                <input type="password" name="password" placeholder="Password" class="textfield">
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off" class="textfield" required> <br>
                <button type="submit" name="register" class="login-btn">Register</button>
            </form>
        </div>
    </div>
</body>

</html>