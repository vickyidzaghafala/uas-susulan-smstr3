<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_t_pesan="insert into t_pesan(id_dosen,id_mapel,pesan)values
	('".$_POST['id_dosen']."',
	 '".$_POST['id_mapel']."',
    '".$_POST['pesan']."')";
	 $proses_data=mysqli_query($input,$query_t_pesan);
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
			<td>Id Mapel</td>
			<td><input name="id_mapel" type="text"></td>
		</tr>
		<tr>
			<td>Pesan</td>
			<td><input name="pesan" type="text"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select * from t_pesan
				inner join t_dosen on t_pesan.id_dosen=t_dosen.id_dosen
				inner join t_mapel on t_pesan.id_mapel=t_mapel.id_mapel");
?>


<form action="" method="post">
	<h3>TAMPIL DATA </h3>
    <table class="table1">
        <tr>
            <td>Id Dosen</td>
            <td>Id Mapel</td>
			<td>Pesan</td>

        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["nama_dosen"];?></td>
            <td><?php echo $data["mapel"];?></td>
			<td><?php echo $data["pesan"];?></td>
        </tr>
        <?php  } ?>
    </table>
</form>