<?php
include 'db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM villas WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Vila</title>
</head>
<body>
    <h1>Detail Vila</h1>
    <p>ID: <?php echo $row['id']; ?></p>
    <p>Nama: <?php echo $row['name']; ?></p>
    <p>No Telepon: <?php echo $row['phone']; ?></p>
    <p>Jenis Kamar: <?php echo $row['room_type']; ?></p>
    <p>Check In: <?php echo $row['check_in']; ?></p>
    <p>Check Out: <?php echo $row['check_out']; ?></p>
    <a href="index.php">Kembali ke List Tamu</a>
</body>
</html>
