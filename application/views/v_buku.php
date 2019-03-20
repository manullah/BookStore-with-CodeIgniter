<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Buku</h2>
  </div>
</header>

<div class="table-agile-info">
	<div class="panel panel-default">
		<div class="container-fluid">
			<?php if ($this->session->flashdata('pesan')!=null) {
			echo "<br><div class='alert alert-success'>".$this->session->flashdata('pesan')."</div>";
			} ?>
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
					<td>Judul Buku</td>
					<td>Tahun</td>
					<td>Harga</td>
					<td>Kategori</td>
					<td>Penerbit</td>
					<td>Penulis</td>
					<td>Stok</td>
					<td>Foto Cover</td>
					<td>Action</td>
				</tr></thead>
				<tbody style="background-color: #CFD8DC;">
				<?php $no=0; foreach ($tampil_buku as $buku) : $no++;?>

				<tr>
					<td><?=$no?></td>
					<td><?=$buku->judul_buku?></td>
					<td><?=$buku->tahun?></td>
					<td><?=number_format($buku->harga)?></td>
					<td><?=$buku->nama_kategori?></td>
					<td><?=$buku->penerbit?></td>
					<td><?=$buku->penulis?></td>
					<td><?=$buku->stok?></td>
					<td><img src="<?=base_url('assets/gambar/'.$buku->gambar_buku)?>" style="width:50px"></td>
					<td>
						<a href="#edit" onclick="edit('<?=$buku->kode_buku?>')" class="btn btn-success" data-toggle="modal">Edit</a>
						<a href="<?=base_url('index.php/buku/hapus/'.$buku->kode_buku)?>" onclick="return confirm('Yakin untuk menghapus?')" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
			</table>
			<br/>
	
		</div>
	</div>
	<div class="modal" id="tambah">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
					</button>
				</div>
				<form action="<?=base_url('index.php/buku/tambah')?>" method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Judul Buku</label></div>
							<div class="col-sm-7">
								<input type="text" name="judul_buku" required="form-control" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Tahun</label></div>
							<div class="col-sm-7">
								<input type="number" name="tahun" required="form-control" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Harga</label></div>
							<div class="col-sm-7">
								<input type="number" name="harga" required="form-control" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Kategori</label></div>
							<div class="col-sm-7">
								<select name="kategori" required="form-control" class="form-control">
									<?php foreach ($kategori as $kat): ?>
										<option value="<?=$kat->kode_kategori?>">
											<?=$kat->nama_kategori ?>
										</option> 
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Foto Cover</label></div>
							<div class="col-sm-7">
								<input type="file" name="gambar" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Penerbit</label></div>
							<div class="col-sm-7">
								<input type="text" name="penerbit" required="form-control" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Penulis</label></div>
							<div class="col-sm-7">
								<input type="text" name="penulis" required="form-control" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Stok</label></div>
							<div class="col-sm-7">
								<input type="number" name="stok" required="form-control" class="form-control">
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
				<form action="<?=base_url('index.php/buku/buku_update')?>" method="post" enctype="multipart/form-data">
					<input type="hidden" name="kode_buku" id="kode_buku">
					<div class="modal-body">
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Judul Buku</label></div>
							<div class="col-sm-7">
								<input type="text" name="judul_buku" id="judul_buku" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Tahun</label></div>
							<div class="col-sm-7">
								<input type="number" name="tahun" id="tahun" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Harga</label></div>
							<div class="col-sm-7">
								<input type="number" name="harga" id="harga" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Kategori</label></div>
							<div class="col-sm-7">
								<select name="kategori" id="kategori" class="form-control">
									<?php foreach ($kategori as $kat): ?>
										<option value="<?=$kat->kode_kategori?>">
											<?=$kat->nama_kategori ?>
										</option> <?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Foto Cover</label></div>
							<div class="col-sm-7">
								<input type="file" name="gambar" id="gambar" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Penerbit</label></div>
							<div class="col-sm-7">
								<input type="text" name="penerbit" id="penerbit" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Penulis</label></div>
							<div class="col-sm-7">
								<input type="text" name="penulis" id="penulis" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-3 offset-1"><label>Stok</label></div>
							<div class="col-sm-7">
								<input type="number" name="stok" id="stok" class="form-control">
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
</div>


<script type="text/javascript">
$(document).ready(function(){
		$('example').DataTable();
	}
	);
	function edit(a) {
		$.ajax({
			type:"post",
			url:"<?=base_url()?>index.php/buku/edit_buku/"+a,
			dataType:"json",
			success:function(data){
				$("#kode_buku").val(data.kode_buku);
				$("#judul_buku").val(data.judul_buku);
				$("#tahun").val(data.tahun);
				$("#harga").val(data.harga);
				$("#kategori").val(data.kode_kategori);
				$("#penerbit").val(data.penerbit);
				$("#penulis").val(data.penulis);
				$("#stok").val(data.stok);

			}
		});
	}
</script>
