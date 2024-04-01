<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Settings</title>
        <?php require('C:\Users\HP\harbor-lights-master\admin\inc\links.php');?>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    </head>
    <body class="bg-light">
    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\essentials.php');?>

    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\header.php');?>
    <?php require("C:\Users\HP\harbor-lights-master\admin\inc\script.php");?>
    <?php require('db_config.php');?>
    <div class="containe-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden" >
                <h3 class="mb-4">Hotel Staff</h3>
                <!-- Management team section -->
                <!-- <div class="card border-0 shadow mb-4" style="border: 3px solid #191975 !important;">
                    <div class="card-body"style="width:700px;margin-left:100px;">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Management team</h5>
                            
                        </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper mb-5">
                                <?php
                                $about_r=selectAll('team_details');
                                $path=ABOUT_IM_PATH;

                                while($row=mysqli_fetch_assoc($about_r)){
                                    echo<<<data
                                        <div class=" mb-4 swiper-slide bg-white text-center overflow-hidden rounded">
                                            <img src = "$path$row[picture]" class="w-100 "style="height:250px;">
                                            <h5 class="mt-5" style="color:white">$row[name]</h5>
                                        </div>
                                    data;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div> -->
            </div>
            <div class="border-0 shadow mb-4" style="border: 3px solid #191975 !important;width: min-content;margin-left: 220px;padding-right:110px;">
            <!-- <div class="d-flex align-items-center justify-content-between mb-3"> -->
                <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
                <div class="container px-4 " style="width:700px;margin-left:100px;">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper mb-5">
                        
                        <?php
                        $about_r=selectAll('team_details');
                        $path=ABOUT_IM_PATH;

                        while($row=mysqli_fetch_assoc($about_r)){
                            echo<<<data
                                <div class=" mb-4 swiper-slide bg-white text-center overflow-hidden rounded">
                                    <img src = "$path$row[picture]" class="w-100 "style="height:250px;">
                                    <h5 class="mt-5" style="color:white">$row[name]</h5>
                                </div>
                            data;
                        }
                        ?>
                        
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            <!-- </div> -->
        </div>
    </div>
        <!-- </section> -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 40,
                pagination: {
                    el: ".swiper-pagination",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        </script> 
    </div>
</div>

<style>
#dashboard-menu{
    position:fixed;
    height:100%;
}
@media screen and (max-width:991px){
    #dashboard-menu{
        height:auto;
        width:100%;
    }
    #main-content{
        margin-top:60px;
    }
}
.swiper-slide {
    position: relative;
    /* Add any additional styling here */
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: auto; /* Ensures aspect ratio is maintained */
}

.swiper-slide h5 {
    position: absolute;
    bottom: 10px; /* Adjust as needed to position the name */
    left: 10px; /* Adjust as needed to position the name */
    /* Add any additional styling for the name */
}
.swiper-container {
    position: relative;
    z-index: 0; /* Ensure Swiper container has lower z-index */
}
.sidebar {
    position: relative;
    z-index: 2; /* Ensure sidebar has higher z-index */
}
</style>




    </body>
    </html>