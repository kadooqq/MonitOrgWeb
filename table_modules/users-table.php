<?php

class UserTable {
    public static string $table_name = "wp_users";

    public static function sign_up(string $login, string $password) {
        $db = Database::getConnection();
        $login = $db->real_escape_string($login);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO ".static::$table_name. " (`user_login`, `user_pass`) VALUES ('$login', '$password')";

        $result = mysqli_query($db, $query);
    }

    public static function get_user_by_login(string $login) :array {
        $db = Database::getConnection();
        $login = $db->real_escape_string($login);
        $login = "'$login'";

        $query = "select * from ".static::$table_name." WHERE user_login=".$login.";";

        $result = mysqli_query($db, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}