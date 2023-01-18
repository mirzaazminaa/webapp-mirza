<?php
  if(isset($_POST['btn-send']))
  {
    $UserName = $_POST['name'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Msg = $_POST['message'];

    if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
    {
      die( 'Unable to load the "PHP Email Form" Library!');
    }
    else
    {
      $to = "mirzaazzamina@gmail.com";

      if(mail($to,$Subject,$Msg,$Email))
      {
        die( 'Contact Us Success');
      }
    }
  }

?>