<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_t_dosen="insert into t_dosen(id_dosen,nama_dosen,NID)values
	('".$_POST['id_dosen']."',
	 '".$_POST['nama_dosen']."',
    '".$_POST['NID']."')";
	 $proses_data=mysqli_query($input,$query_t_dosen);
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
			<td>Nama</td>
			<td><input name="nama_dosen" type="text"></td>
		</tr>
		<tr>
			<td>NID</td>
			<td><input name="NID" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select *from t_dosen");
?>


<form action="" method="post">
	<h3>TAMPIL DATA </h3>
    <table class="table1">
        <tr>
            <td>Id Dosen</td>
            <td>Nama</td>
			<td>NID</td>

        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["id_dosen"];?></td>
            <td><?php echo $data["nama_dosen"];?></td>
			<td><?php echo $data["NID"];?></td>
        </tr>
        <?php  } ?>
    </table>
</form>