<header class="page-header">
	<div class="container-fluid">
	  	<h2 class="panel-title">Dashboard</h2>
	</div>
</header> 
<div class="main-content">
	<section class="dashboard-counts no-padding-bottom">
	    <div class="container-fluid">
	      <div class="row bg-white has-shadow">
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
	          <div class="item d-flex align-items-center">
	            <div class="icon bg-violet"><i class="fa fa-book"></i></div>
	            <a href="<?php echo base_url('index.php/buku') ?>" class="text-secondary">
	              <div class="title"><span>Jumlah<br>Buku</span></div>
	            </a>
	            <span class="number"><strong><?php echo $jml_buku->jml_buku; ?></strong></span>
	          </div>
	        </div>
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
	          <div class="item d-flex align-items-center">
	            <div class="icon bg-red"><i class="fa fa-users"></i></div>
	            <a href="<?php echo base_url('index.php/riwayat') ?>" class="text-secondary">
	              <div class="title"><span>Jumlah<br>Transaksi</span></div>
	            </a>
	            <span class="number"><strong><?php echo $jml_transaksi->jml_transaksi; ?></strong></span>
	          </div>
	        </div>
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
	          <div class="item d-flex align-items-center">
	            <div class="icon bg-violet"><i class="fa fa-user"></i></div>
	            <a href="<?php echo base_url('index.php/user') ?>" class="text-secondary">
	              <div class="title"><span>Jumlah<br>Pengguna</span></div>
	            </a>
	            <span class="number"><strong><?php echo $jml_pengguna->jml_pengguna; ?></strong></span>
	          </div>
	        </div>
	      </div>
	    </div>
	</section>
</div>
