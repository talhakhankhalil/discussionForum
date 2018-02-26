<?php 
include "components/php/dbConnection.php";
$connection = new connection();
include "components/php/userClass.php";
include "components/php/sidebarClass.php";
$sidebarhandler = new sidebar();
$state = "";
if(isset($_POST['submit'])){
    $newuser = new user();
    $user = $newuser->user_register($_POST);
    if ($user){
        $state = "Registered sucessfully";
    }else{
        $state= "There is problem in your registeration";
    }
}
?>
<?php
    if(isset($_POST['login'])){
        $user = new user();
        $res = $user->verifyUser($_POST);
        if($res){
            $state="Login verified";
        }
        else{
            $state = "Incorrect login details";
        }
    }
?>

           <?php include "components/php/header.php" ?>
            <div class="wrapper">
                <div class="main-content">
                    <div class="reg-form">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <label for="name">Name</label><input type="text" name="name" required><br>
                            <label for="name">Email</label><input type="email" name="email" required><br>
                            <label for="name">Password</label><input type="password" name="password" required><br>
                            <label for="name">Profession</label><input type="text" name="profession" required><br>
                            <label for="name">Qaulification</label><input type="text" name="qualification" required><br>
                            <label for="name">Bio</label><textarea id="q_desc" name="bio" id="" cols="55" rows="10" required></textarea><br>
                            <label for="name">Website</label><input type="text" name="website" required><br>
                            <input type="submit" value="Register" name="submit">
                        </form>
                    </div>
                </div>
                <?php include "components/php/sidebar.php" ?>
            </div>
            <!--wrapper ends -->
            <?php include "components/php/footer.php" ?>