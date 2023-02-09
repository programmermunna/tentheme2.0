<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<?php $pages = _fetch("pages","pg_name='terms&condition'");?>

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Our Terms and Conditions
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="terms-and-conditions.php"> terms and conditions
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
            <h5 style="font-size:33px" class="text-xl font-semibold mb-4"><?php echo $pages['title']?></h5><br>
            <?php echo $pages['content']?>

            <h5 class="text-xl font-semibold mb-4 mt-8">Restrictions :</h5>
            <p class="text-slate-400">You are specifically restricted from all of the following :</p>
            <?php echo $pages['description']?>
            
            <?php 
            if(isset($_POST['accept'])){
                $update = _update("person","terms='Accepted'","id=$id");
                $msg = "Terms and Condition Accepted Successfully";
                header("location:terms-and-conditions.php?msg=$msg");
            }elseif(isset($_POST['desline'])){
              $update = _update("person","terms='Desline'","id=$id");
              $msg = "Terms and Condition Desline Successfully";
              header("location:terms-and-conditions.php?msg=$msg");
            }
            ?>
            <?php $terms = $person['terms'];?>
            <form action="" method="POST">
              <div class="mt-6">
                <?php if($terms == ''){?>
                <button name="accept" type="submit" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Accept</button>
                <button name="desline" type="submit" class="btn bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white rounded-md ml-2">Decline</button>
                <?php }elseif($terms == 'Accepted'){?>
                <button name="desline" type="submit" class="btn bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white rounded-md ml-2">Decline</button>
                <?php }elseif($terms == 'Desline'){?>
                <button name="accept" type="submit" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Accept</button>
                <?php }?>


              </div>
            </form>
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