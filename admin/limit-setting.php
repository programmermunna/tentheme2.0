<?php include("common/header-sidebar.php")?>
<?php include("common/setting-sidebar.php")?>
<?php
$limit = _fetch("limit_setting","id!=''");

if(isset($_POST['submit'])){
  $deposit_limit = $_POST['deposit'];
  $withdraw_limit = $_POST['withdraw'];

  $update = _update("limit_setting","deposit=$deposit_limit,withdraw=$withdraw_limit","id=1");
  if($update){
    $msg = "Successfully Saved";
    header("location:limit-setting.php?msg=$msg");
  }
}
?>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
          <form class="grid grid-cols-2 gap-y-6 gap-x-12" action="" method="POST">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Withdraw Limit</h2>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Minimum Deposit">Minimum Deposit</label>
              <input name="deposit" class="input" id="Minimum Deposit" type="number" placeholder="Minimum Deposit" value="<?php echo $limit['deposit']?>" required>
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="Minimum Withdraw">Minimum Withdraw</label>
              <input name="withdraw" class="input" id="Minimum Withdraw" type="number" placeholder="Minimum Withdraw" value="<?php echo $limit['withdraw']?>" required>
            </div>            

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button name="submit" type="submit" class="button">Submit</button>
              </div>
            </div>
          </form>


        </div>
      </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>