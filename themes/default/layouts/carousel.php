<!-- TODO: Ulangi di sini karena tidak jalan kalau tidak -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.cycle2.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.cycle2.carousel.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.carousel').cycle({
			fx: 'carousel',
			pauseOnPagerHover: true,
			speed: 5000,
			timeout: '1',
			easing: 'linear'
		});
	});

	function tampil_artikel(id_artikel){
		href = window.location.href;
		first = '/first';
		url = href.substring(0,href.indexOf(first)+first.length)+'/artikel/'+id_artikel;
		window.location = url;
	}
</script>
<div class="carousel">
    <?php foreach ($slide as $gambar) : ?>
    	<?php if(is_file(LOKASI_FOTO_ARTIKEL.'kecil_'.$gambar['gambar'])) : ?>
		    <img src="<?php echo base_url().LOKASI_FOTO_ARTIKEL.'kecil_'.$gambar['gambar']?>" data-artikel="<?php echo $gambar['id']?>" onclick="tampil_artikel($(this).data('artikel'));">
		   <?php endif; ?>
	  <?php endforeach; ?>
</div>