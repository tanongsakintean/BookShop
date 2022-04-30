

<?php  

if (isset($_REQUEST['ac'])) {
    switch ($_REQUEST['ac']) {
        case 'pay':
            
            $query = $conn->query("UPDATE tb_order SET pay_status = 'ชำระเงินแล้ว', order_tranfer = now()  WHERE order_id = '".$_REQUEST['or_id']."'   ");

                echo "<script>
                        alert('เปลี่ยนสถานะสำเร็จ');
                        window.location.replace('index.php?p=sell');
                    </script>
                ";

            break;
        

    }
}

?>








<div class="container">


<table class="table ">
<thead>
<tr>
    <th scope="col">ลำดับสินค้า</th>
    <th scope="col">ชื่อสินค้า</th>
    <th scope="col">จำนวน</th>
    <th scope="col">ราคา</th>
    <th scope="col">ตรวจสอบการโอนเงิน</th>
</tr>
</thead>
<?php 

$query = $conn->query("SELECT tb_order.*,tb_order_item.*,tb_product.pro_name
FROM tb_order
LEFT JOIN tb_order_item ON tb_order_item.order_id = tb_order.order_id
LEFT JOIN tb_product ON tb_product.pro_id = tb_order_item.pro_id

WHERE tb_order.order_id = '".$_REQUEST['order_id']."' ");



$sum = 0;
$n = 1;
while ($fet=$query->fetch_object()) {
$sum = $sum+$fet->pro_price*$fet->qty;
?>

<tbody>
<tr>
    <td><?php echo $n; ?></td>
    <td><?php echo $fet->pro_name; ?></td>
    <td><?php echo $fet->qty; ?></td>
    <td><?php echo number_format( $fet->pro_price,2); ?></td>
    <th><?php  if ($fet->bank_img) {  ?> <img src="../images/slip/<?php echo  $fet->bank_img; ?>" height="50" ></th> <?php } else { echo "ยังไม่ได้ชำระเงินเงิน"; } ?>


    
</tr>
<?php $n++; } 	


?>
<tr>
    <td></td>
    <td></td>
    <td >รวม</td>
    <td class="text-right"><?php echo number_format($sum,2) ; ?></td>
    <?php  $query = $conn->query("SELECT bank_img FROM tb_order WHERE order_id = '".$_REQUEST['order_id']."'  ");  
      $bank = $query->fetch_object();  ?>
    <td><?php  if ($bank->bank_img) { ?>
        <a href="index.php?p=showorder&ac=pay&or_id=<?php echo $_REQUEST['order_id'] ?>" class="btn btn-success ">ชำระเงินแล้ว</a>
<?php	} ?></a></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td>ค่าส่ง</td>
    <td class="text-right"><?php echo number_format(50,2) ; ?></td>
    <td><?php  if ($bank->bank_img) { ?>
        <a href="bill.php?order_id=<?php echo $_REQUEST['order_id'] ?>" class="btn btn-secondary ">พิมพ์ใบเสร็จ</a>
<?php	} ?></a></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td>VAT 7%</td>
    <?php  $vat = ($sum+50)*7/100 ?>
    <td class="text-right"><?php echo number_format($vat,2) ; ?></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td>รวม</td>
    <?php $total = $sum+50+$vat ?>
    <td class="text-right"><?php echo number_format($total,2); ?></td>
</tr>
</tbody>
</table>

</div>