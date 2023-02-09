<!-- Footer -->
<footer class="bg-white pt-[74px]">
    <div class="container grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-12">

      <div class="space-y-6">
        <img class="w-36" src="admin/upload/<?php echo $website['file_name']?>" alt="">
        <div class="flex space-x-5">
          <a target="_blank" href="<?php echo $website['facebook']?>"
            class="bg-blue-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-facebook"></i>
            <small>Facebook</small>
          </a>
          <a target="_blank" href="<?php echo $website['youtube']?>"
            class="bg-red-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-youtube"></i>
            <small>Youtube</small>
          </a>
        </div>
      </div>

      <div>
        <p><?php echo $website['description']?></p>
      </div>

      <div class="2xl:pl-20">
        <ul class="w-fit 2xl:mx-auto space-y-4">
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="dmca.php">DMCA</a>
          </li>

          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="contact.php">Contact US</a>
          </li>
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="cookies-policy.php">Cookies Policy</a>
          </li>
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="privacy-policy.php">Privacy Policy</a>
          </li>

        </ul>
      </div>

      <div class="2xl:pl-20">
        <ul class="w-fit 2xl:mx-auto space-y-4">
          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="investor.php">Join Investor</a>
          </li>


          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="reseller.php">Join Reseller</a>
          </li>

          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="mailto:<?php echo $website['mail']?>"><?php echo $website['mail']?></a>
          </li>

          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="tel:<?php echo $website['phone']?>"><?php echo $website['phone']?></a>
          </li>

        </ul>
      </div>
    </div>


    <div class="container flex flex-col xl:flex-row w-full justify-between items-center gap-y-4 xl:gap-y-0 py-12">
      <ul class="flex items-center justify-start w-full xl:w-[400px] gap-x-4 flex-wrap">
        <li> <a href="index.php" class="hover:text-blue-600 hover:underline">Products</a> </li>
        <li> <a href="services.php" class="hover:text-blue-600 hover:underline">Services</a> </li>
        <li> <a href="investor.php" class="hover:text-blue-600 hover:underline">Investor</a> </li>
        <li> <a href="reseller.php" class="hover:text-blue-600 hover:underline">Reseller</a> </li>
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