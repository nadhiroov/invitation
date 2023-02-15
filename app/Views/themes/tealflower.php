<!DOCTYPE html>
<html lang="id">

<head>
	<title><?= $mempelai['nama_panggilan_pria'] .  " & " . $mempelai['nama_panggilan_wanita']; ?> </title>

	<!-- REQUIRED META AREA	 -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#f5f6fa" />
	<meta property="og:title" content="<?= $mempelai['nama_panggilan_pria'] .  " & " . $mempelai['nama_panggilan_wanita']; ?>">
	<meta property="og:description" content="<?php
												echo 'Hello Anda! Kamu Di Undang..';
												?>">
	<meta property="og:url" content="<?php echo base_url() ?>">
	<meta property="og:image:width" content="300">
	<meta property="og:image:height" content="300">
	<meta property="og:type" content="website" />

	<!-- CSS STYLE AREA	 -->
	<link rel="icon" href="<?php echo base_url() ?>/base/img/favicon.png?<?= date("Y-m-d"); ?>">
	<link href="<?php echo base_url() ?>/themes/tealflower/css/bootstrap.min.css?invitation" rel="stylesheet">
	<link href="<?php echo base_url() ?>/themes/tealflower/css/jquery.fancybox.css?invitation" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>/themes/tealflower/mdi/css/materialdesignicons.min.css?invitation">
	<link rel="stylesheet" href="<?php echo base_url() ?>/themes/tealflower/css/style.css?invitation">
</head>
<?php // dd($acara['Aqad']['tanggal']) 
?>

