

<div class="container-fulid">               
      <table class="table ">
                            <thead>
                                <tr>
                                <th scope="col">ที่</th>
                                <th scope="col">รูป</th>
                                <th scope="col">ชื่อสินค้า</th>
                                <th scope="col">รายละเอียด</th>
                                <th scope="col">ราคาสินค้า</th>
                                <th scope="col">จำนวนคงเหลือ</th>                              
                                <th scope="col" width="200">จัดการ</th>
                                </tr>
                            </thead>
  <tbody>
<?php  if (isset($_REQUEST['ac'])) {
            switch ($_REQUEST['ac']) {
                case 'search':
            
                    $search = $conn->query("SELECT * FROM tb_product WHERE namep LIKE '%".$_REQUEST['keyword']."%' 
                            OR detail LIKE '%".$_REQUEST['keyword']."%' OR price LIKE '%".$_REQUEST['keyword']."%' 
                        ");
                    $i=1;
                    while ($fet = $search->fetch_object()) { ?>
                        
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><img src="../images/<?php echo $fet->pro_img1; ?>" width="100px"></td>
                                <td><?php echo $fet->pro_name; ?></td>
                                <td width="400"><?php echo $fet->pro_detail; ?></td>
                                <td><?php echo number_format($fet->pro_price); ?></td>
                                <td><?php echo $fet->pro_amont; ?></td>
                                <td><a href="../action/addp.php?id=<?php echo $fet->pro_id; ?>&ac=del" class="btn btn-danger">ลบ</a> <a href="index.php?p=addpro&id=<?php echo $fet->pro_id; ?>" class="btn btn-warning">แก้ไข</a></td>
                            </tr>



                  <?php $i++; } break; } ?>  





                    
            
            
<?php }else {
 
$i=1;
$query=$conn->query("SELECT * FROM tb_product");
while($fet=$query->fetch_object()){
 ?>

                                <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><img src="../images/<?php echo $fet->pro_img1; ?>" width="100px"></td>
                                <td><?php echo $fet->pro_name; ?></td>
                                <td width="400"><?php echo $fet->pro_detail; ?></td>
                                <td><?php echo number_format($fet->pro_price); ?></td>
                                <td><?php echo $fet->pro_amont; ?></td>
                                <td><a href="../action/addp.php?id=<?php echo $fet->pro_id; ?>&ac=del" class="btn btn-danger">ลบ</a> <a href="index.php?p=addpro&id=<?php echo $fet->pro_id;?>" class="btn btn-warning">แก้ไข</a></td>
                                </tr>
<?php $i++; } } ?>
           </tbody>
      </table>
</div>