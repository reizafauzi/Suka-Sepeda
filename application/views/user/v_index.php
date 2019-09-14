<?php $this->load->view('user/v_header');//mangambil file hieder ?>
<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
		<section class="slider2">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slider-info">
							<img src="<?php echo base_url('assets/user/') ?>images/ban.jpg" class="img-responsive" alt="">
						</div>
					</li>
					<li>
						<div class="slider-info">
							<img src="<?php echo base_url('assets/user/') ?>images/ban1.jpg" class="img-responsive" alt="">
						</div>
					</li>
					<li>	
						<div class="slider-info">
							<img src="<?php echo base_url('assets/user/') ?>images/ban2.jpg" class="img-responsive" alt="">
						</div>
					</li>
					
				</ul>
			</div>
		</section>
			<!--FlexSlider-->
				 <script defer src="<?php echo base_url('assets/user/') ?>js/jquery.flexslider.js"></script>
					<script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
					</script>			
			<!--FlexSlider-->
	<!-- slider -->
		<!--end header-section-->
			<!--banner-->
		<section class="slider2">
			<div class="flexslider">
				<ul class="slides">
					<li>
						
					</li>
					
				</ul>
			</div>
		</section>
			<!--FlexSlider-->
				 <script defer src="<?php echo base_url('assets/user/') ?>js/jquery.flexslider.js"></script>
					<script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
					</script>			
			<!--FlexSlider-->
	<!-- slider -->
						
		<!--banner-->	<!--welcome-->
	<div class="content">
		<div class="welcome">
			<div class="container">
				
					<div class="welcome-grids">
						<div class="col-md-6 welcome-grid">
							<img src="<?php echo base_url('assets/user/') ?>images/p1.jpg" alt="" width="514" height="431" class="img-responsive">
						</div>
						<div class="col-md-6 welcome-grid1">
							<h2>Selamat Datang</h2>
							<h4>suka sepeda modifikasi</h4>
							<p>Modifikasi Sepeda adalah sebuah kegiatan yang merubah struktur maupun model sepeda dari Standar Produksi Masal menjadi sebuah model atau Struktur baru sehingga memiliki ukuran dan tampilan yang berbeda dari asalnya. Melakukan Modifikasi Sepeda bisa membuat sepeda terlihat Unik dan terkesan model terbatas (Limited Edition)..</p>
							
								<div class="welcomes-grids">
									<div class="col-md-4 welcomes-grid">
										<img src="assets/user/images/w1.JPG" alt="" width="510" height="340" class="img-responsive">									</div>
									<div class="col-md-4 welcomes-grid">
										<img src="assets/user/images/w2.jpg" alt="" width="526" height="396" class="img-responsive">
									</div>
									<div class="col-md-4 welcomes-grid">
										<img src="assets/user/images/w3.jpg" alt="" width="527" height="341" class="img-responsive">
									</div>
									<div class="clearfix"></div>
								</div>
						</div>
						<div class="clearfix"></div>
					</div>
			</div>
		</div>
		<!--welcome-->
		
			
<?php $this->load->view('user/v_footer') ?>