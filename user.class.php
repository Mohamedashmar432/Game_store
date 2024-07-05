<?php
include_once 'database.class.php';
class user
{
    public static function signup($fullname, $user, $mobile, $email, $pass, $dob)
    {

        // Get the database connection
        $conn = database::get_connect();
        $pass = strrev(md5($pass));   //security through obscurity

        $sql = "INSERT INTO `registration` (`fullname`, `username`, `mobile`, `email`, `password`, `dob`)
        VALUES ('$fullname', '$user', '$mobile', '$email', '$pass', '$dob');";

        $result = false;

        if ($conn->query($sql) === TRUE) {
            $result = true;
        } else {
            $result = $conn->error; // Change $conn->result to $conn->error to get the error message
        }

        $conn->close();
        return $result;
    }
    public static function login($user, $pass)
    {
        $conn = database::get_connect();
        $pass = strrev(md5($pass));

        $sql = "SELECT * FROM `registration` WHERE `username` = '$user'  AND `password`= '$pass' ";
        $result = $conn->query($sql);
        if (!$result) {
            echo "Error: " . $conn->error;
        } else {
            if ($result->num_rows == 1) {
                // Fetch the user data
                $row = $result->fetch_assoc();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user'] = $row['username'];
                return true;
            } else {
                // echo "No user found with username: $user";
                return false;
            }
        }
    }

    public static function load($template)
    {
        include $_SERVER['DOCUMENT_ROOT'] . "/Game_Store/$template.php";
    }
    public static function checkout($user_id, $username, $game, $itemid, $price, $discount, $image, $payment)
    {
        $conn = database::get_connect();

        $sql = "INSERT INTO `checkout` (`user_id`, `username`, `item_name`, `item_id`, `price`, `discount`, `image`, `payment`)
    VALUES ('$user_id', '$username', '$game', '$itemid', '$price', '$discount', '$image', '$payment');";


        $result = false;

        if ($conn->query($sql) === TRUE) {
            $result = true;
        } else {
            $result = $conn->error; // Change $conn->result to $conn->error to get the error message
        }

        $conn->close();
        return $result;
    }
    public static function getdata($user_id)
    {
        $conn = database::get_connect();

        $sql = "SELECT * FROM `registration` WHERE `id` = '$user_id' ";
        $result = $conn->query($sql);
        if (!$result) {
            echo "Error: " . $conn->error;
        } else {
            if ($result->num_rows == 1) {
                // Fetch the user data
                $row = $result->fetch_assoc();
                return $row;
            } else {
                // echo "No user found with username: $user";
                return false;
            }
        }
    }
    public static function get_game($user_id)
    {
        $conn = database::get_connect();

        $sql = "SELECT * FROM `checkout` WHERE `user_id` = '$user_id' ";
        $result = $conn->query($sql);

        if (!$result) {
            echo "Error: " . $conn->error;
            return false;
        } else {
            $games = array();


            while ($row = $result->fetch_assoc()) {
                $games[] = $row;
            }

            return $games;
        }
    }
    public static function logout()
    {
       
        session_unset();
        session_destroy();
        header("Location:index.php");}
   
}
