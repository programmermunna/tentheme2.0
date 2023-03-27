<?php include("common/header-sidebar.php")?>
      <?php 
        $investor_docs = _fetch("investor_docs","id=1");
      ?>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
        <?php if(isset($_POST['submit'])){
            $pices = $_POST['pices'];
            $discount = $_POST['discount'];
            $update = _update("investor_docs","pices='$pices',discount='$discount'","id=1");
            if($update){
              header("location:investor-docs.php?msg=Successfully Updated");
            }
          }
            ?>
          <form class="space-y-6" action="" method="POST">
            
            <div class="flex flex-col gap-y-1">
              <label for="pices">Total Products</label>
              <input type="number" name="pices" class="input" placeholder="10" value="<?php echo $investor_docs['pices']?>">
            </div>

            <div class="flex flex-col gap-y-1">
              <label for="investor_discount">investor Discount (As %)</label>
              <input type="number" name="discount" class="input" placeholder="10" value="<?php echo $investor_docs['discount']?>">
            </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Submit</button>
              </div>
            </div>
          </form>
          
          <hr class="my-6" />

          <?php if(isset($_POST['before_btn'])){
            $textarea = $_POST['textarea'];
            $update = _update("investor_docs","before_submit='$textarea'","id=1");
            if($update){
              header("location:investor-docs.php?msg=Successfully Updated");
            }
          }
            ?>
          <form class="space-y-6" action="" method="POST">
            <div class="flex flex-col gap-y-1">
              <label for="investor_terms">Before Submit Text (investor Terms)</label>
              <textarea class="summernote" name="textarea"  required><?php echo $investor_docs['before_submit']?></textarea> </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="before_btn" class="button">Submit</button>
              </div>
            </div>
          </form>
          
          <hr class="my-6" />

          <?php if(isset($_POST['after_btn'])){
            $textarea = $_POST['textarea'];
            $update = _update("investor_docs","after_submit='$textarea'","id=1");
            if($update){
              header("location:investor-docs.php?msg=Successfully Updated");
            }
          }
            ?>
          <form class="space-y-6" action="" method="POST">
            <div class="flex flex-col gap-y-1">
              <label for="after_submit">After Submit Text</label>
              <textarea class="summernote" name="textarea"  required><?php echo $investor_docs['after_submit']?></textarea> </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="after_btn" class="button">Submit</button>
              </div>
            </div>
          </form>
          
          <hr class="my-6" />

          <?php if(isset($_POST['accept_btn'])){
            $textarea = $_POST['textarea'];
            $update = _update("investor_docs","accept_submit='$textarea'","id=1");
            if($update){
              header("location:investor-docs.php?msg=Successfully Updated");
            }
          }
            ?>
          <form class="space-y-6" action="" method="POST">
            <div class="flex flex-col gap-y-1">
              <label for="accept_submit">Aprove Text</label>
              <textarea class="summernote" name="textarea"  required><?php echo $investor_docs['accept_submit']?></textarea> </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="accept_btn" class="button">Submit</button>
              </div>
            </div>
          </form>
          
          <hr class="my-6" />

          <?php if(isset($_POST['reject_btn'])){
            $textarea = $_POST['textarea'];
            $update = _update("investor_docs","reject_submit='$textarea'","id=1");
            if($update){
              header("location:investor-docs.php?msg=Successfully Updated");
            }
          }
            ?>
          <form class="space-y-6" action="" method="POST">
            <div class="flex flex-col gap-y-1">
              <label for="reject_submit">Before Submit Text (investor Terms)</label>
              <textarea class="summernote" name="textarea"  required><?php echo $investor_docs['reject_submit']?></textarea> </div>

            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="reject_btn" class="button">Submit</button>
              </div>
            </div>
          </form>



        
        </div>
      </div>
  </main>
  <script>
  $('.summernote').summernote({
        placeholder: 'Write Something About Service',
        tabsize: 2,
        height: 200,
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