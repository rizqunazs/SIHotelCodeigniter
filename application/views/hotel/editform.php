<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Room Hotel Mulya</h1>
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
	<form method="post" action="<?php echo base_url(); ?>index.php/hotel/UpdateForm">
      <!-- Default box -->
	  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Room</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">

                  <div class="form-group">
                    <label for="kode">Kode Room :</label>
					</br>
					<input type="hidden" class="form-control" id="exampleInputText1" name="kode"  value="<?= $hotel['kode']; ?>"  size="50">
					<?=form_error('kode');?>
				</div>

                  <div class="form-group">
                    <label for="room">Jenis Room :</label>
</br>
                    <?php
foreach($query->result_array() as $row)
{
	$options[$row['idroom']]=$row['namaroom'];
}
/*
$options = array(
	'DLX' => 'Deluxe',
	'EXC' =>' Executive'
);
*/
$room=set_value('room', $hotel['room']);
echo form_dropdown('room', $options, $room);
?>
                  </div>

                  <div class="form-group">
                    <label for="kode">Nama Room :</label>
					</br>
					<input type="text" class="form-control" id="exampleInputText1" name="nama"  value="<?= $hotel['nama']; ?>"  size="50" >
					<?=form_error('nama');?>
                  </div>

				  <div class="form-group">
                    <label for="kode">Harga Room :</label>
					</br>
					<input type="text" class="form-control" id="exampleInputText1" name="harga"  value="<?= $hotel['harga']; ?>"  size="50" >
					<?=form_error('harga');?>
				</div>

				  <div class="form-group">
                    <label for="kode">Kapasitas :</label>
					</br>
					<?php
				$kapasitas = array(
					'1'  => '1 orang',
					'2'    => '2 orang ',
					'3'   => '3 orang',
					'4' => '4 orang',  
					'5' => '5 orang'           
				);
				$kps=set_value('kapasitas', $hotel['kapasitas']);
				echo form_multiselect('kapasitas', $kapasitas,$kps); 
				?>

                  </div>

				  <div class="form-group">
                    <label for="jenis">Ketersediaan Sarapan :</label>
					</br>
					<input type="radio" name="jenis" value="SarapanGratis"<?php 
					 echo ($hotel['jenis']) == 'SarapanGratis' ? 'checked' : ''; 
					 ?>/>Sarapan Gratis<br>
					<input type="radio" name="jenis" value="TanpaSarapan"<?php 
					 echo ($hotel['jenis']) == 'Tanpa Sarapan' ? 'checked' : ''; 
					 ?>/>Tanpa Sarapan<br>
                  </div>

				  <div class="form-group">
                    <label for="kode">Fasilitas :</label>
					</br>
					<?php
	$settextarea = array(
		'name' => 'fasilitas',
		'rows' => '4',
		'cols' => '50',
		'value' => $hotel['fasilitas']
	);

	echo form_textarea($settextarea) ?>
		<div class="form-text text-danger"><?=form_error('fasilitas');?></div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                </div>
				<div><button type="submit" name="submit" class="btn btn-primary">Update</button></div>
              </form>
            </div>
      <!-- /.card -->

    </section>
   
  </div>
  

  


