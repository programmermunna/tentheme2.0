<?php include("common/header-sidebar.php")?>
<?php include("common/setting-sidebar.php")?>
      
        <?php
        $data = _fetch("website","id=1");

        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $logo = $_POST['logo'];
            $description = $_POST['description'];
            $keyword = $_POST['keyword'];
            $url = $_POST['url'];
            $phone = $_POST['phone'];
            $mail = $_POST['mail'];
            $address = $_POST['address'];
            $footer_text = $_POST['footer_text'];
            $facebook = $_POST['facebook'];
            $youtube = $_POST['youtube'];
            $linkedin = $_POST['linkedin'];
            $update = _update("website","title='$title',logo='$logo',description='$description',keyword='$keyword',url='$url',phone='$phone',mail='$mail',address='$address',footer_text='$footer_text',facebook='$facebook',youtube='$youtube',linkedin='$linkedin'","id=1");

            if($update){
              $msg = "Update Successfully";
              header("location:settings.php?msg=$msg");
            }else{
              echo $err = "Something is wrong";
            }
        }
        
        
        
        
        ?>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
          <form action="" method="POST" class="grid grid-cols-2 gap-y-6 gap-x-12">
            <div class="col-span-2">
              <h2 class="text-xl font-semibold text-cyan-800">Website Info</h2>
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="title">Site Title</label>
              <input name="title" class="input" type="text" id="title" placeholder="Site Title" required value="<?php echo $data['title']?>">
            </div>


            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="logo">Site Logo</label>
              <input name="logo" class="input" type="text" id="logo" placeholder="Site Logo" required value="<?php echo $data['logo']?>">
            </div>

            <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
              <label for="url">Site URL</label>
              <input name="url" class="input" type="text" id="url" placeholder="Url" required value="<?php echo $data['url']?>">
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
                  header("location:settings.php?msg=$msg");
                }
                else{
                  $err = "Something is wrong";
                }
              }
              }elseif(isset($_POST['remove_logo'])){
                $update = _update("website","file_name=''","id=1");
                if($update){
                  $msg = "Successfully Removed";
                  header("location:settings.php?msg=$msg");
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
                  header("location:settings.php?msg=$msg");
                }else{
                $update = _update("website","favicon_name='$file_name'","id=1");
                if($update){
                  $msg = "Successfully Updated";
                  header("location:settings.php?msg=$msg");
                }
                else{
                  $err = "Something is wrong";
                }
              }
              }elseif(isset($_POST['remove_favicon'])){
                $update = _update("website","favicon_name=''","id=1");
                if($update){
                  $msg = "Successfully Removed";
                  header("location:settings.php?msg=$msg");
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