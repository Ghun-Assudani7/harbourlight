<?php
    if(isset($_POST['send']))
    {
      $frm_data=filteration($_POST);

      $q="INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
      $values=[$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
      $res=insert($q,$values,'ssss');
      echo $res;
      if($res==1){
        alert('success','Mail sent!');
        // alert('error','Server Down try again later!');
        exit();

      }
      else{
        alert('error','Server Down try again later!');
        // alert('success','Mail sent!');
        
        exit();
      }
      $res=0;
      echo $res;
    }
    ?>
    