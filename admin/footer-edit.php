<?php include("common/header-sidebar.php")?>
<?php
if(isset($_GET['f_id'])){
  $f_id = $_GET['f_id'];
  $data = _fetch("footer_3_4_5","id='$f_id'");
}else{
  header("location:footer-settings.php?err=Plase Select Item");
}

if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $url = $_POST['url'];
  $status = $_POST['status'];
  $h_id = $_POST['h_id'];
  $update = _update("footer_3_4_5","title='$title',url='$url',status='$status'","id='$h_id'");
  if($update){
    $msg = "Update Successfully";
    header("location:footer-settings.php?msg=$msg");
  }
}



?>
      <form action="" method="POST">
          <div style="display:flex;justify-content:space-between;gap:20px;padding:50px 100px">              
              <input id="f3_title" name="title" type="text" class="input" placeholder="Enter Title" value="<?php echo $data['title']?>">
              <input id="f3_url"  name ="url" type="text" class="input" placeholder="Enter URL" value="<?php echo $data['url']?>">
              <select name="status" class="input" id="">                
                <?php if($data['status'] == 'Publish'){ ?>
                  <option selected value="Publish">Publish</option>
                  <option value="Unpublish">Unpublish</option>
              <?php  }else{ ?>
                <option value="Publish">Publish</option>
                <option selected value="Unpublish">Unpublish</option>
             <?php }?>
              </select>
              <input type="hidden" name="h_id" class="input" value="<?php echo $data['id']?>">
              <button id="f3_btn" type="submit" name="submit" class="btn" style="background:#2563EB;color:#fff">Update Now</button>
        </div>
      </form>


      </div>
    </div>
  </main>
  <script src="js/app.js"></script>
</body>

</html>