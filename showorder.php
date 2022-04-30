<div class="container">
  <h2 class=" font-weight-bold">จัดการสินค้า</h2>
        
  <table class="table table-responsive-xl">
    <thead>
      <tr>
        <th scope="col">ลำดับที่</th>
        <th scope="col">รหัสส่งซื้อ</th>
        <th scope="col">ยอดเงิน(บาท)</th>
        <th scope="col">วันที่สั่งซื้อ</th>
        <th scope="col">สถานนะ</th>
        <th scope="col">จัดการ</th>
      </tr>
    </thead>
    <tbody>
<?php 
$i=1;
$query=$conn->query("SELECT tb_order.*,tb_member.* FROM tb_order LEFT JOIN tb_member ON tb_member.mem_id = tb_order.mem_id  WHERE tb_member.mem_id = '".$_SESSION['mem_key']."'
  ");
while($fet=$query->fetch_object()){
?>     
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo sprintf("%03d",$fet->order_id); ?></td>
        <td><?php echo number_format($fet->order_total,2); ?> </td>
        <td><?php echo $fet->order_date; ?></td>
        <?php  if($fet->pay_status == "รอชำระเงิน"){ ?>
        <td><span class="badge rounded-pill bg-warning text-light p-1"><?php echo $fet->pay_status; ?></span></td>
        <td>


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showw<?php echo $i;?>" onclick="$(this).text('อัพเดรตข้อมูล')">แจ้งชำระเงิน</button>
 </td>
          <?php  }else{ ?>
         <td><span class="badge rounded-pill  <?php if($fet->pay_status == "ยืนยันชำระเงินแล้ว"){echo "bg-success";}elseif($fet->pay_status == "รอยืนยันการชำระเงิน"){echo "bg-warning ";} ?> text-light p-1"><?php echo $fet->pay_status; ?></span></td>  
         <td></td>
        <?php  } ?> 
        
      </tr>



<!------modal------------>
      <div class="modal fade" id="showw<?php echo $i;?>" tabindex="-1"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-primary font-weight-bold" id="exampleModalLongTitle">Saleshop</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="w-100" action="action/ac_confirm_payment.php?>" method="POST" enctype="multipart/form-data">

              <div class="modal-body">
         
    <div class="col-xl-auto d-flex  ">
    <div class="col-xl-4">
    <h5 class="text-primary">เลขคำสั่งซื้อ:</h5>
    </div>
    <div class="col-xl-6">
      <input type="text" class="rounded form-control  border-primary mt-2" name="order_id" id="order_id" placeholder="เลขคำสั่งซื้อ" value="<?php  echo $fet->order_id; ?>" >
    </div>

  </div>
  <div class="col-xl-auto d-flex  ">
  <div class="col-xl-4">
    <h5 class="text-primary">ชื่อบัญชี:</h5>
  </div>
    <div class="col-xl-6">
      <input type="text" class="rounded form-control  border-primary mt-2" name="bank_name" id="bank_name" placeholder="ชื่อบัญชี">
    </div>
  </div>
 <div class="col-xl-auto d-flex ">
 <div class="col-xl-4">
    <h5 class="text-primary">จำนวนเงิน:</h5>
 </div>
 <div class="col-xl-6">
      <input type="text" class="rounded form-control  border-primary mt-2"  name="bank_amont" id="bank_amont" placeholder="จำนวนเงิน">
  </div>
  </div>
  <div class="col-xl-auto d-flex ">
  <div class="col-xl-4">
  <h5 class="text-primary">วันที่โอน:</h5>
  </div>
  <div class="col-xl-6">
      <input type="date" class="rounded form-control  border-primary mt-2" name="bank_date" id="bank_date" placeholder="วันที่โอน">
    </div>
  </div>
   <div class="col-xl-auto d-flex ">
   <div class="col-xl-4">
   <h5 class="text-primary">เวลา:</h5>
   </div>
   <div class="col-xl-6">
      <input type="time" class="rounded form-control  border-primary mt-2" name="bank_time" id="bank_time" placeholder="เวลา">
    </div>
  </div>
  <div class="col-xl-auto d-flex ">
     <div class="col-xl-4">
        <h5 class="text-primary">เข้าธนาคาร:</h5>
     </div>

   <div class="col-xl-6 mt-2 ">
<div class=" mt-2  row w-100">
  <input  class="form-check-input" type="radio" name="bank_in"  value="กสิกรไทย" >
  <img src="images/KBANK.jpg" height="40" class=" pr-3" calt="" srcset="">
  <p >ธ.กสิกรไทย <br> 398-057-3729 <br> พิสิษฐ์ชัย ปุณธนธัชพล</p>
</div>

<div class=" mt-2  row w-100">
  <input  class="form-check-input" type="radio" name="bank_in"  value="ไทยพาณิชย์" >
  <img src="images/SCB.jpg" height="40" class=" pr-3"  calt="" srcset="">
  <p >ธ.ไทยพาณิชย์ <br> 398-057-3729 <br> พิสิษฐ์ชัย ปุณธนธัชพล</p>
</div>

<div class=" mt-2  row w-100">
  <input  class="form-check-input" type="radio" name="bank_in"  value="กรุงไทย" >
  <img src="images/KTB.jpg" height="40" class=" pr-3"  calt="" srcset="">
  <p >ธ.กรุงไทย <br> 398-057-3729 <br> พิสิษฐ์ชัย ปุณธนธัชพล</p>
</div> 

    </div>
  </div> 
   <div class="col-xl-auto d-flex ">
      <div class="col-xl-4">
        <h5 class="text-primary">ภาพสลิป:</h5>
      </div>

   <div class="col-xl-6">
      <input type="file" accept="image/*" class="rounded form-control  border-primary mt-2" name="bank_img" id="bank_img">
    </div>
  </div>
          </div>
              <div class="modal-footer">
              <button type="submit" class="btn btn-outline-primary">แจ้งโอนเงิน</button>
              </div>
              </form>

            </div>
          </div>
        </div>
  <!---x---modal-------x----->
<?php $i++; } ?> 
    </tbody>
    </table>
</div><br><br><br><br><br><br>