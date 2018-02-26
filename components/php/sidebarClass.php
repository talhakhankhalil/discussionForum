<?php
class sidebar{
    public function getTags(){
        global $pdo;
        $q = $pdo->query('SELECT * FROM tags');
        $tags = [];
        $res = $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $q->fetch()){
            $tags[]=$row;
        }
        return $tags;
    }
    public function trendingQuestion(){
        global $pdo;
        $q = $pdo->query('SELECT * FROM question order by id desc limit 5');
        $rowsQuestion = [];
        $res = $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $q->fetch()){
            $rowsQuestion[]=$row;
        }
        return $rowsQuestion;
    }
    
    public function hotQuestion(){
        global $pdo;
        $q = $pdo->query('select q.id,q.title, count(a.question_id) as rep from question q join answer a on q.id = a.question_id group by a.question_id having rep > 1 limit 10
');
        $rowsQuestion = [];
        $res = $q->execute();
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $q->fetch()){
            $rowsQuestion[]=$row;
        }
        return $rowsQuestion;
    }
     public function questionByTags($id){
        global $pdo;
        $rowsQuestion = [];
        $q = $pdo->prepare('SELECT q.id, q.title,q.description,q.created_at FROM question q join tags_question tq join tags t on q.id = tq.question_id and t.id = tq.tag_id where tq.tag_id = ?');
        $res = $q->execute(array($id));
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $q->fetch()){
            $rowsQuestion[]=$row;
        }
        return $rowsQuestion;
    }
}

?>