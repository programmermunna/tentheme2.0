<?php include("common/header-sidebar.php")?>
      
        <?php
        $data = _fetch("website","id=1");?>
          <h2 style="font-size:40px;padding:20px">Footer 1</h2>
          <div style="display:flex;justify-content:space-around;padding:50px 100px">

              <?php 
              if(isset($_POST['add_logo'])){
                $file_name = $_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                move_uploaded_file($file_tmp,"upload/$file_name");
                if(empty($file_name)){
                  $msg = "Please Select File";
                  header("location:settings.php?msg=$msg");
                }else{
                $update = _update("website","footer_img='$file_name'","id=1");
                if($update){
                  $msg = "Successfully Updated";
                  header("location:footer-settings.php?msg=$msg");
                }
                else{
                  $err = "Something is wrong";
                }
              }
              }elseif(isset($_POST['remove_logo'])){
                $update = _update("website","file_name=''","id=1");
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
                  <img style="width:300px;height:100px;margin:10px auto;border-radius:10px;" src="upload/<?php echo $data['footer_img']?>">
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
                <form action="">
                  <div style="display:flex;gap:30px;padding-top:90px;">
                    <label for="">Facebook: </label>
                    <input style="width:333px" class="input" type="text" placeholder="Enter Your Facebook Url">
                  </div>
                  <div style="display:flex;gap:42px;padding-top:20px;">
                    <label for="">Youtube: </label>
                    <input style="width:333px" class="input" type="text" placeholder="Enter Your Youtube Url">
                  </div>
                </form>
              </div>
        </div>
        
<hr>
<hr>

          <h2 style="font-size:40px;padding:20px">Footer 2</h2>
          <div style="padding:50px 100px">
              <div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
                  <label for="logo_image">Footer Summary</label>
                  <textarea class="summernote"></textarea>
                </div>

                <div class="col-span-2 flex justify-start">
                  <div class="w-fit" style="display:flex;gap:10px;padding:20px 0">
                    <button type="submit" name="add_logo" class="button">Save</button>
                  </div>
                </div>
                </form>
              </div>
        </div>
        
<hr>
<hr>

          <h2 style="font-size:40px;padding:20px">Footer 3</h2>
          <div style="display:flex;justify-content:space-between;gap:20px;padding:50px 100px">              
              <input id="f3_title" type="text" class="input" placeholder="Enter Title">
              <input id="f3_url" type="text" class="input" placeholder="Enter URL">
              <button id="f3_btn" class="btn" style="background:#2563EB;color:#fff">Add Now</button>
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
        
<hr>
<hr>


<br>
<br>
<br>
<br>


      </div>
    </div>
  </main>

  <script>

$(document).ready(function(){

    function load(){
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
    load();

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
            load();
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