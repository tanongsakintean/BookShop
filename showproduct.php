<?php
      
      if(isset($_REQUEST['category_id'])){
      $where = "WHERE category = '".$_REQUEST['category_id']."'  ";
  }
      if(isset($_REQUEST['keyword']) != "" ){

      $where = "WHERE pro_name LIKE '%".$_REQUEST['keyword']."%' OR pro_detail LIKE '%".$_REQUEST['keyword']."%' OR pro_price LIKE '%".$_REQUEST['keyword']."%'  ";
  }
  

        $sql = "SELECT * FROM tb_product $where ";
        $query = $conn->query($sql);
        while($fet = $query->fetch_object()){           
        ?>
        


        <div class="col-xl-3 col-sm-6 box-col-4a">
                <div class="card">
                  <div class="product-box">
                    <div class="product-img"><img class="img-fluid" src="images/<?php echo $fet->pro_img1;?>" alt="">
                      <div class="product-hover">
                        <ul>
                        <a href="product_detail.php?pro_id=<?php echo $fet->pro_id;?>"> <li><i class="icon-shopping-cart "></i></li></a>
                        </ul>
                      </div>
                    </div>
                    <div class="product-details">
                      <h4><?php echo $fet->pro_name; ?></h4>
                      <p><?php echo $fet->pro_detail;?></p>
                      <div class="product-price">
                        $<?php echo $fet->pro_price;?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             



        <?php } ?> 
