<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
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

			  	<a class="brand" href="<?php echo base_url('index.php/admin/homeAdmin')?>">Home</a>

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
								<h3>Kelola Data siswa</h3>
							</div>
							<div class="module-body table">
									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
										<thead>
											<tr>
												<th><center>No</center></th>
												<th><center>Nip</center></th>
												<th><center>pelatih Ekstrakulikuler</center></th>
												<th><center>Nama</center></th>
												<th><center>Alamat</center></th>
												<th><center>Tanggal lahir</center></th>
												<th><center>Email</center></th>
												<th><center>Jenis Kelamin</center></th>
												<th><center>Password</center></th>
											</tr>
										</thead>
										<tbody>
												<?php 
													$no = $this->uri->segment('3') + 1;
													foreach($user as $u){ 
												?>
												<tr>
												  <td><?php echo $no++; ?></td>
												  <td><?php echo $u->nip ?></td>
												  <td><?php echo $u->pelatih ?></td>
												  <td><?php echo $u->nama ?></td>
												  <td><?php echo $u->alamat ?></td>
												  <td><?php echo $u->tl?></td>
												  <td><?php echo $u->no_telp?></td>
												  <td><?php echo $u->email ?></td>
												  <td><?php echo $u->jk?></td>
												  <td><?php echo $u->password?></td>
												  
												  <td><center> <a href="<?php echo base_url('index.php/admin/editPelatih/'.$u->nip)?>">edit</a> | 
													<a href="<?php echo base_url('index.php/pelatih/deletePelatih/'.$u->nip)?> ">hapus</a> </center></td>
												</tr>
												<?php } ?>
										</tbody>
										<tfoot>
												
										</tfoot>
									</table>
									<?php 
										echo $this->pagination->create_links();
									?>
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