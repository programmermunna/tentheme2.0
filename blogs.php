<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->

<!-- Sub Header -->
<div class="container space-y-6 pt-6 pb-12 lg:py-24">

    <!-- Page Name Title -->
    <h3 class="text-4xl font-medium tracking-wide">
        Blogs
    </h3>

    <!-- Page Tree Links -->
    <div class="items-center justify-start space-x-2 text-gray-500">

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
            class="text-white px-4 py-1.5 rounded shadow-sm" href="index.php">
            <i class="fa-solid fa-house"></i>
        </a>

        <small class="text-xs"> <i class="fa-solid fa-chevron-right"></i></small>

        <a style="background-image: conic-gradient(from 1turn, #0e9479, #16a085)"
            class="text-white px-4 py-1.5 rounded shadow-sm" href="blogs.php"> Blogs
        </a>

    </div>

</div>
</header>


<main class="min-h-screen py-12">
    <div class="flex items-start">
        <div class="container flex gap-12 flex-col lg:flex-row items-start">


            <div class="div">
                <div class="w-full grid grid-cols-2 gap-6">
                <?php 
                if(isset($_GET['category'])){
                    $category = $_GET['category'];
                    $post = _get("post","status='Publish' AND category='$category' ORDER BY id DESC");
                }else{
                    $post = _get("post","status='Publish' ORDER BY id DESC");
                }
                while($data = mysqli_fetch_assoc($post)){
                $author_id = $data['pid'];
                $author = _fetch("person","id=$author_id"); 
                ?>
                    <div class="p-5 bg-white shadow rounded relative">
                        <a href="blog.php?id=<?php echo $data['id']?>" class="absolute inset-0 m-auto z-40"></a>
                        <img style="height:200px" class="w-full" src="admin/upload/<?php echo $data['file_name']?>">
                        <h3 class="text-lg font-semibold tracking-wide my-4"><?php echo $data['title']?></h3>
                        <div class="flex items-center gap-2 relative z-50 truncate flex-wrap w-full"
                            style="justify-content: space-between;">
                            <a href="#"
                                class="px-2 py-1 bg-[#f75389] text-white rounded-sm shadow-sm focus:ring-1 focus:ring-offset-1"><?php echo $data['category']?></a>
                            <a href="#"
                                class="px-2 py-1 rounded-sm "><?php echo $author['name']." ". date("d-M-y",$data['time']);?></a>
                        </div>
                    </div>
                    <?php }?>

                </div>

                <br>
                <br>

                <!-- Paginations -->
                <div
                    class="col-span-12 flex flex-col-reverse sm:flex-row gap-6 sm:gap-0 items-center justify-between py-6">
                    <div class="flex items-center justify-center flex-wrap gap-1 w-fit">
                        <a href="#"
                            class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-[#f75389] hover:text-white rounded-l-sm">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>

                        <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                            1
                        </a>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                            2
                        </a>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                            3
                        </a>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                            4
                        </a>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                            5
                        </a>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                            ...
                        </a>
                        <a href="#" class="px-4 py-2 text-gray-700 bg-gray-200 hover:bg-[#f75389] hover:text-white">
                            11
                        </a>
                        <a href="#"
                            class="px-4 py-2 text-gray-500 bg-gray-300 hover:bg-[#f75389] hover:text-white rounded-r-sm">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <div>Page 1 of 12</div>
                </div>
                <!-- Paginations -->
            </div>



            <?php include("common/blog_sidebar.php")?>




        </div>

    </div>

</main>

<!-- Header area -->
<?php include("common/footer.php");?>
<!-- Header area -->