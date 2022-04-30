

<div class="container-fulid">
	<table class="table">
		<tr>
			<th scope="col">ลำดับ</th>
			<th scope="col">ชื่อ-นามสกุล</th>
			<th scope="col">ที่อยู่</th>
			<th scope="col">เบอร์โทร</th>
			<th scope="col">Email</th>
			<th scope="col">จัดการ</th>
		</tr>


		<?php 
		$i = 1;
		$query = $conn->query("SELECT * FROM tb_member WHERE status <> 2");
		while ($fet=$query->fetch_object()) {
	?>

		

		<tr>
			<td scope="row" class="w-10"><?php echo $i; ?></td>
			<td scope="row" class="text-left w100"><?php echo $fet->mem_name; ?></td>
			<td scope="row" class="text-left"><?php echo $fet->mem_address; ?></td>
			<td scope="row" class="text-left"><?php echo $fet->mem_phone; ?></td>
			<td scope="row" class="text-left"><?php echo $fet->mem_email; ?></td>
			<td scope="row" class="text-left"><a href="index.php?p=setpro&mem_id=<?php echo $fet->mem_id ?>" class="btn btn-primary">แก้ไข</a></td>
		</tr>
<?php $i++; } ?>

	</table>
	
</div>