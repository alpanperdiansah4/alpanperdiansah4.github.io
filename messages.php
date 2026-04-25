<?php
include 'config.php';
$data = mysqli_query($conn, "SELECT * FROM messages ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pesan Masuk</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Pesan Masuk</h2>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<div class="card">
    <b><?php echo $row['name']; ?></b><br>
    <?php echo $row['message']; ?><br>
    <small><?php echo $row['created_at']; ?></small>
</div>
<?php } ?>

<a href="index.php">← Kembali</a>

</div>

</body>
</html>