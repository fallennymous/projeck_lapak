<dir class="container-fluid">


	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
	 
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url('assets/img/backgrounds.PNG') ?>" class="d-block w-100" alt="...">
	    </div>
	  </div>
	
	</div>

	<div class="row text-center mt-3">	
		<?php foreach ($barang as $brg) : ?>

			<div class="card ml-3 mb-3" style="width: 16rem;">
  			<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
 				<div class="card-body">
    				<h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
    				<small><?php echo $brg->keterangan?></small><br>
    				<span class="badge badge-pill badge-success mb-3">Rp. <?php echo $brg->harga?></span><br>
    				<a href="#" class="btn btn-sm btn-primary">Pre-Order</a>
    				<a href="#" class="btn btn-sm btn-success">Detail</a>
  				</div>
			</div>

		<?php endforeach; ?>	

	</div>
</dir>