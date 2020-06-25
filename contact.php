<?php 
if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['Name'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact-me.php?error');
       }
       else
       {
           $to = "infojitendra6@gmail.com";
           mail($to,$Subject,$Msg,$Email);
          // if(mail($to,$Subject,$Msg,$Email))
          // {
               header("location:contact-me.php?success");
          // }
       }
    }
    else
    {
        header("location:contact-me.php");
    }
?>