<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Ticket
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="ticket.php"> ticket
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

          <div class="px-5 py-4 text-blue-600 border-b flex justify-between items-center">
            <span class="text-2xl font-medium tracking-wide">Add new ticket!</span>
          </div>

          <form class="grid grid-cols-12 gap-y-6 p-5">
            <div class="col-span-12"><label class="mb-2 block" for="subject">Subject</label>
              <input required="" type="text" placeholder="Subject..."
                class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
                id="subject">
            </div>


            <div class="col-span-12"><label class="mb-2 block" for="subject">Select Order</label>
              <select
                class="border-8 border-white bg-white ring-2 ring-gray-200 focus:ring-blue-600 w-full h-11 rounded outline-none">
                <option value="">Order</option>
                <option value="">Order</option>
                <option value="">Order</option>
              </select>
            </div>


            <div class="col-span-12"><label class="mb-2 block" for="message">Your Message</label>
              <textarea required="" type="text" placeholder="Message..."
                class="w-full min-h-[100px] p-3 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
                value="" id="message"></textarea>
            </div>


            <div class="col-span-12"><label class="mb-2 block" for="photo">Choose File</label><input
                class="w-full flex items-center rounded bg-white outline-none ring-2 ring-gray-200 focus:ring-blue-600 text-gray-800 px-4 py-2 disabled:bg-gray-200 disabled:cursor-not-allowed"
                id="photo" type="file">
            </div>

            <div class="col-span-12">
              <div class="w-fit">
                <button type="submit"
                  class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">
                  Submit
                </button>
              </div>
            </div>
          </form>

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