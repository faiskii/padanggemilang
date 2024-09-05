<?php
require_once 'header_template.php';
?>

<div class="content">
    <div class="container">

        <h3 class="page-title">Tambah Menu</h3>

        <div class="card">
        
            <form action="" method="post" enctype="multipart/form-data">

                <div class="input-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nama" placeholder="Nama Menu" class="input-control" required>
                </div>

                <div class="input-group">
                    <label>Harga</label>
                    <input type="text" name="harga" placeholder="Harga" class="input-control" required>
                </div>

                <div class="input-group">
                    <label>Kategori</label>
                    <select class="input-control" name="kategori">
                        <option value="">Pilih</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Makanan">Makanan</option>
                    </select>
                </div>

                 <div class="input-group">
                    <label>Foto</label>
                    <input type="file" name="foto" required>
                </div>

                <div class="input-group">
                    <button type="button" onclick="window.location.href = 'menu.php'" class="btn-back">Kembali</button>
                    <button type="submit" name="submit" class="btn-submit">Simpan</button>
                </div>

            </form>

            <?php 

                if(isset($_POST['submit'])){
                    
                    /* Proses Insert Data Menu */
                    
                    /* Tampung Data File Akan Diupload*/
                    $name = $_FILES['foto']['name'];
                    $tmp_name = $_FILES['foto']['tmp_name'];

                    /* Proses Upload File */
                    move_uploaded_file($tmp_name, '../uploads/menu/' . $name);

                    /* Proses Insert */
                    $query_insert = 'insert into menu
                    (namamenu, hargamenu, foto, kategori) value (
                    "'.$_POST['nama'].'", 
                    "'.$_POST['harga'].'", 
                    "'.$name.'",
                    "'.$_POST['kategori'].'"  
                    )';

                    $run_query_insert = mysqli_query($conn, $query_insert);

                    if(!$run_query_insert){
                        echo "Data Gagal Disimpan" . mysqli_error($conn);
                        exit();
                    }
                    
                    echo 'Data Berhasil Disimpan';

                }


            ?>

        </div>

    </div>
</div>

<?php require_once 'footer_template.php' ?>