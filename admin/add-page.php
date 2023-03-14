<?php include("common/header-sidebar.php")?>

<?php 

if(isset($_POST['submit'])){
    $pg_name = $_POST['pg_name'];
    $pg_heading = $_POST['pg_heading'];
    $content = $_POST['content'];
    $status = $_POST['status'];

    $pg_name = strtolower($pg_name);
    $pg_name = str_replace(" ","-","$pg_name");

    $check = _fetch("pages","pg_name='$pg_name'");
    if($check){
        header("location:add-page.php?err=Already exist this page");
    }else{
      $insert = _insert("pages","pg_name,title,content,status","'$pg_name','$pg_heading','$content','$status'");
      if($insert){
        $msg = "Successfully Inserted";
        header("Location:add-page.php?msg=$msg");
      }else{
        $err = "Something is error!";
        header("Location:add-page.php?err=$err");
      }
    }

}

?>
      <div class="x_container space-y-10 py-10">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Add Page</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="pg_name">Page Name</label>
            <input name="pg_name" class="input" type="text" id="pg_name" placeholder="Enter Page Name" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="pg_heading">Heading</label>
            <input name="pg_heading" class="input" type="text" id="pg_heading" placeholder="Enter Page Heading" required>
          </div>

        </div>
        <br>
        <div>          
          <div style="padding-bottom:33px">
            <label for="content">Description</label>
            <textarea name="content" class="input summernote" type="text" id="summernote" placeholder="Description"
              required></textarea>
          </div>


          <div>
            <label for="status">Status</label>
            <select name="status" class="input">
                <option value="Unpublished">Unpublished</option>
                <option selected value="Published">Published</option>
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
        placeholder: 'Write Something About Page Content',
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