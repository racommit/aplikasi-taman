<?php
include('koneksi.php');
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    // var_dump($id);die;
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $lauk_utama = $_POST['lauk_utama'];
    $lauk_tambahan1 = $_POST['lauk_tambahan1'];
    $lauk_tambahan2 = $_POST['lauk_tambahan2'];
    $catatan = $_POST['catatan'];

    // Check if the order already exists
    $sql = "SELECT * FROM tb_pesanan WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    var_dump($result);

    if ($result->num_rows > 0) {
        // Insert the new order into the table
       $sql = "UPDATE tb_pesanan SET 
            nama = '$nama', 
            nim = '$nim', 
            lauk_utama = '$lauk_utama', 
            lauk_tambahan1 = '$lauk_tambahan1', 
            lauk_tambahan2 = '$lauk_tambahan2', 
            catatan = '$catatan'
        WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);


        if ($result) {
            header("location: pesan.php?success=true");
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Woops! ID Pesanan tidak Terdaftar.')</script>";
    }
}
?>
