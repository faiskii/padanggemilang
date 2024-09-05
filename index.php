<?php
	include 'database.php';

	$where = '';

    if(isset($_GET['kategori'])){
		$where = ' where kategori = "'.$_GET['kategori'].'"	';
	}

	$query_select = 'select * from menu' . $where;
  $run_query_select = mysqli_query($conn, $query_select);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gemilang.</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Box Icons-->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body background="image/home/orange.jpg">
    <!-- Navbar -->
    <header>
      <a href="#" class="logo">
        <img src="image/home/logogemilang.png" alt="" />
      </a>
      <!-- Menu Icon -->
      <i class="bx bx-menu" id="menu-icon"></i>
      <!-- Links -->
      <ul class="navbar">
        <li><a href="#home">Beranda</a></li>
        <li><a href="#tentang">Informasi</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
      <!-- Icon -->
      <div class="header-icon">
        <i class="bx bx-search" id="search-icon"></i>
      </div>
      <!-- Search Box -->
      <div class="search-box">
        <input type="search" name="" id="" placeholder="Search Here..." />
      </div>
    </header>
    <!-- Home -->
    <section class="home" id="home">
      <div class="home-text">
        <h1>Website Rumah Makan Padang Gemilang</h1>
        <p>Tidak usah jauah-jauah ka Minang, di sini wae.</p>
        <P>#rasayangBERKUALITAS.</p>
      </div>
      <div class="home-img">
        <img src="image/home/logogemilang.png" alt="" />
      </div>
    </section>
    <!-- About Us -->
    <section class="about" id="tentang">
      <div class="about-img">
        <img src="image/home/padang.jpeg" alt="" />
      </div>
      <div class="about-text">
        <h2> Selamat Datang di Rumah Makan Padang Gemilang Jepara! </h2>
        <p>
        Menikmati kelezatan kuliner Minangkabau tanpa harus berwisata jauh ke Sumatra Barat, Rumah Makan Padang Gemilang hadir dengan sajian khas yang memanjakan lidah Anda.

        Dari rendang yang lezat hingga gulai ayam yang menggugah selera, menu khas Minang di Rumah Makan Padang Gemilang tidak hanya menawarkan rasa autentik, tetapi juga keanekaragaman pilihan untuk memuaskan selera setiap pelanggan. Nikmati juga hidangan istimewa seperti sate Padang, dendeng batokok, dan nasi rendang yang memukau.

        Dengan dekorasi yang menghadirkan nuansa tradisional Minang, Rumah Makan Padang Gemilang menciptakan suasana yang hangat dan nyaman. Furnitur kayu yang elegan, lampu-lampu sederhana, dan sentuhan seni lokal menciptakan lingkungan yang cocok untuk bersantap dengan keluarga atau teman-teman.

        Pelayanan di Rumah Makan Padang Gemilang dikenal ramah dan penuh keramahan. Setiap tamu diterima dengan senyum hangat dan layanan yang sangat perhatian, menciptakan pengalaman makan seperti di rumah sendiri. Staf yang profesional siap memberikan rekomendasi menu, menjelaskan setiap hidangan, dan memastikan kepuasan pelanggan adalah prioritas utama.

        Jadi, apakah Anda datang untuk mencicipi kelezatan hidangan Minangkabau yang otentik atau sekadar ingin merasakan kenyamanan seperti di rumah sendiri, Rumah Makan Padang Gemilang adalah destinasi kuliner yang sempurna di Jepara. Selamat menikmati kelezatan dan keramahan yang luar biasa!
        </p>
      </div>
    </section>
    <!-- Menu -->
    <section class="menu" id="menu">
        <div class="heading">
            <h2>Menu Kami</h2>
      <!-- 
			<ul>
        <h3><a href="?kategori=Makanan">Makanan</a></h3>
				<h3><a href="?kategori=Minuman">Minuman</a></h3>
			</ul>
        </div>
        <!-- Container -->
        <!-- Menu -->
        <div class="content">
		  <div class="menu-container">

				<!-- Menu item -->
				<?php 
					if(mysqli_num_rows($run_query_select) > 0){
					while($row = mysqli_fetch_array($run_query_select)){
				?>
				<div class="box">
					<div class="card-menu">
						<img src="uploads/menu/<?= $row['foto'] ?>">
						<div class="card-body">
							<div class="card-name"><?= $row['namamenu'] ?></div>
							<div class="card-price">Rp<?= number_format($row['hargamenu'], 0, ',', '.') ?></div>
						</div>
					</div>
				</div>
				<?php }}else{ ?>

					<div>Menu Tidak Tersedia.</div>

				<?php } ?>

				</div>

		</div>
	</div>
    </section>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Lokasi & Kontak</h2>
        <div class="contact-in">
            <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.438002602541!2d110.66433457475394!3d-6.592356193401356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f02f9b9fd4d%3A0x3120ab94c4f00385!2sRumah%20Makan%20Padang%20Gemilang%20Kartini!5e0!3m2!1sid!2sid!4v1724944760489!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
            <div class="contact-form">
            <h3>Kontak</h3>
            <form>
                <img src="uploads/qrcode/Kontak Padang Gemilang (2).png" width="200">
            </form>
        </div>
    </section>
    <!-- Contact End -->
    <!-- Footer -->
    <section class="footer">
        <div class="footer-box">
            <h2>Rumah Makan Padang Gemilang.</h2>
            <p>#rasayangBERKUALITAS.</p>
        </div>
        <div class="footer-box">
            <h2>Jam Operasional</h2>
            <p>10:00 - 22:00 WIB</p>
        </div>
        <div class="footer-box">
            <h3>Kontak Kami</h3>
            <div class="contact">
                <span><i class='bx bx-map' ></i>Jl. Kartini No. 24, Jepara.</span>
                <span><i class='bx bx-phone' ></i>081325940466</span>
                <span><i class='bx bx-envelope' ></i>faiskii1905@gmail.com</span>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>Copyright &#169; 2024 Gemilang - All Right Reserved.</p>
    </div>
    <!-- Link JS -->
    <script src="main.js"></script>
  </body>
</html>
