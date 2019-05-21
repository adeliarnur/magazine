<?php
include "includes/db_connection.php";
$id = $_GET['id'];

mysqli_query($db,"DELETE FROM status_bencana WHERE id_status_bencana='$id'")or die("Gagal delete database");

header("location:AdminStatusBencana.php?pesan=delete");
?>
