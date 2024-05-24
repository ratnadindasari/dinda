<?php
include 'db.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $room_type = $_POST['room_type'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    
    $sql = "UPDATE villas SET name='$name', phone='$phone', room_type='$room_type', check_in='$check_in', check_out='$check_out' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT * FROM villas WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        <label>No Telepon:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br>
        <label>Jenis Kamar:</label>
        <input type="text" name="room_type" value="<?php echo $row['room_type']; ?>" required><br>
        <label>Check In:</label>
        <input type="datetime" name="check_in" value="<?php echo $row['check_in']; ?>" required><br>
        <label>Check Out:</label>
        <input type="datetime" name="check_out" value="<?php echo $row['check_out']; ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali ke List Tamu</a>
</body>
</html>
