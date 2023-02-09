<?php include("common/header-sidebar.php")?>

<?php 
$err = "";
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $summery = $_POST['summery'];
    $content = $_POST['content'];
    $status = $_POST['status'];

    $pid = $person['id'];


    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp,"upload/$file_name");

    $insert = _insert("post","pid, title, category, summery, content, status, file_name, time","'$pid', '$title', '$category', '$summery', '$content','$status','$file_name', '$time'");
    if($insert){
      $msg = "Successfully Inserted";
      header("Location:add-post.php?msg=$msg");
    }else{
    echo  $err = "Something is error.";
    }
}

?>
      <div class="x_container space-y-10 py-10">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Add post</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="title">Title</label>
            <input name="title" class="input" type="text" id="Title" placeholder="Title" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="category">Category</label>
            <select name="category" class="input">
            <?php $category_all = _getAll("category");
              while($ctg = mysqli_fetch_assoc($category_all)){ ?>
              <option value="PHP"><?php echo $ctg['category']?></option>
              <?php }?>
            </select>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="summery">Summery</label>
            <textarea name="summery" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Mini Content"
              required></textarea>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="content">Content</label>
            <textarea name="content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Content"
              required></textarea>
          </div>

          <div>
            <label for="status">Status</label>
            <input name="file" style="padding-top:10px" class="input" type="file" id="product Link" >
          </div>

          <div>
            <label for="status">Status</label>
            <select name="status" class="input">
              <option value="Draft">Draft</option>
              <option value="Publish">Publish</option>
            </select>
          </div>

        </div>
        <div> 

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