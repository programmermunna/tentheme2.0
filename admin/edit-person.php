<?php include("common/header-sidebar.php")?>
<?php

if(isset($_GET['src'])){
  $src = $_GET['src'];
  $id = $_GET['id'];
  $table = $_GET['table'];
}

  $data = _fetch("$table","id=$id");

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $balance = $_POST['balance'];
    $role = $_POST['role'];

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp,"upload/$file_name");
    if(empty($file_name)){
      $insert = _update("$table","name='$name',phone='$phone',email='$email',address='$address',balance='$balance',role='$role'","id=$id");
    }else{
      $insert = _update("$table","name='$name',phone='$phone',email='$email',address='$address',balance='$balance',role='$role',file_name='$file_name'","id=$id");
    }

    if($insert){
      $msg = "Successfully Updated";
      header("location:$src.php?msg=$msg");
    }
  }



?>
      <div class="x_container space-y-10 py-10">
        <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Edit User Info</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Username">Username</label>
            <input name="name" class="input" type="text" id="Username" placeholder="Username" required value="<?php echo $data['name']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="phone">Phone</label>
            <input name="phone" class="input" type="number" id="phone" placeholder="phone" required value="<?php echo $data['phone']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Email">Email</label>
            <input name="email" class="input" type="email" id="Email" placeholder="Email" required value="<?php echo $data['email']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="address">Address</label>
            <input name="address" class="input" type="address" id="address" placeholder="address" required value="<?php echo $data['address']?>">
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="balance">Balance</label>
            <input name="balance" class="input" type="number" id="balance" placeholder="Balance" required value="<?php echo $data['balance']?>">
          </div>

          
          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="file">Image</label>
            <input style="padding-top:10px;" name="file" class="input" type="file" id="address" placeholder="Image">
          </div>


          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="role">User Type</label>
            <select class="select" name="role" id="role">
              <option style="display:none;" selected value="<?php echo $data['role']?>"><?php echo $data['role']?></option>
              <option value="User">User</option>
              <option value="Moderator">Moderator</option>
              <option value="Admin">Admin</option>
            </select>
          </div>

          <div class="col-span-2 flex justify-start">
            <div class="w-fit">
              <button type="submit" name="submit" class="button">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>