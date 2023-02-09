<?php include("common/header-sidebar.php")?>

<?php 
if(isset($_GET['src'])){
  $src = $_GET['src'];
  $id = $_GET['id'];
  $table = $_GET['table'];
}

  $data = _fetch("$table","id=$id");


$err = "";
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $link = $_POST['link'];
    $regular_price = $_POST['regular_price'];
    $sell_price = $_POST['sell_price'];
    $category = $_POST['category'];
    $mini_content = $_POST['mini_content'];
    $content = $_POST['content'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $pid = $person['id'];
  
    $update = _update("$table","pid='$pid',title='$title',link='$link',regular_price='$regular_price',sell_price='$sell_price',category='$category',mini_content='$mini_content',content='$content',description='$description',status='$status'","id=$id");
    if($update){
      $msg = "Successfully Updated";
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
            <h2 class="text-xl font-semibold text-cyan-800">EDIT <?php echo strtoupper($table) ?></h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="title">Title</label>
            <input name="title" class="input" type="text" id="Title" placeholder="Title" required value="<?php echo $data['title']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="link">Link</label>
            <input name="link" class="input" type="url" id="Link" placeholder="Link" required value="<?php echo $data['link']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="regular_price Coin">Regular Price</label>
            <input name="regular_price" class="input" type="number"  placeholder="Regular Price" value="<?php echo $data['regular_price']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="sell_price">Sell Price</label>
            <input name="sell_price" class="input" type="number" id="Visitor" placeholder="Sell Price" required value="<?php echo $data['sell_price']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="mini_content">Mini Content</label>
            <textarea name="mini_content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Mini Content"
              required><?php echo $data['mini_content']?></textarea>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="content">Content</label>
            <textarea name="content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Content"
              required><?php echo $data['content']?></textarea>
          </div>
        </div>
        <br>
        <div>          
          <div style="padding-bottom:33px">
            <label for="description">Description</label>
            <textarea name="description" class="input summernote" type="text" id="summernote" placeholder="Description"
              required><?php echo $data['description']?></textarea>
          </div>
       
          <div style="padding-bottom:33px">
            <label for="category">Category</label>
            <select name="category" class="input">              
              <option style="display:none" selected value="<?php echo $data['category']?>"><?php echo $data['category']?></option>
              <?php $category_all = _getAll("category");
              while($ctg = mysqli_fetch_assoc($category_all)){ ?>
              <option value="<?php echo $ctg['category']?>"><?php echo $ctg['category']?></option>
              <?php }?>
            </select>
          </div>

          <div>
            <label for="status">Status</label>
            <select name="status" class="input">
              <?php if($data['status']== 'Pending'){ ?>
                <option selected value="Pending">Pending</option>
                <option value="Publish">Publish</option>
               <?php }else{ ?>
                <option value="Pending">Pending</option>
                <option selected value="Publish">Publish</option>
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