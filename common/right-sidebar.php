<?php 
 $cr_index = trim($cr_url,".php");
 if($cr_index=='services'){
    $index = 'service';
    $index2 = 'service';
    }else{
      $index = 'products';
      $index2 = 'products';
    }

?>
      <div class="sticky -top-52 w-full lg:min-w-[350px] lg:w-[350px]">
      <form action="<?php echo $cr_url; ?>" method="GET">
          <label for="voice-search" class="sr-only">Search</label>
          <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none text-green-600">
              <i class="fa-solid fa-search"></i>
            </div>
            <input name="src" class="shadow w-full h-12 rounded-t px-10 focus:ring-2 focus:outline-none focus:ring-gray-200"
              type="text" id="voice-search" placeholder="Search..." required value="<?php if(isset($_GET['src'])){echo $_GET['src'];}elseif(isset($_GET['category'])){echo $_GET['category'];}?>"/>
            <button type="submit"
              class="flex absolute inset-y-0 right-1.5 text-sm items-center text-green-700 px-2 h-fit py-2 my-auto rounded">
              Search
            </button>
          </div>
        </form>

          <!-- Filter by Category -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Category">
              <span>Category</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <div class="ds_div" data-ref="Category">
              <div class="py-0">
              <?php $index = mysqli_num_rows(_get("$index","status='Publish'"));?>
                <div class="flex justify-between items-center p-2 hover:bg-cyan-800 hover:text-white rounded">
                  <h6 class="text-sm font-medium">All Categories</h6>
                  <small><?php echo $index; ?></small>
                </div>
                <ul class="pb-3">

                  <?php 
                  $all_ctg = _get("category","id !='' LIMIT 10");
                  while($ctg = mysqli_fetch_assoc($all_ctg)){
                    $ctg_name = $ctg['category'];
                  ?>
                  <a href="<?php echo $cr_url;?>?category=<?php echo $ctg['category']?>">
                    <li
                      class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                      <span><?php echo $ctg['category']?></span>
                      <?php
                      $all_index = _get("$index2","category='$ctg_name' AND status='Publish'");
                      $cr_index = mysqli_num_rows($all_index);
                      ?>
                      <span><?php echo $cr_index; ?></span>
                    </li>
                  </a>
                  <?php }?>
                </ul>
              </div>
            </div>
          </div>
          <br>

          <!-- Filter by Price -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Price">
              <span>Price</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>


          <form action="<?php echo $cr_url; ?>" method="GET">
            <div class="ds_div" data-ref="Price">
              <div class="py-4 flex flex-wrap gap-2 items-center w-full">

                <div class="relative">
                  <input name="from" type="number" class="px-5 w-28 py-2 border rounded focus:border-gray-400" placeholder="5" value="<?php if(isset($_GET['from'])){echo $_GET['from'];}?>">
                  <span class="text-sm absolute inset-y-0 my-auto flex items-center left-2.5">$</span>
                </div>
                <span>to</span>
                <div class="relative">
                  <input name="to" type="number" class="px-5 w-28 py-2  border rounded focus:border-gray-400" placeholder="51" value="<?php if(isset($_GET['to'])){echo $_GET['to'];}?>">
                  <span class="text-sm absolute inset-y-0 my-auto flex items-center left-2.5">$</span>
                </div>
                <button type="submit"  class="py-2 px-4 rounded bg-gray-300 focus:ring-2 text-black"> <i
                    class="fa-solid fa-chevron-right"></i>
                </button>

              </div>
            </div>
          </form>



          </div>
          <br>

          <!-- Filter by Rating -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
    rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Rating">
              <span>Rating</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>

          <form action="<?php echo $cr_url; ?>" method="GET">
            <div class="ds_div" data-ref="Rating">
              <div class="p-2">
                <ul class="space-y-3">
                  <li>
                    <label for="all" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="all" name="rating" checked>
                      <span>All</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                  <li>
                    <label for="1" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="1" name="rating" value="1">
                      <span>1 stars and higher</span>
                      <span class="ml-auto">2</span>
                    </label>
                  </li>
                  <li>
                    <label for="2" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="2" name="rating" value="2">
                      <span>2 stars and higher</span>
                      <span class="ml-auto">6</span>
                    </label>
                  </li>
                  <li>
                    <label for="3" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="3" name="rating" value="3">
                      <span>3 stars and higher</span>
                      <span class="ml-auto">3</span>
                    </label>
                  </li>
                  <li>
                    <label for="4" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="4" name="rating" value="4">
                      <span>4 stars and higher</span>
                      <span class="ml-auto">7</span>
                    </label>
                  </li>
                  <li>
                    <label for="5" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="5" name="rating" value="5">
                      <span>5 stars</span>
                      <span class="ml-auto">41</span>
                    </label>
                  </li>
                </ul>
                <br>
                <button type="submit" class="btn_blue">Submit</button>
              </div>
            </div>
          </form>

          </div>
          <br>

          <!-- filter by Date Added -->
          <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
    rgba(0, 0, 0, 0.06) 0px 0px 0px 1px" class="sidebar_item overflow-hidden bg-white shadow px-5">
            <button class="ds_title" data-ref="Date Added">
              <span>Date Added</span>
              <span>
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>

            <form action="<?php echo $cr_url; ?>" method="GET">
            <div class="ds_div" data-ref="Date Added">
              <div class="p-2">
                <ul class="space-y-3">
                  <li>
                    <label for="anydate" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="anydate" name="date" checked value="any-date">
                      <span>Any Date</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                  <li>
                    <label for="last_year" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="last_year" name="date" checked value="last-year">
                      <span>In the last year</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                  <li>
                    <label for="last_month" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="last_month" name="date" checked value="last-month">
                      <span>In the last month</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                  <li>
                    <label for="last_week" class="flex justify-start items-center gap-x-3 text-gray-700">
                      <input type="radio" id="last_week" name="date" checked value="last-week"> 
                      <span>In the last week</span>
                      <span class="ml-auto">99</span>
                    </label>
                  </li>
                </ul>
                <br>
                <button type="submit" class="btn_blue">Submit</button>
              </div>
            </div>
            </form>
            
          </div>
        </div>