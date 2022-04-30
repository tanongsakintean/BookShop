<?php 
  $qlast=$conn->query("SELECT MAX(order_id) AS ori FROM tb_order");
  $fet_last = $qlast->fetch_object();
 ?>
<div class="container ">
<div class="cart">
<form action="action/ac_payment.php?ac=pay&order_id=<?php echo $fet_last->ori + 1; ?>" method="post" >
<table class="table table-responsive-xl"  >
  <thead>    
  <tr>
      <th scope="col"><a href="#">เลขที่ใบสั่งซื้อ</a></th>
      <th scope="col"><?php echo $fet_last->ori + 1; ?></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">วันที <?php echo date("Y-m-d"); ?></th>
    </tr>
    <tr>
      <th scope="col">ที่</th>
      <th scope="col">ชื่อสินค้า</th>
      <th scope="col">ราคา</th>
      <th scope="col">จำนวน</th>
      <th scope="col">ราคารวม</th>
    </tr>
  </thead>
  <tbody class="h5">
  <?php 
            $n=1; 
            $total=0;  
            $sump=0; 
            $sum = 0;        
            for($i=0;$i<=(int)$_SESSION["inline"];$i++){
              if(isset($_SESSION["pro_amont"][$i])!=""){
                $sql="SELECT * FROM tb_product WHERE pro_id='".$_SESSION['pro_id'][$i]."'";
                $query = $conn->query($sql);
                $fet=$query->fetch_object(); 
                $sump = $_SESSION['pro_amont'][$i] * $fet->pro_price;  
                $sum  = $sum +  $sump;
                ?>
    <tr>
    <th scope="row"><?php echo $n;?></th> 
      <td><p><?php echo $fet->pro_name; ?></p></td>
      <td>   
        <p><?php echo number_format($fet->pro_price);?></p>
      </td>
      <td><p><?php echo $_SESSION['pro_amont'][$i];?></p></td>      
      <td ><?php echo number_format($sump);?></td>
    </tr>
    <?php 
    $n++; 
  }
    }
    ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>รวมเงิน</td>
                <td><?php echo $sum; ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>ค่าจัดส่ง</td>
                <td>50</td>
            </tr>
            <tr>
                <td></td> 
                <td></td>
                <td></td>
                <td>VAT 7%</td>
                <td>
                  <?php 
                  $vat = ($sum + 50) * 7 / 100; 
                  echo number_format(50 * 7 / 100); 
                   
                  ?>
                  
                </td>
            </tr>
                 <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>รวมทั้งสิ้น</td>
                <td>
                  <?php 
                  $_SESSION['sess_total'] = $vat + $sum;
                  echo number_format($vat + $sum);

                  ?></td>
              </tr>

</tbody>
  </table>
  <?php 
      $profile = $conn->query("SELECT * FROM tb_member WHERE mem_id='". $_SESSION['mem_key']."'  ");
      $fetch = $profile->fetch_object();
?>
<div class="col-xl-12 d-flex justifi-content-between">  
        <div class="col-xl-6">
            <div class="username mt-3 w-auto">
                <a href="javascript:void(0);">ชื่อ-นามสกุล</a>
                <p><?php echo $fetch->mem_name;?></p>
            </div>
            <div class="username mt-3 w-auto">
                <a href="javascript:void(0);">เบอร์โทร</a>
                <p><?php echo $fetch->mem_phone;?></p>
            </div>
        </div>
        <div class="col-xl-6 w-auto">
        <div class="col-xl-6 w-auto">
            <div class="username mt-3">
                <a href="javascript:void(0);">อีเมล</a>
                <p><?php echo $fetch->mem_email;?></p>
            </div>
            <div class="username mt-3">
                <a href="javascript:void(0) ;">ที่อยู่</a>
                <p><?php echo $fetch->mem_address; ?></p>
            </div>
        </div>
        </div>
    </div>
<div class="d-flex justify-content-center float-right">
  <input type="submit" value="ยืนยัน" name=""  class="btn btn-primary btn-lg ">&nbsp;&nbsp;&nbsp;
  <a href="index.php" class="btn btn-danger btn-lg " >กลับไปเลือกสินค้า</a>
</div>
</form>
</div>
<br><br>
<br><br>

























</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SALE SHOP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        คุณแน่ใจหรือไม่ที่จะชำระ
      </div>
      <div class="modal-footer">
      <a href="javascript: void(0);" class="btn btn-secondary" data-dismiss="modal">ไม่</a>
        <a href="javascript: void(0);" class="btn btn-primary">ใช่</a>
      </div>
    </div>
  </div>
</div>
