<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<!-- Slider -->
<?php include("common/slider.php");?>
<!-- Slider -->
</header>

  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start">
      <div class="container flex flex-col lg:flex-row gap-y-5 py-12 lg:gap-y-0 lg:gap-x-6 sm:items-start">

        <!-- Body Content -->
        <!-- services -->
        <div class="w-full space-y-6">
        <!-- filter -->
        <?php include("common/filter.php");?>
        <!-- filter -->

        <?php 
          if(isset($_GET['src'])){
            $src = $_GET['src'];
            $service = _query("SELECT service.*,person.* FROM service INNER JOIN person ON service.pid=person.id WHERE service.status='Publish' AND (person.name='$src' OR service.title LIKE '%$src%' OR category='$src' OR sell_price='$src')");
          }elseif(isset($_GET['items'])){
            $items = $_GET['items'];
            $service = _get("service","status='Publish' LIMIT $items;");
          }elseif(isset($_GET['sort'])){ 
            $sort = $_GET['sort'];
            $service = _get("service","status='Publish' ORDER BY sell_price $sort");
          }elseif(isset($_GET['category'])){ 
            $category = $_GET['category'];
            $service = _get("service","status='Publish' AND category='$category'");
          }elseif(isset($_GET['from'])){ 
            $from = $_GET['from'];
            $to = $_GET['to'];
            $service = _get("service","status='Publish' AND sell_price BETWEEN $from AND $to");
          }elseif(isset($_GET['date'])){ 
            $date = $_GET['date'];
            $year = $time-31536000;
            $month = $time-2592000;
            $week = $time-604800;
              if($date=='last-year'){
              $checked = 'checked';
              $service = _get("service","status='Publish' AND time < $year");
              }elseif($date=='last-month'){
                $service = _get("service","status='Publish' AND time < $month");
              }elseif($date=='last-week'){
                $service = _get("service","status='Publish' AND time < $week");
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
                 
          $service = _get("service","status='Publish' ORDER BY id DESC LIMIT $offset, $total_records_per_page");
          
          $total_records = mysqli_num_rows(_get("service","status='Publish'"));
          $total_no_of_pages = ceil($total_records / $total_records_per_page);
          $second_last = $total_no_of_pages - 1;
          }         
          while($data = mysqli_fetch_assoc($service)){
            $author_id = $data['pid'];
            $author = _fetch("person","id=$author_id");
          ?>
          <div class="grid grid-cols-12 gap-x-6 p-6 bg-white item_shadow">
            <div class="col-span-5">
              <div>
                <a href="service.php?service_id=<?php echo $data['id']?>">
                <img class="rounded"
                  src="admin/upload/<?php echo $data['file_name1']?>">
                </a>
              </div>
            </div>

            <div class="col-span-7 w-full">
              <div class="flex flex-col gap-y-2">
                <a href="service.php?service_id=<?php echo $data['id']?>">
                  <h3 class="text-xl font-semibold tracking-wide mb-2"><?php echo $data['title']?></h3>
                </a>
                <div class="w-full flex gap-x-6">
                  <ul class="list_icon space-y-2 pl-2 text-gray-700 w-[420px]">
                    <a href="service.php?service_id=<?php echo $data['id']?>">
                      <?php echo $data['mini_content']?>
                    </a>
                  </ul>
                  <div class="w-full flex border-l flex-col items-center justify-between">
                    <div></div>
                    <div class="flex flex-col items-center justify-center">
                      <h3 class="text-semibold text-xl font-semibold tracking-wide"> TK. <?php echo $data['sell_price']?> </h3>
                      <p><?php echo $data['sell']?> Sales</p>
                    </div>
                    <a href="service.php?service_id=<?php echo $data['id']?>"
                      class="w-fit px-6 border shadow-sm py-2 border-cyan-700 hover:bg-cyan-900 rounded hover:text-white text-cyan-900 text-sm focus:ring-2 focus:border-transparent flex items-center gap-x-2">
                      <i class="fa-solid fa-cart-shopping"></i>
                      <span>Buy Now</span>
                    </a> 
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>
          <?php }?>

          <!-- <div class="w-full mt-12 flex justify-center">
            <div class="flex items-center space-x-1 w-fit">
              <a href="#" class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-cyan-800 hover:text-white rounded-l">
                <i class="fa-solid fa-arrow-left"></i>
              </a>

              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                1
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                2
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                3
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                4
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                5
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                ...
              </a>
              <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-cyan-800 hover:text-white">
                11
              </a>
              <a href="#" class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-cyan-800 hover:text-white rounded-r">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div> -->


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

        </div>


        <!-- right sidbar -->
        <?php include("common/right-sidebar.php");?>
        <!-- right sidbar -->
        

      </div>
    </div>
  </main>

  <br>
  <br>
  <br>


  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->