
<?php

//frontend purpose data
define('SITE_URL','https://127.0.0.1/harbor-lights-master/');
define('ABOUT_IMG_PATH',SITE_URL.'frontend photos/about/');
define('ABOUT_IM_PATH','/frontend photos/about/');


// define('ABOUT_IMG_PATH',SITE_URL.'/frontend photos/about/team.jpg');



//backend upload process needs data

define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/frontend photos');
define('ABOUT_FOLDER', '/about/');


    function adminLogin(){
        session_start();
        if(!(isset($_SESSION['adminLogin'])&& $_SESSION['adminLogin']==true)){
            echo "<script>
                window.location.href='index.php';
            </script>";
            exit;
        }

    }


    function redirect($url){
        echo"<script>
                window.location.href='$url';
            </script>";
            exit;
    }
    function alert($type, $msg){

        $bs_class=($type=="success") ? "alert-success" : "alert-danger";

        echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;

    }

    function uplpoadImage($image,$folder)
    {
        $valid_mime=['image/jpeg','image/jpeg/png','image/webp'];
        $img_mime=$image['type'];

        if(!in_array($img_mime,$valid_mime)){
            return 'inv_img';//invalid image mime or format
        }
        else if(($image['size']/(1024*1034))>2)
        {
            return 'inv_size';//invalid size greater than 2mb
        }
        else{
            $ext=pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname='IMG_'.random_int(11111,99999).".$ext";

            $img_path= UPLOAD_IMAGE_PATH.$folder.$rname;
            if(move_uploaded_file($image['tmp_name'],$img_path)){
                return $rname;
            }
            else{
                return 'upd_failed';
            }
        }
    }

    function deleteImage($image,$folder){
        echo UPLOAD_IMAGE_PATH.$folder.$image;
        if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
            return true;
        }
        else{
            return false;
        }
    }
    // $image=$img['picture'];
    // // $image = '\IMG_74333.jpg'; // Replace "team.jpg" with the actual filename
    // $folder = "about";  
    // $upd = 'C:\Users\HP\harbor-lights-master\frontend photos'; // Updated path, using forward slashes for directory separators

    // $result = deleteImage($image, $folder); // Call deleteImage() function and store the return value in $result
    // echo "Return value: " . ($result ? "true" : "false"); 

    // function deleteImage($image, $folder) {
    // global $upd; // Access the $upd variable inside the function
    // $file_path = $upd . '/' . $folder . $image; // Construct the full file path
    
    // echo "Deleting file: " . $file_path; // Print the path of the file being deleted
    // 'C:\Users\HP\harbor-lights-master\frontend photos\about\IMG_74333.jpg';
    // if(unlink($file_path)) { // Attempt to delete the file
    //     return true; // Return true if deletion is successful
    // } else {
    //     return false; // Return false if deletion fails
    // }
// }

    
?>
