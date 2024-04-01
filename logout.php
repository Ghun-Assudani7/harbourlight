<?php
    // require('C:\xampp\htdocs\harbor-lights-master\admin\inc\essentials.php');
    // require('essentials.php');
    require('C:\Users\HP\harbor-lights-master\admin\inc\essentials.php');

    session_start();
    session_destroy();
    redirect('index.php');
?>
