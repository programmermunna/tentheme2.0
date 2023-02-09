<?php include("common/header-sidebar.php")?>

<?php 
$err = "";
if(isset($_POST['submit'])){          
  $pg_name = $_POST['pg_name'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $description = $_POST['description'];
  $hidden = $_POST['hidden'];

  $update = _update("pages","title='$title',content='$content',description='$description'","pg_name='$hidden'");

  
  if($update){
    $msg = "Successfully Update";
    header("location:pages.php?msg=$msg");
  }else{
     $err = "Something is Wrong!";
  }
}

?>
      <div class="x_container space-y-10 py-10">


      <?php $pages = _get("pages","id!='' ORDER BY id ASC");
          while($data = mysqli_fetch_assoc($pages)){?>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800"><?php echo strtoupper($data['pg_name'])?></h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="title">Page Heading</label>
            <textarea name="title" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Page Heading"
              required><?php echo $data['title']?></textarea>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="content">Content</label>
            <textarea name="content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Content"
              required><?php echo $data['content']?></textarea>
          </div>
        </div>
        <br>
        <div> 
          <?php if($data['pg_name']=='terms&condition'){?>         
          <div style="padding-bottom:33px">
            <label for="description">Description</label>
            <textarea name="description" class="input summernote" type="text" id="summernote" placeholder="Description"
              ><?php echo $data['description']?></textarea>
          </div>
          <?php }?>

          <div class="col-span-2 flex justify-start">
            <div class="w-fit">
              <input name="hidden" type="hidden" value="<?php echo $data['pg_name']?>">
              <button name="submit" type="submit" class="button">Update</button>
            </div>
          </div>     
        </div>
        </form>
        <br>
        <?php }?>




      </div>
    </div>
  </main>

<script>
  $('.summernote').summernote({
        placeholder: 'Write Something About Product',
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