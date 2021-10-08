<?php
class User extends MySQLDB
{
    public function checkUserName($user_name)
    {
        $query = $this->con->prepare("SELECT user_name FROM `users` WHERE BINARY user_name='$user_name'");
        $query->execute();
        $count_row = $query->rowCount();
        if ($count_row == 0)
            return true;
        else
            return false;
    }

    public function checkEmail($email)
    {
        $query = $this->con->prepare("SELECT user_name FROM `users` WHERE BINARY email='$email'");
        $query->execute();
        $numof_rows = $query->rowCount();
        if ($numof_rows == 0) {
            return true;
        }
        return false;
    }

    public function signUp($user_name, $email, $password)
    {
        if ($this->checkUserName($user_name) && $this->checkEmail($email)) {
            $query = "SELECT * FROM `users`";
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($row["user_name"] == "") {
                    $id = $row["id"];
                    $_SESSION["user_id"] = $row["id"];
                    $_SESSION["user_name"] = $user_name;
                    break;
                }
            }
            if (isset($id)) {
                $query = $this->con->prepare("UPDATE `users` SET user_name='$user_name', email='$email', password='$password' WHERE id='$id'");
            } else {
                $query = $this->con->prepare("INSERT INTO `users` VALUES('','$user_name','$email','$password')");
            }
            $query->execute();
            return true;
        }
        return false;
    }

    public function signIn($user, $password)
    {
        $query = "SELECT * FROM `users`
                WHERE (BINARY user_name='$user' OR BINARY email='$user')";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_name"] = $row["user_name"];
            return true;
        }
        return false;
    }

    public function delUser()
    {
        $query = "UPDATE `users` SET user_name='', email='',password='' WHERE id='$_SESSION[user_id]'";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
    }
    public function getListUser()
    {
        $query = $this->con->prepare("SELECT * FROM `users` WHERE user_name!=''");
        $query->execute();
        $_aresult = array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            array_push($_aresult, array($row['id'], $row['user_name'], $row['email']));
        }
        return json_encode($_aresult);
    }
    public function numOfUsers()
    {
        $query = "SELECT id FROM `users` WHERE user_name!= ? ";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(1, $value);
        $value = "";
        $stmt->execute();
        return json_encode($stmt->rowCount());
    }
    public function sendSupport($support_content)
    {
        try {
            $query = "INSERT INTO `support`(post_id,user_id,user_name,content) VALUES('','$_SESSION[user_id]','$_SESSION[user_name]','$support_content')";
            $stmt = $this->con->prepare($query);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
