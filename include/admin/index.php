<?php 
require_once 'header.php';

if(isset($_GET['p'])) {
 if($_GET['p'] == 'siswa') {
  require_once 'data-siswa.php';
 } elseif($_GET['p'] == 'tambah-siswa') {
  require_once 'tambah-siswa.php';
 } elseif($_GET['p'] == 'petugas') {
  require_once 'data-petugas.php'; // belum dibuat juga
 } elseif($_GET['p'] == 'spp') {
  require_once 'data-spp.php'; // sudah dibuat
 } elseif($_GET['p'] == 'tambah-spp') {
  require_once 'tambah-spp.php'; 
 } elseif($_GET['p'] == 'ubah-spp') { // belum dibuat
  require_once 'ubah-spp.php';
 } elseif($_GET['p'] == 'hapus-spp') {
  if($admin->hapusDataSPP($_GET['id']))
  {
   header('Location: ?p=spp');
   $_SESSION['pesan'] = "Data SPP berhasil dihapus";
  }
  else
  {
   header('Location: ?p=spp');
   $_SESSION['pesan'] = "Data SPP gagal dihapus";
  }
 } else {
  echo '<script>alert("Halaman tidak ada!")</script>';
 }
} 

require_once 'footer.php'; 
?>
