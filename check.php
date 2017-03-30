<?php
$user=$_POST['user'];
if (isset($_POST["rem"]))
    {
        setcookie("username",$user, time() + 6000);
        header('Location: index.php?name='.$user);
    }
    if ($user<>''){
        header('Location: index.php?name='.$user);
    } else {
         header('Location: index.php');
}
       
    
?>
