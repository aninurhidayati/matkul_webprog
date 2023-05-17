<?php 
 if(!isset($_GET['aksi'])){
	
?>
<?php 
$qdata = mysqli_query($koneksidb, "SELECT a.* , nm_kategori FROM mst_blog 
			AS a INNER JOIN mst_kategori AS b ON a.idkategori = b.idkategori ") 
     or die("tabel tidak ditemukan".mysqli_error($koneksidb)) ;
?>
<a href="?modul=mod_blog&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
<table class="table table-bordered">
	<tr>
		<th width="5%">no</th>
		<th width="10%">Tanggal</th>
		<th>Judul</th>
		<th width="20%">Kategori</th>
		<th>Action</th>
	</tr>
	<?php 
		$no = 1;
		while($row = mysqli_fetch_array($qdata)){ 
	?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $row['tglblog']; ?></td>
		<td><?= $row['judul']; ?></td>
		<td><?= $row['nm_kategori']; ?></td>
		<td class="w-25">
			<a href="?modul=mod_blog&aksi=edit&id=<?= $row['idblog']; ?>" class="btn btn-xs btn-primary">
				<i class="bi bi-pencil-square"></i>Edit</a>
			<a href="" class="btn btn-xs btn-primary">
				<i class="bi bi-trash"></i>Delete</a>
		</td>
	</tr>
	<?php  //penutup looping 
		$no++;
		}
	?>
</table>
<?php 
//ini penutup if(!isset($_GET['act']))
}
else if(isset($_GET['aksi'])){

	if($_GET['aksi'] == "edit"){
		//proses edit-1
		$query = mysqli_query($koneksidb, "select * from mst_blog where idblog=".$_GET['id']."") 
					or die("Data tidak ditemukan".mysqli_error($koneksidb)) ;
		$data = mysqli_fetch_array($query);
		$exproses = "update";
		$idnya = $_GET['id'];
		$idblog = 0;
		$judulnya = "";
		$kategorinya = $data['idkategori']; 
		$isinya = "";
		$tglnya = "";
		$isaktif = $data["isactive"];
		
	}
	else if($_GET['aksi'] == "add"){
		//proses add-2
		$exproses = "insert";
		//ini variabel untuk mengisi value dari inputan
		$idblog = 0;
		$judulnya = "";
		$kategorinya = ""; 
		$isinya = "";
		$tglnya = "";
		$isaktif = 0;
	}
?>
<div class="container-fluid">
	<h3>Form Input</h3>
	<form action="mod_blog/proses.php?proses=<?php echo $exproses; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="idblog" value="<?php echo $idblog; ?>">
		<div class="row mb-1">
			<label for="kategori" class="col-md-2">Kategori Blog </label>
			<div class="col-md-6">
				<select class="form-control " name="kategori">
					<option value="">--Pilih Kategori--</option>
					<?php 
					$qkategori = mysqli_query($koneksidb, "select * from mst_kategori ") 
								or die("Data tidak ditemukan".mysqli_error($koneksidb)) ;
					while($cb = mysqli_fetch_array($qkategori)){
						if($cb["idkategori"] == $kategorinya)
						{ $pilih = "selected"; }
						else{ $pilih=""; }
						echo '<option value="'.$cb["idkategori"].'" '.$pilih.'>'.$cb["nm_kategori"].'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">Judul</div>
			<div class="col-md-6">
				<input type="text" name="judul" id="judul" class="form-control" value="<?php $judulnya; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">Isi</div>
			<div class="col-md-6">
				<textarea name="isi" cols="30" rows="10" class="form-control"><?php echo $isinya; ?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">Upload Gambar</div>
			<div class="col-md-6">
				<input type="hidden" name="file_uploaded" value="">
				<input type="file" name="filegambar" id="filegambar">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">Tanggal Input </div>
			<div class="col-md-4">
				<input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $tglnya; ?>" placeholder="yyyy-mm-dd">
				<input type="checkbox" name="is_aktif" <?php if($isaktif == 1){ echo "checked"; } ?>>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
			</div>
		</div>
	</form>
</div>
<?php } ?>