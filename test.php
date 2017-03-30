<?php
function loginForm($userValue,$checkBox)
{

echo "<form action='test.php' method='get'>";
echo "<p>Username: <input type='text' name='user' value='$userValue' /></p>";
echo "<p>Password: <input type='password' name='pass' /></p>";
echo "<p>Remember my username next time I visit this site <input type='checkbox' name='remember'" . $checkBox . "/></p>";
echo "<input type='submit' value='Log In' />";
echo "</form>";

}

if (!isset($_GET["user"]) && !isset($_COOKIE["username"]))
{
    loginForm('','');
}
else if (isset ($_COOKIE["username"]))
{
    loginform ($_COOKIE["username"], '');
}
if (isset($_GET["remember"]))
{
    setcookie("username",$_GET["user"], time() + 60);
}
?>
