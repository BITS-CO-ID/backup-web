<?php
if ($_POST["nama"]<>'') {
$FromEmail = 'no-reply@baittauhied.com';
$ToEmail = 'ibnutadim@baittauhied.com';
$EmailSubject = 'Pendaftaran Siswa Baru di Bait et Tauhied';
$mailheader = "From: ".$FromEmail."\r\n";
$mailheader .= "Reply-To: ".$FromEmail."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Nama Calon Siswa : ".$_POST["nama"]."<br>";
$MESSAGE_BODY .= "Jenis Kelamin : ".$_POST["jk"]."<br>";
$MESSAGE_BODY .= "Tanggal Lahir : ".$_POST["tgl"]."<br>";
$MESSAGE_BODY .= "Alamat Lengkap : ".$_POST["alamat"]."<br>";
$MESSAGE_BODY .= "Asal Sekolah : ".$_POST["asal"]."<br>";
$MESSAGE_BODY .= "Nama Ayah : ".$_POST["ayah"]."<br>";
$MESSAGE_BODY .= "No HP Ayah : ".$_POST["hpayah"]."<br>";
$MESSAGE_BODY .= "Nama Ibu : ".$_POST["ibu"]."<br>";
$MESSAGE_BODY .= "No HP Ibu : ".$_POST["hpibu"]."<br>";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("GAGAL !");
?>
<!DOCTYPE html>
<html>
<head>
<title>Mohon Menunggu...</title>
<meta http-equiv="refresh" content="1;url=http://baittauhied.com/" />
</head>
<body>
<h1 style="text-align:center">Terimakasih, Pendaftaran sudah terkirim !</h1>
</body>
</html>
<?php
} else {
?>
<?php
};
?>
