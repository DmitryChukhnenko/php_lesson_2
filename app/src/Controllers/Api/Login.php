<?php

namespace Controllers\Api;

use Request\Post;

class Login {
    public function postRequest(Post $request) : string {
        return print_r($request, true);
    }
}