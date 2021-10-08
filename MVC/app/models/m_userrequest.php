<?php
class UserRequest extends MySQLDB
{
    public function sendQuery($query)
    {
        try {
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return true;
        } catch (exception $e) {
            return false;
        }
    }

    public function showRequest()
    {
        $_aresult = array(); //SAVE ALL USER REQUEREMENTS
        //FILTER DATE
        $query =
            "   SELECT DATE_FORMAT(post_at, '%d/%m/%Y') as date
                FROM `support`
                GROUP BY date DESC;
            ";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //SELECT & SAVE USER REQUIREMENTS FOR DAYS
            $_arequest = array();
            $query =
                "   SELECT
                        post_id, user_name, content,
                        DATE_FORMAT(post_at,'%d/%m/%Y') as date_post,
                        DATE_FORMAT(post_at,'%H:%i:%s') as time_post
                    FROM `support`
                    WHERE DATE_FORMAT(post_at,'%d/%m/%Y')='$row[date]'
                ";
            $stmt1 = $this->con->prepare($query);
            $stmt1->execute();
            while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                array_push(
                    $_arequest,
                    array(
                        "post_id" => $row1["post_id"],
                        "user_name" => $row1["user_name"],
                        "content" => $row1["content"],
                        "date_post" => $row1["date_post"],
                        "time_post" => $row1["time_post"]
                    )
                );
            }
            array_push($_aresult, $_arequest);
        }
        return json_encode($_aresult);
    }
}
