<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<?php 
if(isset($_GET['id'])){
  $id = $_GET['id'];
}
$data = _fetch("post","id=$id");

?>
<!-- Sub Header -->
<div class="container space-y-6 pt-12">
    <!-- Page name Title -->
    <h3 class="text-4xl font-medium tracking-wide"><?php echo $data['title']?></h3>

    <!-- Page Tree Links -->
    <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
            class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
            <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
            class="text-white px-4 py-1.5 rounded shadow-sm" href="blog.php"><?php echo $data['title']?></a>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

</div>
</header>


<main class="min-h-screen bg-gray-50 ">
    <div class="flex items-start">


        <div class="container flex flex-col lg:flex-row gap-y-6 lg:gap-y-0 gap-x-12 relative">

            <!-- Theme Content -->
            <div class="w-full pt-12">

                <!-- Item Details -->
                <div data-item="item_details" class="item_content w-full space-y-6">
                    <!-- Theme Thumbnail -->
                    <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
            rgba(0, 0, 0, 0.06) 0px 0px 0px 1px !important;" class="bg-white border p-4">
                        <a href="#" class="block w-full">
                            <img class="w-full" src="admin/upload/<?php echo $data['file_name']?>">
                        </a>

                        <div class="pt-6 pb-4 gap-x-4 flex-wrap flex justify-center">
                            <a target="_blank" href="blog.php?category=<?php echo $data['category']?>"
                                class="block px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 focus:ring-2 ring-blue-500 focus:ring-offset-2 w-fit  text-white tracking-wide space-x-1">
                                <i class="fa-solid fa-tags"></i>
                                <span><?php echo $data['category']?></span>
                            </a>


                            <div class="flex gap-x-0.5 flex-wrap">
                                <a href=""
                                    class=" block px-3 py-2 rounded-l bg-gray-500 hover:bg-gray-500 focus:ring-2 focus:ring-gray-300 focus:ring-offset-1 w-fit text-white tracking-wide space-x-1">
                                    <span>Share</span>
                                    <i class="fa-solid fa-share"></i>
                                </a>

                                <a href=""
                                    class="w-9 py-2 bg-gray-500 hover:bg-gray-500 focus:ring-2 focus:ring-gray-300 focus:ring-offset-1 flex justify-center items-center text-white tracking-wide space-x-1"><i
                                        class="fa-brands fa-facebook-f"></i>
                                </a>

                                <a href=""
                                    class="w-9 py-2 rounded-r bg-gray-500 hover:bg-gray-500 focus:ring-2 focus:ring-gray-300 focus:ring-offset-1 flex justify-center items-center text-white tracking-wide space-x-1"><i
                                        class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Others Theme Content -->
                    <div><?php echo $data['summery']?></div>
                    <br>
                    <div><?php echo $data['content']?></div>

                </div>

                <!-- Item Reviews -->
                <div data-item="item_reviews" class="item_content hidden">

                    <div class="flex justify-between items-center">
                        <h3 class="flex items-center gap-x-3 text-xl font-medium"> <span><?php echo $data['review']?>
                                Reviews</span>
                            <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span style="width:88%"
                                    class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                        </h3>
                    </div>

                    <!-- reiviews -->
                    <div class="pt-6 space-y-4">
                        <!-- review -->
                        <div class="rounded border overflow-hidden">
                            <div class="flex items-center justify-between bg-gray-100 p-4">
                                <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span style="width:100%"
                                        class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </p>

                                <p> by <a href="#" class="hover:underline text-blue-800">stacksagar</a> 1 month ago </p>
                            </div>
                            <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fugiat
                                consequuntur
                                natus? Molestiae
                                quos assumenda totam non magnam alias odio illo perspiciatis, soluta maxime hic
                                accusantium, optio
                                vitae. Quasi, voluptates!</p>
                        </div>

                        <!-- review -->
                        <div class="rounded border overflow-hidden">
                            <div class="flex items-center justify-between bg-gray-100 p-4">
                                <p class="relative text-sm h-fit w-fit flex items-center justify-center text-gray-200">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span style="width:80%"
                                        class="absolute text-sm left-0 inset-y-0 my-auto flex overflow-hidden text-yellow-500">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </p>

                                <p> by <a href="#" class="hover:underline text-blue-800">munna</a> 10 days ago </p>
                            </div>
                            <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fugiat
                                consequuntur
                                natus? Molestiae
                                quos assumenda totam non magnam alias odio illo perspiciatis, soluta maxime hic
                                accusantium, optio
                                vitae. Quasi, voluptates!</p>
                        </div>

                    </div>


                </div>

                <!-- Item Comments -->
                <div data-item="item_comments" class="item_content hidden">
                    <div class="flex justify-between items-center">
                        <h3 class="flex items-center gap-x-3 text-xl font-medium"> <span><?php echo $data['comment']?>
                                Comments found.</span>

                        </h3>
                    </div>

                    <!-- comments -->
                    <div class="pt-6 space-y-3">
                        <div class="border rounded overflow-hidden">

                            <div class="p-4 border-b bg-gray-50">
                                <div class="overflow-hidden flex items-center justify-between">
                                    <a href="#" class="flex items-center gap-x-3 text-blue-500 font-medium">
                                        <img class="w-10 h-10 object-contain rounded-full"
                                            src="https://randomuser.me/api/portraits/men/22.jpg" alt="">
                                        <span>John Doe</span>
                                    </a>
                                    <small>1 month ago</small>
                                </div>
                                <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quam
                                    suscipit
                                    dicta, ab in
                                    laborum a iure, quibusdam velit eos distinctio dolorem!</p>
                            </div>

                            <div class="pl-8 pr-4 py-4">
                                <div class="overflow-hidden flex items-center justify-between">
                                    <a href="#" class="flex items-center gap-x-3 text-blue-500 font-medium">
                                        <img class="w-10 h-10 object-contain rounded-full"
                                            src="https://i.ibb.co/Ryr9PQB/index.jpg" alt="">
                                        <span>Steve</span>
                                    </a>
                                    <small>1 month ago</small>
                                </div>
                                <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quam
                                    suscipit
                                    dicta, ab in
                                    laborum a iure, quibusdam velit eos distinctio dolorem!</p>
                            </div>

                        </div>

                        <div class="border rounded overflow-hidden">

                            <div class="p-4 border-b bg-gray-50">
                                <div class="overflow-hidden flex items-center justify-between">
                                    <a href="#" class="flex items-center gap-x-3 text-blue-500 font-medium">
                                        <img class="w-10 h-10 object-contain rounded-full"
                                            src="https://randomuser.me/api/portraits/men/23.jpg" alt="">
                                        <span>Steve Smith</span>
                                    </a>
                                    <small>1 month ago</small>
                                </div>
                                <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quam
                                    suscipit
                                    dicta, ab in
                                    laborum a iure, quibusdam velit eos distinctio dolorem!</p>
                            </div>

                            <div class="pl-8 pr-4 py-4">
                                <div class="overflow-hidden flex items-center justify-between">
                                    <a href="#" class="flex items-center gap-x-3 text-blue-500 font-medium">
                                        <img class="w-10 h-10 object-contain rounded-full"
                                            src="https://i.ibb.co/Ryr9PQB/index.jpg" alt="">
                                        <span>Shamim Reza</span>
                                    </a>
                                    <small>1 month ago</small>
                                </div>
                                <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique quam
                                    suscipit
                                    dicta, ab in
                                    laborum a iure, quibusdam velit eos distinctio dolorem!</p>
                            </div>

                        </div>


                    </div>

                </div>

            </div>

            <!-- RightBar Info -->
            <div class="w-full lg:min-w-[350px] lg:w-[350px]">
              <div class="w-full sticky top-0 pt-12">                    
                <?php include("common/post_sidebar.php")?>
              </div>
            </div>

        </div>


    </div>
</main>

<!-- Header area -->
<?php include("common/footer.php");?>
<!-- Header area -->