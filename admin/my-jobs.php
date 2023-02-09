<?php include("common/header-sidebar.php")?>
      <div class="x_container space-y-10 py-10">
        <div class="p-5 justify-between items-center bg-white rounded-lg shadow-md border border-[
        ] shadow-gray-200 sm:flex">
          <div class="mb-1 w-full">
            <div class="mb-4">
              <nav class="flex mb-5 text-gray-600" aria-label="Breadcrumb">
                <div class="flex items-center space-x-1 md:space-x-2">
                  <div class="inline-flex items-center space-x-3">
                    <a href="./" class="flex items-center space-x-2 -mt-0.5">
                      <small><i class="fa-solid fa-house"></i></small>
                      <span>Home</span></a>
                    <small class="text-xs"><i class="fa-solid fa-chevron-right"></i> </small>
                    <span class="capitalize page_title"></span>
                  </div>
                </div>
              </nav>
              <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl capitalize page_title"></h1>
            </div>
            <div class="block items-center sm:flex md:divide-x md:divide-gray-100">
              <form class="mb-4 sm:pr-3 sm:mb-0" action="#" method="GET"><label for="products-search"
                  class="sr-only">Search</label>
                <div class="relative mt-1 sm:w-64 xl:w-96"><input type="text" name="email" id="products-search"
                    class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                    placeholder="Search..."></div>
              </form>
              <div class="flex items-center w-full sm:justify-end">
                <div class="hidden pl-2 space-x-2 md:flex">
                  <a href="#"
                    class="flex items-center justify-center w-7 h-7 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                    <i class="fa-solid fa-cog"></i></a>
                  <a href="#"
                    class="flex items-center justify-center w-7 h-7 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                    <i class="fa-solid fa-trash-can"></i></a>
                  <a href="#"
                    class="flex items-center justify-center w-7 h-7 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                    <i class="fa-solid fa-circle-exclamation"></i></a>
                  <a href="#"
                    class="flex items-center justify-center w-7 h-7 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                    <i class="fa-solid fa-ellipsis-vertical"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="flex flex-col rounded-lg shadow-md border border-[
        ] shadow-gray-200 bg-white">
          <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
              <div class="overflow-auto bg-white">
                <!-- Table -->
                <table class="min-w-full divide-y divide-gray-200 table-fixed">
                  <thead class="bg-white">
                    <tr>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Amount
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Visitor
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Title
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                        Description </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Link
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5"> Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-100">
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 20 </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5"> 44 </td>

                      <td class="p-4 text-sm font-normal text-gray-500 lg:p-5">
                        <div class="max-w-[300px]">Lorem ipsum dolor sit.</div>
                      </td>

                      <td class="p-4 text-sm font-normal text-gray-500 lg:p-5">
                        <div class="w-[360px] break-words">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id ipsa consectetur cum modi iusto
                          odio quod, aspernatur sapiente nam velit?
                        </div>
                      </td>

                      <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                        <a target="_blank" href="https://facebook.com/bangladeshisoftware"
                          class="text-blue-600 hover:underline">https://facebook.com/bangladeshisoftware
                        </a>
                      </td>
                      <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                        <button data-target="delete_product" type="button"
                          class="popup_show btn bg-red-500 w-fit text-white">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <!-- Paginations -->
                <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">

                  <div
                    class="flex flex-col sm:flex-row gap-3 py-3 items-center justify-center sm:justify-between w-full">
                    <div class="w-fit">
                      <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">10</span>
                        of
                        <span class="font-medium">97</span>
                        results
                      </p>
                    </div>
                    <div class="w-fit">
                      <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <a href="#"
                          class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                          <span class="sr-only">Previous</span>
                          <!-- Heroicon name: mini/chevron-left -->
                          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </a>
                        <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                        <a href="#" aria-current="page"
                          class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                        <a href="#"
                          class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                        <a href="#"
                          class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                        <span
                          class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                        <a href="#"
                          class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                        <a href="#"
                          class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                        <a href="#"
                          class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                        <a href="#"
                          class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                          <span class="sr-only">Next</span>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </a>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- All Popup -->
  <!-- Delete product -->
  <div data-target="delete_product"
    class="popup_wrapper overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 sm:h-full flex"
    id="delete-product-modal" style="z-index: 111; display: none;">
    <div data-target="delete_product" class="popup_remove w-full h-screen bg-black bg-opacity-50 z-40 fixed inset-0 m-auto">
    </div>
    <div class="relative px-4 w-full max-w-md h-full md:h-auto z-50">
      <div class="relative bg-white rounded-2xl shadow-lg">
        <div class="flex justify-end p-2"><button type="button" data-target="delete_product"
            class="popup_remove text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm w-8 h-8 flex items-center justify-center ml-auto"
            data-modal-toggle="delete-product-modal"> <i class="fa-solid fa-xmark"></i> </button></div>
        <div class="p-6 pt-0 text-center text-5xl text-red-500"> <i class="fa-solid fa-circle-exclamation"></i>
          <h3 class="my-9 text-base font-normal text-gray-500">Are You Sure, Want to delete this product?
          </h3>
          <div class="w-full flex justify-between items-center gap-x-2"><a href="#" data-target="delete_product"
              class="popup_remove text-white bg-red-400 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center hover:scale-[1.02] transition-transform"
              data-modal-toggle="delete-product-modal">No, cancel</a>

            <button
              class="disabled:opacity-70 disabled:cursor-not-allowed text-white bg-gradient-to-br from-red-600 to-red-500 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"><span>Yes,
                Confirm</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>

</html>