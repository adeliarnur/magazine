<?php

include "includes/db_connection.php";

if (!isset($_GET['kategori'])) {
    echo "parameter kategori tidak ditemukan";
    die();
}

$kategori = intval($_GET['kategori']);
$sql = "SELECT id, judul, thumbnail
        FROM `pra-bencana_konten`
        WHERE kategori=$kategori";
$sql2 = "SELECT nama as kategori
        FROM `pra-bencana_kategori`
        WHERE id=$kategori";

if ($kategori = $db->query($sql2)) {
    $kategori = $kategori->fetch_array();
    // print_r($kategori['kategori']);
    // die();
}

include "includes/header.php";
?>

<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
						</div>
						<div class="col-lg-12">
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">

                        <?php

                        if ($result = $db->query($sql)) {
                        ?>

							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
                                <h4 class="cat-title"><?php echo $kategori["kategori"]; ?></h4>
                                <?php

                            while ($row = $result->fetch_array()) {
                                // print_r($row);
                                // echo "1";
                                ?>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-3 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="img/PersiapanDiri.png" alt="">
										</div>
									</div>
									<div class="col-lg-9 post-right">
										<a href="prabencana_konten.php?konten_id=<?php echo $row['id']; ?>">
											<h4><a href="prabencana_konten.php?konten_id=<?php echo $row['id']; ?>"><?php echo $row["judul"];?></a></h4>
										</a>
									</div>
                                </div>

                            <?php
                            }
                            ?>
							</div>
                            <!-- End latest-post Area -->
                        <?php
                        }
                        $result->close();
                        die();
                        ?>

						</div>
				</div>
			</div>
		</section>
			<!-- End latest-post Area -->
		</div>

<?php

include "includes/footer.php";

?>
