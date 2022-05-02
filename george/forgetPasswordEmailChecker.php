<!DOCTYPE html>
<head>
    <?php
include("checkEmail.php");
?>
    <title>reset (check email)</title>
</head>
<form method="post">
     <input type="password" name="oldpassword" placeholder="old password"/>
     <input type="password" name="newpassword" placeholder="new password"/>
     <input type="submit" value="submit"/>
     
</form>
</html>