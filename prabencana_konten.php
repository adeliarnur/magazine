<?php
include "includes/db_connection.php";

if (!isset($_GET['konten_id'])) {
    echo "parameter koten_id tidak ditemukan";
    die();
}

$kategori = intval($_GET['konten_id']);
$sql = "SELECT *
        FROM `pra-bencana_konten`
        WHERE id=$kategori";
$konten = "";
if ($result = $db->query($sql)) {
    $konten = $result->fetch_array();
} else {
    echo "gagal";
    die();
}


function tambahJS() {
	?>
	<script src="summernote/summernote-bs4.min.js"></script>
	<?php
}

function tambahCSS() {
	?>
	<link rel="stylesheet" href="summernote/summernote-bs4.css">
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
            <a class="btn btn-success" href="prabencana_admin.php?edit=<?php echo $konten['id']; ?>">Edit</a>
						<div class="feature-img-thumb relative mt-3">
              <div class="row justify-content-center">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="<?php echo $konten['thumbnail']; ?>" alt="" style="height: 300px;width: auto;">
              </div>
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
