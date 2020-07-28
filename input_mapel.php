<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_t_mapel="insert into t_mapel(id_mapel,mapel)values
	('".$_POST['id_mapel']."',
	 '".$_POST['mapel']."')";
	 $proses_data=mysqli_query($input,$query_t_mapel);
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
			<td>Id Mapel</td>
			<td><input name="id_mapel" type="number"></td>
		</tr>
	<tr>
			<td>Mapel</td>
			<td><input name="mapel" type="text"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
	
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select *from t_mapel");
?>


<form action="" method="post">
	<h3>TAMPIL DATA </h3>
    <table class="table1">
        <tr>
            <td>Id Mapel</td>
            <td>Mapel</td>

        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["id_mapel"];?></td>
            <td><?php echo $data["mapel"];?></td>
        </tr>
        <?php  } ?>
    </table>
</form>
	