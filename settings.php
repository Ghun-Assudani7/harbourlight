<?php
    // require('C:\xampp\htdocs\harbor-lights-master\admin\inc\essentials.php');
    require('essentials.php');

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Settings</title>
        <?php require('C:\Users\HP\harbor-lights-master\admin\inc\links.php');?>
    </head>
    <body class="bg-light">

    <?php require('C:\Users\HP\harbor-lights-master\admin\inc\header.php');?>
    <?php require("C:\Users\HP\harbor-lights-master\admin\inc\script.php");?>


    


    

<div class="containe-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden" >
            <h3 class="mb-4">SETTINGS</h3>

            <!--General settings section-->

            <div class="card border-0 shadow"style="border: 3px solid #191975 !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm " style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i>Edit
                        </button>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
            </div>

            <!--General settings modal-->

            <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"style="border: 3px solid #191975 !important;">
                <div class="modal-dialog">
                    <form id="general_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">General Settings</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold" style="color:red;">Site Title</label>
                                    <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">About us</label>
                                    <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6"required></textarea>
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="site_title.value=general_data.site_title,site_about.value=general_data.site_about" class="btn  shadow-none" style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);"data-bs-dismiss="modal">CANCEL</button>
                                <button type="Submit"  class="btn text-white shadow-none" style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- shutdown -->
            <div class="card border-0 shadow-sm  mb-4" style="margin-top:25px;border: 3px solid #191975 !important;" >
                <div class="card-body">
                    <div class="d-flex align-items-cente    1r justify-content-between mb-3">
                        <h5 class="card-title m-0">Shutdown Website</h5>
                        <div class="form-check form-switch">
                            <form>
                            <!-- <input onchange="upd_shutdown(this.checked ? 1 : 0)" class="form-check-input color:#d29751" type="checkbox" id="shutdown-toggle"> -->
                            <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                            </form>
                        </div>
                    </div>
                    <p class="card-text">
                        No customers will be allowed to book hotel room, when shutdown mode is turned on.
                    </p>
                </div>
            </div>

            <!--Contact details section-->
            <div class="card border-0 shadow mb-4"style="border: 3px solid #191975 !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Contacts Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);"data-bs-toggle="modal" data-bs-target="#contacts-s">
                            <i class="bi bi-pencil-square"></i>Edit
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                <p class="card-text" id="address"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                <p class="card-text" id="gmap"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold ">Phone Numbers</h6>
                                <p class="card-text mb-1">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id="pn1"></span>
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id="pn2"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                <p class="card-text" id="email"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold ">Social Links</h6>
                                <p class="card-text mb-1">
                                    <i class="bi bi-facebook me-1"></i>
                                    <span id="fb"></span>
                                </p>
                                <p class="card-text mb-1">
                                    <i class="bi bi-instagram me-1"></i>
                                    <span id="insta"></span>
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-twitter me-1"></i>
                                    <span id="tw"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold ">iFrame Links</h6>
                                <iframe id="iframe" class="border p-2 w-100" loading="Lazy"></iframe>
                            </div>

                        </div>
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
</style>




