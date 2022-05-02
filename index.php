<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include("signup.php");
    ?>
    <meta charset="UTF-8">
    <title>sign up</title>
    <script src="script.js"></script>
    <link href="master.css" rel="stylesheet">
</head>

<body>

    <div class="signup-box">
        <h1>sign up</h1>
        <h4>its free and only takes a minute</h4>
        <form method="POST">
            <label>first name</label>
            <input id="txt1" name="firstName" type="text" required placeholder="first ">
            <label>last name</label>
            <input id="txt2" name="lastName" type="text" required placeholder=" last ">
            <label>email</label>
            <input id="txt3" name="email" type="email" placeholder="enter your email">
            <label>password</label>
            <input id="txt4" name="pass" type="password" placeholder="enter password">
            <input type="submit" value="sumbit" onclick="passvalues();" />
            



        </form>

    </div>
</body>

</html>