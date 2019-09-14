<?php $this->load->view('user/v_header') ?>
<div class="header-banner">
				<div class="container">
					<h2> gallery </h2>
				</div>
			</div>
<!--gallery-->
		<div class="content">
			<div class="gallery-section">
				<div class="container">
					<div class="gallery-grids">
						<?php foreach ($galeri as $key) {?>
						<div class="col-md-4 gallery-grid">
							<div class="gallery">
								<a class="mask" href="<?php echo base_url('assets/uploads/files/').$key->nama_gambar ?>"><img src="<?php echo base_url('assets/uploads/files/').$key->nama_gambar ?>" class="img-responsive zoom-img" alt="/" title="image-name"></a>
							</div>	
						</div>
					<?php } ?>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
<!--gallery-->

			<div class="specials-section">
				<div class="container">
					<div class="specials-grids">
						<div class="col-md-3 specials">
							<h3>Social</h3>
							<ul>
								<li><a href="#">facebook</a></li>
								<li><a href="#">twitter</a></li>
								<li><a href="#">google+</a></li>
								<li><a href="#">vimeo</a></li>
							</ul>
						</div>
						<div class="col-md-3 specials">
							<h3>About</h3>
							<p>Morbi pretium gravida justo nec ultrices. Ut et facilisis justo. Fusce ac turpis eros, vel molestie lectus.feugiat velit velit non turpis</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
<?php $this->load->view('user/v_footer') ?>
