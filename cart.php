<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<?php 

if($id<1){
  $err = "Please Login First";
  header("location:index.php?err=$err");
  exit;
}


if(isset($_GET['cart'])){
  $cart_id = $_GET['cart'];  
    if($cart_id == "All"){
      $delete = _delete("cart","pid=$id AND status=0 ");
    }else{
      $delete = _delete("cart","pid=$id AND status=0  AND id=$cart_id");
    }
  
    if($delete){
      $msg = "Item Deleted Successful";
      header("location:cart.php?msg=$msg");
    }else{
      echo "somethings error;";
    }
  }
?>
    <!-- Sub Header -->
    <div class="container space-y-6 py-24">

      <!-- Item Title -->
      <h3 class="text-4xl font-medium tracking-wide">Shopping Cart</h3>

      <!-- Page Tree Links -->
      <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
          <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
          class="text-white px-4 py-1.5 rounded shadow-sm" href="cart.php"> Cart
        </a>

      </div>

    </div>
  </header>

  <div class="bg-gray-50 w-full py-12">
    <div class="container flex items-start justify-between gap-x-8">
      <div class="w-full">

          <div class="bg-gray-200 p-4 rounded-t flex justify-between">
            <a href="index.php" class="px-4 py-2 ">Products</a>
            <a href="?cart=All"  class="px-4 py-2 rounded bg-red-400 text-white">Empty Cart</a>
          </div>
          <!-- Cart Items -->
          <div class="border">
            <?php
            if(isset($_SESSION['cart'])){
              $my_cart = $_SESSION['cart'];
            if($id<1){              
              $total_price = 0;
              for($i=0;$i<count($my_cart);$i++){
                $product_id = $my_cart[$i];
                $product = _fetch("products","id=$product_id");
                $total_price += $product['sell_price'];
              ?>

            <div class="flex items-center justify-between gap-x-8 px-5 py-10 border-t relative">
              <a href="?cart=<?php echo $my_cart[$i];?>" class="text-gray-500 absolute w-fit h-fit top-2 right-2 text-xl">
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
            
            <?php }}}else{
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
            <?php }}?>
          </div>       

      </div>
      <div class="min-w-[350px] w-[350px]">
        <div class="bg-white p-7 rounded border space-y-5">
          <h4 class="text-xl text-center font-normal">Your Cart Total</h4>
          <h2 class="text-3xl font-bold text-center text-gray-800">BDT <?php echo $total_price;?></h2>
          <a href="checkout.php" id="checkout_btn"
            class="bg-green-600 hover:bg-green-700 text-white py-3 w-full px-2 rounded shadow text-base focus:ring block text-center">Secure
            Checkout</a>
          <p class="text-center text-gray-600">Price displayed excludes any applicable</p>
        </div>

        <div class="py-5 text-center flex items-center gap-x-2 justify-center text-gray-500">
          <i class="fa-solid fa-lock"></i>
          <p>Secure checkout</p>
        </div>
      </div>

    </div>
  </div>


  
<!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->
<?php if (isset($_GET['msg'])) { ?><div id="munna" data-text="<?php echo $_GET['msg']; ?>"></div><?php } ?>