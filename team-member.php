<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<?php $team = _fetch("team","status='Published'");?>
  </header>
  <!-- ====== About Section Start -->
  <section class="pt-20 overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <img style="width:90%;height:400px;object-fit:fill" src="admin/upload/<?php echo $team['file']?>" alt="">
        </div>

        <div class="w-full lg:w-1/2 xl:w-5/12">
          <div class="lg:mt-0">
            <h2 class="font-bold text-3xl sm:text-4xl text-dark">
            <?php echo $team['name']?>
          </h2>
          <p class="text-dark mb-8"><?php echo $team['qualification']?></p>
          <div>
            <?php echo $team['content']?>
          </div>
          </div>
          
          <div class="py-5">
              <ul class="flex space-x-4 sm:mt-0">

                <li>
                  <a style="font-size: 30px;" href="tel:<?php echo $team['whatsapp']?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <i class="fa-solid fa-phone"></i>
                  </a>
                </li>
                <li>
                  <a style="font-size: 30px;" href="mailto:<?php echo $team['mail']?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <i class="fa-solid fa-envelope"></i>
                  </a>
                </li>
                <li>
                  <a target="_blank" style="font-size: 30px;" href="<?php echo $team['facebook']?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <i class="fa-brands fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a target="_blank" style="font-size: 30px;" href="<?php echo $team['linkedin']?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <i class="fa-brands fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>


        </div>

        



      </div>
    </div>
  </section>
  <!-- ====== About Section End -->
  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->