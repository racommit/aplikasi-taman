<?php
include('koneksi.php');
if (isset($_POST['submit'])) {
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $lauk_utama = $_POST['lauk_utama'];
    $lauk_tambahan1 = $_POST['lauk_tambahan1'];
    $lauk_tambahan2 = $_POST['lauk_tambahan2'];
    $catatan = $_POST['catatan'];

   
        // Insert the new order into the table
        $sql = "INSERT INTO tb_pesanan (nama, nim, lauk_utama, lauk_tambahan1, lauk_tambahan2, catatan)
                VALUES ('$nama', '$nim', '$lauk_utama', '$lauk_tambahan1', '$lauk_tambahan2', '$catatan')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location: pesan.php?success=true");
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    
        echo "<script>alert('Woops! NIM Sudah Terdaftar.')</script>";
    
}
?>
