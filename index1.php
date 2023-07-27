<?php
require_once("configs/config.php");
$tgl=date('Y-m-d');

?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
		<div id="container">
            <div id="header">
                <div id="nama-alamat-perpustakaan-container">
                    <div class="nama-alamat-perpustakaan">
                        <h1> PERPUSTAKAAN UMUM </h1>
                    </div>
                    <div class="nama-alamat-perpustakaan">
                        <h4> Jl. Mutchar Raya No 23, Telp: (021)232466452 </h4>
                    </div>
                </div>
            </div>
            <div id="header2">
                <div id="nama-user">Hai, Saya admin loh!</div>
            </div>

            <div id="sidebar">
				<a href="index1.php?p=beranda">Beranda</a>
				<p class="label-navigasi">Data Master</p>
				<ul>
					<li><a href="index1.php?p=anggota">Data Anggota</a></li>
					<li><a href="index1.php?p=buku">Data Buku</a></li>
				</ul>
				<p class="label-navigasi">Data Transaksi</p>
				<ul>
					<li><a href="index1.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
					<li><a href="index1.php?p=transaksi-pengembalian">Transaksi Pengembalian</a></li>
				</ul>
				<p class="label-navigasi" style="color: white;"><a href="index1.php?p=transaksi-peminjaman"  style="color: white;">Laporan Transaksi</a></p>
				<a href="logout.php">Logout</a>
			</div>
		
            <div id="content-container">
                <?php
					$pages_dir='views/anggota';
					if(!empty($_GET['p'])){
						$pages=scandir($pages_dir,0);
						unset($pages[0],$pages[1]);
						$p=$_GET['p'];
						if(in_array($p.'.php',$pages)){
							include($pages_dir.'/'.$p.'.php');
						}else{
							echo'Halaman Tidak Ditemukan';
						}
					}else{
						include($pages_dir.'/beranda.php');
					}
				?>
            </div>

            <div id="footer">
                <h3>Sistem Informasi Perpustakaan (SIPUS)|Praktikum</h3>
            </div>
        </div>
</body>
</html>
<?php


?>