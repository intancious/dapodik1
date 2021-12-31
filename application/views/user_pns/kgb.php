<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("_partials/head.php") ?>


<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->load->view("_partials/sidebar.php") ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view("_partials/topbar.php") ?>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

					</div>

					<!-- Content Row -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">List Data KGB</h6>
						</div>
						<div class="card-header">
							<a href="<?php echo site_url('Cobax') ?>" class="btn btn-info">Tambah KGB</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Gaji Pokok Lama</th>
											<th>Gaji Pokok Baru</th>
											<th>Masa Kerja</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>2.000.000</td>
											<td>4.000.000</td>
											<td>30 Tahun</td>
											<td>PNS</td>
											<td>
												<a href="#" class="btn btn-success btn-sm">Edit</a>
												<a href="#" class="btn btn-warning btn-sm">Lihat</a>
												<a href="#" class="btn btn-danger btn-sm">Hapus</a>

											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>5.000.000</td>
											<td>41.000.000</td>
											<td>100 Tahun</td>
											<td>PNS</td>
											<td>
												<a href="#" class="btn btn-success btn-sm">Edit</a>
												<a href="#" class="btn btn-warning btn-sm">Lihat</a>
												<a href="#" class="btn btn-danger btn-sm">Hapus</a>

											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>



					<!-- Content Row -->
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<?php $this->load->view("_partials/footer.php") ?>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<?php $this->load->view("_partials/js.php") ?>

</body>

</html>
