<?php
session_start();

include "components/php/dbConnection.php";
$connection = new connection();
include "components/php/userClass.php";
include "components/php/questionClass.php";
include "components/php/sidebarClass.php";
$sidebarhandler = new sidebar();
$question = new question();
$state="";
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
  
    <?php include "components/php/content.php" ?>
    <?php include('components/php/sidebar.php');?>
</div>
<!-- Wrapper ends -->
<?php include('components/php/footer.php');?>
