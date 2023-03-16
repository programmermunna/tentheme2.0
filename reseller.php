<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">

      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        RE Seller
      </h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="reseller.php"> reseller
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

          <div class="px-5 py-4 w-full text-blue-600 text-2xl font-medium tracking-wide border-b">Reseller</div>
          <div class="p-6 flex w-full items-center justify-start flex-col gap-y-5">
            

            <?php 
            if($person['reseller']=='Submitted'){ ?>
              <h2 style="font-size: 30px;font-weight:bolder">You Have Submitted Reseller Account</h2>
              <p style="font-size: 20px;line-height:40px">
              Dear <?php echo $person['name']?>, <br>

              We would like to extend an invitation to you to join our reseller program. Our company offers a wide range of high-quality products and services that we believe would be of interest to your constituents.
              <br>
              As a reseller, you would have the opportunity to earn a commission on the sales of our products and services. This is a great opportunity to generate additional income for your office while providing valuable products and services to your constituents.
              <br>
              We pride ourselves on our excellent customer service and our commitment to quality. We believe that by partnering with us, you can provide your constituents with access to the best products and services available.
              <br>
              If you are interested in learning more about our reseller program, please do not hesitate to contact us. We look forward to the opportunity to work with you and your office.
              <br>
              Sincerely,
              <br>
              Bangladeshi Software Company
              </p>
           <?php }else{ ?>
            <h2 class="text-2xl font-medium  text-left w-full tracking-wide">Do you want to Earning with US ? </h2>
            <?php 
            if(isset($_POST['submit'])){
                $checkbox = $_POST['checkbox'];
                if(empty($checkbox)){
                  header("location:reseller.php?err=Please Fill-up Checkbox");
                }else{
                  $update = _update("person","reseller='Submitted'","id=$id");
                  if($update){
                    header("location:reseller.php?msg=Successfully Submitted. Please Wait for Aprove");
                  }
                }
            }
            ?>
            <form action="" method="POST">
            <div class="reseller_note">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione atque similique ipsam earum numquam alias explicabo ut vel. Atque voluptatum omnis ut ex magnam odit enim esse iste incidunt blanditiis autem molestiae, harum minus adipisci accusantium facilis animi necessitatibus. Eligendi magnam, quasi tempore consequuntur nostrum nobis voluptatem totam quidem assumenda perspiciatis eveniet aspernatur a consectetur eum incidunt facilis fugiat adipisci quis quas impedit voluptates, rem animi recusandae natus. Est voluptatem mollitia laborum obcaecati laboriosam ipsum doloribus hic libero labore recusandae provident nihil nisi dolorum sunt eius quas commodi, amet quo sed ipsa sint distinctio. Hic magni dolorem modi aliquam quasi quos laborum nulla sit numquam? Exercitationem corporis laboriosam iusto eveniet molestiae delectus debitis esse harum nesciunt, incidunt cupiditate distinctio rerum tempora, beatae animi accusantium aut nobis? Aliquam, assumenda. Fugit, nulla nam, labore quia corrupti explicabo consectetur incidunt voluptates dolor, dolores dolorem? Eius cumque tempora molestiae harum esse ipsam veniam labore natus minus placeat! Soluta, ipsum alias, suscipit voluptate rerum quisquam placeat mollitia eum labore fugit quam corporis unde voluptas quibusdam illum, incidunt sapiente? Laborum nihil reiciendis porro, voluptate est accusantium aut numquam animi ipsa perferendis debitis error sed reprehenderit modi magnam distinctio eos possimus iure libero eum. Culpa ex earum impedit inventore maxime reprehenderit odit aperiam eveniet, error quos quia cumque officiis minus soluta illo? Qui, perspiciatis inventore, sunt laudantium excepturi dolore officia molestias beatae expedita deserunt, eum neque eos vitae autem officiis tempora veritatis accusamus itaque reprehenderit ab tenetur aliquid omnis minima illum. Itaque quam optio unde laudantium officia, facere, blanditiis illo neque, consequuntur maiores fugiat molestias quae quos dolore iure distinctio aliquid sed dolores voluptate autem nemo voluptatum eligendi? Veniam sint nostrum quia quidem perferendis ipsum illum veritatis, atque deserunt, in error quam exercitationem temporibus quae. Odit cumque labore vitae aliquid natus ipsa quidem impedit mollitia esse earum eveniet aut libero eligendi velit itaque a totam consequuntur, explicabo maxime, dolorem facilis sit! Eius nemo consequuntur unde sapiente maiores libero. Illo, sint ea suscipit esse hic cum quaerat vero ipsa doloribus praesentium quisquam! Veniam quod magni aliquam omnis recusandae facilis, quae dicta voluptatum, voluptas harum soluta necessitatibus, nobis eligendi. Blanditiis, est et temporibus non magni eos praesentium ex eum? Dolorem et ipsa provident quae illum, at beatae laborum velit. Omnis consequatur itaque ea laborum corrupti fugiat quaerat, velit, labore autem facere at nam veritatis. Odio consequuntur repellat tempora. Autem ducimus voluptas quia, soluta eum, fugiat fugit cum animi corporis ex deleniti consectetur. Cupiditate, animi! Ullam deleniti enim consequuntur rem eveniet magni suscipit minima odio temporibus quaerat debitis necessitatibus expedita mollitia ad exercitationem reiciendis, non ea fuga vero praesentium repellendus cum aliquam. Aliquid ea, consectetur laborum nostrum nisi nulla ex, at illum maxime rem, totam quis! Officia praesentium quasi exercitationem tempore facere, ea voluptatem, magnam assumenda totam aut laboriosam eum deleniti quaerat explicabo incidunt sunt? Quibusdam maiores commodi, libero corrupti porro eligendi vitae explicabo dolore perspiciatis sunt nobis assumenda voluptatibus aperiam fugit harum. Nam ipsum velit omnis debitis unde corrupti esse pariatur possimus ducimus officia ut nemo, vitae perferendis animi.</div>

            <input type="checkbox" name="checkbox" class="checkbox">            
            <span style="font-size:20px;font-weight:700">Are Your Agree With This Terms? </span>
            <br>
            <button id="reseller_btn" name="submit" type="submit"  class="mr-auto bg-blue-600 text-white px-6 py-2 rounded focus:ring-2 focus:ring-offset-2 ring-blue-600 shadow">Apply Now</button>
            </form>


            <?php  }?>


          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->