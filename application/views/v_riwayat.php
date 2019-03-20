<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Riwayat Transaksi</h2>
  </div>
</header>
<br>
<div class="container-fluid">
	<br><br>
	<div class="row">
		<div class="col-md-12">
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
						<td>Kode Transaksi</td>
						<td>Nama Pembeli</td>
						<td>Total</td>
						<td>Tanggal</td>
						<td>Nama Kasir</td>
					</tr></thead>
					<tbody style="background-color: #CFD8DC;">
					<?php $no=0; foreach ($tampil_riwayat as $riwayat) : $no++;?>

					<tr>
						<td><?=$no?></td>
						<td><?=$riwayat->kode_transaksi?></td>
						<td><?=$riwayat->nama_pembeli?></td>
						<td><?=number_format($riwayat->total)?></td>
						<td><?=$riwayat->tgl?></td>
						<td><?=$riwayat->nama_user?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>