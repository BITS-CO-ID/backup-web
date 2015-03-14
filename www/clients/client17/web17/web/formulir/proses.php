<?php
  /**
  * Form Pendaftaran
  */
  class Form
  {
    public $namaperusahaan;
    public $kategori;
    public $produk;
    public $alamatperusahaan;
    public $email;
    public $telp;
    public $web;
    public $foto;
    public $donasi;
    public $tujuan;
    public $judul;
    public $isi;

    public function kirimEmail()
    {
      if ($this->namaperusahaan != "") {
        $this->namaperusahaan = filter_var($this->namaperusahaan, FILTER_SANITIZE_STRING);
        if ($this->namaperusahaan == "") {
          $salah .= 'Masukkan Nama Perusahaan Yang Benar';
        }
      } else {
        $salah .= 'Masukkan Nama Perusahaan !<br />';
      }

      if ($this->kategori != "") {
        $this->kategori = filter_var($this->kategori, FILTER_SANITIZE_STRING);
        if ($this->kategori == "") {
          $salah .= 'Masukkan Kategori Perusahaan Yang Benar';
        }
      } else {
        $salah .= 'Masukkan Kategori Perusahaan !<br />';
      }
      
      if ($this->produk != "") {
        $this->produk = filter_var($this->produk, FILTER_SANITIZE_STRING);
        if ($this->produk == "") {
          $salah .= 'Masukkan Produk Perusahaan Yang Benar';
        }
      } else {
        $salah .= 'Masukkan Produk Perusahaan !<br />';
      }
      
      if ($this->alamatperusahaan != "") {
        $this->alamatperusahaan = filter_var($this->alamatperusahaan, FILTER_SANITIZE_STRING);
        if ($this->namaperusahaan == "") {
          $salah .= 'Masukkan Alamat Perusahaan Yang Benar';
        }
      } else {
        $salah .= 'Masukkan Alamat Perusahaan !<br />';
      }
      
      if ($this->email != "") {
        $this->email = filter_var($this->email, FILTER_SANITIZE_STRING);
        if ($this->email == "") {
          $salah .= 'Masukkan Email Perusahaan Yang Benar';
        }
      } else {
        $salah .= 'Masukkan Email Perusahaan !<br />';
      }


      if (!$salah) {
        $mailheader = "From: ".$this->email."\r\n"; 
        $mailheader .= "Reply-To: ".$this->email."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

        $pesan = "Nama Perusahaan : ".$this->namaperusahaan."<br>"; 
        $pesan .= "Alamat Perusahaan : ".$this->alamatperusahaan."<br>"; 
        $pesan .= "No Telp Perusahaan : ".$this->telp."<br>"; 
        $pesan .= "Email Perusahaan : ".$this->email."<br>"; 
        $pesan .= "Website Perusahaan : ".$this->web."<br>"; 
        $pesan .= "Kategori Perusahaan : ".$this->kategori."<br>"; 
        $pesan .= "Produk Perusahaan : ".$this->produk."<br>"; 

        mail($this->tujuan, $this->judul, $pesan, $mailheader) or die ("Failure"); 
      } else {
        echo "<p>".$salah."</p>";
      }
    }
  }
?>