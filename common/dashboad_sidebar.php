    <div class="w-full lg:min-w-[350px] lg:w-[350px] bg-white p-5 rounded-sm shadow">
          <div class="sidebar_item overflow-hidden">
            <div class="box">
              <div class="name"><?php echo $person['name']?></div>
              <hr>
              <div class="balance">
                <img src="admin/upload/<?php echo $person['file_name']?>">
                <div>
                  <p><b><?php echo $person['balance']?> ৳</b></p>
                  <a href="deposit.php">Deposit Now</a>
                </div>
              </div>
            </div>
            <button class="ds_title text-base font-normal w-full flex justify-between pb-1.5" data-ref="my-dashboard">
              <span class="block text-base font-2">GENERAL</span>
              <span class="text-xs opacity-50 transition-all">
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <ul class="ds_div transition-all" data-ref="my-dashboard">
              <li>
                <a href="dashboard.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-gauge"></i>
                  </span>
                  <span>DASHBOARD</span>
                </a>
              </li>

              <li>
                <a href="download.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-file-arrow-down"></i>
                  </span>
                  <span>Download</span>
                </a>
              </li>

              <li>
                <a href="my-services.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-person-military-pointing"></i>
                  </span>
                  <span>My Services</span>
                </a>
              </li>


              <li>
                <a href="reseller.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-person-military-pointing"></i>
                  </span>
                  <span>Re Seller</span>
                </a>
              </li>


              <li>
                <a href="tickets.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-ticket"></i>
                  </span>
                  <span>SUPPORT TICKETS</span>
                </a>
              </li>


              <li>
                <a href="deposits.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-ticket"></i>
                  </span>
                  <span>Deposits</span>
                </a>
              </li>

              <li>
                <a href="withdraw.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs"><i class="fa-solid fa-money-bill-transfer"></i>
                  </span>
                  <span>Withdraw</span>
                </a>
              </li>

            </ul>
          </div>

          <hr class="my-2" />
          <div class="sidebar_item overflow-hidden">
            <button class="ds_title text-base font-normal w-full flex items-center justify-between pb-1.5 pt-4"
              data-ref="setting">
              <span class="tracking-wider block font-2">SETTING</span>
              <span class="text-xs opacity-50 transition-all">
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <ul class="ds_div transition-all" data-ref="setting">
              <li>
                <a href="profile.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-user"></i>
                  </span>
                  <span>Profile</span>
                </a>
              </li>

              <li>
                <a href="security.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-shield"></i>
                  </span>
                  <span>Security</span>
                </a>
              </li>

              <li>
                <a href="verification.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-user-check"></i>
                  </span>
                  <span>Verification</span>
                </a>
              </li>
            </ul>
          </div>

          <hr class="my-2" />
          <div class="sidebar_item overflow-hidden">
            <button class="ds_title text-base font-normal w-full flex justify-between pb-1.5 pt-4" data-ref="account">
              <span class="tracking-wider block font-2">ACCOUNT</span>
              <span class="text-xs opacity-50 transition-all">
                <i class="fa-solid fa-chevron-down"></i>
              </span>
            </button>
            <ul class="ds_div transition-all" data-ref="account">
              <li>
                <a href="activities.php"
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-chart-line"></i>
                  </span>
                  <span>Activity Log</span>
                </a>
              </li>
              <li>
                <button
                  class="text-sm flex items-center justify-start w-full gap-2 text-[#2a3744] hover:bg-[#2a3744] hover:text-white rounded-sm p-2 uppercase">
                  <span class="text-xs">
                    <i class="fa-solid fa-delete-left"></i>
                  </span>
                  <span>Delete Account</span>
                </button>
              </li>
            </ul>
          </div>
        </div>