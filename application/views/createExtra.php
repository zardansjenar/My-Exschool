<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Admin</title>
	<link type="text/css" href="<?php echo base_url('files/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/css/theme.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/images/icons/css/font-awesome.css') ?>" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="<?php echo base_url('index.php/admin/homeAdmin')?>"> Home </a>

			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="<?php echo base_url('index.php/admin/dataSekolah') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Input Data Extrakulikuler
								</a>
							</li>
							<li class="active">
								<a href="<?php echo base_url('index.php/admin/createPelatih') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Tambah Pelatih
								</a>
							</li>
							<li class="active">
								<a href="<?php echo base_url('index.php/admin/createExtrakulikuler') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Tambah Extrakulikuler
								</a>
							</li>
							<li class="active">
								<a href="<?php echo base_url('index.php/admin/createSiswa') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Tambah Siswa
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/admin/beritaUmum') ?>">
									<i class="menu-icon icon-circle-arrow-up"></i>
									Buat Berita Umum
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/admin/view') ?>">
									<i class="menu-icon icon-table"></i>
									Kelola Siswa 
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/admin/view') ?>">
									<i class="menu-icon icon-table"></i>
									Kelola Pelatih 
								</a>
							</li>
						</ul><!--/.widget-nav-->
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Tambahkan Data Extrakulikuler</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
										<?php echo form_open('admin/inputDataExtra'); ?>
		
											Nama extrakulikuler : <br> 
											<input type = "text" name="nama" placeholder="Masukkan nama"></br>
											Npsn : <br> 
											<input type = "text" name="npsn" placeholder="Masukkan kode sekolah"></br>
											Hari : <br> 
											<input type = "text" name="hari" placeholder="Masukkan hari"></br>
											Waktu : <br> 
											<input type = "text" name="waktu" placeholder="Masukkan waktu"></br>			
											Lokasi : <br> 
											<input type = "text" name="lokasi" placeholder="Masukkan Lokasi"></br>			
											Keterangan : <br> 
											<input type = "text" name="keterangan" placeholder="Masukkan keterangan"></br>			
											Nip : <br> 
											<input type = "text" name="nip" placeholder="Nip pelatih"></br>			
													
											<input type = "submit" name="submit" value="submit"></br>			
										<?php echo form_close(); ?>
									</div>
								</div>
								
                            </div><!--/.module-body-->
						</div><!--/.module-->
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			
		</div>
	</div>
</body>
</html>