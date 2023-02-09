<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">
        <form class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Edit Bank</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Bank Name">Bank Name</label>
            <input class="input" type="text" id="Bank Name" placeholder="Bank Name" required>
          </div>


          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Currency Symble">Currency Symble</label>
            <input class="input" type="text" id="Currency Symble" placeholder="Currency Symble" required>
          </div>


          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Bank Info">Bank Info</label>
            <input class="input" type="text" id="Bank Info" placeholder="Bank Info" required>
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