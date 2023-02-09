<?php include("admin/config/functions.php"); ?>
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
  <header class="bg-white shadow">
    <div class="container flex justify-between items-center h-20">
      <a href="index.php">
        <img class="h-10" src="assets/images/logo.png" alt="" />
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
      </ul>


    </div>
  </header>

  <div style="min-height: calc(100vh - 80px);" class="w-full py-12 flex items-center justify-center">
    <div
      class="w-[96%] lg:w-[525px] mx-auto text-center bg-white rounded-lg relative overflow-hidden py-16 px-10 sm:px-12 md:px-[60px]">
      <div class="mb-12 text-center">
        <h3 class="text-xl font-semibold tracking-wide">Reset Your Password</h3>
      </div>
      <form action="" method="POST">
        <div class="mb-6"><input required="" name="email" type="email" placeholder="Email Address"
            class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
        </div>


        <button type="submit"
          class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">
          Reset Password
        </button>
        <a class="mt-5 hover:underline text-blue-500 block" href="login.php">Let's Signin</a>
      </form>

      <br>

      <div><span class="absolute top-1 right-1"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3"></circle>
            <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3"></circle>
            <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3"></circle>
            <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)" fill="#3056D3">
            </circle>
            <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3"></circle>
          </svg></span><span class="absolute left-1 bottom-1"><svg width="29" height="40" viewBox="0 0 29 40"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)" fill="#3056D3">
            </circle>
            <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)" fill="#3056D3">
            </circle>
            <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3"></circle>
            <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3"></circle>
            <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)" fill="#3056D3">
            </circle>
            <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)" fill="#3056D3">
            </circle>
            <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)" fill="#3056D3">
            </circle>
          </svg></span>
      </div>
    </div>
  </div>


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
