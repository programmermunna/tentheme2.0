<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Activities
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="activities.php"> activities
        </a>

      </div>

    </div>
  </header>

  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start py-6">
      <div class="container flex flex-col lg:flex-row gap-y-5 lg:gap-y-0 lg:gap-x-5">

        <!-- Dashboard Sidebar -->
        <?php include("common/dashboad_sidebar.php");?>
        <!-- Dashboard Sidebar -->

        <!-- Body Content -->
        <div class="w-full bg-white shadow rounded-sm">
          <div class="p-5">
            Dashboard Content Here...
          </div>
        </div>

      </div>
    </div>
  </main>



  <!-- Footer -->
  <footer class="bg-white pt-[74px]">
    <div class="container grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-12">

      <div class="space-y-6">
        <img class="w-36" src="assets/images/logo.png" alt="">
        <div class="flex space-x-5">
          <a href="https://www.facebook.com/bangladeshisoftware"
            class="bg-blue-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-facebook"></i>
            <small>Facebook</small>
          </a>
          <a href="https://www.facebook.com/bangladeshisoftware"
            class="bg-red-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-youtube"></i>
            <small>Youtube</small>
          </a>
        </div>
      </div>

      <div>
        <p>Bangladeshi Software is the biggest Software Company In Bangladesh. We provide any Desktop & Android
          Software.
          We Provide 100 Percent Customer Satisfaction Copyright © by SHAMIMLEM.</p>
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
            <a href="mailto:shamimlem@yahoo.com">shamimlem@yahoo.com</a>
          </li>

          <li class="space-x-2 text-sm font-medium hover:text-gray-600">
            <small class="text-xs"><i class="fa-solid fa-chevron-right"></i></small>
            <a href="tel:+08801719182586">+08801719182586</a>
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
        <span class="text-gray-700 text-base"> All Rights Reserved © Bangladeshi Software 2022 <span>SHAMIMLEM.</span>
      </p>
    </div>

  </footer>
  <!-- Footer -->

  <script src="assets/js/app.js"></script>
</body>

</html>