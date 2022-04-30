
<?php 


 $sql = $conn->query("SELECT * FROM tb_member WHERE mem_id ='".$_SESSION['mem_key']."'");

  $fet = $sql->fetch_object();

 
 ?>


<div class="container">
<form class="theme-form p-5" action="action/login.php?ac=profileu&mem_id=<?php echo $fet->mem_id;?>" method="post" >
                            <h4 class="text-center font-weight-bold">แก้ไขโปรไฟล์</h4><br>
                            <div class="form-row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input class="form-control" name="mem_name" type="text" value="<?php  echo $fet->mem_name ;?>" placeholder="First Name - Last Name">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input class="form-control" name="mem_phone" type="text" value="<?php  echo $fet->mem_phone ;?>" placeholder="Phone">
                                </div>
                              </div>
                              <div class="col-md-12">
                              <div class="form-group">
                                <textarea class="form-control" name="mem_address" col="5" rows="3" placeholder="Address" ><?php  echo $fet->mem_address ;?></textarea>
                              </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="mem_email" type="text" placeholder="Email" value="<?php echo $fet->mem_email ;?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="mem_password" id="mem_password2" type="text" value="<?php  echo $fet->mem_password ;?>" placeholder="Password">
                            </div>
                            <div class="form-row">
                              <div class="col-sm-12">
                                <button class="btn btn-primary" type="submit">แก้ไข</button>
                              </div>

                            </div>

                          </form>
</div>
