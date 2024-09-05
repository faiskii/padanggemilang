<?php
    require_once 'header_template.php';

    $query_select = 'select * from menu where idmenu = "'.$_GET['id'].'" ';
    $run_query_select = mysqli_query($conn, $query_select);
    $d = mysqli_fetch_object($run_query_select);    

?>

<div class="content">
    <div class="container">

        <h3 class="page-title">Edit Menu</h3>

        <div class="card">
        
            <form action="" method="post" enctype="multipart/form-data">

                <div class="input-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nama" placeholder="Nama Menu" class="input-control" value="<?= $d->namamenu ?>" required>
                </div>

                <div class="input-group">
                    <label>Harga</label>
                    <input type="text" name="harga" placeholder="Harga" class="input-control" value="<?= $d->hargamenu ?>" required>
                </div>

                <div class="input-group">
                    <label>Kategori</label>
                    <select class="input-control" name="kategori">
                        <option value="">Pilih</option>
                        <option value="Minuman" <?= ($d->kategori == 'Minuman') ? 'selected':''; ?>>Minuman</option>
                        <option value="Makanan" <?= ($d->kategori == 'Makanan') ? 'selected':''; ?>>Makanan</option>
                    </select>
                </div>

                 <div class="input-group">
                    <label>Foto</label>
                    <input type='hidden' name='foto_lama' value=" <?= $d->foto ?>">
                    <div>
                        <img src="../uploads/menu/<?= $d->foto ?>" width="200">
                    </div>
                    <input type='file' name='foto'>
                </div>

                <div class="input-group">
                    <button type="button" onclick="window.location.href = 'menu.php'" class="btn-back">Kembali</button>
                    <button type="submit" name="submit" class="btn-submit">Simpan</button>
                </div>

            </form>

            <?php 

                if(isset($_POST['submit'])){

                    /* Cek User Upload File / Tidak */
                    if ($_FILES['foto']['error'] <> 4) {
                        /* Jika Upload */
                        $name = $_FILES['foto']['name'];
                        $tmp_name = $_FILES['foto']['tmp_name'];

                        /* Proses Upload File*/
                        move_uploaded_file($tmp_name, '../uploads/menu/' . $name);

                        /* Hapus File Sebelumnya */
                        if(file_exists('../uploads/menu/' . $_POST['foto_lama'])){
                        unlink('../uploads/menu/' . $_POST['foto_lama']);
                        }

                    }else{
                        /* Jika Tidak Upload */
                        $name = $_POST['foto_lama'];
                    }

                    /* Proses Update Data Menu*/
                    $query_update = 'update menu set
                    namamenu = "'.$_POST['nama'].'",
                    hargamenu = "'.$_POST['harga'].'",
                    kategori = "'.$_POST['kategori'].'",
                    foto = "'.$name.'"
                    where idmenu = "'.$_GET['id'].'" ';

                    $run_query_update = mysqli_query($conn, $query_update);

                }


            ?>

        </div>

    </div>
</div>

<?php
require_once 'footer_template.php'
?>