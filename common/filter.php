<div class="flex justify-between items-center">
            <!-- View Change Icon -->
            <div class="flex items-center  gap-x-4">
              <button data-view="list_view"
                class="items_view_handler active_view text-gray-500 hover:text-black text-xl">
                <span><i class="fa-solid fa-list"></i></span>
              </button>
              <button data-view="grid_view"
                class="items_view_handler text-gray-400 hover:text-black gap-y-[3px] gap-x-0.5 group grid grid-cols-12">
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
                <div class="col-span-4 block w-1 h-1 bg-gray-400 group-hover:bg-black"></div>
              </button>
            </div>

            <!-- Sorting Buttons -->
            <div style="display:flex; gap:20px;">
            <div class="flex items-center  gap-x-4 sort">
              <ul>
                <li id="filter"><?php if(isset($_GET['items'])){echo $_GET['items'];}else{echo "show";}?>
                  <ul id="filter_list">                    
                    <li><a href="<?php echo $cr_url; ?>?items=20">20</a></li>
                    <li><a href="<?php echo $cr_url; ?>?items=20">20</a></li>
                    <li><a href="<?php echo $cr_url; ?>?items=40">50</a></li>
                    <li><a href="<?php echo $cr_url; ?>?items=100">100</a></li>
                </ul>
                </li>
              </ul>            
          </div>
            <div class="flex items-center  gap-x-4 sort">
              <ul>
                <li id="filter2">
                  <?php 
                  if(isset($_GET['sort'])){
                  $sort = $_GET['sort'];
                  if($sort=='ASC'){
                    echo "Low > Heigh";
                  }elseif($sort=='DESC'){
                    echo "Heigh > Low";
                  }}else{
                    echo "Default";
                  }?>
                  <ul id="filter_list2">
                    <li><a href="<?php echo $cr_url; ?>?sort=ASC">Price(Low > Heigh)</a></li>
                    <li><a href="<?php echo $cr_url; ?>?sort=DESC">Price(Heigh > Low)</a></li>
                </ul>
                </li>
              </ul>            
          </div>
        </div>
          </div>

        <script>
          $("#filter_list").hide();
          $("#filter").click(function(){
          $("#filter_list2").hide();
            $("#filter_list").toggle();
          });
          $("#filter_list2").hide();
          $("#filter2").click(function(){
          $("#filter_list").hide();
            $("#filter_list2").toggle();
          });

        </script>