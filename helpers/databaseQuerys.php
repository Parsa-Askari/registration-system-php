<?php
class Users
{
    public $select_query="
    SELECT * FROM Users 
    WHERE Uname=?
    ";
    public $insert_query="
    INSERT INTO Users(Uname,Mail,Pass)
    Values(?,?,?)    
    ";
    public $update_query="
    UPDATE Users
    SET Pass=?
    WHERE Uname=?
    ";
    public function select($pdo,$username)
    {
        $stmt = $pdo->prepare($this->select_query);
        $stmt->execute([$username]);
        $results=$stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
    public function insert($pdo,$username,$email,$password,$hash=true)
    {
        if($hash==true)
        {
            $password=password_hash($password,PASSWORD_DEFAULT);
        }
        $stmt=$pdo->prepare($this->insert_query);
        $stmt->execute([$username,$email,$password]);
    }
    public function update($pdo,$username,$password,$hash=true)
    {
        if($hash==true)
        {
            $password=password_hash($password,PASSWORD_DEFAULT);
        }
        $stmt=$pdo->prepare($this->update_query);
        $stmt->execute([$password,$username]);
    }
}
class Admin
{
    public $select_query="
    SELECT * FROM Admin 
    WHERE Uname=?
    ";
    public $insert_query="
    INSERT INTO Admin(Uname,Mail,Pass)
    Values(?,?,?)    
    ";
    public $update_query="
    UPDATE Admin
    SET Pass=?
    WHERE Uname=?
    ";
    public function select($pdo,$username)
    {
        $stmt = $pdo->prepare($this->select_query);
        $stmt->execute([$username]);
        $results=$stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
    public function insert($pdo,$username,$email,$password,$hash=true)
    {
        if($hash==true)
        {
            $password=password_hash($password,PASSWORD_DEFAULT);
        }
        $stmt=$pdo->prepare($this->insert_query);
        $stmt->execute([$username,$email,$password]);
    }
    public function update($pdo,$username,$password,$hash=true)
    {
        if($hash==true)
        {
            $password=password_hash($password,PASSWORD_DEFAULT);
        }
        $stmt=$pdo->prepare($this->update_query);
        $stmt->execute([$password,$username]);
    }
}
$users=new Users();
$admin=new Admin();