<body>

	<!-- ============== HALAMAN AWAL =============== -->
	<div class="thebegining">
		<div class="content-thebegining">
			<img src="<?php echo base_url() ?>/base/img/logo2.png" style="width:100px;height: 100px;"> <br>
		</div>

		<div class="salam">
			<a style="font-weight: bold;font-size: 30px;color: #2f3640;">Hello!</a><br>
			<a style="font-weight: normal;font-size:18px;"><?php
															if (!empty($invite)) {
																echo $invite;
															}
															?></a><br>
			<a style="font-weight: normal;font-size:18px;color: #2f3640;font-family: sans-serif;">You are invited to our wedding party!</a>
		</div>
		<a style="font-weight: bold;font-size: 16px;color: #2f3640;position: absolute;bottom: 20px;right: 0;left: 0;">klik untuk membuka undangan</a>
	</div>

	<div class="dekorasi-all">
		<!-- GAMBAR DEKORASI TENGAH -->
		<!-- <img id="" src="<?php echo base_url() ?>/themes/tealflower/img/top_flower.png" class="imgatas">  -->

		<!-- GAMBAR DEKORASI KIRI -->
		<!-- <img src="<?php echo base_url() ?>/themes/tealflower/img/kiri-atas.png" class="imgatas-kiri"> -->
		<!-- GAMBAR DEKORASI KANAN -->
		<img src="<?php echo base_url() ?>/themes/tealflower/img/kanan-atas.png" class="imgatas-kanan">
	</div>

	<div class="dekorasi-sampul">
		<!-- GAMBAR DEKORASI TENGAH -->
		<!-- <img id="" src="<?php echo base_url() ?>/themes/tealflower/img/top_flower.png" class="imgatas">  -->

		<!-- GAMBAR DEKORASI KIRI -->
		<!-- <img src="<?php echo base_url() ?>/themes/tealflower/img/kiri-atas.png" class="imgatas-kiri"> -->
		<!-- GAMBAR DEKORASI KANAN -->
		<!-- <img src="<?php echo base_url() ?>/themes/tealflower/img/kanan-atas.png" class="imgatas-kanan"> -->
	</div>

	<div id="konten" style="z-index: 1;">
		<?php
		$youtube = 'https://i.ytimg.com/an_webp/zzaSYvVhKL4/mqdefault_6s.webp?du=3000&sqp=CPSe9J4G&rs=AOn4CLBq2aK77oFe3l3I2f_siFQ8_5dEbA';
		$salam_pembuka = $setting['salam_pembuka'];
		$voice = "/assets/voice/" . $setting['voice'];
		?>

		<!-- ============== MUSIK =============== -->
		<audio loop src="<?php echo base_url() ?><?= $voice ?>" id="audio"></audio>

		<!-- ============== SAMPUL =============== -->
		<div id="sampul-konten" class="konten">
			<table style="width: 100%;margin-top:-50px">
				<!-- tambahkan margin-top:-XX jika kurang ketas -->
				<tbody>
					<tr>
						<th style="text-align: center;">
							<span class="the-wedding">- THE WEDDING OF -</span>
						</th>
					</tr>
					<tr>
						<th style="position: relative;text-align: center;display:block;margin-top:40px">
							<img src="<?= $mempelai['foto_sampul']; ?>" class="cover-foto" />

							<!-- image border cover -->
							<img src="<?= base_url() ?>/themes/tealflower/img/bg-flower.png" class="cover-border" /><br>
							<!-- image border cover -->

						</th>
					</tr>
					<tr>
						<th style="text-align: center;margin-top:40px;margin-bottom:15px;display: block;">
							<span class="nama-mempelai"><?= $mempelai['nama_panggilan_pria']; ?> & <?= $mempelai['nama_panggilan_wanita']; ?></span>
						</th>
					</tr>
					<tr>
						<th style="text-align: center;">
							<span class="tanggal-weddingnya"></span>
						</th>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- ============== MEMPELAI =============== -->
		<div id="mempelai-konten" class="konten" style="display: none;">
			<img src="<?php echo base_url() ?>/base/img/bismillah.png" class="mempelai-salam-pembuka" /><br>
			<p class="mempelai-intermezzo"><?= $salam_pembuka ?></p>

			<img src="<?= $mempelai['foto_pria'] ?>" onerror="this.onerror=null;this.src='<?= base_url() . '/assets/img/mpria.jpg' ?>'" class="mempelai-img" />

			<h1 class="mempelai-pria-nama"><?php echo $mempelai['nama_pria']; ?></h1>
			<p class="mempelai-pria-ortu"><?php echo "Putra " . $mempelai['nama_ayah_pria'] . " dan " . $mempelai['nama_ibu_pria']  ?></p>
			<h1 class="dengan">dengan</h1>

			<img src="<?= $mempelai['foto_wanita'] ?>" onerror="this.onerror=null;this.src='<?= base_url() . '/assets/img/mwanita.jpg' ?>'" class="mempelai-img" />

			<h1 class="mempelai-wanita-nama"><?php echo $mempelai['nama_wanita']; ?></h1>
			<p class="mempelai-wanita-ortu"><?php echo "Putri " . $mempelai['nama_ayah_wanita'] . " dan " . $mempelai['nama_ibu_wanita']  ?></p>

		</div>
		<!-- ============== ACARA =============== -->

		<div id="acara-konten" style="display: none;" class="konten">
			<div class="section-title">
				<h2> Acara </h2>
			</div>

			<div class="acaranya">
				<?php foreach ($data['event'] as $row) : ?>
					<?php
					$tanggal =  $acara[$row]['tanggal'];
					$jam =  $acara[$row]['jam'];
					$tempat =  $acara[$row]['tempat'];
					$alamat =  $acara[$row]['alamat'];
					$link =  $acara[$row]['link'];
					?>
					<table class="tb-acara">
						<thead>
							<th colspan="4" class="acara-title">
								<?= $row ?>
							</th>
						</thead>
						<tbody>
							<tr>
								<th class="tb-ic-acara"><i class="mdi mdi-calendar icon-acara"></th>
								<th class="tb-ket-acara"> Tanggal</th>
								<th class="tb-anu-acara">:</th>
								<th class="tb-isi-acara" id="tanggal-acara-akad"><?= $tanggal; ?></th>
							</tr>

							<tr>
								<th class="tb-ic-acara"><i class="mdi mdi-timer icon-acara"></th>
								<th class="tb-ket-acara"> Jam</th>
								<th class="tb-anu-acara">:</th>
								<th class="tb-isi-acara"><?= $jam; ?></th>
							</tr>

							<tr>
								<th class="tb-ic-acara"><i class="mdi mdi-map-marker icon-acara"></th>
								<th class="tb-ket-acara"> Tempat</th>
								<th class="tb-anu-acara">:</th>
								<th class="tb-isi-acara"><?= $tempat; ?><br><?= $alamat; ?></th>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- ============== LOKASI =============== -->
		<div id="lokasi-konten" style="display: none;" class="konten">
			<?php foreach ($data['event'] as $row) : ?>
				<div class="section-title">
					<h2>Denah Lokasi <?= $row ?></h2>
				</div>
				<div class="col-12 maps">
					<?= $acara[$row]['link'] ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>


	<!-- ============== BOTTOM NAVIGATION =============== -->
	<nav class="mobile-bottom-nav2" id="nav">

		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px;" id="hehe">

					<div class="mobile-bottom-nav__item mobile-bottom-nav__item--active" id="sampul">
						<div class="mobile-bottom-nav__item-content">
							<i class="navbar-icon mdi mdi-home"></i>
							Sampul
						</div>
					</div>

					<div class="mobile-bottom-nav__item" id="mempelai">
						<div class="mobile-bottom-nav__item-content">
							<i class="navbar-icon mdi mdi-heart"></i>
							Mempelai
						</div>
					</div>

					<div class="mobile-bottom-nav__item" id="acara">
						<div class="mobile-bottom-nav__item-content">
							<i class="navbar-icon mdi mdi-calendar-text"></i>
							Acara
						</div>
					</div>
					<div class="mobile-bottom-nav__item" id="lain">
						<div class="mobile-bottom-nav__item-content">
							<i class="navbar-icon mdi mdi-more" id="lain"></i>
							Lain
						</div>
					</div>


				</div>
			</div>
		</div>
	</nav>
	<nav class="mobile-bottom-nav2" id="nav2" style="display: none;">

		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px; " id="hehe">
					<div class="mobile-bottom-nav__item mobile-bottom-nav__item--active" id="sampul">
						<div class="mobile-bottom-nav__item-content icons">
							<i class="navbar-icon mdi mdi-home"></i>
							Sampul
						</div>
					</div>

					<div class="mobile-bottom-nav__item" id="mempelai">
						<div class="mobile-bottom-nav__item-content icons">
							<i class="navbar-icon mdi mdi-heart"></i>
							Mempelai
						</div>
					</div>

					<div class="mobile-bottom-nav__item" id="acara">
						<div class="mobile-bottom-nav__item-content icons">
							<i class="navbar-icon mdi mdi-calendar-text"></i>
							Acara
						</div>
					</div>

					<div class="mobile-bottom-nav__item" id="ucapan">
						<div class="mobile-bottom-nav__item-content icons">
							<i class="navbar-icon mdi mdi-message-bulleted"></i>
							Ucapan
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px;">
					<div class="mobile-bottom-nav__item" id="album">
						<div class="mobile-bottom-nav__item-content icons">
							<i class="navbar-icon mdi mdi-image"></i>
							Album
						</div>
					</div>

					<div class="mobile-bottom-nav__item" id="cerita">
						<div class="mobile-bottom-nav__item-content icons">
							<i class="navbar-icon mdi mdi-chart-bubble"></i>
							Cerita Kita
						</div>
					</div>


					<div class="mobile-bottom-nav__item" id="lokasi">
						<div class="mobile-bottom-nav__item-content icons">
							<i class="navbar-icon mdi mdi-map-marker"></i>
							Lokasi
						</div>
					</div>


					<div class="mobile-bottom-nav__item">
						<div class="mobile-bottom-nav__item-content icons">
							<i class="navbar-icon mdi mdi-close-circle" style="color:red;" id="tutup"></i>
							Tutup
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</body>

