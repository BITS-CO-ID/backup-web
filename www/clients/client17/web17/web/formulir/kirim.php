<?php 
if ($_POST["email"]<>'') { 
$ToEmail = 'admin@komunikasikotaserang.com'; 
$EmailSubject = 'Formulir Pendaftaran Forum Komunikasi Kota Serang'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
     
        $pesan = "Nama Perusahaan : ".$_POST['namaperusahaan']."<br>"; 
        $pesan .= "Alamat Perusahaan : ".$_POST['alamatperusahaan']."<br>"; 
        $pesan .= "No Telp Perusahaan : ".$_POST['telp']."<br>"; 
        $pesan .= "Email Perusahaan : ".$_POST['email']."<br>"; 
        $pesan .= "Website Perusahaan : ".$_POST['web']."<br>"; 
        $pesan .= "Kategori Perusahaan : ".$_POST['kategori']."<br>"; 
        $pesan .= "Produk Perusahaan : ".$_POST['produk']."<br>"; 
        $pesan .= "Pembayaran Donasi : ".$_POST['pembayaran']."<br>"; 

mail($ToEmail, $EmailSubject, $pesan, $mailheader) or die ("Failure"); 
?> 
<!DOCTYPE html>
<html>
<head>
<title>Please Wait...</title>
<meta http-equiv="refresh" content="0;url=http://komunikasikotaserang.com/formulir/" /> 
</head>
<body>
<h1 style="text-align:center">Terimakasih, Pendaftaran anda sedang diproses !</h1>
</body>
</html>
<?php 
} else { 
?> 
<?php 
}; 
?>