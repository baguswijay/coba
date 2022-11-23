<?php 
    require('koneksi.php');

    $id = $_GET['id'];

    $biodata = mysqli_query($conn, "SELECT * FROM biodata WHERE id= '$id'");

    while($data = mysqli_fetch_array($biodata))
    {
        $nama = $data['nama'];
        $jk = $data['jenis_kelamin'];
        $umur = $data['umur'];
    }
?>

<form action="proses.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="nama" value="<?php echo $nama; ?>">
    <select name="jenis_kelamin" id="jenis_kelamin">
        <option value="Laki-laki"<?php if ($jk=='Laki-laki') echo "selected";?> >Laki-laki</option>
        <option value="Perempuan"<?php if ($jk=='Perempuan') echo "selected";?> >Perempuan</option>
    </select>
    <input type="text" name="umur" value="<?php echo $umur; ?>">
    <button type="submit" name="Ubah" class="btn">
        Simpan
    </button>

</form>
