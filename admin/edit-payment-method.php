<?php include("common/header-sidebar.php")?>

<?php 

if(isset($_GET['payment_id'])){
  $payment_id = $_GET['payment_id'];
  $payment_method = _fetch("payment","id='$payment_id'");  
}


if(isset($_POST['submit'])){
    $method_name = $_POST['method_name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
      $insert = _update("payment","pmn_method='$method_name',description='$description',status='$status'","id=$payment_id");
      if($insert){
        $msg = "Successfully Inserted";
        header("Location:payment-method.php?msg=$msg");
      }else{
        $err = "Something is error!";
        header("Location:payment-method.php?err=$err");
      }
}

?>
      <div class="x_container space-y-10 py-10">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Edit Payment Method</h2>
          </div>
        </div>
        <br>

        <div>        
          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="method_name">Method Name</label>
            <input name="method_name" class="input" type="text" id="method_name" placeholder="Payment Method Name" required value="<?php echo $payment_method['pmn_method'];?>" >
          </div>
          <br>
        
          <div style="padding-bottom:33px">
            <label for="description">Description</label>
            <textarea name="description" class="input summernote" type="text" id="summernote" placeholder="Description"
              required> <?php echo $payment_method['description'];?> </textarea>
          </div>

          <div>
            <label for="status">Status</label>
            <select name="status" class="input">
              <?php if($payment_method['status'] == 'Enable'){ ?>
              <option selected value="Enable">Enable</option>
              <option value="Disabled">Disable</option>
             <?php }else{?>
              <option value="Enable">Enable</option>
              <option selected value="Disabled">Disable</option>
              <?php }?>
            </select>
          </div>

          <br>
          <div class="col-span-2 flex justify-start">
            <div class="w-fit">
              <button name="submit" type="submit" class="button">Submit</button>
            </div>
          </div>     
        </div>


        </form>
      </div>
    </div>
  </main>

<script>
  $('.summernote').summernote({
        placeholder: 'Write Something For Payment Method',
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
</script>
  <script src="js/app.js"></script>
</body>

</html>