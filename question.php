<?php 
session_start();
include "components/php/dbConnection.php";
$connection = new connection();
include "components/php/questionClass.php";
if(isset($_POST['submitquestion'])){
$ques = new question();
$res = $ques->submitQuestion($_POST);
    if(!$res){
        echo "Problem!";
    }
}
?>
<?php include "components/php/header.php"; ?>
<div class="wrapper">
    <div class="reg-form">
        <form action="#" method="post">
            <label for="name">Title: </label><input type="text" name="q_title" required><br>
            <label for="name">Description: </label> <textarea id="q_desc" name="q_description" id="" cols="55" rows="10" required></textarea><br>
            <label for="name">Category: </label>  <input type="text" name="q_tags" placeholder="Max 3 tags separated by commas"/><br>
            <input type="submit" value="Post Question" name="submitquestion">
        </form>
    </div>
</div>
<?php include "components/php/footer.php" ?>