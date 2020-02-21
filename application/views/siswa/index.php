<?=$this->session->flashdata('message');?>

<a href="<?=base_url('kesiswaan/tambah');?>" class="btn btn-primary mb-2">Tambah Data</a>

<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover table-sm" id="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nama</th>
	      <th scope="col">JK</th>
	      <th scope="col">NIS</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $no=1; foreach($data as $data): ?>
	    <tr>
	      <th scope="row"><?=$no++;?></th>
	      <td><?=$data->nama;?></td>
	      <td><?=$data->jk;?></td>
	      <td><?=$data->nis;?></td>
	      <td>
	      	<a href="<?=base_url('kesiswaan/ubah/'.$data->id);?>" class="btn btn-primary btn-sm">Ubah</a>
	      	<a href="<?=base_url('kesiswaan/hapus/'.$data->id);?>" class="btn btn-danger btn-sm">Hapus</a>
	      </td>
	    </tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
</div>