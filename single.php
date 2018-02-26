<?php
session_start();
include "components/php/dbConnection.php";
$connection = new connection();
include "components/php/questionClass.php";
include "components/php/answerClass.php";
include "components/php/sidebarClass.php";
$sidebarhandler = new sidebar();
$singleQuestion = new question();
$questionId = $_GET['id'];
$single = $singleQuestion->getQuestion($questionId);
$stateOfUser = "";
$postAnswer = new answer();
if(isset($_POST['submitAnswer'])){
    if(!isset($_SESSION['userid'])){
        $stateOfUser= "Please login to your account or register to contribute";
    }else{
       $postAnswer->submitAnswer($_POST,$questionId);
    }
}
$answer = $postAnswer->getAnswer($questionId);
?>

<?php include "components/php/header.php" ?>
<div class="wrapper">
    <div class="main-content">
        <div class="single-post">
            <h2 class="post-title"><?php echo $single['title'] ?></h2>
            <p class="description"><?php echo $single['description'] ?></p>
            <?php if($answer != 0) :?>
            <?php foreach($answer as $ans) : ?>
            <div class="single-post-footer">
                <div class="answer">
                    <p><?php echo $ans['description']?></p>
                    <div class="answer-by"><span>Answer by : </span><?php echo $ans['name']?></div>
                </div>
            </div>
            <?php endforeach ?>
            <?php else: ?>
             <div class="single-post-footer">
                <div class="answer">
                    <p><?php echo "not answer yet" ?></p>
                </div>
            </div>
            <?php endif ?>
            <div class="comment">
                <h3>Add you answer</h3>
                <?php if($stateOfUser){
    echo "<p>$stateOfUser</p>";
}
                ?>
                <form action="" method="post">
                    <textarea name="answer" id="" cols="100" rows="10" required></textarea>
                    <input type="submit" value="submit" name="submitAnswer">
                </form>
            </div>
        </div>
    </div>
    <?php include "components/php/sidebar.php" ?>
</div>
<!-- wrapper ends -->
<?php include "components/php/footer.php" ?>