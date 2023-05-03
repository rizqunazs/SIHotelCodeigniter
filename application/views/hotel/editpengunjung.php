<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Tambah Room Hotel Mulya</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url('login/logout');?>">Logout</a></li>
           
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
	<form method="post" action="<?php echo base_url(); ?>index.php/pengunjung/UpdateForm">
      <!-- Default box -->
	  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pengunjung</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                

                  <div class="form-group">
                    <label for="id_pengunjung">ID Pengunjung :</label>
                    </br>
					<input type="hidden" class="form-control" id="exampleInputText1" name="id_pengunjung"  value="<?= $pengunjung['id_pengunjung']; ?>"  size="50">
					<?=form_error('id_pengunjung');?>
                  </div>

                  <div class="form-group">
                    <label for="nama_pengunjung">Nama Pengunjung :</label>
					</br>
					<input type="text" class="form-control" id="exampleInputText1" name="nama_pengunjung"  value="<?= $pengunjung['nama_pengunjung']; ?>"  size="50">
					<?=form_error('nama_pengunjung');?>
                  </div>

				  <div class="form-group">
                    <label for="no_ktp">No.KTP :</label>
					</br>
					<input type="text" class="form-control" id="exampleInputText1" name="no_ktp"  value="<?= $pengunjung['no_ktp']; ?>"  size="50">
					<?=form_error('no_ktp');?>
                  </div>
                  <div class="form-group">
                    <label for="no_tlpn">No.Tlpn :</label>
					</br>
					<input type="text" class="form-control" id="exampleInputText1" name="no_tlpn"  value="<?= $pengunjung['no_tlpn']; ?>"  size="50">
					<?=form_error('no_tlpn');?>
                  </div>

				 
				  <div class="form-group">
                    <label for="alamat">Alamat :</label>
					</br>
					<?php
	$settextarea = array(
		'name' => 'alamat',
		'rows' => '4',
		'cols' => '50',
        'value' => $pengunjung['alamat']
	);

	echo form_textarea($settextarea) ?>
		<div class="form-text text-danger"><?=form_error('alamat');?></div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
				<?php
echo form_submit('submit','Edit',"class='btn btn-primary'");
	  echo form_close();
	?>
                </div>
              </form>
            </div>
      <!-- /.card -->

    </section>
   
  </div>
  

  


