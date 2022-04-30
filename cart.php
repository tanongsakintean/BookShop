<?php 
  if(isset($_REQUEST['ac'])){

    switch ($_REQUEST['ac']){
      case 'newcal':
        for ($i=0; $i <=(int)$_SESSION['inline'] ; $i++) { 
          if(isset($_SESSION['pro_amont'][$i]) != ""){
            $_SESSION['pro_amont'][$i] = $_REQUEST['pro_num'][$i];
          }
        }
        break;
        case 'del':
          for ($i=0; $i <=(int)$_SESSION['inline'] ; $i++) { 
            if($_REQUEST['line'] == $i){
              unset($_SESSION['inline'][$i]);
              unset($_SESSION['pro_amont'][$i]);
              unset($_SESSION['pro_id'][$i]);
            }
          }
          break;
    }

  }
?>

<?php
  if(!isset($_SESSION['inline'])){
    $_SESSION['inline'] = 0;
    $_SESSION['pro_amont'][0] = 1;
    $_SESSION['pro_id'][0] = $_REQUEST['pro_id'];
  }else{
    if(isset($_REQUEST['pro_id']) != ""){
      $key = array_search($_REQUEST['pro_id'],$_SESSION['pro_id']);
      if((string)$key != ""){
        $_SESSION['pro_amont'][$key] = $_SESSION['pro_amont'][$key]+1;
      }else{
        $_SESSION['inline'] =  $_SESSION['inline']+1;
        $line = $_SESSION['inline'];
        $_SESSION['pro_amont'][$line] = 1;
        $_SESSION['pro_id'][$line] = $_REQUEST['pro_id'];
      }
    }
  }
?>  



<form action="index.php?p=cart&ac=newcal" class="w-100"  method="post">
  <table class="table">
    <thead>
      <tr>
        <th>สินค้าที่</th>
        <th>รูปสินค้า</th>
        <th>ชื่อสินค้า</th>
        <th>จำนวน</th>
        <th>ราคา</th>
        <th>ราคารวม</th>
        <th></th>
      </tr>
    </thead>
    <tbody>


<?php
  $n=1;
  $total=0;
  for ($i=0; $i <=(int)$_SESSION['inline'] ; $i++) { 
    if(isset($_SESSION['pro_amont'][$i]) != ""){
    $sql = $conn->query("SELECT * FROM tb_product WHERE pro_id = '".$_SESSION['pro_id'][$i]."'");      
    $fet = $sql->fetch_object();
      $total = $total + ($fet->pro_price * $_SESSION['pro_amont'][$i]);



?>
      <tr>
        <td scope="row"><?php echo $n;?></td>
        <td><img src="images/<?php  echo $fet->pro_img1; ?>" height="100" alt="" srcset=""></td>
        <td><?php echo $fet->pro_name;?></td>
        <td><input type="number" value="<?php echo $_SESSION['pro_amont'][$i]; ?>" name="pro_num[<?php echo $i; ?>]" ></td>
        <td><?php echo $fet->pro_price; ?></td>
        <td><?php echo $fet->pro_price * $_SESSION['pro_amont'][$i]; ?></td>
        <td><a href="?p=cart&ac=del&line=<?php  echo $i;?>" class="btn btn-danger">DELETE</a></td>
      </tr>
<?php   
  $n++;
}
  }?>


      <tr>
        <td scope="row"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $total;?></td>
        <td><input type="submit" class="btn btn-success" value="คำนวณใหม่" ><a href="index.php?p=payment" class=" btn btn-primary" >ชำระเงิน</a></td>
      </tr>
    </tbody>
  </table>
</form>



