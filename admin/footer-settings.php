<?php include("common/header-sidebar.php")?>
      
          <?php
          $data = _fetch("footer_1_2","id=1");?>
          <h2 style="font-size:40px;padding:20px">Footer 1</h2>
          <div style="display:flex;justify-content:space-around;padding:50px 100px">

              <?php 
              if(isset($_POST['add_logo'])){
                $file_name = $_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($file_tmp,"upload/$file_name");
                if(empty($file_name)){
                  $msg = "Please Select File";
                  header("location:footer-settings.php?msg=$msg");
                }else{
                $update = _update("footer_1_2","file_name='$file_name'","id=1");
                if($update){
                  $msg = "Successfully Updated";
                  header("location:footer-settings.php?msg=$msg");
                }
                else{
                  $err = "Something is wrong";
                }
              }
              }elseif(isset($_POST['remove_logo'])){
                $update = _update("footer_1_2","file_name=''","id=1");
                if($update){
                  $msg = "Successfully Removed";
                  header("location:footer-settings.php?msg=$msg");
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
              <div>
                <?php 
                if(isset($_POST['update_f1_link'])){
                  $facebook = $_POST['facebook'];
                  $youtube = $_POST['youtube'];
                  $update = _update("footer_1_2","facebook='$facebook',youtube='$youtube'","id=1");
                  if($update){
                    $msg = "Update Successfully";
                    header("location:footer-settings.php?msg=$msg");
                  }else{
                    echo $err = "error";
                  }
                }
                ?>
                <form action="" method="POST">
                  <div style="display:flex;gap:30px;padding-top:88px;">
                    <label for="">Facebook: </label>
                    <input style="width:333px" name="facebook" class="input" type="text" placeholder="Enter Your Facebook Url" value="<?php echo $data['facebook']?>">
                  </div>
                  <div style="display:flex;gap:42px;padding-top:20px;">
                    <label for="">Youtube: </label>
                    <input style="width:333px" name="youtube" class="input" type="text" placeholder="Enter Your Youtube Url" value="<?php echo $data['youtube']?>">
                  </div>
                  <button style="margin-top:20px;" class="button" type="submit" name="update_f1_link">Update Now</button>
                </form>
              </div>
        </div>
        
<hr>
<hr>

          <h2 style="font-size:40px;padding:20px">Footer 2</h2>
          <div style="padding:50px 100px">
              <div>
              <?php 
                if(isset($_POST['update_f2'])){
                  $textarea = $_POST['textarea'];
                  $update = _update("footer_1_2","textarea='$textarea'","id=1");
                  if($update){
                    $msg = "Update Successfully";
                    header("location:footer-settings.php?msg=$msg");
                  }else{
                    echo $err = "error";
                  }
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                  <label for="logo_image">Footer Summary</label>
                  <textarea name="textarea" class="summernote"><?php echo $data['textarea']?></textarea>
                </div>

                <div class="col-span-2 flex justify-start">
                  <div class="w-fit" style="display:flex;gap:10px;padding:20px 0">
                    <button type="submit" name="update_f2" class="button">Save</button>
                  </div>
                </div>
                </form>
              </div>
        </div>
<br>
<br>
<hr>
<hr>

          <h2 style="font-size:40px;padding:20px">Footer 3</h2>
          <div style="display:flex;justify-content:space-between;gap:20px;padding:50px 100px">              
              <input id="f3_title" type="text" class="input" placeholder="Enter Title">
              <input id="f3_url" type="text" class="input" placeholder="Enter URL">
              <button id="f3_btn" class="button">Add Now</button>
        </div>


                <table class="min-w-full divide-y divide-gray-200 table-fixed" style="width:80%;padding:50px 100px">
                  <thead class="bg-white">
                    <tr>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Title</th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">URL</th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Status</th>
                      <th scope="col" class="text-center p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Actions</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200 f3_load">
                                        
                    </tbody>
                </table>
     
<br>
<br>
<hr>
<hr>

          <h2 style="font-size:40px;padding:20px">Footer 4</h2>
          <div style="display:flex;justify-content:space-between;gap:20px;padding:50px 100px">              
              <input id="f4_title" type="text" class="input" placeholder="Enter Title">
              <input id="f4_url" type="text" class="input" placeholder="Enter URL">
              <button id="f4_btn" class="button">Add Now</button>
        </div>


                <table class="min-w-full divide-y divide-gray-200 table-fixed" style="width:80%;padding:50px 100px">
                  <thead class="bg-white">
                    <tr>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Title</th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">URL</th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Status</th>
                      <th scope="col" class="text-center p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Actions</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200 f4_load">
                                        
                    </tbody>
                </table>
        
<br>
<br>
<hr>
<hr>

          <h2 style="font-size:40px;padding:20px">Footer 5 <small>(Navigation Bar)</small></h2>
          <div style="display:flex;justify-content:space-between;gap:20px;padding:50px 100px">              
              <input id="f5_title" type="text" class="input" placeholder="Enter Title">
              <input id="f5_url" type="text" class="input" placeholder="Enter URL">
              <button id="f5_btn" class="button">Add Now</button>
        </div>


                <table class="min-w-full divide-y divide-gray-200 table-fixed" style="width:80%;padding:50px 100px">
                  <thead class="bg-white">
                    <tr>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Title</th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">URL</th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">Status</th>
                      <th scope="col" class="text-center p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Actions</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200 f5_load">
                                        
                    </tbody>
                </table>
        
<hr>
<hr>

<br>
<br>

          <h2 style="font-size:40px;padding:20px">Copy Right Text</h2>
          <div style="padding:50px 100px">
              <div>
              <?php 
                if(isset($_POST['copy_right_btn'])){
                  $copy_right = $_POST['copy_right'];
                  $update = _update("footer_1_2","copy_right='$copy_right'","id=1");
                  if($update){
                    $msg = "Update Successfully";
                    header("location:footer-settings.php?msg=$msg");
                  }else{
                    echo $err = "error";
                  }
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                  <label for="logo_image">Copy Right Text</label>
                  <textarea name="copy_right" class="summernote"><?php echo $data['copy_right']?></textarea>
                </div>

                <div class="col-span-2 flex justify-start">
                  <div class="w-fit" style="display:flex;gap:10px;padding:20px 0">
                    <button type="submit" name="copy_right_btn" class="button">Save</button>
                  </div>
                </div>
                </form>
              </div>
        </div>

<br>
<br>


      </div>
    </div>
  </main>

  <script>

$(document).ready(function(){

  //footer 4
    function load_footer_3(){
        $.ajax({
            url:"config/ajax.php",
            type:"POST",
            data:
            {
              f3_load:'f3',
            },
            success:function(data){
                $(".f3_load").html(data);
            }
        });
    }
    load_footer_3();

    $("#f3_btn").on("click",function(e){
      e.preventDefault();
      $.ajax({
          url:"config/ajax.php",
          type:"POST",
          data:
          {
            f3_ajax:"insert",         
            f3_title:$("#f3_title").val(),
            f3_url:$("#f3_url").val(),
          },         
          success:function(data){
            load_footer_3();
            $("#f3_title").val().reset();
            }
          });
      })


//footer 5
function load_footer_4(){
        $.ajax({
            url:"config/ajax.php",
            type:"POST",
            data:
            {
              f4_load:'f4',
            },
            success:function(data){
                $(".f4_load").html(data);
            }
        });
    }
    load_footer_4();

    $("#f4_btn").on("click",function(e){
      e.preventDefault();
      $.ajax({
          url:"config/ajax.php",
          type:"POST",
          data:
          {
            f4_ajax:"insert",         
            f4_title:$("#f4_title").val(),
            f4_url:$("#f4_url").val(),
          },         
          success:function(data){
            load_footer_4();
            }
          });
      })

//footer 5
    function load_footer_5(){
        $.ajax({
            url:"config/ajax.php",
            type:"POST",
            data:
            {
              f5_load:'f5',
            },
            success:function(data){
                $(".f5_load").html(data);
            }
        });
    }
    load_footer_5();

    $("#f5_btn").on("click",function(e){
      e.preventDefault();
      $.ajax({
          url:"config/ajax.php",
          type:"POST",
          data:
          {
            f5_ajax:"insert",         
            f5_title:$("#f5_title").val(),
            f5_url:$("#f5_url").val(),
          },         
          success:function(data){
            load_footer_5();
            }
          });
      })
    


  })



  $('.summernote').summernote({
        placeholder: 'Write Something About Service',
        tabsize: 2,
        height: 100,
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