<!-- hhh -->
<script>
    let general_data,contacts_data;

    let general_s_form = document.getElementById('general_s_form');
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');

    let contacts_s_form = document.getElementById('contacts_s_form');
    // let team_s_form = document.getElementById('team_s_form');
    // let member_name_inp=document.getElementById('member_name_inp');


    function get_general()
    {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');

        


        let shutdown_toggle=document.getElementById('shutdown-toggle');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload=function(){
            general_data = JSON.parse(this.responseText);
            console.log(general_data); // Add this line
            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about; 

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;

            if(general_data.shutdown == 0){
                shutdown_toggle.checked=false;
                shutdown_toggle.value=0;
            }
            else{
                shutdown_toggle.checked=true;
                shutdown_toggle.value=1;
            }
        }
        xhr.send('get_general');
    }

    
        
    general_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        upd_general(site_title_inp.value,site_about_inp.value);
    })


    function upd_general(site_title_val,site_about_val)
    {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload=function()
        {
            var myModal = document.getElementById('general-s')
            var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
            modal.hide();


            console.log(this.responseText);

            if(this.responseText==1)
            {
                alert('success','Changes saved!');
                get_general();

            }
            else{
                alert('Error','No Changes made!');
            }

        }
        
        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
    }
    

    
    

    function upd_shutdown(value) 
    {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {

        if(value==0 )
        {
            alert('success','Shutdown mode off!');

        }
        else
        {
            alert('success','Site has been shutdown!');
        }
        get_general();
    }

    xhr.send('shutdown=' +value); // Send the value of the shutdown toggle
}




    // function get_contacts()
    // {
    //     let contacts_p_id=['address','gmap','pn1','pn2','email','fb','insta','tw'];
    //     let iframe=document.getElementById('iframe');


    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "../ajax/settings_crud.php", true);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
    //     xhr.onload=function(){

    //         contacts_data = JSON.parse(this.responseText);
    //         contacts_data=Object.values(contacts_data);
    //         console.log(contacts_data);
            
    //         for(i=0;i<contacts_p_id.length;i++)
    //         {
    //             document.getElementById(contacts_p_id[i]).innerText=contacts_data[i+1];
    //         }
    //         iframe.src=contacts_data[9];
    //         contacts_inp(contacts_data);
    //     }
    //     xhr.send('get_contacts');
    // }


    // function contacts_inp(data)
    // {
    //     let contacts_inp_id=['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp'];
        
    //     for(i=0;i<contacts_inp_id.length;i++){
    //         document.getElementById(contacts_inp_id[i]).value=data[i+1];
    //     }
    // }

    // contacts_s_form.addEventListener('submit',function(e){
    //     e.preventDefault();
    //     upd_contacts();
    // })


    // function upd_contacts()
    // {
    //     let index=['address','gmap','pn1','pn2','email','fb','insta','tw','iframe'];
    //     let contacts_inp_id=['address_inp','gmap_inp','pn1_inp','pn2_inp','email_inp','fb_inp','insta_inp','tw_inp','iframe_inp'];
    //     let data_str="";

    //     for(i=0;i<index.length;i++){
    //         data_str+=index[i]+ "=" + document.getElementById(contacts_inp_id[i]).value + '&';
    //     }
    //     console.log(data_str);
    //     data_str += "upd_contacts";

    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "../ajax/settings_crud.php", true);
    //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    //     xhr.onload= function(){
    //         var myModal = document.getElementById('contacts-s')
    //         var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
    //         modal.hide();

    //         if(this.responseText==0)
    //     {
    //         // alert('success','Site has been shutdown!');
    //         alert('Error','No Changes made!');
    //         // alert('success','Changes saved!');
           
    //     }
    //     else
    //     {
    //         alert('success','Changes saved!');
    //         get_contacts();

    //         // alert('Error','No Changes made!');
    //     }

    //     }

    //     // if(value==0)
    //     // // if(this.responseText==0)
    //     // {
    //     //     // alert('success','Site has been shutdown!');
    //     //     alert('Error','No Changes made!');            
    //     // }
    //     // else
    //     // {
    //     //     alert('success','Changes saved!');
    //     //     // alert('success','Shutdown mode off!');
    //     // }

    //     xhr.send(data_str);
    // }

    // team_s_form.addEventListener('submit',function(e){
    //     e.preventDefault();
    //     add_member();
    // });

//     function add_member()
//     {
        
//         let data=new FormData();
//         data.append('name',member_name_inp.value);
//         data.append('picture',member_picture_inp.files[0]);
//         data.append('add_member','');

//         let xhr = new XMLHttpRequest();
//         xhr.open("POST", "../ajax/settings_crud.php", true);

//         xhr.onload=function(){
//             console.log(this.responseText);
//         //     var myModal = document.getElementById('general-s')
//         //     var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
//         //     modal.hide();

//         //     if(this.responseText==1)
//         //     {
//         //         alert('success','Changes saved!');
//         //         get_general();
//         //     }
//         //     else{
//         //         alert('Error','No Changes made!');
//         //     }
//         // }
        
//         xhr.send(data);


//     }
// }

window.onload=function(){
    get_general();
    // get_contacts();
}
</script>
</body>
</html>
