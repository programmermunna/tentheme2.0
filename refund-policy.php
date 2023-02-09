<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<?php $pages = _fetch("pages","pg_name='refund-policy'");?>

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Refund Policy
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="refund-policy.php"> refund policy
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
            <h2 style="font-size: 33px;" class="text-xl font-semibold mb-4">
              <?php echo $pages['title']?>
            </h2>
            <br>
            <?php echo $pages['content']?>

          </div>
        </div>
        <!--end -->
      </div>
      <!--end grid-->
    </div>
    <!--end container-->
  </section>
  <!-- Middle Content -->
  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->