<div class="dekorasi-all dekorasi-all-bawah">
	<!-- GAMBAR DEKORASI TENGAH -->
	<!-- <img class="imgbawah" src="<?php echo base_url() ?>/themes/tealflower/img/bottom_flower.png" >  -->
	<!-- GAMBAR DEKORASI KIRI -->
	<!-- <img class="imgbawah-kanan" src="<?php echo base_url() ?>/themes/tealflower/img/kanan-bawah.png" >  -->
	<!-- GAMBAR DEKORASI KIRI -->
	<img class="imgbawah-kiri" src="<?php echo base_url() ?>/themes/tealflower/img/kiri-bawah.png">
</div>

<div class="dekorasi-sampul dekorasi-sampul-bawah">
	<!-- GAMBAR DEKORASI TENGAH -->
	<!-- <img class="imgbawah" src="<?php echo base_url() ?>/themes/tealflower/img/bottom_flower.png" >  -->
	<!-- GAMBAR DEKORASI KIRI -->
	<!-- <img class="imgbawah-kanan" src="<?php echo base_url() ?>/themes/tealflower/img/kanan-bawah.png" >  -->
	<!-- GAMBAR DEKORASI KIRI -->
	<!-- <img class="imgbawah-kiri" src="<?php echo base_url() ?>/themes/tealflower/img/kiri-bawah.png" > -->
</div>



<!-- mengirimkan data php ke javascript -->
<script>
	var base_url = '<?= base_url() ?>';
</script>
<script>
	var tanggal_akad = '<?= $acara['Aqad']['tanggal']; ?>';
</script>
<script>
	var tanggal_resepsi = '<?= $acara['Walimah']['tanggal']; ?>';
</script>
<!-- mengirimkan data php ke javascript -->

<!-- JS AREA -->
<script src="<?php echo base_url() ?>/themes/tealflower/js/moment-with-locales.js"></script>
<script src="<?php echo base_url() ?>/themes/tealflower/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/themes/tealflower/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/themes/tealflower/js/jquery-plugin-collection.js"></script>
<script src="<?php echo base_url() ?>/themes/tealflower/js/script.js"></script>

</html>