<?php

namespace RoocketValidation;
class Validation
{
    public function has(array $data, string $field) : bool
    {
        return isset($data[$field]);
    }

    public function get()
    {
        echo "get data repositories 21";
    }
}