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
              $payment = _getAll("payment");
              while ($data = mysqli_fetch_assoc($payment)) { ?>
                <Option value="<?php echo $data['pmn_info']; ?>"><?php echo $data['pmn_method']; ?></Option>
              <?php } ?>
            </select>








            <!-- <div style="background: red;" class="text-gray-200 p-5 rounded shadow">
              <ul class="list-decimal px-5 space-y-3">
                <li class="border-b pb-3 border-b-[#55555555] text-xs md:text-sm"><b class="text-yellow-500 text-lg"> *247# </b> ডায়াল করে আপনার Bkash মোবাইল মেনুতে যান অথবা Bkash অ্যাপে যান।</li>
                <li class="border-b pb-3 border-b-[#55555555] text-xs md:text-sm">"Send Money" -এ ক্লিক করুন।</li>
                <li class="border-b pb-3 border-b-[#55555555] text-xs md:text-sm">
                  <div class="flex flex-wrap items-center gap-x-1"><span>প্রাপক নম্বর হিসেবে এই নম্বরটি লিখুনঃ</span><b>01870844688</b><b class="text-yellow-500 text-lg">01870844688</b><button type="button" class="bg-black px-3 py-1 text-blue-100 text-xs rounded focus:ring-2 bg-opacity-50"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" class="svg-inline--fa fa-copy " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M224 0c-35.3 0-64 28.7-64 64V288c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H224zM64 160c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H288c35.3 0 64-28.7 64-64V384H288v64H64V224h64V160H64z"></path>
                      </svg><span class="ml-1">Copy</span></button></div>
                </li>
                <li class="border-b pb-3 border-b-[#55555555] text-xs md:text-sm">টাকার পরিমাণঃ<b class="text-yellow-500 text-lg ml-1">৳1500</b></li>
                <li class="border-b pb-3 border-b-[#55555555] text-xs md:text-sm">নিশ্চিত করতে এখন আপনার BKASH মোবাইল মেনু পিন লিখুন।</li>
                <li class="border-b pb-3 border-b-[#55555555] text-xs md:text-sm">সবকিছু ঠিক থাকলে, আপনি BKASH থেকে একটি নিশ্চিতকরণ বার্তা পাবেন।</li>
                <li class="text-xs md:text-sm">বক্সে আপনার Transaction ID &amp; Number দিন এবং নিচের Confirm বাটনে ক্লিক করুন।</li>
              </ul><br>
            </div> -->

















            <div style="display: flex;">
              <div id="mtd_number" style="background:#2563EB;color:#fff;margin-top:10px;padding:10px;border-radius:5px 0px 0px 5px;width:90%;">
              
              

              </div>
              <div style="background:#2563EB;color:#fff;margin-top:10px;padding:10px;border-radius:0px 5px 5px 0px;width:10%" id="copy">Copy <i class="fa-regular fa-paste"></i></div>
            </div>
          </div>


          <script>

          // $(document).ready(function(){  
          //     $("#method").on("change",function(){
          //       // e.preventDefault();
          //       console.log("pmn_id");
          //       var pmn_id = $(this).val();
          //       $.ajax({
          //           url:"admin/config/ajax.php",
          //           type:"POST",
          //           data:
          //           {
          //             method_change:1,            
          //             ticket_id : <?php echo $ticket_id;?>,
          //             uid:<?php echo $id;?>,
          //             msg:$("#message").val(),        
          //           },         
          //           success:function(data){
          //             load();
          //             }
          //           });
          //       })

          //   })













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