<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $baru = hash('sha256', $_POST['baru']);
    $lama = hash('sha256', $_POST['lama']);

    $sql = "SELECT * FROM datamahasiswa WHERE full_name='$nama' AND password='$lama'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $sql = "UPDATE datamahasiswa SET password='$baru' WHERE full_name='$nama'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: profile.php?success=true");
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>
