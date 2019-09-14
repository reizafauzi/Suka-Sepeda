<?php $this->load->view('user/v_header') ?>
<div class="header-banner">
				<div class="container">
					<h2> Suku Cadang </h2>
				</div>
			</div>
<div class="content">
	<div class="services">
		<div class="container">
			<div class="service-grids">
				<?php foreach ($sukuCadang as $key) {?>
				<div class="col-md-4 service-grid">
					<img src="<?php echo base_url('assets/uploads/files/').$key->gambar; ?>" class="img-responsive" alt=""/>
					<h4><?php echo $key->nama ?> </h4>
					<p><?php echo $key->isi ?></p>
				</div>
				<?php } ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('user/v_footer') ?>

			<!--services-->
				<!--features-->
				