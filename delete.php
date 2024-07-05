<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query to check if the record exists
    $sql = "SELECT * FROM tb_pesanan WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Record exists, proceed with deletion
            $sql2 = "DELETE FROM tb_pesanan WHERE id = '$id'";
            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {
                // Deletion successful, redirect with success message
                header("location: pesan.php?deleted=true");
                exit; // Make sure to exit after header redirection
            } else {
                // Deletion failed
                echo "<script>alert('Woops! Terjadi kesalahan saat menghapus.')</script>";
            }
        } else {
            // No record found with the given id
            echo "<script>alert('Woops! Tidak ada pesanan untuk id ".$id."')</script>";
        }
    } else {
        // Query execution failed
        echo "Error executing query: " . mysqli_error($conn);
    }
} else {
    // No id parameter provided
    echo "<script>alert('Parameter id tidak ditemukan.')</script>";
}

// Close connection
mysqli_close($conn);
?>
