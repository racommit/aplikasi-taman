<?php
if (isset($_POST['submit'])) {
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $handphone = $_POST['handphone'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
    //  var_dump($handphone);die;
        $sql = "SELECT * FROM datamahasiswa WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO datamahasiswa (full_name, email, password, handphonne, gender, alamat)
                    VALUES ('$username', '$email', '$password','$handphone','$gender','$alamat')";
            $result = mysqli_query($conn, $sql);
            // var_dump($sql);die;
            if ($result) {
                header("location: register.php?success=true");
                // echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
              
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    
}