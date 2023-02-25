<!-- Footer -->
<footer class="bg-white pt-[74px]">
    <div class="container grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-12">

      <div class="space-y-6">
        <img class="w-36" src="admin/upload/<?php echo $footer_1_2['file_name']?>" alt="">
        <div class="flex space-x-5">
          <a target="_blank" href="<?php echo $footer_1_2['facebook']?>"
            class="bg-blue-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-facebook"></i>
            <small>Facebook</small>
          </a>
          <a target="_blank" href="<?php echo $footer_1_2['youtube']?>"
            class="bg-red-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-youtube"></i>
            <small>Youtube</small>
          </a>
        </div>
      </div>

      <div>
        <p><?php echo $footer_1_2['textarea']?></p>
      </div>

      <div class="2xl:pl-20">
        <ul class="w-fit 2xl:mx-auto space-y-4">

        <?php $footer_3 = _get("footer_3_4_5","type='f3' AND status='Publish'");
        while($f3 = mysqli_fetch_assoc($footer_3)){ ?>
        <li class="space-x-2 text-sm font-medium hover:text-gray-600">
          <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
          <a href="<?php echo $f3['url']?>"><?php echo $f3['title']?></a>
        </li>
        <?php }?>

        </ul>
      </div>

      <div class="2xl:pl-20">
        <ul class="w-fit 2xl:mx-auto space-y-4">
        <?php $footer_4 = _get("footer_3_4_5","type='f4' AND status='Publish'");
          while($f4 = mysqli_fetch_assoc($footer_4)){ ?>
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="<?php echo $f4['url']?>"><?php echo $f4['title']?></a>
          </li>
          <?php }?>

        </ul>
      </div>
    </div>


    <div class="container flex flex-col xl:flex-row w-full justify-between items-center gap-y-4 xl:gap-y-0 py-12">
      <ul class="flex items-center justify-start w-full xl:w-[400px] gap-x-4 flex-wrap">
      <?php $footer_5 = _get("footer_3_4_5","type='f5' AND status='Publish'");
        while($f5 = mysqli_fetch_assoc($footer_5)){ ?>
        <li> <a href="<?php echo $f5['url']?>" class="hover:text-blue-600 hover:underline"><?php echo $f5['title']?></a> </li>
        <?php }?>
      </ul>

      <p class="w-full xl:text-right">
        <span class="text-gray-700 text-base"><?php echo $website['footer_text']?></span>
      </p>
    </div>

  </footer>
  <!-- Footer -->

  <script src="assets/js/app.js"></script>
  <?php if (isset($_GET['msg'])) {?><div id="popup_msg" data-text="<?php echo $_GET['msg']; ?>"></div><?php } ?>
  <?php if (isset($_GET['err'])) {?><div id="error_msg" data-text="<?php echo $_GET['err']; ?>"></div><?php } ?>
</body>
</html>