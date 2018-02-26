<?php
session_start();
include "components/php/dbConnection.php";
$connection = new connection();
include "components/php/userClass.php";
include "components/php/questionClass.php";
include "components/php/sidebarClass.php";
$sidebarhandler = new sidebar();
$tagsQuestion = $sidebarhandler->questionByTags($_GET['id']);

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
    <div class="main-content">
        <?php foreach($tagsQuestion as $ques): ?>
        <div class="post">
            <a href="single.php?id=<?php echo $ques['id']?>"><h2 class="post-title"><?php echo $ques['title']; ?></h2></a>
            <p class="description"><?php echo substr($ques['description'],0,150)." ..."; ?></p>
            <p class="description" style="font-weight:bolder"><?php echo "published on : ( ".$ques['created_at']." )"; ?></p>
        </div>
        <?php endforeach ?>
    </div>
    <?php include('components/php/sidebar.php');?>
</div>
<!-- Wrapper ends -->
<?php include('components/php/footer.php');?>
