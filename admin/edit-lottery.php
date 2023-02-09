<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">
        <form class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Edit Lottery</h2>
          </div>

          <div class="col-span-2 lg:col-span-1col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="UserUser">Price</label>
            <select class="select" name="" id="UserUser" required>
              <option value="First">First</option>
              <option value="Second">Second</option>
              <option value="Third">Third</option>
            </select>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Price Name">Price Name</label>
            <input class="input" type="text" id="Price Name" placeholder="Price Name" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Price Value">Price Value</label>
            <input class="input" type="text" id="Price Value" placeholder="Price Value" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Select Image">Select Image</label>
            <input class="input py-2" type="file" id="Select Image" placeholder="Select Image" required>
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