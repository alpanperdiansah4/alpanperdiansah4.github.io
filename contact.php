<?php
$status = "";
$wa = "";

if(isset($_GET['status'])){
    if($_GET['status']=="ok"){
        $status = "Pesan berhasil dikirim!";

        $nama = $_GET['nama'];
        $email = $_GET['email'];
        $pesan = $_GET['pesan'];

        $wa = "https://wa.me/628xxxxxxxxxx?text=Halo,%20saya%20$nama%0AEmail:%20$email%0APesan:%20$pesan";
    } else {
        $status = "Gagal kirim!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kontak</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Kirim Pesan</h2>

<form action="process.php" method="POST">
<input type="text" name="name" placeholder="Nama" required>
<input type="email" name="email" placeholder="Email" required>
<textarea name="message" placeholder="Pesan" required></textarea>
<button type="submit">Kirim</button>
</form>

<p><?php echo $status; ?></p>

<?php if($wa!=""){ ?>
<a href="<?php echo $wa; ?>">
<button>Kirim ke WhatsApp</button>
</a>
<p>Biar Bisa dapat balasan klik WhatsApp Di atas</p>
<?php } ?>
        
<a href="index.php">← Kembali</a>

</div>

</body>
</html>