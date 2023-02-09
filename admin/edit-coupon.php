<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">
        <form class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Edit Coupon</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Coupon Code">Coupon Code</label>
            <input class="input" type="text" id="Coupon Code" placeholder="Coupon Code" required>
          </div>
          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Left Time">Left Time</label>
            <input class="input" type="text" id="Left Time" placeholder="Left Time" required>
          </div>
          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Reward Coin">Reward Coin</label>
            <input class="input" type="text" id="Reward Coin" placeholder="Reward Coin" required>
          </div>

          <div class="col-span-2 flex justify-start">
            <div class="w-fit">
              <button class="button">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>
</body>

</html>