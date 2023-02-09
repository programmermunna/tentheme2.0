<?php include("common/header-sidebar.php")?>

<?php

if(isset($_GET['src'])){
  $src = $_GET['src'];
  $id = $_GET['id'];
  $table = $_GET['table'];
}

$data = _fetch("slider","id=$id");


$err = "";
if(isset($_POST['submit'])){
  $pg_name = $_POST['pg_name'];
  $title = $_POST['title'];
  $btn1 = $_POST['button1'];
  $btn2 = $_POST['button2'];
  $link1 = $_POST['link1'];
  $link2 = $_POST['link2'];


  $file_name = $_FILES['file']['name'];
  $file_tmp = $_FILES['file']['tmp_name'];
  move_uploaded_file($file_tmp,"upload/$file_name");

  if(empty($file_name)){
    $update = _update("$table","pg_name = '$pg_name', title = '$title', btn1 = '$btn1', btn2 = '$btn2', link1 = '$link1', link2 = '$link2'","id=$id");
  }else{
    $update = _update("$table","pg_name = '$pg_name', title = '$title', btn1 = '$btn1', btn2 = '$btn2', link1 = '$link1', link2 = '$link2', file_name = '$file_name'","id=$id");
  }

    if($update){
      $msg = "Update Successfully";
      header("Location:$src.php?msg=$msg");
    }else{
      $err = "Something is error.";
    }

}

?>
      <div class="x_container space-y-10 py-10">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Add Items</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="pg_name">Title</label>
            <select name="pg_name" class="input">
              <?php if($data['pg_name']=='index'){?>
              <option selected value="index">Home Page</option>
              <option value="services">Services Page</option>
              <?php }else{?>
              <option value="index">Home Page</option>
              <option selected value="services">Services Page</option>
              <?php }?>
            </select>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="title">Titile</label>
            <input name="title" class="input" type="text" id="title" placeholder="Titile"  value="<?php echo $data['title']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="button1">Button 1</label>
            <input name="button1" class="input" type="text" id="button1" placeholder="Button1" value="<?php echo $data['btn1']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="link1">Link 1</label>
            <input name="link1" class="input" type="url" id="link1" placeholder="Link1" value="<?php echo $data['link1']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="button2">Button 2</label>
            <input name="button2" class="input" type="text" id="button2" placeholder="Button2" value="<?php echo $data['btn2']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="link2">Link 2</label>
            <input name="link2" class="input" type="url" id="link2" placeholder="Link2" value="<?php echo $data['link2']?>">
          </div>
          
        </div>

        <br>

        <div>       

          <label for="file">Upload Some Screenshot</label>
          <div style="width:100%;display:flex;gap:30px">
            <input name="file" style="width:100%;padding-top:10px" class="input" type="file">
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
  <script src="js/app.js"></script>
</body>

</html>