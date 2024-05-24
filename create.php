<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $room_type = $_POST['room_type'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    
    $sql = "INSERT INTO villas (name, phone, room_type, check_in, check_out) VALUES ('$name', '$phone', '$room_type', '$check_in', '$check_out')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="name" required><br>
        <label>No Telepon:</label>
        <input type="text" name="phone" required><br>
        <label>Jenis Kamar:</label>
        <input type="text" name="room_type" required><br>
        <label>Check In:</label>
        <input type="datetime" name="check_in" required><br>
        <label>Check Out:</label>
        <input type="datetime" name="check_out" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali ke List Tamu</a>
</body>
</html>
