<?php
require '../function.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM fotografi
        WHERE
        nama LIKE '%$keyword%' OR
        tema LIKE '%$keyword%' OR
        tipe LIKE '%$keyword%' OR
        dimensi LIKE '%$keyword%'
        ";

$fotografi = query($query);


?>

<table border="1" cellpadding="10" cellspacing="0" class="table">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Tema</th>
            <th>Tipe</th>
            <th>Dimensi</th>
        </tr>    

        <?php $nomor = 0; foreach($fotografi as $row) : $nomor++; ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td class="aksi">
                    <a href="ubah.php?id=<?= $row["id"]?>">Ubah</a><a href="hapus.php?id=<?php echo $row["id"];?>" onclick="return confirm('yakin?')">Hapus</a>
                </td>
                <td><img src="img/<?php echo $row["gambar"];?>" alt="" width="75px" class="gambar"></td>
                <td><?php echo $row["nama"];?></td>
                <td><?php echo $row["tema"];?></td>
                <td><?php echo $row["tipe"];?></td>
                <td><?php echo $row["dimensi"];?></td>
            </tr>   
        <?php endforeach; ?>
    </table>