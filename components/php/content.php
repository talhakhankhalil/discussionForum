 <?php $questions = $question->getQuestionDetails();?>
  <div class="main-content">
    <?php foreach($questions as $ques): ?>
    <div class="post">
        <a href="single.php?id=<?php echo $ques['id']?>"><h2 class="post-title"><?php echo $ques['title']; ?></h2></a>
        <p class="description"><?php echo substr($ques['description'],0,150)." ..."; ?></p>
        <p class="description" style="font-weight:bolder"><?php echo "published on : ( ".$ques['created_at']." )"; ?></p>
        <div class="post-footer">
            <span class="asked"><span style="color:white">Asked by :</span> <?php echo $ques['name']; ?></span>
            <span id="repliescount"><a href="single.php?id=<?php echo $ques['id']?>"><?php echo $question->getRepliesCount($ques['id']);?> Replies</a></span>
            <div class="categories">
                <ul class="cats">
                    <li><a href="#"><?php echo implode(", ",$ques['tagname']); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
     <?php endforeach ?>
</div>