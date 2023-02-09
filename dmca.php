<!DOCTYPE html>
<html lang="en">

<head>
  <!--
      theme name: Bangladeshi Software
      version: 1.0
      author: @bangladeshisoftware
     -->

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />

  <!-- FONT-AWESOME -->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>

  <!-- CSS Styles -->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>Title</title>  
</head>

<body>
  <!-- Header -->
  <header class="bg-white shadow bg-cover bg-center"
    style="background-image: linear-gradient(to right, #CEF3F3, #cef3f3c2), url('https://www.bangladeshisoftware.com/wp-content/uploads/2019/06/header-bg-copyright.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Header Links -->
    <div class="container flex justify-between items-center h-20 relative">
      <a href="index.php">
        <img class="w-32 xl:w-40" src="assets/images/logo.png" alt="" />
      </a>


      <!-- Header UL -->
      <button id="toggle_menu" class="text-lg lg:hidden relative z-50"><i class="fa-solid fa-bars"></i></button>
      <div class="hidden fixed inset-0 m-auto w-full h-full bg-black z-40 bg-opacity-40" id="mobile_header_overlay">
      </div>
      <ul id="menu_ul"
        class="flex lg:items-center fixed lg:static top-20 inset-x-0 mx-auto lg:mx-0 gap-3 flex-col lg:flex-row lg:bg-transparent bg-white w-[90%] lg:w-auto p-6 lg:p-0 rounded shadow-lg lg:border-transparent lg:shadow-none items-start transform scale-y-0 lg:scale-y-100 origin-top z-50 border transition-transform">
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="services.php">Services</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="posts.php">posts</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="team.php">Team</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="investor.php">Investor</a>
        </li>

        <li class="relative header_sub_parent">
          <a class="header_sub_ul_toggle flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="#">Pages</a>
          <div
            class="transition-all transform origin-top scale-y-0 py-2 absolute z-50 top-[100%] inset-x-0 mx-auto w-56 space-y-1">
            <ul class="bg-white p-3 rounded shadow-xl border">
              <li><a href="about.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">About
                  US</a></li>
              <li><a href="contact.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Contact
                  US</a></li>
              <li><a href="refund-policy.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Refund
                  Policy</a></li>
              <li><a href="privacy-policy.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Privacy
                  Policy</a></li>
              <li><a href="terms-and-conditions.php"
                  class="custom_li_hover hover:text-white rounded shadow-sm px-3 py-2 block w-full">Terms
                  and Conditions</a></li>
            </ul>
          </div>
        </li>

        <li>
          <a class="flex items-center px-3 h-[44px]" href="signup.php">Signup</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] text-white space-x-2 rounded focus:ring-1 focus:ring-[#11987d] ring-offset-2 shadow"
            style="
                      background-image: conic-gradient(from 1turn, #0e9479, #16a085);
                    " href="login.php">
            <span class="text-sm">
              <i class="fa-solid fa-lock"></i>
            </span>
            <span>Login</span>
          </a>
        </li>

        <li class="relative">
          <div class="p-0.5 w-fit h-fit bg-gray-100 rounded-md hover:from-transparent transition-all">
            <button id="dashboard_options_handler"
              class="flex items-center gap-x-2 px-3 h-[44px] rounded bg-white hover:bg-gray-100 transition-all focus:ring-2 ring-offset-2 focus:ring-gray-200"
              href="#">

              <a href="cart.php" class="mr-1 relative flex items-center gap-x-1 text-sm">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="cart_items_wrapper"> </span>
              </a>
              <small>Shamim Reza</small>
              <img class="w-7 h-7 rounded-full" src="https://i.ibb.co/Ryr9PQB/index.jpg" alt="" />
              <small class="block transition-all transform rotate-180">
                <i class="fa-solid fa-chevron-up"></i>
              </small>
            </button>
          </div>

          <div id="dashboard_options"
            class="absolute w-full rounded h-fit bg-white shadow top-[105%] inset-x-0 mx-auto transition-all transform origin-top scale-y-0 z-50">
            <div class="flex flex-col py-2">
              <a href="dashboard.php" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-gauge"></i></span>
                <span>Dashboard</span>
              </a>

              <a href="##" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-sign-out"></i></span>
                <span>Logout</span>
              </a>
            </div>
          </div>
        </li>
      </ul>

    </div>

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        DMCA
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="dmca.php"> cookies policy
        </a>

      </div>

    </div>
  </header>



  <!-- Middle Content -->
  <section class="relative md:py-24 py-16">
    <div class="container">
      <div class="md:flex justify-center">
        <div class="md:w-3/4">
          <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
            <h5 class="text-xl font-semibold mb-4">Overview :</h5>
            <p class="text-slate-400">It seems that only fragments of the original text remain in the Lorem Ipsum texts
              used today. One may speculate that over the course of time certain letters were added or deleted at
              various positions within the text.</p>
            <p class="text-slate-400">In the 1960s, the text suddenly became known beyond the professional circle of
              typesetters and layout designers when it was used for Letraset sheets (adhesive letters on transparent
              film, popular until the 1980s) Versions of the text were subsequently included in DTP programmes such as
              PageMaker etc.</p>
            <p class="text-slate-400">There is now an abundance of readable dummy texts. These are usually used when a
              text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often
              amusing and tell short, funny or nonsensical stories.</p>

            <h5 class="text-xl font-semibold mb-4 mt-8">We use your information to :</h5>
            <ul class="list-none text-slate-400 mt-4">
              <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2"></i>Digital
                Marketing Solutions for Tomorrow</li>
              <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2"></i>Our
                Talented &amp; Experienced Marketing Agency</li>
              <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2"></i>Create
                your own skin to match your brand</li>
              <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2"></i>Digital
                Marketing Solutions for Tomorrow</li>
              <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2"></i>Our
                Talented &amp; Experienced Marketing Agency</li>
              <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle mr-2"></i>Create
                your own skin to match your brand</li>
            </ul>

            <h5 class="text-xl font-semibold mb-4 mt-8">Information Provided Voluntarily :</h5>
            <p class="text-slate-400">In the 1960s, the text suddenly became known beyond the professional circle of
              typesetters and layout designers when it was used for Letraset sheets (adhesive letters on transparent
              film, popular until the 1980s) Versions of the text were subsequently included in DTP programmes such as
              PageMaker etc.</p>

          </div>
        </div>
        <!--end -->
      </div>
      <!--end grid-->
    </div>
    <!--end container-->
  </section>
  <!-- Middle Content -->

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
