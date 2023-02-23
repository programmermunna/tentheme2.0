<?php if (isset($_GET['msg'])) {?><div id="popup_msg" data-text="<?php echo $_GET['msg']; ?>"></div><?php } ?>
<?php if (isset($_GET['err'])) {?><div id="error_msg" data-text="<?php echo $_GET['err']; ?>"></div><?php } ?>
<?php include("admin/config/functions.php");
if(isset($_SESSION['user_id'])){
$id = $_SESSION['user_id'];
}elseif(isset($_COOKIE['user_id'])){
$id = $_COOKIE['user_id'];
}else{
$id = 0;
}

$person = _fetch("person","id=$id");
$website = _fetch("website","id=1");
$limit_setting = _fetch("limit_setting","id=$id");
$general_setting = _fetch("general_setting","id=1");

$header_social_link = $general_setting['header_social_link'];
$review_product = $general_setting['review_product'];
$share_product = $general_setting['share_product'];
$related_product = $general_setting['related_product'];
$review_service = $general_setting['review_service'];
$related_service = $general_setting['related_service'];
$ad_show = $general_setting['ad_show'];
$team_social = $general_setting['team_social'];

$cr_url = $_SERVER['SCRIPT_NAME'];
$cr_url = substr($cr_url,strrpos($cr_url,'/')+1);
?>

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

  <meta name="author" content="<?php echo $website['title']?>">
  <meta name="keywords" content="<?php echo $website['keyword']?>">
  <meta name="description" content="<?php echo $website['description']?>">

  <!-- Favicon -->
  <link rel="shortcut icon" href="admin/upload/<?php echo $website['favicon_name']?>" type="image/x-icon" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.2.1.js" crossorigin="anonymous"></script>

  <!-- SUMMERNOTE TEXTAREA -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js" crossorigin="anonymous"></script>    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet" />
 
  <!-- FONT-AWESOME -->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>

  <!-- CSS Styles -->
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />

  <title><?php echo $website['title']?></title>
</head>

<body>

  <!-- Header -->
  <header class="relative" style="background-image: linear-gradient(to right, #CEF3F3, #cef3f3c2), url('https://www.bangladeshisoftware.com/wp-content/uploads/2019/06/header-bg-copyright.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container flex justify-between items-center h-20 mb-auto relative z-50">
      <a href="index.php" class="w-fit">
        <?php if(!empty($website['file_name'])){?>
        <img class="h-10" src="admin/upload/<?php echo $website['file_name']?>" />
        <?php }else{?>
        <h2 style="font-size: 25px;font-weight:bold;font-family:'Courier New', Courier, monospace"><?php echo $website['title']?></h2>
        <?php }?>
      </a>

      <!-- Header UL -->
      <button id="toggle_menu" class="text-lg lg:hidden relative z-50"><i class="fa-solid fa-bars"></i></button>
      <div class="hidden fixed inset-0 m-auto w-full h-full bg-black z-40 bg-opacity-40" id="mobile_header_overlay">
      </div>
      <ul id="menu_ul"
        class="flex lg:items-center fixed lg:static top-20 inset-x-0 mx-auto lg:mx-0 gap-3 flex-col lg:flex-row lg:bg-transparent bg-white w-[90%] lg:w-auto p-6 lg:p-0 rounded shadow-lg lg:border-transparent lg:shadow-none items-start transform scale-y-0 lg:scale-y-100 origin-top z-50 border transition-transform">
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="index.php">Home</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="services.php">Services</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="blogs.php">Blogs</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white" href="team.php">Team</a>
        <!-- </li>
        <li>
          <a class="flex items-center px-3 h-[44px] rounded text-gray-900 hover:bg-white"
            href="investor.php">Investor</a>
        </li> -->

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

        <?php if($header_social_link == 'checked'){ ?>
          <div class="flex space-x-5">
            <a target="_blank" href="<?php echo $website['facebook']?>"
            class="bg-blue-600 text-white px-4 py-1 rounded shadow-sm">
            <i class="fa-brands fa-facebook-f"></i>
            <small></small>
          </a>
          <a target="_blank" href="<?php echo $website['youtube']?>"
          class="bg-red-600 text-white px-4 py-1 rounded shadow-sm">
          <i class="fa-brands fa-youtube"></i>
          <small></small>
        </a>
      </div>
      <?php }?>

        <?php if($id<1){?>
        <li>
          <a class="flex items-center px-3 h-[44px]" href="cart.php">Cart</a>
        </li>
        <li>
        <li>
          <a class="flex items-center px-3 h-[44px]" href="signup.php">Signup</a>
        </li>
        <li>
          <a class="flex items-center px-3 h-[44px] text-white space-x-2 rounded focus:ring-1 focus:ring-[#11987d] ring-offset-2 shadow"
            style=" background-image: conic-gradient(from 1turn, #0e9479, #16a085);" href="login.php">
            <span class="text-sm">
              <i class="fa-solid fa-lock"></i>
            </span>
            <span>Login</span>
          </a>
        </li>
      <?php }else{?>
        <li class="relative">
          <div class="p-0.5 w-fit h-fit bg-gray-100 rounded-md hover:from-transparent transition-all">
            <button id="dashboard_options_handler"
              class="flex items-center gap-x-2 px-3 h-[44px] rounded bg-white hover:bg-gray-100 transition-all focus:ring-2 ring-offset-2 focus:ring-gray-200"
              href="#">

              <a href="cart.php" class="mr-1 relative flex items-center gap-x-1 text-sm">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="cart_items_wrapper">
                  <?php echo $cart_number = mysqli_num_rows(_get("cart","pid=$id AND type='product' AND status=0"));?>
                </span>
              </a>
              <small><?php echo $person['name']?></small>
              <img class="w-7 h-7 rounded-full" src="admin/upload/<?php echo $person['file_name']?>"/>
              <small class="block transition-all transform rotate-180">
                <i class="fa-solid fa-chevron-up"></i>
              </small>
            </button>
          </div>

          
          <div id="dashboard_options"
            class="absolute w-full rounded h-fit bg-white shadow top-[105%] inset-x-0 mx-auto transition-all transform origin-top scale-y-0 z-50">
            <div class="flex flex-col py-2">
              
            <?php if($person['role']=='Admin'){?>
              <a target="_blank" href="admin/index.php" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-chart-line"></i></span>
                <span>Admin Panel</span>
              </a>
              <?php }?>
              
              <a href="dashboard.php" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-gauge"></i></span>
                <span>Dashboard</span>
              </a>

              <a href="logout.php" class="flex items-center gap-x-1 w-full px-3 py-3 hover:bg-gray-100">
                <span class="block min-w-[20px] max-w-[20px]"><i class="fa-solid fa-sign-out"></i></span>
                <span>Logout</span>
              </a>
            </div>
          </div>
        </li>
        <?php }?>

      </ul>
    </div>