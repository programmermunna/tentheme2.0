<?php include("functions.php");
if(isset($_POST['chat_load']) && isset($_POST['uid']) && isset($_POST['ticket_id']) ){ 
          $ticket_id = $_POST['ticket_id']; 
          $uid = $_POST['uid']; 
          $tickets = _get("tickets","uid=$uid AND ticket_id=$ticket_id");
          while($data = mysqli_fetch_assoc($tickets)){
            $person = $data['pid'];
            $person = _fetch("person","id=$person");            
          ?> 
          <?php if($data['pid'] !=$uid){ ?>
            <div class="person">
          <?php  }else{ ?>
            <div class="person user_chat">
          <?php  }?>
                <div class="img">
                    <img src="admin/upload/<?php echo $person['file_name']?>" alt="">
                    <p><?php echo $person['role'];?></p>
                </div>
                <div class="message">
                    <div class="content">
                      <?php echo $data['message']?>
                    </div>
                    <p><?php $data =  $data['time']; echo date("d-M-y h:i")?></p>
                </div>
            </div>            
          <?php };?>
          
<?php exit; }



if(isset($_POST['chat_insert']) && isset($_POST['ticket_id']) && isset($_POST['uid']) && isset($_POST['msg'])){ 
          $ticket_id = $_POST['ticket_id'];
          $uid = $_POST['uid'];
          $message = $_POST['msg'];

          $insert = _insert("tickets","ticket_id,uid,pid,message,time","$ticket_id,$uid,$uid,'$message',$time");
          if($insert){
            echo $msg = "Message Sent";
          }else{
            echo $msg = "Message Not Sent";
          }
      exit;    
 }





 if(isset($_POST['chat_load_admin']) && isset($_POST['uid']) && isset($_POST['ticket_id']) ){ 
  $ticket_id = $_POST['ticket_id']; 
  $uid = $_POST['uid']; 
  $tickets = _get("tickets","ticket_id=$ticket_id");
  while($data = mysqli_fetch_assoc($tickets)){
    $person = $data['pid'];
    $person = _fetch("person","id=$person");            
  ?> 
  <?php if($data['pid'] !=$uid){ ?>
    <div class="person">
  <?php  }else{ ?>
    <div class="person user_chat">
  <?php  }?>
        <div class="img">
            <img src="upload/<?php echo $person['file_name']?>" alt="">
            <p><?php echo $person['name'];?></p>
        </div>
        <div class="message">
            <div class="content">
              <?php echo $data['message']?>
            </div>
            <p><?php $data =  $data['time']; echo date("d-M-y h:i")?></p>
        </div>
    </div>            
  <?php };?>
  
<?php exit; }



if(isset($_POST['chat_insert_admin']) && isset($_POST['ticket_id']) && isset($_POST['uid']) && isset($_POST['pid']) && isset($_POST['msg'])){ 
  $ticket_id = $_POST['ticket_id'];
  $uid = $_POST['uid'];
  $pid = $_POST['pid'];
  $message = $_POST['msg'];

  $insert = _insert("tickets","ticket_id,uid,pid,message,time","$ticket_id,$uid,$pid,'$message',$time");
  $update = _update("tickets","status='Open'","ticket_id=$ticket_id");
  if($insert){
    echo $msg = "Message Sent";
  }else{
    echo $msg = "Message Not Sent";
  }
exit;    
}

if(isset($_POST['f3_load'])){ 
  
    $type=$_POST['f3_load'];
      $footer_3_4_5 =_get("footer_3_4_5","type='$type' AND status ='Publish'");
      while($data = mysqli_fetch_assoc($footer_3_4_5)){
      ?>
        <tr class="hover:bg-gray-100 f3_load">
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"><?php echo $data['title']?></td>
          <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"><?php echo $data['url']?></td>
          <?php 
          if($data['status']=='Published'){ ?>
          <td class="p-4 text-sm font-bold text-green-500 whitespace-nowrap lg:p-5"><?php echo $data['status']?></td>
          <?php }else{ ?>
          <td class="p-4 text-sm font-bold text-red-500 whitespace-nowrap lg:p-5"><?php echo $data['status']?></td>
          <?php }?>
          <td class="text-center p-4 space-x-2 whitespace-nowrap lg:p-5">
            <a href="edit-team.php?src=footer-settings&&table=footer_3_4_5&&id=<?php echo $data['id']?>" class="popup_show btn bg-red-500 w-fit text-white" style="background:#4ade80;">Edit</a>
            <a href="delete.php?src=footer-settings&&table=footer_3_4_5&&id=<?php echo $data['id']?>" class="popup_show btn bg-red-500 w-fit text-white">Delete</a>
          </td>
        </tr>
        <?php }?> 
  
<?php exit; }















 ?>