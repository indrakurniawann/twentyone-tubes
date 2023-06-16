<?php
    date_default_timezone_set('Asia/Jakarta');
    // memanggil database
    $conn = mysqli_connect("localhost","root","","tsunamii-website");        

     $id = $_POST['id']; 
     $nama_depan = $_POST['nama_depan']; 
     $nama_belakang = $_POST['nama_belakang']; 
     $email = $_POST['email']; 
     $create_password = $_POST['create_password']; 
     $confirm_password = $_POST['confirm_password']; 

     // Create a DateTime object for the current timestamp
     $timestamp = new DateTime();

     // Format the timestamp in the desired format
     $timestampString = $timestamp->format('Y-m-d H:i:s');

     $query = "INSERT INTO account_data VALUES('$id','$nama_depan','$nama_belakang','$email','$create_password','$confirm_password','$timestampString')";

     mysqli_query($conn, $query);

     if ($query) {   
        header("Location:signin.php");
        }else {
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
     }
?>