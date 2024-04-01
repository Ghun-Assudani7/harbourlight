<?php
    require('C:\xampp\htdocs\harbor-lights-master\admin\inc\essentials.php');

    // require('essentials.php');
    // require('db_config.php');
    require('C:\Users\HP\harbor-lights-master\admin\inc\db_config.php');
    if(isset($_GET['seen']))
    {
        $frm_data=filteration($_GET);
        if($frm_data['seen']=='all'){
            $q="UPDATE `user_queries` SET `seen`=? ";
            $values=[1];
            if(update($q,$values,'i')){
                alert('success','Marked all as Read!');
            }
            else{
                alert('error','Operation Failed!');
            }

        }
        else{
            $q="UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
            $values=[1,$frm_data['seen']];
            if(update($q,$values,'ii')){
                alert('success','Marked as Read!');
            }
            else{
                alert('error','Operation Failed!');
            }
        }

    }

    if(isset($_GET['del']))
    {
        $frm_data=filteration($_GET);
        if($frm_data['del']=='all'){
            $q="DELETE FROM `user_queries`";
            if(mysqli_query($con,$q)){
                alert('success','All Data deleted!');
            }
            else{
                alert('error','Operation failed!');
            }

        }
        else{
            $q="DELETE FROM `user_queries` WHERE `sr_no`=?";
            $values=[$frm_data['del']];
            if(delete($q,$values,'i')){
                alert('success','Data deleted!');
            }
            else{
                alert('error','Operation failed!');
            }
        }

    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - User Queries</title>
        <?php require('C:\Users\HP\harbor-lights-master\admin\inc\links.php');?>
    </head>
    <body class="bg-light">

    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\header.php');?>
    <?php require("C:\Users\HP\harbor-lights-master\admin\inc\script.php");?>

<div class="containe-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden" >
            <h3 class="mb-4">USER QUERIES</h3>

            <div class="card border-0 shadow mb-4" style="border: 3px solid #191975 !important;">
                <div class="card-body">
                    <div class="text-end mb-4">
                        <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
                        <i class="bi bi-check-all"></i> Mark all read</a>
                        <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
                        <i class="bi bi-trash"></i> Delete all</a>

                    </div>

                   
                    <div class="table-responsive-md" style="height:450px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                                <tr class="bg-dark text-light">
                                <th scope="col">#</th>
                                <th scope="col"width="7%">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col" width="19%">Subject</th>
                                <th scope="col"width="23%">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $q="SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                                $data=mysqli_query($con,$q);
                                $i=1;

                                while($row=mysqli_fetch_assoc($data))
                                {
                                    $seen='';
                                    if($row['seen']!=1)
                                    {
                                        $seen="<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a><br>";
                                    }
                                    $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                    echo<<<query
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[email]</td>
                                            <td>$row[subject]</td>
                                            <td>$row[message]</td>
                                            <td>$row[date]</td>
                                            <td>$seen</td>

                                        </tr>
                                    query;
                                    $i++;
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
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
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #191975;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
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