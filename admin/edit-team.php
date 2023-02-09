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
    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
    $whatsapp = $_POST['whatsapp'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $mail = $_POST['mail'];
    $summery = $_POST['summery'];
    $content = $_POST['content'];
    $status = $_POST['status'];

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp,"upload/$file_name");
    if(empty($file_name)){
      $update = _update("team","name='$name', qualification='$qualification', facebook='$facebook', linkedin='$linkedin', mail='$mail', summery='$summery', content='$content', status='$status'","id=$id");
    }else{
      $update = _update("team","name='$name', qualification='$qualification', facebook='$facebook', linkedin='$linkedin', mail='$mail', summery='$summery', content='$content', file='$file_name', status='$status'","id=$id");
    }
    if($update){
      $msg = "Successfully Updated";
      header("Location:all-team.php?msg=$msg");
    }else{
      $err = "Something is error.";
    }
}
echo $err;
?>
      <div class="x_container space-y-10 py-10">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Add Team</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="name">Name</label>
            <input name="name" class="input" type="text" id="Title" placeholder="Full Name" required value="<?php echo $data['name']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="qualification">Qualification</label>
            <input name="qualification" class="input" type="text" id="Title" placeholder="Qualification" required value="<?php echo $data['qualification']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="whatsapp">WhatsApp</label>
            <input name="whatsapp" class="input" type="number" id="Title" placeholder="Whatsapp Number" value="<?php echo $data['whatsapp']?>">
          </div>
          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="facebook">Facebook</label>
            <input name="facebook" class="input" type="url" id="Title" placeholder="Facebook Profile or Page Link" value="<?php echo $data['facebook']?>">
          </div>
          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="linkedin">Linkedin</label>
            <input name="linkedin" class="input" type="url" id="Title" placeholder="Linkedin Profile" value="<?php echo $data['linkedin']?>">
          </div>
          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="mail">Mail</label>
            <input name="mail" class="input" type="text" id="Title" placeholder="Mail" value="<?php echo $data['mail']?>">
          </div>


          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="summery">Summery</label>
            <textarea name="summery" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Mini Content"
              required><?php echo $data['summery']?></textarea>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="content">Content</label>
            <textarea name="content" class="input p-3 min-h-[100px] summernote" type="text" id="summernote" placeholder="Content"
              required><?php echo $data['content']?></textarea>
          </div>
          
          <div>
            <label for="file">Photo</label>
            <input name="file" style="padding-top:10px" class="input" type="file" >
          </div>

          <div>
            <label for="status">Status</label>
            <select name="status" class="input">
              <option value="Unpublished">Unpublished</option>
              <option value="Published">Publish</option>
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