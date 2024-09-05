<?php
    require_once 'header_template.php';

    $query_select = 'select * from menu';
    $run_query_select = mysqli_query($conn, $query_select);


    /* Cek Jika Ada Parameter Delete */
    if(isset($_GET['delete'])){

        $query_select_foto = 'select foto from menu where idmenu = "'.$_GET['delete'].'"';
        $run_query_select_foto = mysqli_query($conn, $query_select_foto);
        $d = mysqli_fetch_object($run_query_select_foto);

        if(file_exists('../uploads/menu/' . $d->foto)){
            unlink('../uploads/menu/' . $d->foto);
        }


        /* Proses Delete Data */
        $query_delete = 'delete from menu where idmenu = "'.$_GET['delete'].'" ';
        $run_query_delete = mysqli_query($conn, $query_delete);

        if($run_query_delete){
            echo "<script>window.location = 'menu.php'</script>";
        }else{
            echo "<script>alert('Data Gagal Dihapus')</script>";
        }

    }
?>

<div class="content">
    <div class="container">

        <h3 class="page-title">Menu</h3>

        <div class="card">
        <a href="menu_add.php" class="btn-t" title="Tambah Data"><i class='fa fa-plus'></i></a>
        
        <table class="table">
            <thead>
                <tr>
                    <th width="50">NO</th>
                    <th>Foto</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>KATEGORI</th>
                    <th width="100">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($run_query_select) > 0){ ?>
                <?php $nomor = 1; ?>
                <?php while($row = mysqli_fetch_array($run_query_select)){ ?>
                <tr>
                    <td align="center"><?= $nomor++ ?></td>
                    <td><img src="../uploads/menu/<?= $row['foto'] ?>" width="80"></td>
                    <td><?= $row['namamenu'] ?></td>
                    <td><?= $row['hargamenu'] ?></td>
                    <td><?= $row['kategori'] ?></td>
                    <td align="center">
                        <a href="menu_edit.php?id=<?= $row['idmenu'] ?>" class="btn-t" title="Edit Data"><i class='fa fa-edit'></i></a>
                        <a href="?delete=<?= $row['idmenu'] ?>" class="btn-t" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" title="Hapus Data"><i class='fa fa-times'></i></a>
                    </td>
                </tr>
                <?php }}else{ ?>
                <tr>
                    <td colspan="6">Data Tidak Ada.</td>
                </tr>
                <?php } ?>   
            </tbody>
        </table>   

        </div>

    </div>
</div>

<?php require_once 'footer_template.php' ?>