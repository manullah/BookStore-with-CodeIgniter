<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Kategori</h2>
  </div>
</header>
<div class="container-fluid">
<div class="table-agile-info">
	<div class="panel panel-default">
<?php if ($this->session->userdata('level')=="admin"): {
	
}  ?>
	
	<?php if ($this->session->flashdata('pesan')!=null) {
	echo "<br><div class='alert alert-success''>".$this->session->flashdata('pesan')."</div>";
	} ?>
	<?php elseif ($this->session->userdata('level')=="kasir"): {
		
	} ?>
<?php endif  ?>
<br><a href="#tambah" data-toggle="modal" class="btn btn-info pull-right">Insert</a><br>
<table class="table" id="example" ui-options=ui-options="{
        &quot;paging&quot;: {
          &quot;enabled&quot;: true
        },
        &quot;filtering&quot;: {
          &quot;enabled&quot;: true
        },
        &quot;sorting&quot;: {
          &quot;enabled&quot;: true
        }}">
<thead style="background-color: #455A64; color: white">
	<tr>
		<td>#</td>
		<td>Kode Kategori</td>
		<td>Nama Kategori</td>
		<td>Action</td>
	</tr></thead>
	<tbody style="background-color: #CFD8DC;">
	<?php $no=0; foreach ($tampil_kategori as $kat) : $no++;?>

	<tr>
		<td><?=$no?></td>
		<td><?=$kat->kode_kategori?></td>
		<td><?=$kat->nama_kategori?></td>
		<td>
			<a href="#edit" onclick="edit('<?=$kat->kode_kategori?>')" class="btn btn-success" data-toggle="modal">Edit</a>
			<a href="<?=base_url('index.php/kategori/hapus/'.$kat->kode_kategori)?>" onclick="return confirm('Yakin untuk menghapus?')" class="btn btn-danger">Delete</a>
		</td>
	</tr>
<?php endforeach ?>
</tbody>
</table></div>

<div class="modal" id="tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
				</button>
			</div>
			<form action="<?=base_url('index.php/kategori/tambah')?>" method="post">
				<div class="modal-body">
					<div class="form-group row">
						<div class="col-sm-3 offset-1"><label>Kode Kategori</label></div>
						<div class="col-sm-7">
							<input type="text" name="kode_kategori" required class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3 offset-1"><label>Nama Kategori</label></div>
						<div class="col-sm-7">
							<input type="text" name="nama_kategori" required class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
				</button>
			</div>
			<form action="<?=base_url('index.php/kategori/kategori_update')?>" method="post">
				<div class="modal-body">
					<input type="hidden" name="kode_kategori_lama" id="kode_kategori_lama">
					<div class="form-group row">
						<div class="col-sm-3 offset-1"><label>Kode Kategori</label></div>
						<div class="col-sm-7">
							<input type="text" name="kode_kategori" id="kode_kategori" required class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3 offset-1"><label>Nama Kategori</label></div>
						<div class="col-sm-7">
							<input type="text" name="nama_kategori" id="nama_kategori" required class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('example').DataTable();
	}
	);
	function edit(a) {
		$.ajax({
			type:"post",
			url:"<?=base_url()?>index.php/kategori/edit_kategori/"+a,
			dataType:"json",
			success:function(data){
				$("#kode_kategori").val(data.kode_kategori);
				$("#nama_kategori").val(data.nama_kategori);
				$("#kode_kategori_lama").val(data.kode_kategori);
			}
		});
	}
</script>

