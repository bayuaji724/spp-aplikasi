<?php 
// ini adalah logic tambah_spp
if (isset($POST['submit'])) {
    $simpan = $admin->tambahDataSPP($POST['tahun'], $POST['nominal']);
    if ($simpan) {
        header('location: ?p=spp');
        $_SESSION['pesan'] = "Data SPP berhasil ditambah";
    } else {
        header('location: ?p=spp');
        $_SESSION['pesan'] = "Data SPP gagal ditambah";
    }
}
?>


<h2>Tambah SPP</h2>
<form action="" method="post">
    <label for="tahun">Tahun</label><br>
    <input type="text" name="tahun" id="tahun" placeholder="Masukan tahun ajaran" required><br>
    <label for="nominal">Nominal</label><br>
    <input type="text" name="nominal" id="nominal" placeholder="Masukan nominal disini" required><br><br>
    <input type="submit" name="submit" value="simpan">
</form>