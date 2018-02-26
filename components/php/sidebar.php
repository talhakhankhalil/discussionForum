<?php
$tags = $sidebarhandler->getTags();
$trendingQuestion = $sidebarhandler->trendingQuestion();
$hotQuestion = $sidebarhandler->hotQuestion();
?>
<div class="sidebar">
    <div class="trending-topics">
        <h2>Recent Questions</h2>
        <ul>
            <?php foreach($trendingQuestion as $ques):?>
            <li><a href="single.php?id=<?php echo $ques['id']; ?>"><?php echo $ques['title']; ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="trending-topics">
        <h2>Hot Topics</h2>
        <ul>
            <?php foreach($hotQuestion as $ques):?>
            <li><a href="single.php?id=<?php echo $ques['id']; ?>"><?php echo $ques['title']; ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="categories-widget">
        <h2>Categories</h2>
        <ul class="cats">
            <?php foreach($tags as $tag):?>
            <li><a href="singleCat.php?id=<?php echo $tag['id']; ?>"><?php echo $tag['tag_name']; ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</div>