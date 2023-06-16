<?php
    $conn = mysqli_connect("localhost","root","","tsunamii-website");        

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "email dan password harus diisi.";
    } else {
        $adminemail = 'satyasih@gmail.com';
        $adminPassword = 'satya-Sih123';
        $email = $_POST['email'];
        $password = $_POST['password'];

        $cekdatauser = mysqli_query($conn, "SELECT * FROM account_data where email ='$email' and password ='$password'");

        $hitungdata = mysqli_num_rows($cekdatauser);

        if ($email == $adminemail && $password == $adminPassword) {
            session_start();
            $_SESSION['role'] = 'admin';

            header("location: dashboard.php");
            exit();
        } elseif ($hitungdata) {
            session_start();
            $_SESSION['role'] = 'user';

            header("location: dashboard.php");
            exit();
        } else {
            $error = "Email atau password salah.";
        }
    }
}
?>