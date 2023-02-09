<div class="hidden xl:block h-[320px]">
      <div class="absolute inset-0 m-auto w-full h-full z-40 overflow-hidden" id="header_slider_slides">
        <div class="absolute inset-0 w-full h-full m-auto z-40 flex items-center justify-start">
          <div class="absolute z-10 inset-0 m-auto w-full h-full">
            <?php 
            $pg_name = trim("$cr_url",".php");
            $sliders = _get("slider","pg_name='$pg_name' ORDER BY id ASC");
            $i = 0;
            while($slide = mysqli_fetch_assoc($sliders)){ $i++;
            ?>
            <img data-target="<?php echo $i; ?>" style="transform: translateX(0%); transition: all 0.8s;"
              class="header_slides_image w-full h-full object-cover absolute inset-0 z-20"
              src="admin/upload/<?php echo $slide['file_name']?>" alt="">

            <div class="header_slides_text w-full h-full absolute inset-y-0 my-auto left-0 opacity-0"
              style="z-index: 30;" data-target="<?php echo $i; ?>">
              <div class="container flex flex-col items-start justify-center gap-y-5 h-full">
                <a href="#" class="text-3xl text-gray-600 hover:text-[#f75389] font-medium tracking-wide max-w-[400px]"
                  style="transform: translateY(-50%);transition: transform 0.5s;  "><?php echo $slide['title']?></a>
                <div class="flex flex-wrap gap-2 items-center"
                  style="transform: translateY(50%); transition: transform 0.5s;  ">
                  <a href="<?php echo $slide['link1']; ?>" class="px-4 py-1 rounded bg-gray-900 hover:bg-[#f75389] text-white text-sm"><?php echo $slide['btn1']; ?></a>
                  <a href="<?php echo $slide['link2']; ?>" class="px-4 py-1 rounded bg-gray-900 hover:bg-[#f75389] text-white text-sm"><?php echo $slide['btn2']; ?></a>
                </div>
              </div>
            </div>
            <?php }?>


          </div>
        </div>
      </div>

      <div class="absolute z-50 left-0 bottom-0 w-full h-20">
        <div class="container flex items-center gap-x-4">
        <?php 
            $sliders = _get("slider","pg_name='$pg_name' ORDER BY id ASC");
            $i = 0;
            while($slide = mysqli_fetch_assoc($sliders)){ $i++;
            ?>
          <button data-target="<?php echo $i; ?>"
            class="header_slides_toggle w-9 h-9 rounded-full border ring shadow focus:ring-offset-2 focus:bg-white">
            <img class="w-full h-full object-cover rounded-full" src="admin/upload/<?php echo $slide['file_name']?>" alt=""> </button>
            <?php }?>
        </div>
      </div>
    </div>