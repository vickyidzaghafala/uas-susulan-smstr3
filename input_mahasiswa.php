<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_t_mahasiswa="insert into t_mahasiswa(id_mhs,nama)values
	('".$_POST['id_mhs']."',
	 '".$_POST['nama']."')";
	 $proses_data=mysqli_query($input,$query_t_mahasiswa);
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
			<td>Id Mahasiswa</td>
			<td><input name="id_mhs" type="number"></td>
		</tr>
	<tr>
			<td>Nama</td>
			<td><input name="nama" type="text"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
	
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select *from t_mahasiswa");
?>


<form action="" method="post">
	<h3>TAMPIL DATA </h3>
    <table class="table1">
        <tr>
            <td>Id Mahasiswa</td>
            <td>Nama</td>

        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["id_mhs"];?></td>
            <td><?php echo $data["nama"];?></td>
        </tr>
        <?php  } ?>
    </table>
</form>
	