<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<?php 
if($id<1){
  $err = "Please Login First";
  header("location:index.php?err=$err");
  exit;
}
?>
    <!-- Sub Header -->
    <div class="container space-y-6 py-24">

      <!-- Item Title -->
      <h3 class="text-4xl font-medium tracking-wide">Checkout</h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>
        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="checkout.php"> checkout
        </a>
      </div>

    </div>
  </header>

  <div class="bg-gray-50 w-full py-12">
    <div class="container flex items-start flex-col lg:flex-row justify-between gap-8">

      <div class="w-full space-y-6">
        <div class="p-5 bg-white rounded shadow space-y-6">
          <h2 class="text-2xl font-medium tracking-wide">Billing details</h2>

          <div class="w-full">
          <?php
            $cart = _get("cart","pid=$id AND type='product' AND status=0");
            $total_price = 0;
            while($data = mysqli_fetch_assoc($cart)){
              $cart_id = $data['cart_id'];
              $product = _fetch("products","id=$cart_id");
              $total_price += $product['sell_price'];            
            ?>
            <div class="flex items-center justify-between gap-x-8 px-5 py-10 border-t relative">
              <a href="?cart=<?php echo $data['id'];?>" class="text-gray-500 absolute w-fit h-fit top-2 right-2 text-xl">
                <i class="fa-solid fa-times"></i>
              </a>
              <a target="_blank" href="item.php?product_id=<?php echo $product['id'];?>"><img style="width:150px;border-radius:5px" src="admin/upload/<?php echo $product['file_name1'];?>" alt=""></a>
              <div class="space-y-2">
                <a target="_blank" href="item.php?product_id=<?php echo $product['id'];?>" class="text-xl tracking-wide font-semibold text-blue-500">
                  <?php echo $product['title'];?>
                </a>
                <div class="flex gap-x-6 text-gray-600">
                  <p>
                    <b>License:</b>
                    <span> Regular License </span>
                  </p>
                  <p>
                    <b>Support:</b>
                    <span> 6 months support </span>
                  </p>
                </div>
              </div>

              <h3 class="flex items-start gap-x-0.5">
                <span>৳</span>
                <span class="text-4xl font-semibold"><?php echo $product['sell_price'];?></span>
              </h3>
            </div>
            <?php }?>
          </div>

        </div>
      </div>

      <div class="w-full lg:min-w-[450px] lg:w-[450px]">
        <div class="border p-5">
          <h2 class="text-2xl text-center font-semibold text-gray-700 pb-4 border-b">Your Balance: <b style="color:#000;">৳<?php echo $person['balance']?></b></h2>
          <div class="py-5 space-y-4">

            <?php
            $cart = _get("cart","pid=$id AND type='product' AND status=0");
            $total_price = 0;
            while($data = mysqli_fetch_assoc($cart)){
              $cart_id = $data['cart_id'];
              $product = _fetch("products","id=$cart_id");
              $total_price += $product['sell_price'];
            ?>
            <div class="text-lg font-medium tracking-wide text-gray-500 justify-between flex items-center">
              <span class="w-8/12 truncate overflow-hidden"><?php echo $product['title'];?></span>
              <span class="w-fit">৳<?php echo $product['sell_price'];?></span>
            </div>
            <?php }?>

          </div>

          <div class="text-2xl font-semibold text-gray-700 items-center justify-between flex pt-5 border-t">
            <span>Total:</span>
            <span>BDT <?php echo $total_price;?></span>
          </div>

        </div>

        <?php 
        if(isset($_POST['submit'])){
          $total_amount = $_POST['total_amount'];
          $old_balance = $person['balance'];
          if($old_balance>$total_amount){
            $balance = _update("person","balance=balance-$total_amount","id=$id");            
            $carts = _get("cart","status=0","pid=$id");
            while($cart = mysqli_fetch_assoc($carts)){
              $product_id = $cart['cart_id'];
              $update_product = _update("products","sell=sell+1","id=$product_id");
            }
            $update_cart = _update("cart","status=1","pid=$id AND type='product'");
            if($update_cart && $balance){
              $msg = "Congratulations for Purchase.";
              header("location:dashboard.php?msg=$msg");
            }
          }else{
            $err = "Please Deposit First";
            header("location:checkout.php?err=$err");
          }
        }
        ?>
        <form action="" method="POST">
          <input type="hidden" name="total_amount" value="<?php echo $total_price;?>">
          <button type="submit" name="submit" class="w-full py-3 shadow-lg rounded bg-blue-600 text-white focus:ring-2 ring-blue-600 ring-offset-1">Pay Now</button>
        </form>     
        
        
        <div class="py-5 text-center flex items-center gap-x-2 justify-center text-gray-500">
          <i class="fa-solid fa-lock"></i>
          <p>Secure checkout</p>
        </div>
        <div class="p-5 rounded text-white space-y-4"
          style="background: linear-gradient(144deg,#1C004B 0,#020B2D 100%);">
          <h2 class="text-3xl">Need Help?</h2>

          <p>Any confusion about your order? <br> We are here to help.</p>

          <div class="flex justify-between">
            <div class="flex justify-start text-lg flex-col gap-y-0.5 font-medium text-gray-300 cursor-pointer">
              <span class="text-2xl"><i class="fa-solid fa-comments"></i>
              </span>
              <span class="text-white font-bold">Start A Chat</span>
            </div>

            <a href="mailto:support@bs.com"
              class="flex justify-start text-lg flex-col gap-y-0.5 font-medium text-gray-300 cursor-pointer">
              <span class="text-2xl">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <i>support@bs.com</i>
            </a>
          </div>

          <div class="flex gap-2">
            <span>See our</span>
            <a class="underline italic" href="#">Refund Policy</a>
            <span>or</span>
            <a class="underline italic" href="#">FAQs</a>
          </div>

        </div>
      </div>
    </div>
  </div>


<!-- Header area -->
<?php include("common/footer.php");?>
<!-- Header area -->