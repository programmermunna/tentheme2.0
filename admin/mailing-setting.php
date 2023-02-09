<?php include("common/header-sidebar.php")?>
<?php include("common/setting-sidebar.php")?>

        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">

          <?php
          $data = _fetch("mail","id=1");

          if(isset($_POST['submit'])){
            $method = $_POST['method'];
            $host = $_POST['host'];
            $port = $_POST['port'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $security = $_POST['security'];
            $contact_mail = $_POST['contact_mail'];
            $reply_mail = $_POST['reply_mail'];
            $update = _update("mail","method='$method',host='$host',port='$port',username='$username',password='$password',security='$security'","id=1");
            if($update){
              $msg = "Successfully Updated";
              header("location:mailing-setting.php?msg=$msg");
            }else{
              echo "error;";
            }
          }
          ?>
          <form class="grid grid-cols-2 gap-y-8 gap-x-12" action="" method="POST">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Mailing System</h2>
            </div>

            <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="method">Mail delivery method</label>
              <select class="select" name="method" id="mail_delivery_method" required>                
                <option selected value="<?php echo $data['method']?>"><?php echo $data['method']?></option>
                <option value="PHP Mail">PHP Mail</option>
                <option value="SMTP">SMTP</option>
              </select>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="SMTP Host">SMTP Host</label>
              <input name="host" class="input" type="text" id="SMTP Host" placeholder="SMTP Host" required value="<?php echo $data['host']?>">
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="SMTP Port">SMTP Port</label>
              <input name="port" class="input" type="text" id="SMTP Port" placeholder="SMTP Port" required value="<?php echo $data['port']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="SMTP Username">SMTP Username</label>
              <input name="username" class="input" type="text" id="SMTP Username" placeholder="SMTP Username" required value="<?php echo $data['username']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="SMPT Password">SMPT Password</label>
              <input name="password" class="input" type="text" id="SMPT Password" placeholder="SMPT Password" required value="<?php echo $data['password']?>">
            </div>


            <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="smtp_auto">SMTP Auth</label>
              <select class="select" name="security" id="mail_delivery_method" required>
              <option selected value="<?php echo $data['security']?>"><?php echo $data['security']?></option>
              <option value="N/A">N/A</option>
                <option value="SSL">SSL</option>
                <option value="TSL">TSL</option>
              </select>
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button name="submit" type="submit" class="button">Submit</button>
              </div>
            </div>

          </form>

          <hr class="my-6" />
          <?php
          if(isset($_POST['submit2'])){
            $contact_mail = $_POST['contact_mail'];
            $reply_mail = $_POST['reply_mail'];
            $update = _update("mail","contact_mail='$contact_mail',reply_mail='$reply_mail'","id=1");
            if($update){
              $msg = "Successfully Updated";
              header("location:mailing-setting.php?msg=$msg");
            }else{
              echo "errror;";
            }
          }
          ?>
          <form class="grid grid-cols-2 gap-y-8 gap-x-12" action="" method="POST">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">eMail Settings</h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="Contact Email">Contact Email</label>
              <input name="contact_mail" class="input" type="text" id="Contact Email" placeholder="Contact Email" required value="<?php echo $data['contact_mail']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="NoReply Email">NoReply Email</label>
              <input name="reply_mail" class="input" type="text" id="NoReply Email" placeholder="NoReply Email" required value="<?php echo $data['reply_mail']?>">
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button name="submit2" type="submit" class="button">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>