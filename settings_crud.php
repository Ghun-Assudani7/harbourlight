<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_general'])) {
    $q = "SELECT * FROM `settings` WHERE `sr_no` =?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    // echo "Data before encoding: ";
    // print_r($data);
    $json_data=json_encode($data);
    echo $json_data;

    // $response = array(
    //     'site_title' => $data['site_title'],
    //     'site_about' => $data['site_about'],
    //     'shutdown' => $data['shutdown']
    // );

    // header('Content-Type: application/json');
    // echo json_encode($response);
    // exit;
}

if (isset($_POST['upd_general'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `sr_no`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');
    echo $res;
}



if (isset($_POST['shutdown'])) {
    // $shutdown=($_POST['shutdown']==0)?0:1;
    $shutdown = intval($_POST['shutdown']);
    $q = "UPDATE `settings` SET `shutdown` = ? WHERE `sr_no` = ?";
    $values = [$shutdown, 1];
    $res = update($q, $values, 'ii');
    echo $res;
}



// function adminLogin()
// {
//     session_start();
//     if (!(isset($_SESSION['adminLogin']) &&  $_SESSION['adminLogin'] == true)) {
//         echo "<script>
//         window.location.href='index.php';
//     </script>";
//     exit;
//     }
    // session_regenerate_id(true);

// }


// if (isset($_POST['get_contacts'])) {
//     $q = "SELECT * FROM `contact_details` WHERE `sr_no` =?";
//     $values = [1];
//     $res = select($q, $values, "i");
//     $data = mysqli_fetch_assoc($res);
//     $json_data=json_encode($data);
//     echo $json_data;
// }
if (isset($_POST['get_contacts'])) {
    $q = "SELECT * FROM `contact_details` WHERE `sr_no` =?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
    exit;
  }

  if (isset($_POST['upd_contacts'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `contact_details` SET `address`=?,`gmap`=?,`pn1`=?,`pn2`=?,`email`=?,`fb`=?,`insta`=?,`tw`=?,`iframe`=? WHERE `sr_no`=?";
    $values = [$frm_data['address'], $frm_data['gmap'],$frm_data['pn1'],$frm_data['pn2'],$frm_data['email'],$frm_data['fb'],$frm_data['insta'],$frm_data['tw'],$frm_data['iframe'], 1];
    $res = update($q, $values, 'sssssssssi');
    echo $res;
}

if (isset($_POST['add_member'])) 
{
    $frm_data=filteration($_POST);

    $img_r=uplpoadImage($_FILES['picture'],ABOUT_FOLDER);
    // $img_r=uplpoadImage($_FILES['picture'],);

    // $img_r=uplpoadImage($_FILES['picture'],);


    if($img_r=='inv_img'){
        echo $img_r;
    }
    else if($img_r =='inv_size'){
        echo $img_r;
    }
    else if($img_r =='upd_failed'){
        echo $img_r;
    }
    else{
        $q="INSERT INTO `team_details`(`name`, `picture`) VALUES (?,?)";
        $values=[$frm_data['name'],$img_r];
        $res=insert($q,$values,'ss');
        echo $res;
    }

    
}

// if (isset($_POST['get_members'])) 
// {
//     $res=selectAll('team_details');

//     while($row=mysqli_fetch_assoc($res))
//     {
//         $path=ABOUT_IMG_PATH;

//         echo <<<data
//             <div class="col-md-2 mb-3">
//                 <div class="card bg-dark text-white">
//                     <img src="$path$row[picture];" class="card-img" alt="Team member">    
//                     div class="card-img-overlay text-end">
//                         <button type="button" class="btn btn-danger btn-sm shadow-sm shadow-none">
//                             <i class="bi bi-trash"></i>Delete
//                         </button>
//                     </div>
//                     <p class="card-text text-center px-1 py-1">$row[name] </p>
//                 </div>
//             </div>
//         data;
//     }
// }

if (isset($_POST['get_members'])) 
{
    $res = selectAll('team_details');

    while ($row = mysqli_fetch_assoc($res)) 
    {
        $path=ABOUT_IMG_PATH;
        $path2=ABOUT_IM_PATH;
        echo <<<data
            <div class="col-md-2 mb-3">
                <div class="card bg-dark text-white">
                <img src="$path2$row[picture]" class="card-img">

                    <div class="card-img-overlay text-end">
                        <button type="button" onclick="rem_member($row[sr_no])" class="btn btn-danger btn-sm shadow-sm shadow-none">
                            <i class="bi bi-trash"></i>Delete
                        </button>
                    </div>
                    <p class="card-text text-center px-1 py-1">$row[name] </p>
                </div>
            </div>
        data;
    }
}

if (isset($_POST['rem_member'])) {
    $frm_data = filteration($_POST);
    $values =[$frm_data['rem_member']];
    // $values = [$frm_data];

    $pre_q = "SELECT * FROM `team_details` WHERE `sr_no`=?";
    $res = select($pre_q, $values, 'i');
    $img = mysqli_fetch_assoc($res);
    print_r($img); // Output the fetched data for debugging

    if (deleteImage($img['picture'], ABOUT_FOLDER)) {
    // if (deleteImage($img['picture'], $folder = "frontend photos/about/")) {
        $q = "DELETE FROM `team_details` WHERE `sr_no`=?";
        echo $q;
        // $res = delete($pre_q, $values, 'i');
        $res = delete($q, $values, 'i');

        echo "hhh$res";
    } else {
        echo 0;
    }
}






?>
