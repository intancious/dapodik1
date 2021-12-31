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
					<section id="multiple-column-form">
						<div class="row match-height">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title" style="text-align: center;">Informasi Pegawai</h4>
									</div>
									<div class="card-content">
										<div class="card-body">
											<form class="form">
												<div class="row">
													<div class="col-md-6 col-12">
														<div class="form-group">
															<label for="first-name-column">Nama</label>
															<input type="text" id="first-name-column" class="form-control" placeholder="Nama Lengkap" name="fname-column">
														</div>
													</div>
													<div class="col-md-6 col-12">
														<div class="form-group">
															<label for="last-name-column">NIP</label>
															<input type="text" id="last-name-column" class="form-control" placeholder="NIP" name="lname-column">
														</div>
													</div>
													<div class="col-md-6 col-12">
														<div class="form-group">
															<label for="city-column">Pangkat</label>
															<input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
														</div>
													</div>
													<div class="col-md-6 col-12">
														<div class="form-group">
															<label for="country-floating">Jabatan</label>
															<input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<label for="company-column">Asal Instansi</label>
															<input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
														</div>
													</div>
													<div class="col-md-6 col-12">
														<div class="form-group">
															<label for="email-id-column">Gaji Pokok Lama</label>
															<input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
														</div>
													</div>
													<div class="col-md-6 col-12">
														<div class="form-group">
															<label for="email-id-column">Tanggal dan NO. SKP Terakhir</label>
															<input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
														</div>
													</div>
													<div class="col-md-6 col-12">
														<div class="form-group">
															<label for="email-id-column">TMT Gaji Lama</label>
															<input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
														</div>
													</div>
													<div class="col-md-6 col-12">
														<div class="form-group">
															<label for="email-id-column">Masa Kerja</label>
															<input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
														</div>
													</div>
													<div class="col-md-6 col-12">
														<label for="formFileSm" class="form-label">Small file input example</label>
														<input class="form-control form-control-sm" id="formFileSm" type="file">
													</div>
													<div class="form-group col-12">
														<div class='form-check'>
															<div class="checkbox">
																<input type="checkbox" id="checkbox5" class='form-check-input' checked>
																<label for="checkbox5">Remember Me</label>
															</div>
														</div>
													</div>
													<div class="col-12 d-flex justify-content-end">
														<button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
														<button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
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
