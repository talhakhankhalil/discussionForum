<?php 
class question{

    private $title, $description, $tags=[];

    public function insertTags(){
        $tagsnotfound=[];

        global $pdo;
        foreach($this->tags as $tag){
            $q = $pdo->prepare("SELECT * from tags where tag_name=?");
            $res = $q->execute(array($tag));
            if(!$q->fetchColumn()){
                $tagsnotfound[] = $tag;
            }
        }

        foreach($tagsnotfound as $instag){
            $insq= $pdo->prepare("INSERT INTO tags (tag_name) VALUES (?)");
            $insq->execute(array($instag));
        }
    }

    public function submitQuestion($postArray){
        $this->title = $postArray['q_title'];
        $this->description = $postArray['q_description'];
        $this->tags = explode(',',strtolower(trim($postArray['q_tags'])));

        global $pdo;
        $query = $pdo->prepare("INSERT INTO question (user_id,title,description,created_at) VALUES (?,?,?,?)");
        $question_fields = array($_SESSION['userid'],$this->title,$this->description,date("Y.m.d"));
        $res = $query->execute($question_fields);
        if($res) {
            $question_id = $pdo->lastInsertId();
            $tag_id =  self::insertTags();

            self::linkQuestionTags($question_id);
            return true;
        }else{
            return false;
        }

    }
    public function linkQuestionTags($question_id){
        $tagsid=[];
        global $pdo;
        foreach($this->tags as $tag){
            $q = $pdo->prepare("SELECT * from tags where tag_name=?");
            $q->execute(array($tag));
            $result = $q->fetch(PDO::FETCH_ASSOC);
            $tagsid[] = $result['id'];
        }

        $q = $pdo->prepare("SELECT * from question where id=?");
        $q->execute(array($question_id));
        $result = $q->fetch(PDO::FETCH_ASSOC);
        $quesid = $result['id'];

        foreach($tagsid as $tagid){
            $q = $pdo->prepare("INSERT INTO tags_question (tag_id,question_id) VALUES(?,?)");
            $q->execute(array($tagid,$quesid));
        }

    }
    public function getQuestionDetails(){
        global $pdo;

        $q = $pdo->query('SELECT q.id,q.title,q.description,q.created_at,u.name FROM user as u join question as q on q.user_id = u.id');
        $res = $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $collection = [];
        while($row = $q->fetch()){
            $row['tagname']= self::getQuestionTags($row['id']);
            $collection[] = $row;
        }
        return $collection;

    }
    public function getQuestionTags($qid){
        global $pdo;
        $q = $pdo->prepare('SELECT tag_name FROM tags_question tq join tags as t on tq.tag_id=t.id where tq.question_id =?');
        $cats = [];
        $res = $q->execute(array($qid));
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $q->fetch()){
            $cats[]=$row['tag_name'];
        }
        return $cats;
    }
    public function getQuestion($id){
        global $pdo;
        $q = $pdo->prepare('SELECT * from question where id=?');
        $res = $q->execute(array($id));
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $row = $q->fetch();
        return $row;
    }
    public function getRepliesCount($qid){
         global $pdo;
        $ansCollection = [];
        $q = $pdo->prepare('SELECT count(a.question_id) as countreplies from question q join answer a on q.id = a.question_id where q.id=?');
        $res = $q->execute(array($qid));
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $row = $q->fetch();
        return $row['countreplies'];
    }
}