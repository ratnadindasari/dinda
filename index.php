<?php
include 'db.php';
$sql = "SELECT * FROM villas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>List Tamu</title>
</head>
<body>
    <h1>List Tamu</h1>
    <a href="create.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Jenis Kamar</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['room_type']; ?></td>
            <td><?php echo $row['check_in']; ?></td>
            <td><?php echo $row['check_out']; ?></td>
            <td>
                <a href="show.php?id=<?php echo $row['id']; ?>">Lihat</a>
                <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
