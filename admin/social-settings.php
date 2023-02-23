<?php include("common/header-sidebar.php")?>
      
        <?php
        $data = _fetch("website","id=1");

        if(isset($_POST['submit'])){
            
            $phone = $_POST['phone'];
            $mail = $_POST['mail'];
            $address = $_POST['address'];
            $facebook = $_POST['facebook'];
            $youtube = $_POST['youtube'];
            $linkedin = $_POST['linkedin'];
            $update = _update("website","phone='$phone',mail='$mail',address='$address',facebook='$facebook',youtube='$youtube',linkedin='$linkedin'","id=1");

            if($update){
              $msg = "Update Successfully";
              header("location:social-settings.php?msg=$msg");
            }else{
              echo $err = "Something is wrong";
            }
        }
        
        
        
        
        ?>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
          <form action="" method="POST" class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Social Setting</h2>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="phone">Phone</label>
              <input name="phone" class="input" type="text" id="phone" placeholder="Phone number" required value="<?php echo $data['phone']?>">
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="mail">Mail</label>
              <input name="mail" class="input" type="text" id="mail" placeholder="Mail" required value="<?php echo $data['mail']?>">
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="address">Address</label>
              <input name="address" class="input" type="text" id="address" placeholder="Address" required value="<?php echo $data['address']?>">
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="footer_text">Fotter Text</label>
              <input name="footer_text" class="input" type="text" id="footer_text" placeholder="Footer Text" required value="<?php echo $data['footer_text']?>">
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="facebook">Facebook</label>
              <input name="facebook" class="input" type="text" id="facebook" placeholder="Facebook Page" required value="<?php echo $data['facebook']?>">
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="youtube">Youtube</label>
              <input name="youtube" class="input" type="text" id="youtube" placeholder="Youtube Channel" required value="<?php echo $data['youtube']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="linkedin">Linkedin</label>
              <input name="linkedin" class="input" type="text" id="linkedin" placeholder="Linkedin Page" required value="<?php echo $data['linkedin']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="linkedin">Twitter</label>
              <input name="twitter" class="input" type="text" id="twitter" placeholder="Twitter" required value="twitter">
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>

          </form>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>