<?php 

require('../confic.php');


    
    if (isset($_REQUEST['ac'])) 
    {  
        

        switch($_REQUEST['ac']){
                      case 'addp':

          if($_FILES['pro_img1']['name']){
                copy($_FILES['pro_img1']['tmp_name'], "../images/".$_FILES['pro_img1']['name']);

          }
          if($_FILES['pro_img2']['name']){
                copy($_FILES['pro_img2']['tmp_name'], "../images/".$_FILES['pro_img2']['name']);

          }
          if($_FILES['pro_img3']['name']){
                copy($_FILES['pro_img3']['tmp_name'], "../images/".$_FILES['pro_img3']['name']);

          }
          if($_FILES['pro_img4']['name']){
                copy($_FILES['pro_img4']['tmp_name'], "../images/".$_FILES['pro_img4']['name']);

          }
          if($_FILES['pro_img5']['name']){
            copy($_FILES['pro_img5']['tmp_name'], "../images/".$_FILES['pro_img5']['name']);

      }

            $sql = $conn->query("INSERT INTO tb_product (pro_name,pro_detail,pro_price,pro_amont,category,pro_img1,pro_img2,pro_img3,pro_img4,pro_img5) VALUES ('".$_REQUEST['pro_name']."','".$_REQUEST['pro_detail']."','".$_REQUEST['pro_price']."','".$_REQUEST['pro_amont']."','".$_REQUEST['category']."','".$_FILES['pro_img1']['name']."','".$_FILES['pro_img2']['name']."','".$_FILES['pro_img3']['name']."','".$_FILES['pro_img4']['name']."','".$_FILES['pro_img5']['name']."')");


            echo "<script>window.location.replace('../admin/index.php?p=addpro')</script>";

            break;

            case 'edit':
              

            $query = $conn->query("SELECT * FROM tb_product WHERE pro_id = '".$_REQUEST['pro_id']."'");
            $fet = $query->fetch_object();

            if($_FILES['pro_img1']['name']){
            unlink("../images/".$fet->pro_img1);
            copy($_FILES['pro_img1']['tmp_name'], "../images/".$_FILES['pro_img1']['name']);
            $query = $conn->query("UPDATE tb_product SET pro_img1 = '".$_FILES['pro_img1']['name']."' WHERE pro_id = '".$_REQUEST['pro_id']."' ");
            }

            if($_FILES['pro_img2']['name']){
            unlink("../images/".$fet->pro_img2);
            copy($_FILES['pro_img2']['tmp_name'], "../images/".$_FILES['pro_img2']['name']);
            $query = $conn->query("UPDATE tb_product SET pro_img2 = '".$_FILES['pro_img2']['name']."' WHERE pro_id = '".$_REQUEST['pro_id']."' ");
            }

            if($_FILES['pro_img3']['name']){
            unlink("../images/".$fet->pro_img3);
            copy($_FILES['pro_img3']['tmp_name'], "../images/".$_FILES['pro_img3']['name']);
            $query = $conn->query("UPDATE tb_product SET pro_img3 = '".$_FILES['pro_img3']['name']."' WHERE pro_id = '".$_REQUEST['pro_id']."' ");
            }

            if($_FILES['pro_img4']['name']){
            unlink("../images/".$fet->pro_img4);
            copy($_FILES['pro_img4']['tmp_name'], "../images/".$_FILES['pro_img4']['name']);
            $query = $conn->query("UPDATE tb_product SET pro_img4 = '".$_FILES['pro_img4']['name']."' WHERE pro_id = '".$_REQUEST['pro_id']."' ");
            }

            if($_FILES['pro_img5']['name']){
              unlink("../images/".$fet->pro_img5);
              copy($_FILES['pro_img5']['tmp_name'], "../images/".$_FILES['pro_img5']['name']);
              $query = $conn->query("UPDATE tb_product SET pro_img5 = '".$_FILES['pro_img5']['name']."' WHERE pro_id = '".$_REQUEST['pro_id']."' ");
              }
          
$sql = $conn->query("UPDATE tb_product SET pro_name = '".$_REQUEST['pro_name']."',pro_detail = '".$_REQUEST['pro_detail']."',pro_price = '".$_REQUEST['pro_price']."',pro_amont = '".$_REQUEST['pro_amont']."',category = '".$_REQUEST['category']."' WHERE pro_id = '".$_REQUEST['pro_id']."'  ");
echo "<script>alert('แก้ไขสำเร็จ');</script>";
echo "<script>window.location.replace('../admin/index.php?p=addpro')</script>";

          
            break;

                       case 'del': 

            $query = $conn->query("SELECT pro_img1,pro_img2,pro_img3,pro_img4,pro_img5 FROM tb_product WHERE pro_id = '".$_REQUEST['id']."' ");
            $fet = $query->fetch_object();
            if ($fet->pro_img1) {
              unlink("../images/".$fet->pro_img1);
            }
            if ($fet->pro_img2) {
              unlink("../images/".$fet->pro_img2);
            }
            if ($fet->pro_img3) {
              unlink("../images/".$fet->pro_img3);
            }
            if ($fet->pro_img4) {
              unlink("../images/".$fet->pro_img4);
            }
            $query = $conn->query("DELETE FROM tb_product WHERE pro_id = '".$_REQUEST['id']."' ");          
            echo "<script>window.location.replace('../admin/index.php?p=editpro')</script>";
             break;
        }
    

    }

?>

