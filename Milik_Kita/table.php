<?php
 include("koneksi.php");
 $query = $koneksi->query('select * from siswa');

 while ($data = $query->fetch() ) :?>
    <p><?= $data['nis'] ?>
        <a href="edit.php?id=<?= $data['nis']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $data['nis']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>