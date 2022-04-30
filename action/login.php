<?php 
    session_start();
    include("../confic.php");


    if(isset($_REQUEST['ac'])){

        switch($_REQUEST['ac']){

                case 'login':
                    $sql =$conn->query("SELECT * FROM tb_member WHERE mem_email = '".$_REQUEST['mem_email']."' AND mem_password = '".$_REQUEST['mem_password']."'");
                    $num = $sql->num_rows;
                    if($num > 0){
                        $fet = $sql->fetch_object();
                        $_SESSION['mem_id'] = session_id();
                        $_SESSION['mem_name'] = $fet->mem_name;
                        $_SESSION['mem_email'] = $fet->mem_email;
                        $_SESSION['mem_address'] = $fet->mem_address;
                        $_SESSION['mem_phone'] = $fet->mem_phone;
                        $_SESSION['mem_key'] = $fet->mem_id;
                        if($fet->status == '1'){
                            $update = $conn->query("UPDATE tb_member SET lastlogin = NOW()  WHERE mem_email = '".$_REQUEST['mem_email']."' AND mem_password = '".$_REQUEST['mem_password']."'");
                            echo "<script>alert('ยินดีเข้าสู่ระบบ');</script>";
                            echo "<script>window.location.replace('../index.php');</script>";
                           
                        }else{
                            $update = $conn->query("UPDATE tb_member SET lastlogin = NOW() WHERE mem_email = '".$_REQUEST['mem_email']."' AND mem_password = '".$_REQUEST['mem_password']."' ");
                            echo "<script>alert('ยินดีเข้าสู่ระบบแอดมิน');</script>";
                            echo "<script>window.location.replace('../admin/index.php');</script>";
                        }


                    }else{
                        echo "<script>alert('อีเมลหรือรหัสผ่านผิด');</script>";
                        echo "<script>window.location.replace('../login.php');</script>";
                    }
                    break;

                    case 'reg':
                        $sql = $conn->query("SELECT * FROM tb_member WHERE mem_email = '".$_REQUEST['mem_email']."'   ");
                        $num = $sql->num_rows;
                        if($num > 0 ){
                            echo "<script>alert('อีเมลซ้ำ');</script>";
                            echo "<script>window.location.replace('../login.php');</script>";
                        }else{
                            $insert = $conn->query("INSERT INTO tb_member (mem_email,mem_password,mem_name,mem_address,mem_phone,status)VALUES('".$_REQUEST['mem_email']."','".$_REQUEST['mem_password']."','".$_REQUEST['mem_name']."','".$_REQUEST['mem_address']."','".$_REQUEST['mem_phone']."','1')");
                            echo "<script>alert('สมัครสมาชิกสำเร็จ');</script>";
                            echo "<script>window.location.replace('../login.php');</script>";
                        }

                        break;

                        case 'pass':
                            $sql = $conn->query("SELECT * FROM tb_member WHERE mem_email = '".$_REQUEST['mem_email']."'   ");
                            $num = $sql->num_rows;
                            if($num > 0){
                                $update = $conn->query("UPDATE tb_member SET mem_password = '".$_REQUEST['mem_password']."'  WHERE mem_email = '".$_REQUEST['mem_email']."'");
                                echo "<script>alert('แก้ไขรหัสสำเร็จ');</script>";
                                echo "<script>window.location.replace('../login.php');</script>";
                            }

                            break;

                            case 'setpro':
                                $sql = $conn->query(" UPDATE tb_member SET mem_email = '".$_REQUEST['mem_email']."',mem_password = '".$_REQUEST['mem_password']."',mem_name = '".$_REQUEST['mem_name']."',mem_address = '".$_REQUEST['mem_address']."',mem_phone = '".$_REQUEST['mem_phone']."' WHERE mem_id = '".$_REQUEST['mem_id']."'");
                                echo "<script>alert('แก้ไขรหัสสำเร็จ');</script>";
                                echo "<script>window.location.replace('../admin/index.php?p=edituser');</script>";

                            break;
                            case 'profile':
                                $sql = $conn->query(" UPDATE tb_member SET mem_email = '".$_REQUEST['mem_email']."',mem_password = '".$_REQUEST['mem_password']."',mem_name = '".$_REQUEST['mem_name']."',mem_address = '".$_REQUEST['mem_address']."',mem_phone = '".$_REQUEST['mem_phone']."' WHERE mem_id = '".$_REQUEST['mem_id']."'");
                                echo "<script>alert('แก้ไขรหัสสำเร็จ');</script>";
                                echo "<script>window.location.replace('../admin/index.php?p=profile');</script>";
                            break;
                            case 'profileu':
                                $sql = $conn->query(" UPDATE tb_member SET mem_email = '".$_REQUEST['mem_email']."',mem_password = '".$_REQUEST['mem_password']."',mem_name = '".$_REQUEST['mem_name']."',mem_address = '".$_REQUEST['mem_address']."',mem_phone = '".$_REQUEST['mem_phone']."' WHERE mem_id = '".$_REQUEST['mem_id']."'");
                                echo "<script>alert('แก้ไขรหัสสำเร็จ');</script>";
                                echo "<script>window.location.replace('../index.php?p=profile');</script>";
                            break;







                    


        }


    }



?>