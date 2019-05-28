<?php
include "includes/db_connection.php";
global $konten, $id_kategori;
// echo empty($_FILES['thumbnail']['name'])?"tak ada":"ada";
// die();
if ($_GET['edit']) {
	$id_kategori = intval($_GET['edit']);
	$sql = "SELECT * FROM `pra-bencana_konten`
					WHERE id=$id_kategori";

	if ($result = $db->query($sql)) {
	    $konten = $result->fetch_object();
	} else {
		$konten = false;
	}
}

if (count($_POST) > 0){
	try {
		global $konten;
		$judul = $_POST['judul'];
		$kategori = intval($_POST['kategori']);
		$konten = $_POST['konten'];

		$upload_image = true;
		if (!empty($_FILES['thumbnail']['name'])) {
			$image = $_FILES['thumbnail']['name'];

			// image file directory
			$target = "img/prabencana_thumbnail/" . basename($image);

			// check image
			if (getimagesize($_FILES['thumbnail']["tmp_name"]) === false) {
				$upload_image = false;
			}

			// check image
			$allowed_ext = ['jpg', 'png', 'bmp', 'jpeg'];
			// print_r(end(explode('.', basename($image))));
			// die();
			$ext = explode('.', basename($image));
			$ext = end($ext);
			$ext = strtolower($ext);
			if(!in_array($ext, $allowed_ext)){
				$upload_image = false;
			}

			// uploading image
			if (!move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target)) {
				$upload_image = false;
			}

			if (!$upload_image) {
				echo "gagal mengupload thumbnail";
				die();
			}
		} else {
			$upload_image = false;
		}

		if ($_GET['edit']) {
			if (!$upload_image) {
				$sql = "UPDATE `pra-bencana_konten` SET `judul`=?, `konten`=?, `kategori`=? WHERE `id`=?";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("ssii", $judul, $konten, $kategori, $id_kategori);
			} else {
				// global $konten;
				$sql = "UPDATE `pra-bencana_konten` SET `judul`=?, `konten`=?, `kategori`=?, `thumbnail`=? WHERE `id`=?";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("ssisi", $judul, $konten, $kategori, $target, $id_kategori);
			}
		} else {
			if ($upload_image) {
				$sql = "INSERT INTO `pra-bencana_konten` (`judul`, `konten`, `kategori`, `thumbnail`)
						VALUES (?, ?, ?, ?)";

				$stmt = $db->prepare($sql);
				$stmt->bind_param("ssis", $judul, $konten, $kategori, $target);
			} else {
				$sql = "INSERT INTO `pra-bencana_konten` (`judul`, `konten`, `kategori`)
						VALUES (?, ?, ?)";

				$stmt = $db->prepare($sql);
				$stmt->bind_param("ssis", $judul, $konten, $kategori);
			}

			// $konten = addslashes($_POST['konten']);
		}

		if ($stmt->execute() === FALSE) {
			echo "Error: " . $sql . "<br>" . $db->error;
			die();
		}
	} catch(Exception $e){
		echo "gagal mengupload berita. error : " . $e->error;
		die();
	}
	$db->close();
	header('location: AdminMinimalisirDampakBencana.php');
}

function tambahJS() {
	global $konten;
	?>
	<script src="summernote/summernote-bs4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var markupStr = "<?php echo $konten? $konten->konten:""; ?>";
			// $('#summernote').summernote('code', markupStr);
			$('#summernote').summernote({
				placeholder: 'Masukkan konten di sini',
				focus: true,
				code: markupStr
			});
		});
		$('#konten-baru').submit(function(){
			// $.ajax({
			// 	method: "POST",
			// 	url: "AdminMinimalisirDampakBencana.php",
			// 	data: { name: "John", location: "Boston" }
			// })
			// .done(function( msg ) {
			// 	alert( "Data Saved: " + msg );
			// });
			// alert('hello');
			var konten = $("#summernote").summernote('code');
			$("#summernote_konten").val(konten);
			return true;
		});
	</script>
	<?php
}

function tambahCSS() {
	?>
	<link rel="stylesheet" href="summernote/summernote-bs4.css">
	<?php
}


include "includes/header-admin.php";
?>

<div class="container mb-3">
	<div class="card p-3">
		<h3 class="text-center mb-3">Konten Baru Minimalisir Dampak Bencana</h3>
		<form id="konten-baru" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="inputJudul">Judul</label>
				<input type="text" class="form-control" id="inputJudul" name="judul" placeholder="Masukkan Judul" value="<?php echo $konten?$konten->judul:"";?>">
				</div>

				<div class="form-group">
					<label for="inputJudul">Kategori</label>
					<select class="form-control" id="inputKategori" name="kategori">
						<option value="1"<?php echo $konten?($konten->kategori == "1"?" selected":""):""?>>Persiapan Diri</option>
						<option value="2"<?php echo $konten?($konten->kategori == "2"?" selected":""):""?>>Persiapan Di Dalam Rumah</option>
						<option value="3"<?php echo $konten?($konten->kategori == "3"?" selected":""):""?>>Persiapan Di Luar Rumah</option>
					</select>
				</div>

				<div class="custom-file mb-3">
					<input type="file" name="thumbnail" class="custom-file-input" id="inputThumbnail">
					<label for="inputThumbnail" class="custom-file-label">Thumbnail</label>
				</div>

			<div class="form-group">
				<textarea id="summernote" class="form-control"><?php echo $konten?$konten->konten:""?></textarea>
				<input type="hidden" id="summernote_konten" name="konten" value="<?php echo $konten?$konten->konten:""?>">
			</div>
			<input class="btn btn-sm btn-primary" type="submit" name="submit" value="Submit">
		</form>
	</div>
</div>

<?php

include "includes/footer.php";

?>
