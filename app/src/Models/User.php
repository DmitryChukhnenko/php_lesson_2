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
}