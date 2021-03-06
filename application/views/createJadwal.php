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

			  	<a class="brand" href="<?php echo base_url('index.php/pelatih/homePelatih')?>">Home</a>

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
								<a href="<?php echo base_url('index.php/pelatih/beritaKhusus') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Informasi Khusus
								</a>
							</li>
							<li class="active">
								<a href="<?php echo base_url('index.php/pelatih/createJadwal') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Jadwal latihan
								</a>
							</li>
							
						</ul><!--/.widget-nav-->
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Buat Jadwal Latihan</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
										<?php echo form_open('pelatih/createJadwal') ?>
											Hari : <br> 
											<input type = "text" name="hari" placeholder="Masukkan hari latihan"></br>
											Tanggal : <br> 
											<input type = "text" name="tanggal" placeholder="Masukkan Tanggal"></br>			
											Waktu : <br> 
											<input type = "text" name="waktu" placeholder="Masukkan Waktu"></br>			
											Keterangan : <br> 
											<input type = "text" name="keterangan" placeholder="Masukkan keterangan"></br>			
											Nama Ekstrakulikuler : <br> 
											<input type = "text" name="NamaEkstrakulikuler" placeholder="Nama Ekstrakulikuler"></br>	
											<input type = "submit" name="submit" value="submit"></br>		
										<?php echo form_close() ?>

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