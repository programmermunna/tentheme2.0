<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Security
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="security.php"> security
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
            <span class="text-2xl font-medium tracking-wide">Change Password</span>
          </div>
          <?php
          $err = "";
            if(isset($_POST['submit'])){
              $password = md5($_POST['password']);
              $new_password = md5($_POST['new_password']);
              $confirm_password = md5($_POST['confirm_password']);
              $person_id = $person['id'];

              if($new_password == $confirm_password){
                  if($person['password'] == $password){
                  $update = _update("person","password='$new_password'","id=$person_id");
                  if($update){
                    $msg = "Password Change Successfully";
                    header("location:security.php?msg=$msg");
                  }
                }else{
                  $err = "Your Old Password are not Currect";
                }
              }else{
                $err = "Password and Confirm Password are not Match";
              }
            }

          ?>
          <form action="" method="POST" class="grid grid-cols-12 gap-y-6 p-5">
            <div class="col-span-12"><label class="mb-2 block" for="new_password">Current Password</label><input
                required="" name="password" type="password" placeholder="Password"
                class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
                value="34355jl"></div>
            <div class="col-span-12"><label class="mb-2 block" for="new_password">New Password</label><input required=""
                name="new_password" type="password" placeholder="New Password"
                class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
                value=""></div>
            <div class="col-span-12"><label class="mb-2 block" for="confirm_password">Confirm Password</label><input
                required="" name="confirm_password" type="password" placeholder="Confirm Password"
                class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4"
                value=""></div>
            <div class="col-span-12">
              <div class="w-fit"><button type="submit" name="submit"
                  class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base"><svg
                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lock"
                    class="svg-inline--fa fa-lock " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                      d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z">
                    </path>
                  </svg><span>Update Password</span></button></div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </main>


  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->