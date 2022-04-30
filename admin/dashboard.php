
         <!-- Container-fluid starts-->
         <div class="container-fluid general-widget">
           <div class="row">
             <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
               <div class="card gradient-primary o-hidden">
                 <div class="b-r-4 card-body">
                   <div class="media static-top-widget">
                     <div class="align-self-center text-center"><i data-feather="database"></i></div>
                     <?php 
                      $sql = $conn->query("SELECT SUM(order_total) AS total FROM tb_order WHERE pay_status = 'ชำระเงินแล้ว' ");
                      $fet = $sql->fetch_object();
                     ?>
                     <div class="media-body"><span class="m-0 text-white"></span>Total</span>
                       <h4 class="mb-0 counter"><?php echo $fet->total;?></h4><i class="icon-bg" data-feather="database"></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
               <div class="card gradient-secondary o-hidden">
                 <div class="b-r-4 card-body">
                   <div class="media static-top-widget">
                     <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                     <div class="media-body"><span class="m-0">Products</span>
                     <?php 
                      $sql = $conn->query("SELECT MAX(pro_id) AS id FROM tb_product");
                      $fet = $sql->fetch_object();
                     ?>
                       <h4 class="mb-0 counter"><?php echo $fet->id;?></h4><i class="icon-bg" data-feather="shopping-bag"></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
               <div class="card gradient-warning o-hidden">
                 <div class="b-r-4 card-body">
                   <div class="media static-top-widget">
                     <div class="align-self-center text-center">
                       <div class="text-white i" data-feather="inbox"></div>
                     </div>
                     <div class="media-body"><span class="m-0 text-white">Order list</span>
                     <?php 
                      $sql = $conn->query("SELECT MAX(order_id) AS ori FROM tb_order");
                      $fet = $sql->fetch_object();
                     ?>
                       <h4 class="mb-0 counter text-white"><?php echo $fet->ori;?></h4><i class="icon-bg" data-feather="inbox"></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
               <div class="card gradient-info o-hidden">
                 <div class="b-r-4 card-body">
                   <div class="media static-top-widget">
                     <div class="align-self-center text-center">
                       <div class="text-white i" data-feather="user-plus"></div>
                     </div>
                     <div class="media-body"><span class="m-0 text-white">All User</span>
                     <?php 
                      $sql = $conn->query("SELECT MAX(mem_id) AS memid FROM tb_member");
                      $fet = $sql->fetch_object();
                     ?>
                       <h4 class="mb-0 counter text-white"><?php echo $fet->memid;?></h4><i class="icon-bg" data-feather="user-plus"></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>




             <div class="col-xl-6 xl-100 box-col-12">
               <div class="card o-hidden">
                 <div class="cal-date-widget card-body p-0">
                   <div class="row">
                     <div class="col-xl-5 col-xs-12 col-md-6 col-sm-12 gradient-primary">
                       <div class="cal-info text-center">
                         <h2><?php echo date("d")+1;?></h2>
                         <div class="d-inline-block mt-2"><span class="b-r-light pr-3">March</span><span class="pl-3">2021</span></div>
                       </div>
                     </div>
                     <div class="col-xl-7 col-xs-12 col-md-6 col-sm-12 p-50">
                       <div class="cal-datepicker">
                         <div class="datepicker-here" data-language="en">           </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             


           </div>
         </div>
         <!-- Container-fluid Ends-->
  