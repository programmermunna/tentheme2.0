<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<?php
if(isset($_GET['ticket_id'])){
  $ticket_id = $_GET['ticket_id'];
  $ticket = _fetch("tickets","ticket_id=$ticket_id limit 1");
}

?>
    <!-- Sub Header -->
    <div class="container space-y-6 pt-6 pb-12 lg:py-24">
      <!-- Page Name Title -->
      <h3 class="text-4xl font-medium tracking-wide">
        Ticket
      </h3>
      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">
        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>
        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>
        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="ticket.php"> ticket
        </a>
      </div>
    </div>
  </header>

  <main style="min-height: calc(100vh - 80px)">
    <div class="flex items-start py-6">
      <div class="container flex flex-col lg:flex-row gap-y-5 lg:gap-y-0 lg:gap-x-5">

        <!-- Dashboard Sidebar -->
        <?php include("common/dashboad_sidebar.php");?>
        <!-- Dashboard Sidebar -->

        <!-- Body Content -->
        <div class="w-full bg-white shadow rounded-sm">

          <div class="px-5 py-4 text-blue-600 border-b flex justify-between items-center">
            <span class="text-2xl font-medium tracking-wide"><?php echo $ticket['subject']?></span>
          </div>

         
          <div class="chat_area col-12 p-5">
          <div class="chatting">
            
          </div>
          </div>  


          <form id="chat_user_form" class="grid grid-cols-12 gap-y-6 p-5" action="" method="POST" enctype="multipart/form-data">
            <div class="col-span-12">
              <textarea name="textarea" required="" type="text" placeholder="Message..."
                class="w-full min-h-[100px] p-3 flex items-center rounded bg-white outline-none ring-2 ring-gray-200 disabled:bg-gray-200 disabled:cursor-not-allowed focus:ring-blue-600 text-gray-800 px-4 summernote messages"
                value="" id="message"></textarea>
            </div>

            <div class="col-span-12">
              <div class="w-fit">
                <button type="submit" name="submit" id="submit"
                  class="flex items-center justify-center px-4 gap-x-4 bg-blue-600 text-white focus:ring rounded w-full h-11 tracking-wider font-medium text-base">
                  Send
                </button>
              </div>
            </div>
          </form>

        </div>

      </div>
    </div>
  </main>


<script>
  $(document).ready(function(){
    function load(){
        $.ajax({
            url:"admin/config/ajax.php",
            type:"POST",
            data:
            {
              chat_load:1,
              ticket_id: <?php echo $ticket_id;?>,
              uid:<?php echo $id;?>
            },
            success:function(data){
                $(".chatting").html(data);
            }
        });
    }
    load();
    
    $("#submit").on("click",function(e){
      e.preventDefault();
      $.ajax({
          url:"admin/config/ajax.php",
          type:"POST",
          data:
          {
            chat_insert:1,            
            ticket_id : <?php echo $ticket_id;?>,
            uid:<?php echo $id;?>,
            msg:$("#message").val(),        
          },         
          success:function(data){
            load();
            }
          });
      })

  })
</script>







































  
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

<!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->