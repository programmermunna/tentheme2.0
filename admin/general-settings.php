<?php include("common/header-sidebar.php")?>
      
        <?php
        $data = _fetch("website","id=1");
        if(isset($_POST['submit'])){
            $product_check = $_POST['product_check'];
            $service_check = $_POST['service_check'];

            $update = _update("website","title='$title',logo='$logo',description='$description',keyword='$keyword',url='$url',phone='$phone',mail='$mail',address='$address',footer_text='$footer_text',facebook='$facebook',youtube='$youtube',linkedin='$linkedin'","id=1");

            if($update){
              $msg = "Update Successfully";
              header("location:settings.php?msg=$msg");
            }else{
              echo $err = "Something is wrong";
            }
        }
        
        
        
        
        ?>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
          <form action="" method="POST">

          <div><b>Header Settings</b></div>
          <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible Your <span style="color:green">Header Social Link </span></b></h3>
                  <label>
                  <input name="service_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>
            <br>
            
          <div><b>Products Settings</b></div>
            <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible Your Riveiw System For <span style="color:green">Product</span></b></h3>
                  <label>
                  <input name="product_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>

                
            <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible <span style="color:green">Product Share Link </span></b></h3>
                  <label>
                  <input name="service_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>

                   
            <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible <span style="color:green">Related Product</span> IN The Single Product</b></h3>
                  <label>
                  <input name="service_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>
            <br>
              
          <div><b>Services Settings</b></div>
            <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible Your Riveiw System For <span style="color:green">Service</span></b></h3>
                  <label>
                  <input name="service_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>
                
            <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible <span style="color:green">Service Share Link </span></b></h3>
                  <label>
                  <input name="service_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>          
                
            <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible <span style="color:green">Related Service</span> IN The Single Service</b></h3>
                  <label>
                  <input name="service_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>
            <br>
            
          <div><b>Ads Settings</b></div>
          <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible <span style="color:green">Ads In Website </span></b></h3>
                  <label>
                  <input name="service_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>
            <br>
            
          <div><b>Team Social Links</b></div>
          <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible <span style="color:green">Social Icons</span></b></h3>
                  <label>
                  <input name="service_check" type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>
         
        
            
            <br>
            <br>
            <div class="col-span-2 flex justify-start">
              <div class="w-fit">
                <button type="submit" name="submit" class="button">Save</button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>