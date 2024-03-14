<?php
require('../inc/db_config.php');
// require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_general'])) {
    $q = "SELECT * FROM `settings` WHERE `sr_no` =?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);

    $response = array(
        'site_title' => $data['site_title'],
        'site_about' => $data['site_about'],
        'shutdown' => $data['shutdown']
    );

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

if (isset($_POST['upd_general'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `sr_no`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');
    echo $res;
}

if (isset($_POST['shutdown'])) {
    $shutdown = intval($_POST['shutdown']);
    $q = "UPDATE `settings` SET `shutdown` = ? WHERE `sr_no` = ?";
    $values = [$shutdown, 1];
    $res = update($q, $values, 'ii');
    echo $res;
}



function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminLogin']) &&  $_SESSION['adminLogin'] == true)) {
        echo "<script>
        window.location.href='index.php';
    </script>";
    }
    session_regenerate_id(true);

}

?>
