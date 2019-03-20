<h2>Nota Transaksi</h2>
No Transaksi : <?=$transaksi->kode_transaksi?><br>
Nama Kasir : <?=$transaksi->nama_user?><br>
Nama Pembeli : <?=$transaksi->nama_pembeli?><br>
Tanggal : <?=$transaksi->tgl?>

<table border="1" style="border-collapse: collapse;">
	<tr>
		<th>No</th>
		<th>Judul Buku</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Subtotal</th>
	</tr>
	<?php $no=0; foreach ($this->trans->detail_transaksi($transaksi->kode_transaksi) as $buku): $no++; ?>
	<tr>
		<th><?=$no?></th>
		<th><?=$buku->judul_buku?></th>
		<th><?= number_format($buku->harga)?></th>
		<th><?=$buku->jumlah?></th>
		<th><?= number_format(($buku->harga*$buku->jumlah))?></th>
	</tr>
	<?php endforeach ?>
	<tr>
		<th colspan="4">Total</th>
		<th><?= number_format($transaksi->total)?></th>
	</tr>
</table>

<script type="text/javascript">
	window.print();
	location.href="<?=base_url('index.php/transaksi')?>";
</script>
