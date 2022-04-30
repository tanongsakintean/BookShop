<?php 
session_start();
include "../confic.php";
echo "orderid = ".$_REQUEST['order_id'];
if(isset($_REQUEST['order_id'])){

if(isset($_FILES['bank_img']['name'])){
      copy($_FILES['bank_img']['tmp_name'], "../images/slip/".$_FILES['bank_img']['name']);
}	

$qorder=$conn->query("SELECT * FROM tb_order WHERE order_id='".$_REQUEST['order_id']."' ");
$qfet=$qorder->fetch_object();
echo "total = ".$_REQUEST['bank_amont'];

if($qfet->order_total == $_REQUEST['bank_amont']){
    echo "total = ".$_REQUEST['bank_amont'];
$query=$conn->query("UPDATE tb_order SET pay_status='ยืนยันชำระเงินแล้ว',bank_name='".$_REQUEST['bank_name']."',bank_amont='".$_REQUEST['bank_amont']."',bank_date='".$_REQUEST['bank_date']."',bank_time='".$_REQUEST['bank_time']."',bank_in='".$_REQUEST['bank_in']."',bank_img='".$_FILES['bank_img']['name']."' WHERE order_id = '".$_REQUEST['order_id']."' ");
}else{
    
$query=$conn->query("UPDATE tb_order SET pay_status='รอยืนยันการชำระเงิน',bank_name='".$_REQUEST['bank_name']."',bank_amont='".$_REQUEST['bank_amont']."',bank_date='".$_REQUEST['bank_date']."',bank_time='".$_REQUEST['bank_time']."',bank_in='".$_REQUEST['bank_in']."',bank_img='".$_FILES['bank_img']['name']."' WHERE order_id = '".$_REQUEST['order_id']."' ");
}
if($query){
	echo "<script>window.location.replace('../index.php?p=showorder')</script>";
}else{

}
}
?>