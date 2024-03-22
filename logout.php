<?php
    require('C:\xampp\htdocs\harbor-lights-master\admin\inc\essentials.php');

    session_start();
    session_destroy();
    redirect('index.php');
?>
<?php
// function redirect($url){
    // echo"<script>
    //     window.location.href='$url';
    // </script>";
// }
?> 