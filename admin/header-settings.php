<?php include("common/header-sidebar.php")?>
      
        <?php
        $data = _fetch("website","id=1");

        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $url = $_POST['url'];
            $description = $_POST['description'];
            $keyword = $_POST['keyword'];
            $update = _update("website","title='$title',description='$description',keyword='$keyword',url='$url'","id=1");

            if($update){
              $msg = "Update Successfully";
              header("location:header-settings.php?msg=$msg");
            }else{
              echo $err = "Something is wrong";
            }
        }
        
        
        
        
        ?>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
          <form action="" method="POST" class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Header Setting</h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="title">Site Title</label>
              <input name="title" class="input" type="text" id="title" placeholder="Site Title" required value="<?php echo $data['title']?>">
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="url">Site URL</label>
              <input name="url" class="input" type="text" id="url" placeholder="Url" required value="<?php echo $data['url']?>">
            </div>
            
            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="description">Description</label>
              <textarea name="description" class="input" id="description" cols="30" rows="10"><?php echo $data['description']?></textarea>
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="keyword">Keyword</label>
              <textarea name="keyword" class="input" id="keyword" cols="30" rows="10"><?php echo $data['keyword']?></textarea>
            </div>


            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>

          </form>
<br>
<br>
          <hr>

          <div style="display:flex;justify-content:space-around">


              <?php 
              if(isset($_POST['add_logo'])){
                $file_name = $_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($file_tmp,"upload/$file_name");
                if(empty($file_name)){
                  $msg = "Please Select File";
                  header("location:settings.php?msg=$msg");
                }else{
                $update = _update("website","file_name='$file_name'","id=1");
                if($update){
                  $msg = "Successfully Updated";
                  header("location:header-settings.php?msg=$msg");
                }
                else{
                  $err = "Something is wrong";
                }
              }
              }elseif(isset($_POST['remove_logo'])){
                $update = _update("website","file_name=''","id=1");
                if($update){
                  $msg = "Successfully Removed";
                  header("location:header-settings.php?msg=$msg");
                }
              }              
              ?>
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                  <label for="logo_image">Logo Image</label>
                  <?php if(empty($data['file_name'])){}else{?>
                  <img style="width:300px;height:100px;margin:10px auto;border-radius:10px;" src="upload/<?php echo $data['file_name']?>">
                  <?php }?>
                  <input style="padding-top:10px" name="file" class="input" type="file" id="logo_file">
                </div>

                <div class="col-span-2 flex justify-start">
                  <div class="w-fit" style="display:flex;gap:10px;padding:20px 0">
                    <button type="submit" name="add_logo" class="button">Add</button>
                    <button type="submit" name="remove_logo" class="button">Remove</button>
                  </div>
                </div>
                </form>
              </div>


              <?php 
              if(isset($_POST['add_favicon'])){
                $file_name = $_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($file_tmp,"upload/$file_name");
                if(empty($file_name)){
                  $msg = "Please Select File";
                  header("location:header-settings.php?msg=$msg");
                }else{
                $update = _update("website","favicon_name='$file_name'","id=1");
                if($update){
                  $msg = "Successfully Updated";
                  header("location:header-settings.php?msg=$msg");
                }
                else{
                  $err = "Something is wrong";
                }
              }
              }elseif(isset($_POST['remove_favicon'])){
                $update = _update("website","favicon_name=''","id=1");
                if($update){
                  $msg = "Successfully Removed";
                  header("location:header-settings.php?msg=$msg");
                }
              }              
              ?>
              <div>
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                  <label for="description">Favicon Image</label>
                  <?php if(empty($data['favicon_name'])){}else{?>
                  <img style="width:300px;height:100px;margin:10px auto;border-radius:10px;" src="upload/<?php echo $data['favicon_name']?>">
                  <?php }?>
                  <input style="padding-top:10px" name="file" class="input" type="file" id="logo_file">
                </div>

                <div class="col-span-2 flex justify-start">
                  <div class="w-fit" style="display:flex;gap:10px;padding:20px 0">
                    <button type="submit" name="add_favicon" class="button">Add</button>
                    <button type="submit" name="remove_favicon" class="button">Remove</button>
                  </div>
                </div>
                </form>
              </div>
          </div>





        </div>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>