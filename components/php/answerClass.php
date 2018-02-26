<?php 

class answer{
    private $answer_desc;

    public function submitAnswer($postArray,$questionId){
        $this->answer_desc = $postArray['answer'];
        global $pdo;
        $query = $pdo->prepare("INSERT INTO answer (user_id,question_id,description) VALUES (?,?,?)");
        $answer_fields = array($_SESSION['userid'],$questionId,$this->answer_desc);
        $res = $query->execute($answer_fields);
        if($res) {
            return true;
        }else{
            return false;
        }

    }

    public function getanswer($id){
        global $pdo;
        $ansCollection = [];
        $q = $pdo->prepare('SELECT a.description, u.name from answer a join user u on a.user_id = u.id where question_id=?');
        $res = $q->execute(array($id));
        $q->setFetchMode(PDO::FETCH_ASSOC);
        if ($q->rowCount()){
            while($row = $q->fetch()){
                $anscollection[] = $row;
            }
            return $anscollection;
        }else {
            return 0;
        }
    }
}


?>