<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modul 10</title>
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

			  	<a class="brand" href="<?php echo base_url('index.php/admin/homeAdmin')"> Admin </a>

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
									Input Data Sekolah
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
								<a href="<?php echo base_url('index.php/admin') ?>">
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
								<a href="<?php echo base_url('index.php/admin/viewSiswa') ?>">
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
								<h3>Kelola Data siswa</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
										<table border = '1' >
										<?php foreach ($siswa as $key){?>
											<tr>
												<td><?php echo $key->nisn;?></td>
												<td><?php echo $key->nama;?></td>
												<td>
													<a href="<?php echo base_url('index.php/mahasiswa/edit_mahasiswa/'.$key->nim)?>" class="btn btn-small btn-primary">Edit</a>
													<a href="<?php echo base_url('index.php/mahasiswa/delete_mahasiswa/'.$key->nim)?>" class="btn btn-small btn-danger">Delete</a>
												</td>
											</tr>
										<?php } ?>
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