<?php 
session_start();
include "../confic.php";

if(isset($_REQUEST['ac'])){

    switch ($_REQUEST['ac']) {
        case 'pay':
 
            

  echo "mem_id = ".$_SESSION['mem_key'];



$query=$conn->query("INSERT INTO tb_order(mem_id,address,phone,order_date,order_total,pay_status) VALUES('".$_SESSION['mem_key']."','".$_SESSION['mem_address']."','".$_SESSION['mem_phone']."',now(),'".$_SESSION['sess_total']."','รอชำระเงิน')");

if($query){
$sum=0;
$sump=0;
for($i=0;$i<=(int)$_SESSION["inline"];$i++){
              if(isset($_SESSION["pro_amont"][$i])!=""){
                $sql="SELECT * FROM tb_product WHERE pro_id='".$_SESSION['pro_id'][$i]."'";
                $query = $conn->query($sql);
                $fet=$query->fetch_object(); 
                $sump = $_SESSION['pro_amont'][$i] * $fet->pro_price;  
                $sum  = $sum +  $sump;   
                
                $qdetail = $conn->query("INSERT INTO tb_order_item(order_id,pro_id,qty,pro_price) VALUES('".$_REQUEST['order_id']."','".$fet->pro_id."','".$_SESSION['pro_amont'][$i]."','".$fet->pro_price."')");          
                $query = $conn->query("UPDATE tb_product SET pro_amont =  '".($fet->pro_amont-1)."'  WHERE pro_id = '".$fet->pro_id."'");
              }
        }

        unset($_SESSION['pro_id']);
        unset($_SESSION['inline']);
        unset($_SESSION['pro_amont']);
        unset($_SESSION['sess_total']);

        echo "<script>
        alert('บันทึกรายการสั่งซื้อเรียบร้อย');
        window.location.replace('../index.php?p=showorder')
        </script>";

}
break;

}
}
?>