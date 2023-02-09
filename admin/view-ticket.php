<?php include("common/header-sidebar.php")?>
<?php
if(isset($_GET['ticket_id'])){
  $ticket_id = $_GET['ticket_id'];
  $ticket = _fetch("tickets","ticket_id=$ticket_id limit 1");
  $uid = $ticket['uid'];
}

?>
      <div class="x_container space-y-10 py-10">
      <div>
        <div class="chat_area">
          <div class="chatting">         
           
        </div>        
      </div>

        <form action="" method="POST" enctype="multipart/form-data">       
          <div style="padding-bottom:33px">
            <textarea name="description" class="input summernote" type="text" id="message" placeholder="Description"
              required></textarea>
          </div>

          <br>
          <div class="col-span-2 flex justify-start">
            <div class="w-fit">
              <button name="submit" id="submit" type="submit" class="button">Send</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </main>

  <script>
  $(document).ready(function(){
    function loads(){
        $.ajax({
            url:"config/ajax.php",
            type:"POST",
            data:
            {
              chat_load_admin:0,
              ticket_id: <?php echo $ticket_id;?>,
              uid:<?php echo $id;?>
            },
            success:function(data){
                $(".chatting").html(data);
            }
        });
    }
    loads();
    
    $("#submit").on("click",function(e){
      e.preventDefault();
      $.ajax({
          url:"config/ajax.php",
          type:"POST",
          data:
          {
            chat_insert_admin:1,            
            ticket_id : <?php echo $ticket_id;?>,
            uid:<?php echo $uid;?>,
            pid:<?php echo $id;?>,
            msg:$("#message").val(),        
          },
          success:function(data){
            loads();
            }
          });
      })

  })
</script>


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