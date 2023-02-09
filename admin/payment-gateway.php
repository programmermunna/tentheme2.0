<?php include("common/header-sidebar.php")?>
<?php include("common/setting-sidebar.php")?>
     
       
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">



        <?php 
        if(isset($_POST['submit'])){          
          $pmn_value = $_POST['pmn_value'];
          $status = $_POST['status'];
          $hidden = $_POST['hidden'];

          $update = _update("payment","pmn_info='$pmn_value',status='$status'","pmn_method='$hidden'");

          
          if($update){
            $msg = "Successfully Update";
            header("location:payment-gateway.php?msg=$msg");
          }else{
             $err = "Something is Wrong!";
          }
        }
        ?>

          <?php 
          $payment = _get("payment","id!='' ORDER BY id ASC");
          while($data = mysqli_fetch_assoc($payment)){?>
          <form action="" method="POST"class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800"><?php echo $data['pmn_method']?></h2>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Payoneer Email">Receive Address</label>
              <?php if($data["pmn_method"]== 'Bank'){?>
              <textarea name="pmn_value" class="input" id="" cols="30" rows="10"><?php echo $data["pmn_info"]?></textarea>
              <?php }else{?>
                <input name="pmn_value" class="input" type="text" id="Payoneer Email" placeholder="Payoneer Email" value="<?php echo $data["pmn_info"]?>">
              <?php }?>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Status">Status</label>
              <select class="select" name="status" id="Status">
                <?php 
                if($data["status"]=='Enable'){ ?>
                <option selected value="Enable">Enable</option>
                <option value="Disabled">Disabled</option>
              <?php }else{ ?>
                <option value="Enable">Enable</option>
                <option selected value="Disabled">Disabled</option>
                <?php }?>
              </select>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <input name="hidden" type="hidden" value="<?php echo $data['pmn_method']?>">
                <button type="submit" name="submit" class="button">Submit</button>
              </div>
            </div>
          </form>
          <?php }?>

        </div>
      </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>