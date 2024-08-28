<?php

namespace Controllers\Api;

use Models\User;
use Request\Post;
use Database\DB;

class Login {
    public function postRequest(Post $request) : string {
        if (!$request->has('login') || !$request->has('password')) return '{error: Incorrect data}';
        $user = User::getUserById($request->has('login'));
        if ($request->get('password') !== $user->password) return '{error: Incorrect password}';

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $token = substr(str_shuffle($permitted_chars), 0, 10);
        DB::getInstance()->query("UPDATE users SET token = {$token} WHERE id={$user->id};");
        return '{token: ' . $token . '}';
    }
}