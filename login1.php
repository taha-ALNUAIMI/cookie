<?php
/* These are our valid username and passwords */
$user = 'taha';
$pass = 'taha';

if (isset($_POST['username']) && isset($_POST['password'])) {
    
        header('Location: index.php?name=$user);
    
} else {
    echo 'You must supply a username and password.';
}}}
?>

