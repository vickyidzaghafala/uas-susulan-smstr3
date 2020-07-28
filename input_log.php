<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_t_khs="insert into t_khs(id_dosen,id_mahasiswa,id_mapel)values
	('".$_POST['id_dosen']."',
	 '".$_POST['id_mahasiswa']."',
    '".$_POST['id_mapel']."')";
	 $proses_data=mysqli_query($input,$query_t_khs);
if($proses_data){
	echo 'Input Data Berhasil ';
} else {
	echo header (" ");
}
}


?>
	<form method="POST" action="">
	<table class="table1">
		<tr>
			<td>Id Dosen</td>
			<td><input name="id_dosen" type="number"></td>
		</tr>
	<tr>
			<td>Id Mahasiswa</td>
			<td><input name="id_mahasiswa" type="number"></td>
		</tr>
		<tr>
			<td>Id Mapel</td>
			<td><input name="id_mapel" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select * from t_khs
				inner join t_dosen on t_khs.id_dosen=t_dosen.id_dosen
				inner join t_mahasiswa on t_khs.id_mahasiswa=t_mahasiswa.id_mhs
				inner join t_mapel on t_khs.id_mapel=t_mapel.id_mapel
				inner join t_pesan on t_khs.id_dosen=t_pesan.id_dosen");
?>


<form action="" method="post">
	<h3>TAMPIL DATA </h3>
    <table class="table1">
        <tr>
            <td>Nama Dosen</td>
            <td>Nama Mahasiswa</td>
			<td>Mapel</td>
			<td>Pesan</td>
        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["nama_dosen"];?></td>
			<td><?php echo $data["nama"];?></td>
            <td><?php echo $data["mapel"];?></td>
			<td><?php echo $data["pesan"];?></td>
        </tr>
        <?php  } ?>
    </table>
</form>