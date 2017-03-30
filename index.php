<?php
function del(){
    setcookie("username", "", time() - 6000);
}
 if (isset ($_COOKIE['username'])) {
                 echo '<h1>wellcome back  '.$_COOKIE['username'].'</h1>';
                 /*echo "<button onclik=".del().">delet cookie</button>";*/
                 
            }
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <form method="post" action="check.php">
                <div>
                    <label>input user name</label> <input type="text" name="user" />
                </div>
                <div>
                    <label>input passworde</label> <input type="password" name="pass">
                </div>
                <div>
                    <input type="checkbox" name="rem"><label>save cookie</label>
                </div>
                <div>
                    <input type="submit" name="submit" value="log in">
                </div>
                
            </form>
        </div>
        <hr>
        <div id="detail">
            <?php
            if (isset($_GET['name'])){
                echo '<h1>wellcome  '.$_GET['name'].'</h1>';
                if (isset($_COOKIE['username'])){
                echo '<h1>cookie is ok </h1>';
                }
                }else {
                    echo '<h1>please enter user name</h1>';
                }
            
            ?>
        </div>
    </body>
    
</html>
