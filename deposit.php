<!-- Header area -->
<?php include("common/header.php"); ?>
<!-- Header area -->

<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

  <!-- Page Name Title -->
  <h3 class="text-4xl font-medium tracking-wide">Deposit</h3>

  <!-- Page Tree Links -->
  <div class="items-center justify-start space-x-2 text-gray-500">

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)" class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
      <i class="fa-solid fa-house"></i>
    </a>

    <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

    <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)" class="text-white px-4 py-1.5 rounded shadow-sm" href="security.php"> Deposit
    </a>

  </div>

</div>
</header>

<main style="min-height: calc(100vh - 80px)">
  <div class="flex items-start py-6">
    <div class="container flex flex-col lg:flex-row gap-y-5 lg:gap-y-0 lg:gap-x-5">
 
      <!-- Dashboard Sidebar -->
      <?php include("common/dashboad_sidebar.php"); ?>
      <!-- Dashboard Sidebar -->

      <!-- Body Content -->
      <div class="w-full bg-white shadow rounded-sm">

        <div class="px-5 py-4 text-blue-600 border-b flex justify-between items-center">
          <span class="text-2xl font-medium tracking-wide">Deposit Balance</span>
        </div>
        <?php
        $err = "";
        if (isset($_POST['submit'])) {
          $method = $_POST['method'];
          $pmn_address = $_POST['pmn_address'];
          $tr_id = $_POST['tr_id'];
          $amount = $_POST['amount'];
          $min_deposit = $limit_setting['deposit'];
          if ($amount >= $min_deposit) {
            $insert = _insert("deposit", "pid,method,pmn_address,tr_id,amount,time", "$id,'$method','$pmn_address','$tr_id','$amount','$time'");
            if ($insert) {
              $msg = "Deposit Successfully";
              header("location:deposits.php?msg=$msg");
            }
          } else {
            $err = "Set Minimum Deposit $min_deposit";
            header("location:deposits.php?err=$err");
          }
        }
        ?>
        <form action="" method="POST" class="grid grid-cols-12 gap-y-6 p-5">
          <div class="col-span-12">
            <label class="mb-2 block" for="new_password">Select Payment Method</label>
            <select id="method" name="method" class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4">
              <Option value="" style="display:none;">Select</Option>
              <?php
              $payment = _get("payment","status='Enable'");
              while ($data = mysqli_fetch_assoc($payment)) { ?>
                <Option value="<?php echo $data['id']; ?>"><?php echo $data['pmn_method']; ?></Option>
              <?php } ?>
            </select>

            <div style="display: flex;">
              <div id="mtd_number" class="payment_method">
                  Please Select Payment Method
              </div>
            </div>
          </div>


          <script>
            $(document).ready(function(){  
              $("#method").on("change",function(){
                var pmn_id = $(this).val();
                $.ajax({
                    url:"admin/config/ajax.php",
                    type:"POST",
                    data:
                    {
                      payment_method:"true",
                      pmn_id:pmn_id,      
                    },         
                    success:function(data){
                      $("#mtd_number").html(data);
                      }
                    });
                })

            })








            // $("#mtd_number").hide();
            // $("#copy").hide();
            // $("#method").on("change", function() {
            //   $("#mtd_number").show();
            //   $("#copy").show();
            //   var value = $("#method").val();
            //   $("#mtd_number").text(value);
            // });
          </script>

          <div class="col-span-12"><label class="mb-2 block" for="new_password">Payment Address</label><input required="" name="pmn_address" type="text" placeholder="Payment Address" class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4" value=""></div>
          <div class="col-span-12"><label class="mb-2 block" for="confirm_password">Transection ID</label><input required="" name="tr_id" type="text" placeholder="Transection ID" class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4" value=""></div>
          <div class="col-span-12"><label class="mb-2 block" for="confirm_password">Amount</label><input required="" name="amount" type="number" placeholder="100" class="w-full h-11 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4" value=""></div>
          <div class="col-span-12">
            <div class="w-fit"><button type="submit" name="submit" class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base"><span>Submit Now</span></button></div>
          </div>
        </form>
      </div>

    </div>
  </div>
</main>


<!-- Header area -->
<?php include("common/footer.php"); ?>
<!-- Header area -->




