
  <div class="container">
        
<br>
        <h1>ยอดสั่งซื้อ</h1>
        <table class="table ">
          <thead>
            <tr>
              <th scope="col" >เลขที่คำสั่งซื้อ</th>
              <th scope="col"  >ชื่อผู้ซื้อ</th>
              <th scope="col"  >ที่อยู่</th>
              <th scope="col"  >เบอร์โทร</th>
              <th scope="col" >total</th>
              <th scope="col" >การชำระเงิน</th>
              <th scope="col" >ตรวจสอบการสั่งซื้อ</th>
            </tr>
            </thead>
            
<?php 
  
    $query = $conn->query("
      SELECT tb_order.order_id,tb_order.mem_id,tb_order.address,tb_order.phone,tb_order.order_total,tb_order.pay_status,tb_member.mem_name
      FROM tb_order
      LEFT JOIN tb_member ON tb_member.mem_id = tb_order.mem_id WHERE tb_order.pay_status <> 'ชำระเงินแล้ว'
      ");
      $sum = 0;
    while ($fet = $query->fetch_object()) {
      $sum = $sum+$fet->order_total;
 ?>
      
            <tr>
              <td ><?php echo $fet->order_id; ?></td>
              <td ><?php echo $fet->mem_name;?></td>
              <td ><?php echo $fet->address; ?></td>
              <td ><?php echo $fet->phone; ?></td>
              <td ><?php echo number_format($fet->order_total,2); ?></td>
              <td ><?php echo $fet->pay_status; ?></td>
              <td ><a href="index.php?p=showorder&order_id=<?php echo $fet->order_id; ?>" class="btn btn-success">
                จัดการ
              </a>
                </td>
            </tr>
<?php } ?>


<tr>
  <td ></td>
  <td ></td>
  <td ></td>
  <td >รวม</td>
  <td ><?php  echo number_format($sum,2); ?></td>
  <td ></td>
</tr>
          
        </table>

        
</div>