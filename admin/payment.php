
<div class="container">
<div class="table-responsive-xl  col-xl-12  mb-5">

<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">ลำดับที่</th>
       <th scope="col">เลขที่ใบสั่งซื้อ</th>
      <th scope="col">ชื่อ-สกุล</th>
      <th scope="col">เวลาสั่งสินค้า</th>
      <th scope="col">ราคา (บาท)</th>   
      <th scope="col">สถานะ</th>
    </tr>
  </thead>




<?php 
    $i = 1;
    $sum = 0;
 $query = $conn->query("SELECT tb_order.order_id, tb_order.mem_id, tb_order.order_total,tb_order.order_tranfer,tb_member.mem_name
  FROM tb_order
  LEFT JOIN tb_member ON tb_member.mem_id = tb_order.mem_id
 WHERE pay_status = 'ชำระเงินแล้ว'   ");  

    while ($fet = $query->fetch_object()) { $sum = $sum+$fet->order_total; ?>
<tbody>
    <tr>
      <th scope="row" ><?php  echo $i; ?></th>
      <td><?php  echo $fet->order_id; ?></td>
      <td> <?php  echo $fet->mem_name; ?> </td>
      <td><?php  echo $fet->order_tranfer; ?></td>     
      <td class="text-right"><?php  echo number_format($fet->order_total,2); ?></td>        
      <td><span class="badge rounded-pill bg-success text-light p-2">ชำระแล้ว</span></td>
    </tr>
    
  <?php   
  $i++;   }
?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>ยอดขาย</td>
      <th  class="text-right"><?php  echo number_format($sum,2); ?></th>
      <th></th>

    </tr>

  
  </tbody>
</table>

</div>
</div>


