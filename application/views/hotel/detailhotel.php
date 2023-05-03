<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Data Room Hotel Mulya</h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Title</h3>

				<div class="card-tools">
					<a href="<?= base_url() ?>index.php/hotel/inputForm" class="btn btn-info">
						<i class="fas fa-plus"></i>Tambah Data</a>

				</div>
			</div>
			<div class="card-body">
				<table class="table table-hover" id="datatable">
					<thead>
						<tr>
							<th scope="col">Kode Room</th>
							<th scope="col">Jenis Room</th>
							<th scope="col">Nama Room</th>
							<th scope="col">Harga Room</th>
							<th scope="col">Kapasitas</th>
							<th scope="col">Sarapan</th>
							<th scope="col">Fasilitas</th>
							<th class="text-center" colspan="2" scope="col">Tindakan</th>
						</tr>
					</thead>
					<tbody>
						<?php

						// foreach($query->result_array() as $row){
						// 	echo "<tr>";
						// 	echo "<th>".$row['kode']."</th>";
						// 	echo "<th>".$row['room']."</th>";
						// 	echo "<th>".$row['nama']."</th>";
						// 	echo "<th>".$row['harga']."</th>";
						// 	echo "<th>".$row['kapasitas']."</th>";
						// 	echo "<th>".$row['jenis']."</th>";
						// 	echo "<th>".$row['fasilitas']."</th>";
						// 	echo "<th><button type='button' class='btn btn-light display-4'>".anchor('hotel/edit/'.$row['kode'],'Edit')."</button></th>";
						// 	echo "<th><button type='button' class='btn btn-warning display-4'>".anchor('hotel/deletekamar/'.$row['kode'],'Delete')."</button></th>";
						// 	echo "</tr>";
						// }
						?>

					</tbody>
				</table>
			</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->

	</section>

</div>
