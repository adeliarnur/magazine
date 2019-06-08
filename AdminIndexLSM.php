<?php
include_once 'includes/authentication.php';
id_role_harus([1, 2]);

include "includes/header-admin.php";
 ?>
 <div class="site-main-container">
 			<!-- Start top-post Area -->
 						<div class="col-lg-12">
 							<div class="hero-nav-area">
 								<h1 class="text-white">Pusat Informasi Bencana</h1>
 								<p class="text-white link-nav"><a href="index.html">SELAMAT DATANG ADMIN </a></p>
 							</div>
 						</div>

 						<section class="feedback-area section-gap" id="feedback">
 			<div class="container">
 				<div class="row justify-content-center">
 				</div>
 				<div class="row feedback-contents justify-content-between align-items-center">
 					<div class="col-lg-11 feedback-left">
 						<div class="mn-accordion" id="accordion">
 							<!--Accordion item-->
 							<div class="accordion-item">
 								<div class="accordion-heading">
 									<h3>Pra Bencana</h3>
 									<div class="icon">
 										<i class="lnr lnr-chevron-right"></i>
 									</div>
 								</div>
 								<div class="accordion-content">
 									<p>Fitur ini menjelaskan tentang apa saja yang harus disiapkan sejak dini. fitur ini juga dilengkapi 3 sub-kategori,
 									Yaitu persiapan diri, persiapan didalam rumah, dan persiapan diluar rumah. Dengan adanya fitur ini diharapkan para pengguna
 									mampu menyiapkan hal-hal yang perlu disiapkan agar para pengguna lebih siap dengan adanya bencana dan diharapkan juga hal ini mengurangi korban bencana yang meninggal</p>
 								</div>
 							</div>
 							<!--Accordion item-->
 							<!--Accordion item-->
 							<div class="accordion-item">
 								<div class="accordion-heading">
 									<h3>Survival</h3>
 									<div class="icon">
 										<i class="lnr lnr-chevron-right"></i>
 									</div>
 								</div>
 								<div class="accordion-content">
 									<p>Fitur ini menjelaskan tentang hal-hal yang bisa dibuat dan dilakukan selama pasca bencana dengan barang barang seadanya disekitar kita. fitur ini juga dilengkapi 3 sub-kategori, Yaitu Creating tool, penyakit, dan obat. Dengan adanya fitur ini diharapkan para pengguna mampu bertahan hidup ketika bantuan belum datang atau bantuan sekiranya kurang karna adanya kendala seperti lokasi yang sulit dijangkau dan diharapkan juga hal ini mengurangi korban bencana yang meninggal</p>
 								</div>
 							</div>
 							<!--Accordion item-->
 							<!--Accordion item-->
 							<div class="accordion-item">
 								<div class="accordion-heading">
 									<h3>Orang Hilang</h3>
 									<div class="icon">
 										<i class="lnr lnr-chevron-right"></i>
 									</div>
 								</div>
 								<div class="accordion-content">
 									<p>Fitur ini menjelaskan tentang daftar korban bencana yang hilang. Dengan adanya fitur ini diharapkan para pengguna
 									mampu mengetahui kondisi keluarga atau kerabatnya ketika pasca bencana</p>
 								</div>
 							</div>
 							<!--Accordion item-->
 							<!--Accordion item-->
 							<div class="accordion-item">
 								<div class="accordion-heading">
 									<h3>Orang Ditemukan</h3>
 									<div class="icon">
 										<i class="lnr lnr-chevron-right"></i>
 									</div>
 								</div>
 								<div class="accordion-content">
 									<p>Fitur ini menjelaskan tentang daftar korban bencana yang ditemukan. Dengan adanya fitur ini diharapkan para pengguna
 									mampu mengetahui kondisi keluarga atau kerabatnya ketika pasca bencana</p>
 								</div>
 							</div>
 							<!--Accordion item-->
 							<!--Accordion item-->
 							<div class="accordion-item">
 								<div class="accordion-heading">
 									<h3>Storage Bahan Makanan</h3>
 									<div class="icon">
 										<i class="lnr lnr-chevron-right"></i>
 									</div>
 								</div>
 								<div class="accordion-content">
 									<p>Fitur ini menjelaskan tentang pembagian bantuan bahan makanan agar lebih mudah dikontrol, dan pengguna yang ingin donasi juga bisa mengetahui hal hal yang paling dibutuhkan korban bencana saat ini. fitur ini juga mempermudah admin untuk membagi rata bantuan</p>
 								</div>
 							</div>
 							<!--Accordion item-->
 							<!--Accordion item-->
 							<div class="accordion-item">
 								<div class="accordion-heading">
 									<h3>Status Keadaan Bencana</h3>
 									<div class="icon">
 										<i class="lnr lnr-chevron-right"></i>
 									</div>
 								</div>
 								<div class="accordion-content">
 									<p>Fitur ini menjelaskan tentang informasi keadaan dan status bencana dan sekitar terkini. hal ini berguna untuk memantau kondisi
 									tanpa harus datang ke lokasi.</p>
 								</div>
 							</div>
 							<!--Accordion item-->
 							<!--Accordion item-->
 							<div class="accordion-item">
 								<div class="accordion-heading">
 									<h3>Kontak</h3>
 									<div class="icon">
 										<i class="lnr lnr-chevron-right"></i>
 									</div>
 								</div>
 								<div class="accordion-content">
 									<p>Fitur ini menjelaskan tentang informasi daftar kontak penting untuk dihubungi. Agar fasilitas negara bisa digunakan secara maksimal sesuai dengan tugasnya masing masing.</p>
 								</div>
 							</div>
 							<!--Accordion item-->
 						</div>
 					</div>
 				</div>
 			</div>
 		</section>
 			<!-- End top-post Area -->
 </div>
 <?php
 include 'includes/footer.php';
