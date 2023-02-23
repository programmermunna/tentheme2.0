<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<!-- Slider -->
<?php include("common/slider.php");?>
<!-- Slider -->
</header>
<?php 
   if(isset($_GET['cart'])){
    if($id<1){
      $err = "Please Login First";
      header("location:index.php?err=$err");
    }else{
      $cart_id = $_GET['cart'];
      $check = _fetch("cart","pid=$id AND type='product' AND cart_id=$cart_id AND status=0");
      if($check){
      $err = "Already Added. Please Add New.";
      header("location:index.php?err=$err");
    }else{
      $insert = _insert("cart","pid,cart_id,type,time","$id,$cart_id,'product',$time");
      if($insert){
        $msg = "Successfully Added in Cart. Please Checkout";
        header("location:index.php?msg=$msg");
      }
    }
  }
}
?>


  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start">
      <div class="container flex flex-col lg:flex-row gap-y-5 py-6 xl:py-12 lg:gap-y-0 lg:gap-x-6 sm:items-start">
        <!-- Body Content -->
        <div class="w-full">

        <!-- filter -->
        <?php include("common/filter.php");?>
        <!-- filter -->
        <br>
          <div class="items list_view">
            
          <?php
          if(isset($_GET['src'])){
            $src = $_GET['src'];
            $products = _query("SELECT products.*,person.* FROM products INNER JOIN person ON products.pid=person.id WHERE products.status='Publish' AND (person.name='$src' OR products.title LIKE '%$src%' OR category='$src' OR sell_price='$src')");
          }elseif(isset($_GET['items'])){
            $items = $_GET['items'];
            $products = _get("products","status='Publish' LIMIT $items;");
          }elseif(isset($_GET['sort'])){ 
            $sort = $_GET['sort'];
            $products = _get("products","status='Publish' ORDER BY sell_price $sort");
          }elseif(isset($_GET['category'])){ 
            $category = $_GET['category'];
            $products = _get("products","status='Publish' AND category='$category'");
          }elseif(isset($_GET['from'])){ 
            $from = $_GET['from'];
            $to = $_GET['to'];
            $products = _get("products","status='Publish' AND sell_price BETWEEN $from AND $to");
          }elseif(isset($_GET['date'])){ 
            $date = $_GET['date'];
            $year = $time-31536000;
            $month = $time-2592000;
            $week = $time-604800;
              if($date=='last-year'){
              $checked = 'checked';
              $products = _get("products","status='Publish' AND time < $year");
              }elseif($date=='last-month'){
                $products = _get("products","status='Publish' AND time < $month");
              }elseif($date=='last-week'){
                $products = _get("products","status='Publish' AND time < $week");
              }else{
                header("location:index.php");
              }
          }else{
          $pagination = "ON";
          if (isset($_GET['page_no']) && $_GET['page_no']!="") {
          $page_no = $_GET['page_no'];} else {$page_no = 1;}
          $total_records_per_page = 10;
          $offset = ($page_no-1) * $total_records_per_page;
          $previous_page = $page_no - 1;
          $next_page = $page_no + 1;
          $adjacents = "2";          
          $products = _get("products","status='Publish' ORDER BY id DESC LIMIT $offset, $total_records_per_page");
          $total_records = mysqli_num_rows(_get("products","status='Publish'"));
          $total_no_of_pages = ceil($total_records / $total_records_per_page);
          $second_last = $total_no_of_pages - 1;
          }
          while($data = mysqli_fetch_assoc($products)){
            $author_id = $data['pid'];
            $author = _fetch("person","id=$author_id");
          ?>
            <div class="item">
              <a href="item.php?product_id=<?php echo $data['id']?>" class="item_link"></a>
              <div>
                <img class="w-full h-auto rounded"
                  src="admin/upload/<?php echo $data['file_name1']?>"/>
              </div>

              <div>
                <h3 style="padding-left:13px"><?php echo $data['title']?></h3>
                <p style="padding-left:13px"><small> <i>by</i> <a href="index.php?author=<?php echo $author['name']?>"><?php echo $author['name']?></a></small></p>
                <ul class="list_icon">
                  <?php echo $data['mini_content']?>
                </ul>
              </div>

              <div>
                <div></div>

                <div>                  
                  <div>
                    <span class="font-medium">TK.</span>
                    <span><?php echo $data['sell_price']?></span>
                  </div>
                  <p><?php echo $data['sell']?> Sales</p>

                  <?php if($review_product == 'checked'){ ?>
                    <div>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <div style="width:70%">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                    <?php }?>

                </div>

                <div>
                  <a id="show_added_popup" href="?cart=<?php echo $data['id']?>"><i class="fa-solid fa-cart-shopping cart_btn"></i></a>
                  <a target="_blank" href="<?php echo $data['link']?>"><span>Live</span><span>Preview</span>
                  </a>
                </div>
              </div>

            </div>
          <?php }?>


            <?php if(isset($pagination)){?>
                <style>
                .paginations{width:900px;}
                .paginations>ul>li{list-style: none;display: inline-block;line-height: 2.5;}
                .paginations>ul>li>a{padding: 5px 10px;margin:5px;background: #fff;font-weight: bolder;box-shadow: 0px 0px 2px gray;}
                .paginations>ul>li>a:hover{background: #4ade80;color: #fff;}
                .active>a{background: #4ade80 !important;color: #fff !important;}
                .page_of{padding-top: 10px;}
                @media only screen and (max-width: 850px){.page_of{display: none;}}
              </style>
                  <div class="paginations">
                    <ul>
                      <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
                        
                      <li <?php if($page_no <= 1){ echo "class=''"; } ?>>
                      <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
                      </li>
                          
                        <?php 
                      if ($total_no_of_pages <= 10){  	 
                        for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                          if ($counter == $page_no) {
                          echo "<li class=''><a>$counter</a></li>";	
                            }else{
                              echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                            }
                            }
                      }
                      elseif($total_no_of_pages > 10){
                        
                      if($page_no <= 4) {			
                      for ($counter = 1; $counter < 8; $counter++){		 
                          if ($counter == $page_no) {
                          echo "<li class='active'><a>$counter</a></li>";	
                            }else{
                              echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                            }
                            }
                        echo "<li><a>...</a></li>";
                        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                        }

                      elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                        echo "<li><a href='?page_no=1'>1</a></li>";
                        echo "<li><a href='?page_no=2'>2</a></li>";
                            echo "<li><a>...</a></li>";
                            for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
                              if ($counter == $page_no) {
                          echo "<li class='active'><a>$counter</a></li>";	
                            }else{
                              echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                            }                  
                          }
                          echo "<li><a>...</a></li>";
                        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
                                }
                        
                        else {
                            echo "<li><a href='?page_no=1'>1</a></li>";
                        echo "<li><a href='?page_no=2'>2</a></li>";
                            echo "<li><a>...</a></li>";

                            for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                              if ($counter == $page_no) {
                          echo "<li class='active'><a>$counter</a></li>";	
                            }else{
                              echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                            }                   
                                    }
                                }
                      }
                    ?>
                        
                      <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
                      <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
                      </li>
                        <?php if($page_no < $total_no_of_pages){
                        echo "<li><a href='?page_no=$total_no_of_pages'>Last</a></li>";
                        } ?>
                    </ul>
                  </div>
                <?php }?>
            <!-- Paginations -->

          </div>
        </div>

        <!-- right sidbar -->
        <?php include("common/right-sidebar.php");?>
        <!-- right sidbar -->

      </div>
    </div>
  </main>

  <!-- Cart Popup -->
  <div class="fixed inset-0 m-auto w-full h-full hidden items-center justify-center z-50 cart_added_popup">
    <div onclick="dismis_cart_added_popup()"
      class="fixed inset-0 m-auto w-full h-full bg-black bg-opacity-50 flex items-center justify-center z-30">
    </div>

    <div style="top:50%;left:22%;transform: translate(22%, -50%);" class="relative z-40 bg-white rounded shadow w-fit h-fit p-6 flex flex-col gap-y-5">
      <h3 class="flex items-center gap-x-3 text-xl font-semibold tracking-wide text-gray-800">
        <i class="fa-solid fa-check"></i>
        <span>Item added to your cart</span>
      </h3>

      <div class="flex bg-gray-50 border rounded items-start gap-x-4 p-5">
        <div class="w-full flex items-center gap-x-2">
          <img class="w-20 h-20 rounded object-cover" src="https://s3.envato.com/files/388991077/thumbnail.png" alt="">
          <p>
            Midone - React Admin Dashboard Template + HTML Version</p>
        </div>
        <div class="w-full">
          <h2 class="text-3xl font-semibold text-gray-700">$15</h2>
          <p>
            <b>License:</b>
            <span>Regular</span>
          </p>
        </div>
      </div>

      <div class="border rounded bg-gray-50 p-2">
        <label for="extend_support" class="font-semibold text-sm flex items-center">
          <input type="checkbox" id="extend_support">
          <span class="ml-2 block">
            Extend support to 12 months. +$8.63
          </span>
        </label>
      </div>

      <div class="flex items-center justify-between">
        <a onclick="dismis_cart_added_popup()"
          class="bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded shadow cursor-pointer">Keep
          Browsing</a>
        <a href="#" class="shadow bg-green-600 text-white px-4 py-2 rounded focus:ring-2 ring-offset-1 ring-green-600">To to
          Checkout</a>
      </div>

    </div>
  </div>
  <!-- Cart Popup --->

  <script>
    // $("#show_added_popup").on("click",function(){      
    //   $(".cart_added_popup").show();
    // });
  </script>

  <!-- Header area -->
<?php include("common/footer.php");?>
<!-- Header area -->

