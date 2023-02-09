<?php include("common/header-sidebar.php")?>

<?php 

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $table = $_GET['table'];
  $src = $_GET['src'];
}

$data = _fetch("$table","id=$id");


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

    if(empty($file_name)){
      $update = _update("$table","pid='$pid',title='$title',category='$category',summery='$summery',content='$content',status='$status',time='$time'","id=$id");
    }else{
      $update = _update("$table","pid='$pid',file_name='$file_name',title='$title',category='$category',summery='$summery',content='$content',status='$status',time='$time'","id=$id");      
    }

    if($update){
      $msg = "Successfully Inserted";
      header("Location:$src.php?msg=$msg");
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
            <input name="title" class="input" type="text" id="Title" placeholder="Title" required value="<?php echo $data['title']?>"> 
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="category">Category</label>
            <select name="category" class="input">
              <option selected value="<?php echo $data['category']?>"><?php echo $data['category']?></option>
              <?php $category_all = _getAll("category");
              while($ctg = mysqli_fetch_assoc($category_all)){ ?>
              <option value="<?php echo $ctg['category']?>"><?php echo $ctg['category']?></option>
              <?php }?>
            </select>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="summery">Summery</label>
            <textarea name="summery" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Mini Content"
              required> <?php echo $data['summery']?></textarea>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="content">Content</label>
            <textarea name="content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Content"
              required> <?php echo $data['content']?></textarea>
          </div>

          <div>
            <label for="status">Status</label>
            <input name="file" style="padding-top:10px" class="input" type="file" id="product Link" >
          </div>

          <div>
            <label for="status">Status</label>
            <select name="status" class="input">
              <?php if($data['status']== 'Draft'){ ?>
                <option selected value="Draft">Draft</option>
                <option value="Publish">Publish</option>
               <?php }else{ ?>
                <option value="Draft">Draft</option>
                <option selected value="Publish">Publish</option>
                <?php } ?>
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