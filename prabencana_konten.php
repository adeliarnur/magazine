<?php

include "includes/db_connection.php";

if (!isset($_GET['konten_id'])) {
    echo "parameter koten_id tidak ditemukan";
    die();
}

$kategori = intval($_GET['konten_id']);
$sql = "SELECT judul, konten
        FROM `pra-bencana_konten`
        WHERE id=$kategori";
$konten = "asdf";
if ($result = $db->query($sql)) {
    $konten = $result->fetch_array();
} else {
    echo "gagal";
    die();
}


// print_r($konten);
// die();
function tambahJS() {
    global $konten;
	?>
	<script src="summernote/summernote.min.js"></script>
	<?php
}

function tambahCSS() {
	?>
	<link rel="stylesheet" href="summernote/summernote.css">
	<?php
}


include "includes/header.php";
?>

<div class="site-main-container">

			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="feature-img-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/PersiapanDiri-Post.png" alt="">
								</div>
								<div class="content-wrap">
									<a href="#">
										<h3><?php echo $konten['judul']?></h3>
									</a>
									<ul class="meta pb-20">
                                    </ul>
                                    <div id="summernote"><?php echo $konten['konten']; ?></div>
							</div>

						</div>
						<!-- End single-post Area -->
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>

<?php

include "includes/footer.php";

?>