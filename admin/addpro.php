<?php 
  if(isset($_REQUEST['id']))
  {
    $result = $conn->query("SELECT * FROM tb_product WHERE pro_id='".$_REQUEST['id']."'");
    $fetch = $result->fetch_object(); 
  }                                        
?>

<form action="../action/addp.php?<?php if(isset($_REQUEST['id'])){ echo"ac=edit&pro_id=$fetch->pro_id";}else{echo"ac=addp";}?>" method="POST"  enctype="multipart/form-data" class="w-100" >
                <div class="container-fluid m-5">
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <h5>เพิ่มสินค้า</h5>
                      </div>
                      <div class="card-body">
                        <form class="theme-form">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="inputEmail3">ชื่อสินค้า :</label>
                            <div class="col-sm-9">
                              <input class="form-control" value=" <?php  if(isset($_REQUEST['id'])){ echo $fetch->pro_name; }?>"  type="text" placeholder="ชื่อสินค้า" name="pro_name" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" >ประเภทสินค้า :</label>
                            <div class="col-sm-9">

                                  <select class="custom-select" name="category">
                                  <option >เลือกประเภทสินค้า</option>

                                    <?php 
                                    $sql = $conn->query("SELECT * FROM tb_category ");
                                    while($fet = $sql->fetch_object()){
                                      if(isset($_REQUEST['id']))
                                      { 

                                    ?>
                  <option value="<?php echo $fet->category; ?>" <?php if($fetch->category == $fet->category){ echo 'selected'; } ?> ><?php echo $fet->cate_name; ?></option>
                    <?php }else{  ?>
                    <option value="<?php echo $fet->category; ?>"><?php echo $fet->cate_name; ?></option>
                      <?php } ?>
        
                            <?php } ?>                                     

                                  </select>
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" >รายละเอียด :</label>
                            <div class="col-sm-9">

              
                          <textarea class="form-control" col="10" rows="5" placeholder="รายละเอียดสินค้า . ." name="pro_detail"><?php  if(isset($_REQUEST['id'])){ echo $fetch->pro_detail;} ?></textarea>
                    
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="inputEmail3">ราคาสินค้า :</label>
                            <div class="col-sm-9">
                              <input class="form-control"  type="number" placeholder="ราคาสินค้า" name="pro_price" value="<?php   if(isset($_REQUEST['id'])){echo $fetch->pro_price;} ?>" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="inputEmail3">จำนวนสินค้า :</label>
                            <div class="col-sm-9">
                              <input class="form-control"  type="number" placeholder="จำนวนสินค้า" name="pro_amont" value="<?php   if(isset($_REQUEST['id'])){echo $fetch->pro_amont; } ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="inputEmail3">รูปภาพ :</label>
                            <div class="col-sm-9">
                              <input class="form-control  mt-3"  type="file" accept="image/*" name="pro_img1">
                              <input class="form-control mt-3"  type="file" accept="image/*" name="pro_img2">
                              <input class="form-control mt-3"  type="file" accept="image/*" name="pro_img3">
                              <input class="form-control mt-3"  type="file" accept="image/*" name="pro_img4">
                              <input class="form-control mt-3"  type="file" accept="image/*" name="pro_img5">
                            </div>
                          </div>


 
                      </div>
                      <div class="card-footer">
                        <button class="btn btn-primary btn-pill"><?php if(isset($_REQUEST['id'])){echo "แก้ไข";}else{ echo "บันทึก";}?></button>
                      </div>
                      
                      </form>
                    </div>
                  </div>
    </div>
    </form>
	