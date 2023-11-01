<?php
session_start();
require '../aksi/koneksi.php'; 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result  = mysqli_query($conn,"SELECT * from user WHERE username = '$username' ");
    if(mysqli_num_rows($result) > 0){
        $row  = mysqli_fetch_assoc($result);
        
        if(password_verify($password, $row['password'])){
            $_SESSION['login'] =true;
            header("location:index.php");
            exit;   
        }
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Universitas Mulawarman</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <?php echo isset($row); ?> 
    <div class="form">
        <div class="form-container">
            <h1>Masuk</h1><hr>
            <?php
            if(isset($error)){
                echo "<p style='color:red';> username atau password anda salah </p>";
            }?>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" class="textfield">
                <input type="password" name="password" placeholder="Password" class="textfield">
                <button type="submit" name="login" class="login-btn">Masuk</button><br>
                <h5> apakah anda ingat sandi anda ? </h5> <a href=../tampilan/regis.php>Registrasi</a>
            </form>
        </div>
    </div>
</body>
</html>