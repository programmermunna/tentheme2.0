<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">
        <form class="grid grid-cols-2 gap-y-8 gap-x-12">
          <div class="col-span-2">
            <h2 class="text-xl font-semibold text-cyan-800">Edit Pack</h2>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Pack Name">Pack Name</label>
            <input class="input" type="text" id="Pack Name" placeholder="Pack Name" required>
          </div>


          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Coins Per Visit">Coins Per Visit</label>
            <input class="input" type="text" id="Coins Per Visit" placeholder="20" required>
          </div>

          <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-1">
            <label for="Time">Time</label>
            <input class="input" type="text" id="Time" placeholder="20" required>
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