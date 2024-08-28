<?php

namespace Models;
use Database\DB;

class User {
    public ?int $id;
    public ?string $login;
    public ?string $password;
    public ?string $token;

    public static function getAllUsers() : array {
        return DB::getInstance()->
        getRowByClass('SELECT * FROM users', '\Models\User');
    }

    public static function getUserById($login) : User {
        $user = (DB::getInstance()->
        getRowByClass("SELECT * FROM users WHERE login = {$login};", '\Models\User'))[0];  
        return empty($user) ? null : $user;      
    }
}