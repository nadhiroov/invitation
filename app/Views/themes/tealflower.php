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
			<a style="font-weight: normal;font-size:18px;"><?= $data['name'] ?></a><br>
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
		<!-- <audio loop src="<?php echo base_url() ?><?= $voice ?>" id="audio"></audio> -->

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
					$row = strtolower($row);
					$long = explode(',', $acara[$row]['alamat'])[0];
					$lat = explode(',', $acara[$row]['alamat'])[1];
					$tanggal =  $acara[$row]['tanggal'];
					// $tanggal =  date('l, d F Y', strtotime($acara[$row]['tanggal']));
					$jam =  $acara[$row]['jam'];
					$tempat =  $acara[$row]['tempat'];
					$link =  "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3368.8049075400963!2d34.7824822488608!3d32.08574324875034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0!2zMzcuMDg1NzQzMjQ4NzUwMzQmJzg0Ljc4MjQ4MjIyODg2MDg!5e0!3m2!1sen!2sid!4v1664500882029!5m2!1sen!2sid?pb=!1m18!1m3!1d<zoom_level>!2d$long!3d$lat!2m3!1e0!2s!3s!3m2!1i1024!2i768!4f13.1!3m3!1m2!1d0x0!2d0!5e0!3m2!1sen!4v<timestamp>!5m2!1s1!2s0";
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
								<th class="tb-isi-acara" id="tanggal-acara-<?= $row?>"><?= $tanggal; ?></th>
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
								<th class="tb-isi-acara"><?= $tempat; ?></th>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- ============== UACAPAN/KOMENTAR =============== -->
		<div id="ucapan-konten" style="display: none;" class="konten">

			<div class="col-12 ucapan-field">
				<div class="section-title">
					<h2>Beri Ucapan</h2>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<input type="hidden" value="<?= $mempelai['id_user'] ?>" id="id">
							<input id="nama" type="text" class="form-control mt-2" placeholder="Nama Anda" value="<?= $data['name'] ?>" required readonly>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<textarea id="komentar" class="form-control" id="exampleFormControlTextarea1" placeholder="Pesan anda.." rows="3" required><?= @$ucapan['komen']; ?></textarea>
						</div>
					</div>
					<div class="col-12">
						<button id="submitKomen" <?= @$ucapan != null ? 'disabled' : '' ?> class="btn btn-primary btn-block">Kirim</button>
						<img src="<?= base_url() ?>/base/img/loadinga.svg" height="30px" style="display:none;" id="loading_">
					</div>
				</div>
			</div>
			<div class="komen-netizen">
				<div class="layout-komen">
					<?php foreach ($response as $row) { ?>
						<div class="komen">
							<div class="col-12 komen-nama">
								<?= \esc($row['name']); ?>
							</div>
							<div class="col-12 komen-isi">
								<?= \esc($row['komen']); ?>
							</div>
							<?php if (isset($row['resp']) && ($row['resp'] != null || $row['resp'] != '')) : ?>
								<div class="col-12 komen-isi">
									<?= \esc($row['resp']); ?>
								</div>
							<?php endif; ?>
						</div>
					<?php } ?>
				</div>
				<a href="#" id="loadMore" class="btn btn-primary btn-block" role="button">Lebih Banyak.</a>
			</div>


		</div>

		<!-- ============== LOKASI =============== -->
		<div id="lokasi-konten" style="display: none;" class="konten">
			<?php foreach ($data['event'] as $row) : ?>
				<div class="section-title">
					<h2>Denah Lokasi <?= $row ?></h2>
				</div>
				<div class="col-12 maps">
					<?= $acara[$row]['link'] ?? '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3368.8049075400963!2d34.779347606527104!3d32.08275326956897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4ca6193b7c1f%3A0xc1fb72a2c0963f90!2sTel%20Aviv-Yafo%2C%20Israel!5e0!3m2!1sen!2sid!4v1722526316328!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>' ?>
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

					<?php if ($setting['ucapan'] == 1) : ?>
						<div class="mobile-bottom-nav__item" id="ucapan">
							<div class="mobile-bottom-nav__item-content icons">
								<i class="navbar-icon mdi mdi-message-bulleted"></i>
								Ucapan
							</div>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>

		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px;">
					<?php if ($setting['galeri'] == 1) : ?>
						<div class="mobile-bottom-nav__item" id="album">
							<div class="mobile-bottom-nav__item-content icons">
								<i class="navbar-icon mdi mdi-image"></i>
								Album
							</div>
						</div>
					<?php endif; ?>

					<?php if ($setting['cerita'] == 1) : ?>
						<div class="mobile-bottom-nav__item" id="cerita">
							<div class="mobile-bottom-nav__item-content icons">
								<i class="navbar-icon mdi mdi-chart-bubble"></i>
								Cerita Kita
							</div>
						</div>
					<?php endif; ?>


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

<!-- mengirimkan data php ke javascript -->

<!-- JS AREA -->
<script src="<?php echo base_url() ?>/themes/tealflower/js/moment-with-locales.js"></script>
<script src="<?php echo base_url() ?>/themes/tealflower/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/themes/tealflower/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/themes/tealflower/js/jquery-plugin-collection.js"></script>
<script src="<?php echo base_url() ?>/themes/tealflower/js/script.js"></script>

</html>