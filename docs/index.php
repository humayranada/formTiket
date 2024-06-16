<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<style>
  body {
    font-size: 50px; 
    color : rgb(224, 246, 255);
    background-color:#f06C7C;
    
  }
  h1{
    font-size: 100px;
    color :  rgb(39, 52, 129);
    text-align: center;
  }
</style>

<body>
  <?php 
  $email = $_POST['email'];
  $nama = $_POST['Nama_Lengkap'];
  $nomor = $_POST['Nomor_Telepon'];
  $membership = $_POST['Nomor_Membership'];
  $kategori = $_POST['Kategori'];
  $jumlah = $_POST['Jumlah_Tiket'];
  $harga_tiket = [
    "Platinum" => 175000,
    "Gold" => 150000,
    "Silver" => 125000
];
$total_harga = $harga_tiket[$kategori] * $jumlah;


  echo "<h1>Informasi Pemesanan Tiket</h1>";
  echo "Email: " .$email."<br>";
  echo "Nama: " .$nama."<br>";
  echo "Nomor Telepon: " .$nomor."<br>";
  echo "Nomor Membership: " .$membership."<br>";
  echo "Kategori: ".$kategori."<br>";
  echo "Jumlah Tiket: ".$jumlah."<br>";
  echo "Total Harga: Rp" . number_format($total_harga, 0, ',', '.') . "<br>";
?>
</body>
</html>