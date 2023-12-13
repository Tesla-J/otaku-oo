<?php

interface DTO{
    # Returns an array representation of a DTO object
    public function toArray() : array;

    # Converts an array returned from a DAO object into a specific DTO object
    public static function parseArray(array $data) : array;
}