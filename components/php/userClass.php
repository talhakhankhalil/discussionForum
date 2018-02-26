<?php 

class user{

    private $name, $email, $password, $bio, $profession, $website, $qualification;

    public function user_register($postArray){
        $this->name = $postArray['name'];
        $this->email = $postArray['email'];
        $this->password = $postArray['password'];
        $this->bio = $postArray['bio'];
        $this->profession = $postArray['profession'];
        $this->website = $postArray['website'];
        $this->qualification = $postArray['qualification'];
        $hash_password = md5($this->password);
        global $pdo;
        $query = $pdo->prepare("INSERT INTO user (name,email, qualification,profession,bio,website,password) VALUES (?,?,?,?,?,?,?)");
        $user_array = array($this->name,$this->email,$this->qualification,$this->profession,$this->bio,$this->website, $hash_password);
        if($query->execute($user_array)) {
            return true;
        }else{
            return false;
        }

    }
    public function verifyUser($postarray){
        global $pdo;
        $this->email = $postarray['email'];
        $this->password = md5($postarray['password']);
        $q = $pdo->prepare("SELECT * from user where email=? and password=?");
        $logindetails = array($this->email,$this->password);
        $q->execute($logindetails);
        $result = $q->fetch(PDO::FETCH_ASSOC);
        if($result){
            $_SESSION['loggedin']=true;
            $_SESSION['userid']=$result['id'];
            return true;
        }
        else{
            return false;
        }
    }
}