<?php include("common/header-sidebar.php")?>

<?php 

if(isset($_GET['pg_id'])){
 $pg_id = $_GET['pg_id'];
}
$pages = _fetch("pages","id=$pg_id");

if(isset($_POST['submit'])){
    $pg_name = $_POST['pg_name'];
    $pg_heading = $_POST['pg_heading'];
    $content = $_POST['content'];
    $status = $_POST['status']; 
    $update = _update("pages","pg_name='$pg_name',title='$pg_heading',content='$content',status='$status'","id='$pg_id'");
    if($update){
      $msg = "Successfully Updated";
      header("Location:pages.php?msg=$msg");
    }else{
      $err = "Something is error!";
      header("Location:pages.php?err=$err");
    }

}

?>
      <div class="x_container space-y-10 py-10">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Edit Page</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="pg_name">Page Name</label>
            <input name="pg_name" class="input" type="text" id="pg_name" placeholder="Enter Page Name" required value="<?php echo $pages['pg_name']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="pg_heading">Heading</label>
            <input name="pg_heading" class="input" type="text" id="pg_heading" placeholder="Enter Page Heading" required value="<?php echo $pages['title']?>">
          </div>

        </div>
        <br>
        <div>          
          <div style="padding-bottom:33px">
            <label for="content">Description</label>
            <textarea name="content" class="input summernote" type="text" id="summernote" placeholder="Description"
              required><?php echo $pages['content']?></textarea>
          </div>


          <div>
            <label for="status">Status</label>
            <select name="status" class="input">
              <?php if($pages['status']== 'Published'){ ?>
                <option value="Unpublished">Unpublished</option>
                <option selected value="Published">Published</option>
               <?php }else{ ?>
                <option selected value="Unpublished">Unpublished</option>
                <option value="Published">Published</option>
                <?php } ?>
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