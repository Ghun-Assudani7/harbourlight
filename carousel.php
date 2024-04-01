<?php
    require('C:\xampp\htdocs\harbor-lights-master\admin\inc\essentials.php');
    // require('essentials.php');
    // require('db_config.php');
    // require('C:\Users\HP\harbor-lights-master\admin\inc\db_config.php');
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Carousel</title>
        <?php require('C:\Users\HP\harbor-lights-master\admin\inc\links.php');?>
    </head>
    <body class="bg-light">

    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\header.php');?>
    <?php require("C:\Users\HP\harbor-lights-master\admin\inc\script.php");?>

<div class="containe-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden" >
            <h3 class="mb-4">CAROUSEL</h3>

            <!-- Carousel  section -->
            <div class="card border-0 shadow mb-4" style="border: 3px solid #191975 !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Images</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);" data-bs-toggle="modal" data-bs-target="#carousel-s">
                            <i class="bi bi-plus-square"></i>Add
                            
                        </button>
                    </div>

                    <div class="row" id="carousel-data">
                        
                    </div>


                </div>
            </div>
            <!--Carousel  modal-->

            <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"style="border: 3px solid #191975 !important;">
                <div class="modal-dialog">
                    <form id="carousel_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Image</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Picture</label>
                                    <input type="file" name="carousel_picture" id="carousel_picture_inp"accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>             
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="carousel_picture.value=''"class="btn  shadow-none" style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);"data-bs-dismiss="modal">CANCEL</button>
                                <button type="Submit"  class="btn text-white shadow-none" style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            

            

            


        </div>
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
</style>



<!-- <script src=carousel.js></script> -->
<!-- hhh -->
<script>
  
    let carousel_s_form = document.getElementById('carousel_s_form');
    let carousel_picture_inp=document.getElementById('carousel_picture_inp');

    
    carousel_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        add_image();
    });

    function add_image()
    {
        
        let data=new FormData();
        data.append('picture',carousel_picture_inp.files[0]);
        data.append('add_image','');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../ajax/carousel_crud.php", true);

        xhr.onload=function()
        {
            console.log(this.responseText);
                var myModal = document.getElementById('carousel-s')
                var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                modal.hide();

            if(this.responseText=='inv_img')
            {
                alert('error','Only JPG and PNG images are allowed!');
            }
            else if(this.responseText=='inv_size'){
                alert('error','Image should be less than 2MB!');
            }
            else if(this.responseText=='upd_failed'){
                alert('error','Image upload failed. Server Down!');
            }
            else{
                alert('Success','New Image added');
                carousel_picture_inp.value='';
                get_carousel();
            }
        }
        
        xhr.send(data);


    }
// }

    function rem_image(val)
    {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../ajax/carousel_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload=function(){
            console.log(this.responseText);
            if(this.responseText==0){
                alert('Error','Server down!');
                
            }
            else{
                alert('success','Image Removed!');
                get_carousel();

            }
            
        }
        xhr.send('rem_image='+val);
    }


    function get_carousel()
    {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../ajax/carousel_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload=function()
        {
            console.log(this.responseText);
            document.getElementById('carousel-data').innerHTML=this.responseText;
        }
        xhr.send('get_carousel');
    }


window.onload=function(){
    
    get_carousel();
}
</script>
</body>
</html>