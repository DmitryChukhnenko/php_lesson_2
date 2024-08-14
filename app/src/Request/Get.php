<?php

namespace Request;

class Get {
    private array $data;

    public function __construct(array $data) {
        $this->data = $data;
    }
 }