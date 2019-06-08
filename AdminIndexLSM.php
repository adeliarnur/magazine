<?php
include_once 'includes/authentication.php';
id_role_harus([1,2]);

include "includes/header-adminLSM.php";
 ?>
 <div class="site-main-container">
 			<!-- Start top-post Area -->
 						<div class="col-lg-12">
 							<div class="hero-nav-area">
 								<h1 class="text-white">Pusat Informasi Bencana</h1>
 								<p class="text-white link-nav"><a href="index.html">SELAMAT DATANG ADMIN LSM </a></p>
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
 							
 						</div>
 					</div>
 				</div>
 			</div>
 		</section>
 			<!-- End top-post Area -->
 </div>
 <?php
 include 'includes/footer.php';
