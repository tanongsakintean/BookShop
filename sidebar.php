 <!-- Page Sidebar Start-->
 <div class="iconsidebar-menu iconbar-mainmenu-close">
          <div class="sidebar">
            <ul class="iconMenu-bar custom-scrollbar">

                <?php 
                    $sql = $conn->query("SELECT * FROM tb_category ");
                    while($fet=$sql->fetch_object()){
                ?>
              <li><a class="bar-icons" href="index.php?p=showproduct&category_id=<?php echo $fet->category;  ?>">
                 <span><?php echo $fet->cate_name; ?></span></a>

              </li>
              <?php }?>

             
            </ul>
          </div>
        </div>
        <!-- Page Sidebar Ends-->