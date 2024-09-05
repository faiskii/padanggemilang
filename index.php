<?php
	require_once 'header_template.php';
?>

<div class="content">
    <div class="container">

        <h3 class="page-title">Beranda</h3>

        <div class="card">
            <h2>Hai <?= $_SESSION['uname'] ?>,</h2>
            <p>Selamat Datang Dibagian Administrasi Rumah Makan Padang Gemilang.</p>
        </div>

    </div>
</div>

<?php require_once 'footer_template.php' ?>