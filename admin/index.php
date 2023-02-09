<?php include("common/header-sidebar.php")?>
<?php
//users
$day_users = mysqli_num_rows(_get("person","role!='Admin' AND time>$time-8400"));
$month_users = mysqli_num_rows(_get("person","role!='Admin' AND time>$time-(252000)"));
$year_users = mysqli_num_rows(_get("person","role!='Admin' AND time>$time-(3024000)"));
$all_users = mysqli_num_rows(_get("person","role!='Admin'"));

//product
$pending_products = mysqli_num_rows(_get("products","status='Pending'"));
$success_products = mysqli_num_rows(_get("products","status='Publish'"));
$total_products = mysqli_num_rows(_getAll("products"));

//service
$pending_service = mysqli_num_rows(_get("service","status='Pending'"));
$success_service = mysqli_num_rows(_get("service","status='Publish'"));
$total_service = mysqli_num_rows(_getAll("service"));

//post
$pending_post = mysqli_num_rows(_get("post","status='Pending'"));
$success_post = mysqli_num_rows(_get("post","status='Publish'"));
$total_post = mysqli_num_rows(_getAll("post"));

//cart
$pending_cart = mysqli_num_rows(_get("cart","status=0"));
$success_cart = mysqli_num_rows(_get("cart","status=1"));
$total_cart = mysqli_num_rows(_getAll("cart"));

//deposit
$pending_deposit = mysqli_fetch_assoc(_query("SELECT SUM(amount) FROM deposit WHERE status='Pending'"));
$pending_deposit = $pending_deposit['SUM(amount)'];

$success_deposit = mysqli_fetch_assoc(_query("SELECT SUM(amount) FROM deposit WHERE status='Success'"));
$success_deposit = $success_deposit['SUM(amount)'];

//withdraw
$pending_withdraw = mysqli_fetch_assoc(_query("SELECT SUM(amount) FROM withdraw WHERE status='Pending'"));
$pending_withdraw = $pending_withdraw['SUM(amount)'];

$success_withdraw = mysqli_fetch_assoc(_query("SELECT SUM(amount) FROM withdraw WHERE status='Success'"));
$success_withdraw = $success_withdraw['SUM(amount)'];
?>
      <div class="x_container space-y-10 py-10">

      <!-- Money Stats -->
      <div class="shadow bg-white rounded w-fulls overflow-hidden">
          <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
            <i class="fa-solid fa-briefcase"></i>
            <span>Balance Status</span>
          </h3>
          <div class="p-5 flex flex-wrap gap-5">

            <div
              class="bg-green-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $success_deposit;?></h3>
              <h5 class="text-base">Success Deposit</h5>
            </div>
            <div
              class="bg-red-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $pending_deposit;?></h3>
              <h5 class="text-base">Pending Deposit</h5>
            </div>
            <div
              class="bg-green-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $success_withdraw;?></h3>
              <h5 class="text-base">Success withdraw</h5>
            </div>
            <div
              class="bg-red-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $pending_deposit;?></h3>
              <h5 class="text-base">Pending withdraw</h5>
            </div>

          </div>
        </div>

        <!-- Users Statistics -->
        <div class="shadow bg-white rounded w-fulls overflow-hidden">
          <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
            <i class="fa-solid fa-users"></i>
            <span>Users Statistics</span>
          </h3>
          <div class="p-5 flex flex-wrap gap-5">
            <div
              class="bg-purple-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $all_users;?></h3>
              <h5 class="text-base">All Users</h5>
            </div>

            <div
              class="bg-pink-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $year_users;?></h3>
              <h5 class="text-base">This Year Users</h5>
            </div>

            <div
              class="bg-blue-700 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $month_users;?></h3>
              <h5 class="text-base">This Month Users</h5>
            </div>

            <div
              class="bg-amber-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $day_users;?></h3>
              <h5 class="text-base">Today Users</h5>
            </div>

          </div>
        </div>

        <!-- product Stats -->
        <div class="shadow bg-white rounded w-fulls overflow-hidden">
          <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
            <i class="fa-solid fa-briefcase"></i>
            <span>Product Stats</span>
          </h3>
          <div class="p-5 flex flex-wrap gap-5">

            <div
              class="bg-cyan-700 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $total_products;?></h3>
              <h5 class="text-base">Total products</h5>
            </div>
            <div
              class="bg-green-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $success_products;?></h3>
              <h5 class="text-base">Success Products</h5>
            </div>
            <div
              class="bg-orange-400 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $pending_products;?></h3>
              <h5 class="text-base">Pending Products</h5>
            </div>
          </div>
        </div>

        <!-- Service Stats -->
        <div class="shadow bg-white rounded w-fulls overflow-hidden">
          <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
            <i class="fa-solid fa-briefcase"></i>
            <span>Service Stats</span>
          </h3>
          <div class="p-5 flex flex-wrap gap-5">

            <div
              class="bg-cyan-700 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $total_service;?></h3>
              <h5 class="text-base">Total Service</h5>
            </div>
            <div
              class="bg-green-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $success_service;?></h3>
              <h5 class="text-base">Success Service</h5>
            </div>
            <div
              class="bg-orange-400 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $pending_service;?></h3>
              <h5 class="text-base">Pending Service</h5>
            </div>
          </div>
        </div>

        <!-- Cart Stats -->
        <div class="shadow bg-white rounded w-fulls overflow-hidden">
          <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
            <i class="fa-solid fa-briefcase"></i>
            <span>Cart Stats</span>
          </h3>
          <div class="p-5 flex flex-wrap gap-5">

            <div
              class="bg-cyan-700 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $total_cart;?></h3>
              <h5 class="text-base">Total Cart</h5>
            </div>
            <div
              class="bg-green-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $success_cart;?></h3>
              <h5 class="text-base">Success Cart</h5>
            </div>
            <div
              class="bg-orange-400 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $pending_cart;?></h3>
              <h5 class="text-base">Pending Cart</h5>
            </div>
          </div>
        </div>

        <!-- post Stats -->
        <div class="shadow bg-white rounded w-fulls overflow-hidden">
          <h3 class="p-4 gap-x-3 flex border-b border-gray-100 items-center font-semibold text-cyan-900">
            <i class="fa-solid fa-briefcase"></i>
            <span>post Stats</span>
          </h3>
          <div class="p-5 flex flex-wrap gap-5">

            <div
              class="bg-cyan-700 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $total_post;?></h3>
              <h5 class="text-base">Total post</h5>
            </div>
            <div
              class="bg-green-600 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $success_post;?></h3>
              <h5 class="text-base">Success post</h5>
            </div>
            <div
              class="bg-orange-400 text-white p-4 rounded shadow w-full sm:w-64 flex flex-col items-center justify-center gap-2">
              <h3 class="text-xl font-bold"><?php echo $pending_post;?></h3>
              <h5 class="text-base">Pending post</h5>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <script src="js/app.js"></script>

</body>

</html>