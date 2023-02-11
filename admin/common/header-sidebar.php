<?php if (isset($_GET['msg'])) {?><div id="popup_msg" data-text="<?php echo $_GET['msg']; ?>"></div><?php } ?>
<?php if (isset($_GET['err'])) {?><div id="error_msg" data-text="<?php echo $_GET['err']; ?>"></div><?php } ?>
  
  <?php include("config/functions.php");
    if(isset($_SESSION['person_id'])){
      $id = $_SESSION['person_id'];
    }elseif(isset($_COOKIE['person_id'])){
    $id = $_COOKIE['person_id'];
    }else{
    $id = 0;
    }
    if($id<1){
    header("location:login.php");
    }
    $person = _fetch("person","id=$id");

    $notify_person = mysqli_num_rows(_get("person","notify='new'"));
    $notify_tickets = mysqli_num_rows(_get("tickets","status='Pending' AND notify='new'"));
    $notify_deposit = mysqli_num_rows(_get("deposit","status='Pending' AND notify='new'"));
    $notify_withdraw = mysqli_num_rows(_get("withdraw","status='Pending' AND notify='new'"));
    $notify_order = mysqli_num_rows(_get("cart","status=1 AND notify='new'"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!--=== Google Font  ===-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.js" crossorigin="anonymous"></script> 
  <!--=== Font awesome  ===-->
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>
  
  <!-- SUMMERNOTE TEXTAREA -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js" crossorigin="anonymous"></script>    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet" />

  <!-- Sweet Alert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!--=== Styles ===-->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/custom.css">
</head>

<body>

  <main class="flex p-0 m-0 justify-between w-full h-screen overflow-hidden">

  <div id="sidebar"
      class="sidebar transition-all w-[0px] min-w-[0px] lg:min-w-[255px] lg:w-[255px] h-screen overflow-auto bg-white border-r shadow sidebar fixed lg:relative inset-y-0 left-0"
      style="z-index: 99;">

      <div
        class="flex items-center justify-between px-4 gap-x-2 h-20 border-b shadow-sm sticky top-0 left-0 bg-white z-50">
        <a class="flex items-center justify-between gap-x-2 active" href="./">
          <p class="text-blue-600"> <i class="fa-solid fa-crown"></i> </p>
          <p class="flex items-center justify-center"><span
              class="font-semibold text-lg text-blue-500">Bangladeshi</span><span
              class="font-semibold text-lg text-purple-600">Software</span></p>
        </a>
        <button id="hide_sidebar" class="lg:hidden text-gray-800"> <i class="fa-solid fa-xmark"></i> </button>
      </div>

      <!-- Sidebar Item -> Statistics -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title active" data-ref="STATISTICS">
          <span class="text-xs transition-all text-purple-600"><i class="fa-solid fa-chart-simple"></i></span>
          <span class="tracking-wider block">STATISTICS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="STATISTICS">
          <li>
            <a class="active" href="./index.php">
              <i class="fa-solid fa-gauge"></i>
              <span>Dashboard</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">  

           <!-- Sidebar Item -> Ticket -->
           <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="tentheme"><span class="text-xs transition-all text-pink-600">
          <i class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Tentheme 2.0</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="tentheme">
          <li>
            <a href="./general-settings.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>General Setting</span>
            </a>
          </li>
          <li>
            <a href="./advance-settings.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Advance Setting</span>
            </a>
          </li>
          <li>
            <a href="./home-slider.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Home Page Slider</span>
            </a>
          </li>
          <li>
            <a href="./services-slider.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Services Page Slider</span>
            </a>
          </li>

          <li>
            <a href="./header-settings.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Header Setting</span>
            </a>
          </li>
          <li>
            <a href="./social-settings.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Social Setting</span>
            </a>
          </li>
          <li>
            <a href="./footer-settings.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Footer Setting</span>
            </a>
          </li>          
        </ul>
      </div>
      <hr class="my-0">  
      
        <!-- Sidebar Item -> products -->
        <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="user"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Users</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="user">         
          <li>
            <a href="./users.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Users</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      
      <!-- Sidebar Item -> Deposit -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="deposits"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Deposits</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
            <?php if($notify_deposit>0){ ?><span style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_deposit?></span><?php }?>
        </button>
        <ul class="ds_ul transition-all" data-ref="deposits">
          <li>
            <a href="./deposits.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Deposits</span>
              <?php if($notify_deposit>0){ ?><span style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_deposit?></span><?php }?>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">      

      <!-- Sidebar Item -> Withdraw -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="withdraw"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Withdraw</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
            <?php if($notify_withdraw>0){ ?><span style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_withdraw?></span><?php }?>
        </button>
        <ul class="ds_ul transition-all" data-ref="withdraw">
          <li>
            <a href="./withdraw.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Withdraw</span>
              <?php if($notify_withdraw>0){ ?><span style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_withdraw?></span><?php }?>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">  


      <!-- Sidebar Item -> products -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="post"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Posts</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="post">          
          <li>
            <a href="./all-posts.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Post</span>
            </a>
          </li>
          <li>
            <a href="./add-post.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Add Post</span>
            </a>
          </li>
          <li>
            <a href="./post-category.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Categories</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">
            

      <!-- Sidebar Item -> products -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="product"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Products</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="product">
          <li>
            <a href="./products.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Products</span>
            </a>
          </li>
          <li>
            <a href="./add-product.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Add product</span>
            </a>
          </li>
          <li>
            <a href="./product-category.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Categories</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> products -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="service"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Services</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="service">          
          <li>
            <a href="./services.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Services</span>
            </a>
          </li>
          <li>
            <a href="./add-service.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Add Service</span>
            </a>
          </li>
          <li>
            <a href="./service-category.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Categories</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      <!-- Sidebar Item -> products -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="page"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Pages</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="page">
          <li>
            <a href="./pages.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Pages</span>
            </a>
          </li>
          <li>
            <a href="./pages.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Add Page</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

            <!-- Sidebar Item -> products -->
            <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="team"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Team</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <ul class="ds_ul transition-all" data-ref="team">
        <li>
            <a href="./all-team.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Team</span>
            </a>
          </li>
          <li>
            <a href="./add-team.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>Add Member</span>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">

      
        <!-- Sidebar Item -> products -->
        <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="order"><span class="text-xs transition-all text-pink-600"><i
              class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Orders</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
            <?php if($notify_order>0){ ?><span style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_order?></span><?php }?>
        </button>
        <ul class="ds_ul transition-all" data-ref="order">
          <li>
            <a href="./orders.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Orders</span>    
            <?php if($notify_order>0){ ?><span style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_order?></span><?php }?>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">    



      <!-- Sidebar Item -> Ticket -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title" data-ref="Ticket"><span class="text-xs transition-all text-pink-600">
          <i class="fa-solid fa-briefcase"></i></span><span class="tracking-wider block">Tickets</span><span
            class="text-xs opacity-50 transition-all"><i class="fa-solid fa-chevron-up"></i></span>
            <?php if($notify_tickets>0){ ?><span style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_tickets?></span><?php }?>
        </button>
        <ul class="ds_ul transition-all" data-ref="Ticket">
          <li>
            <a href="./tickets.php">
              <h4> <i class="fa-solid fa-briefcase"></i> </h4>
              <span>All Tickets</span>
              <?php if($notify_tickets>0){ ?><span style="background:#ff3a10;color:#fff;padding:5px;border-radius:50%">0<?php echo $notify_tickets?></span><?php }?>
            </a>
          </li>
        </ul>
      </div>
      <hr class="my-0">       
      
      <!-- Sidebar Item -> Settings -->
      <div class="sidebar_item overflow-hidden">
        <button class="ds_title md:hidden" data-ref="SETTINGS">
          <span class="text-xs transition-all text-gray-900"><i class="fa-solid fa-screwdriver-wrench"></i></span>
          <span class="tracking-wider block">SETTINGS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-up"></i></span>
        </button>
        <a href="./settings.php" class="ds_title hidden md:flex" data-ref="SETTINGS">
          <span class="text-xs transition-all"><i class="fa-solid fa-screwdriver-wrench"></i></span>
          <span class="tracking-wider block">SETTINGS</span>
          <span class="text-xs transition-all"><i class="fa-solid fa-chevron-right"></i></span>
        </a>
        <ul class="ds_ul transition-all md:hidden" data-ref="SETTINGS">
          <li>
            <a href="./settings.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>General Setting</span>
            </a>
          </li>

          <li>
            <a href="./payment-gateway.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Payment Gateway</span>
            </a>
          </li>

          <li>
            <a href="./limit-setting.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Limit Setting</span>
            </a>
          </li>

          <li>
            <a href="./deposit-bank.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Deposit Bank</span>
            </a>
          </li>

          <li>
            <a href="./withdrawl-bank.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Withdrawl Bank</span>
            </a>
          </li>
          <li>
            <a href="./mailing-setting.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Mailing Setting</span>
            </a>
          </li>
          <li>
            <a href="./adsense.php">
              <h4> <i class="fa-solid fa-cog"></i> </h4>
              <span>Adsense</span>
            </a>
          </li>
        </ul>
      </div>

    </div>



    <div class="w-full h-screen overflow-auto">
      <header class="h-20 bg-white z-40 sticky top-0 left-0 right-0 shadow-sm border-b">
        <div class="h-full flex items-center relative justify-between px-5 xl:px-10">
          <div class="text-xl font-semibold tracking-wide capitalize space-x-3">
            <button id="sidebar_toggler">
              <i class="fa-solid fa-bars"></i>
            </button>
            <span class="hidden sm:inline-block capitalize page_title">Dashboard</span></div>

          <div class="flex items-center justify-center gap-x-3 sm:gap-x-4">
            <div class="relative w-fit z-50"><button type="button"
                class="header_options_toggler w-full p-2 rounded bg-gray-100 shadow border flex items-center justify-center gap-x-3">

                <a class="pr-1" target="_blank" href="../index.php">
                  <span class="text-sm font-medium"><i class="fa fa-eye"></i></span></a>
                <span><?php echo $person['name']?></span><img class="h-7 w-7 rounded-full"
                  src="upload/<?php echo $person['file_name']?>"> <small class="header_options_icon transition-all transform"><i
                    class="fa-solid fa-chevron-right"></i></small>
              </button>
              <div
                class="header_options absolute w-full bg-white rounded shadow top-full right-0 transition-all origin-top transform scale-y-0">               

                <a target="_blank" href="../index.php"
                  class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3"> <i
                    class="fa fa-internet-explorer"></i>
                  <span class="text-sm font-medium">View Website</span></a>

                  <a href="logout.php" class="flex items-center gap-x-2 w-full  hover:bg-gray-100 p-3">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i><span
                    class="text-sm font-medium">Logout</span></a>

              </div>
            </div>
          </div>
        </div>
      </header>