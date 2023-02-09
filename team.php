<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Team
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="team.php"> Team
        </a>

      </div>

    </div>
  </header>



  <main class="min-h-screen py-20">
    <div class="flex items-start">
      <div class="container">

        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">


          <?php 
          $datas = _getAll("team");
          while($data = mysqli_fetch_assoc($datas)){
          ?>
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
            <a href="team-member.php?id=<?php echo $data['id']?>">
              <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                src="admin/upload/<?php echo $data['file']?>"
                alt="Bonnie Avatar">
            </a>
            <div class="p-5">
              <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="team-member.php?id=<?php echo $data['id']?>"><?php echo $data['name']?></a>
              </h3>
              <span class="text-gray-500 dark:text-gray-400"><?php echo $data['qualification']?></span>
              <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php echo $data['summery']?></p>
              <ul class="flex space-x-4 sm:mt-0">

                <li>
                  <a style="font-size: 30px;" href="tel:<?php echo $data['whatsapp']?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <i class="fa-solid fa-phone"></i>
                  </a>
                </li>
                <li>
                  <a style="font-size: 30px;" href="mailto:<?php echo $data['mail']?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <i class="fa-solid fa-envelope"></i>
                  </a>
                </li>
                <li>
                  <a target="_blank" style="font-size: 30px;" href="<?php echo $data['facebook']?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <i class="fa-brands fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a target="_blank" style="font-size: 30px;" href="<?php echo $data['linkedin']?>" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <i class="fa-brands fa-linkedin"></i>
                  </a>
                </li>


              </ul>
            </div>
          </div>
          <?php }?>




        </div>

      </div>
    </div>
  </main>

  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->