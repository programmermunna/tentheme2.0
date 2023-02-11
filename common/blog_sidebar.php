      <div class="lg:sticky top-0 w-full lg:min-w-[350px] lg:w-[350px]">
                <form action="<?php echo $cr_url; ?>" method="GET">                
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none text-green-600">
                        <i class="fa-solid fa-search"></i>
                    </div>
                    <input name="src"
                        class="shadow w-full h-12 rounded-t px-10 focus:ring-2 focus:outline-none focus:ring-gray-200"
                        type="text" id="voice-search" placeholder="Search..." required />
                    <button type="submit"
                        class="flex absolute inset-y-0 right-1.5 text-sm items-center text-green-700 px-2 h-fit py-2 my-auto rounded">
                        Search
                    </button>
                </div>
                </form>

                <!-- Filter by Category -->
                <div style="box-shadow:rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,rgba(0, 0, 0, 0.06) 0px 0px 0px 1px"
                    class="sidebar_item overflow-hidden bg-white shadow px-5">
                    <button class="ds_title" data-ref="Category">
                        <span>Category</span>
                        <span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </button>
                    <?php $posts = mysqli_num_rows(_get("post","status='Publish'"));?>
                    <div class="ds_div" data-ref="Category">
                        <div class="py-0">
                            <div
                                class="flex justify-between items-center p-2 hover:bg-cyan-800 hover:text-white rounded">
                                <a href="blogs.php"><h6 class="text-sm font-medium">All Categories</h6></a>
                                <small><?php echo $posts; ?></small>
                            </div>
                            <ul class="pb-3">
                            <?php 
                            $all_ctg = _get("category","type='Post' LIMIT 10");
                            while($ctg = mysqli_fetch_assoc($all_ctg)){
                                $ctg_name = $ctg['category'];
                            ?> <a href="blogs.php?category=<?php echo $ctg_name?>">
                                    <li
                                        class="w-full flex items-center justify-between text-sm p-2 hover:bg-cyan-800 hover:text-white rounded">
                                        <span><?php echo $ctg['category']?></span>
                                        <?php
                                        $all_posts = _get("post","category='$ctg_name' AND status='Publish'");
                                        $all_post = mysqli_num_rows($all_posts);
                                        ?>
                                        <span><?php echo $all_post; ?></span>
                                    </li>
                                </a>
                            <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>
                <?php if(!isset($data)){;?> 
                <!-- Sidebar Image -->
                <div class="w-full h-auto p-4 bg-white shadow-xl">
                    <img class="w-full"
                        src="https://www.bangladeshisoftware.com/wp-content/uploads/2020/09/online-freelancing-video-banner-1280-by-720.jpg"
                        alt="">
                </div>
                <?php }?> 


                <?php if(isset($data)){$category = $data['category'];?> 
                <div>
                    <h3 class="bg-green-600 text-white p-3 rounded-t">Recommended Products</h3>
                    <div class="bg-[#f3f3f3]">

                        <?php 
                        $similar_posts = _get("post","category='$category'");
                        while($similar = mysqli_fetch_assoc($similar_posts)){
                        ?>
                        <a href="blog.php?id=<?php echo $similar['id']?>" class="block px-4 py-6 pb-0 hover:bg-green-100">
                            <div class="flex items-start gap-x-4">
                                <h2 class="text-base font-semibold text-gray-700 text-left w-7/12"><?php echo $similar['title']?></h2>
                                <img class="w-5/12"
                                    src="admin/upload/<?php echo $similar['file_name']?>">
                            </div>
                        </a> 
                        <?php }?>  
                        <br>
                    </div>
                </div>
                    <?php }?>

            </div>