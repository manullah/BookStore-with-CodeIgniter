<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Transaksi</h2>
  </div>
</header>
<br>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-7">
	<table class="table" id="example" style="background-color: #eef9f0;">
		<thead style="background-color: #b3cdf9;">
			<tr>
				<th>No</th>
				<th>Judul Buku</th>
				<td>Kategori</td>
				<th>Harga</th>
				<th>Stok</th>
				<th>Aksi</th>
			</tr>

		</thead>
		<tbody style="background-color: #d1e2ff;">
		<?php $no=0; foreach ($tampil_buku as $buku): $no++; ?>
		<tr>
		
			<td><?=$no?></td>
			<td><?=$buku->judul_buku?></td>
			<td><?=$buku->nama_kategori?></td>
			<td><?=$buku->harga?></td>
			<td><?=$buku->stok?></td>
			<td><a href="<?=base_url('index.php/transaksi/addcart/'.$buku->kode_buku)?>"><span class="fa fa-shopping-cart" aria-hidden="true"></span></a></td>
		</tr>
	<?php endforeach ?>
		
		</tbody>
	</table>
</div>
<div class="col-md-5">
	<form action="<?=base_url('index.php/transaksi/simpan')?>" method="post">
	
		Nama Kasir : <select name="kode_user" class="form-control">
		<option></option>
		<?php foreach ($transaksi as $transaksi): ?>
			<option value="<?=$transaksi->kode_user?>"><?=$transaksi->nama_user?></option>
			<?php endforeach ?>
			</select>
			Nama Pembeli : <input type="text" name="nama_pembeli" class="form-control"><br>
		<table class="table " id="example" style="background-color: #eef9f0;">
		<tr>
			<td>No</td>
			<td>Judul Buku</td>
			<td>Jumlah</td>
			<td>Harga</td>
			<td>Subtotal</td>
			<td>Action</td>
		</tr>
		<?php $no=0; foreach ($this->cart->contents() as $items): $no++; ?>
		<input type="hidden" name="kode_buku[]" value="<?=$items['id']?>">
		<input type="hidden" name="rowid[]" value="<?=$items['rowid']?>">

 
		<tr>
			<td><?=$no?></td>
			<td><?=$items['name']?></td>
			<td width="1"><input type="text" name="qty[]" value="<?=$items['qty']?>" class="form-control" style="padding:4px;"></td>
			<td><?=number_format($items['price'])?></td>
			<td><?=number_format($items['subtotal'])?></td>
			<td><a href="<?=base_url('index.php/transaksi/hapus_cart/'.$items['rowid'])?>" class="btn btn-default"><span class="fa fa-trash" aria-hidden="true"></span></a></td>
		</tr>
		<?php endforeach  ?>
			<input type="hidden" name="total" value="<?=$this->cart->total()?>">
			<th colspan="4">Total Bayar</th>
			<th><?=number_format($this->cart->total())?></th>
			<th></th>
				
			</tr>
		</table>
		<input type="submit" name="update" value="Update Jumlah" class="btn btn-success"> 
		<input type="submit" name="bayar" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-info" value="Bayar">
		<a class="btn btn-danger" href="<?=base_url('index.php/transaksi/clearcart')?>">Cancel</a>
	</form>
	<?php if ($this->session->flashdata('pesan')): ?>
	<div class="alert alert-warning"><?= $this->session->flashdata('pesan');?></div/>
<?php endif ?>
</div>
</div>


</div>
