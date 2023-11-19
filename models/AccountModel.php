<?php
namespace Project\models;

require_once __DIR__ . "/../config/connectdb.php";


class AccountModel
{
    function createAccount($username, $password, $email, $userphone)
    {
        $db = connectDB();

        $stmt = $db->prepare("INSERT INTO user (username, password, email, userphone) VALUES (:username, :password, :email,
:userphone)");
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([
            "username" => $username,
            "password" => $hashed_password,
            "email" => $email,
            "userphone" => $userphone
        ]);

        return true;
    }
    function getUser($username)
    {
        $db = connectDB();

        $stmt = $db->prepare("select * from user where username =:username");
        $stmt->execute([
            "username" => $username
        ]);
        $account = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $account;
    }
}
?>