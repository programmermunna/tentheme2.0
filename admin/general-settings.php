<?php include("common/header-sidebar.php")?>
      
        <?php        
        
        if(isset($_POST['submit'])){
          if(isset($_POST['header_social_link'])){$header_social_link = "checked";}else{$header_social_link = "unchecked";}
          if(isset($_POST['review_product'])){$review_product = "checked";}else{$review_product = "unchecked";}
          if(isset($_POST['share_product'])){$share_product = "checked";}else{$share_product = "unchecked";}
          if(isset($_POST['related_product'])){$related_product = "checked";}else{$related_product = "unchecked";}
          if(isset($_POST['review_service'])){$review_service = "checked";}else{$review_service = "unchecked";}
          if(isset($_POST['share_service'])){$share_service = "checked";}else{$share_service = "unchecked";}
          if(isset($_POST['related_service'])){$related_service = "checked";}else{$related_service = "unchecked";}
          if(isset($_POST['ad_show'])){$ad_show = "checked";}else{$ad_show = "unchecked";}
          if(isset($_POST['team_social'])){$team_social = "checked";}else{$team_social = "unchecked";}
          
          $update = _update("general_setting","header_social_link='$header_social_link',review_product='$review_product',share_product='$share_product',related_product='$related_product',review_service='$review_service',share_service='$share_service',related_service='$related_service',ad_show='$ad_show',team_social='$team_social'","id=1");

          if($update){
            $msg=" Seved Successfully";
            header("location:general-settings.php?msg=$msg");
          }else{
            echo $err = "erorr";
          }
        }
        
        $general_setting = _fetch("general_setting","id=1");
        ?>
        <div class="w-full space-y-10 p-6 lg:p-12 bg-white border border-gray-200 rounded">
          <form action="" method="POST">
            
          <div><b>Header Settings</b></div>
          <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible Your <span style="color:green">Header Social Link </span></b></h3>
                  <label>
                  <input name="header_social_link" <?php if(isset($general_setting['header_social_link'])){echo $general_setting['header_social_link'];}?> type="checkbox">
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
                  <input name="review_product" <?php if(isset($general_setting['review_product'])){echo $general_setting['review_product'];}?> type="checkbox">
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
                  <input name="share_product" <?php if(isset($general_setting['share_product'])){echo $general_setting['share_product'];}?> type="checkbox">
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
                  <input name="related_product" <?php if(isset($general_setting['related_product'])){echo $general_setting['related_product'];}?> type="checkbox">
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
                  <input name="review_service" <?php if(isset($general_setting['review_service'])){echo $general_setting['review_service'];}?> type="checkbox">
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
                  <input name="share_service" <?php if(isset($general_setting['share_service'])){echo $general_setting['share_service'];}?> type="checkbox">
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
                  <input name="related_service" <?php if(isset($general_setting['related_service'])){echo $general_setting['related_service'];}?> type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>
            <br>


          <div><b>Ad Settings</b></div>
            <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible <span style="color:green">Ads In Website </span></b></h3>
                  <label>
                  <input name="ad_show" <?php if(isset($general_setting['ad_show'])){echo $general_setting['ad_show'];}?> type="checkbox">
                  <span class="toggle_background">
                    <div class="circle-icon"></div>
                    <div class="vertical_line"></div>
                  </span>
                </label>
                </li>
              </ul>      
            </div>
            <br>

          <div><b>Team Social Setting</b></div>
            <div class="general_setting">
              <ul>
                <li>
                  <h3><b>Visible or Invisible <span style="color:green">Social Icons</span></b></h3>
                  <label>
                  <input name="team_social" <?php if(isset($general_setting['team_social'])){echo $general_setting['team_social'];}?> type="checkbox">
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