<?php

function write_to_console($data)
{
    $console = $data;
    if (is_array($console))
        $console = implode(',', $console);

    echo "<script>console.log('Console: " . $console . "' );</script>";
}

session_start();

include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$newPass = $_POST['newpassword'];
$oldPass = $_POST['oldpassword'];
$user_id=$_SESSION['user_id'];
write_to_console($newPass);
write_to_console($oldPass);
write_to_console($user_id);
$query = "select * from users where user_id = '$user_id' ";//limit 1
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);
                $oldPassdb=$user_data['password'];

if($oldPass==$oldPassdb){
    $th1="password";

    $update_pass="UPDATE users SET '$th1' =' ". $_POST['newpassword']."' WHERE id =' ". $user_data['id']."' ";//LIMIT 1
    mysqli_query($con, $update_pass);
}}

}
}
/*if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    
    if (!empty($email)){

        //read from database
        $query = "select * from users where email = '$email' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    echo "successful login";
                    #header("Location: index.php");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    }
    else {
        echo "wrong username or password!";
    }
}
*/
?>

