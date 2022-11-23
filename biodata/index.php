<?php 
    require('koneksi.php');

    $biodata = mysqli_query($conn, "SELECT * FROM biodata");
?>

<table border="1" class="table" cellpadding="10">
    <tr bgcolor= "pink" width="100px">
        <td>No</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Umur</td>
        <td>Aksi</td>
    </tr>

    <?php
        $i = 1;
        while ($data = mysqli_fetch_array($biodata)){
    ?>
    
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['umur']; ?></td>
        <td>
            <a class="button" href="<?php echo "ubah.php?id=".$data['id']; ?>">Ubah</a>
            <a class="button" href="<?php echo "proses.php?Hapus&id=".$data['id']; ?>">Hapus</a>
        </td>
    </tr>

    <?php
        $i++;    
    }
    ?>

</table>
<br>
<br>
<br>
<div class="button-center">
    <a class="button" href="tambah.php">Tambah</a>
</div>