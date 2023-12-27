<?php

namespace App\Enums;

enum UserRoleEnum: string {
    case ROLE_STUDENT = 'student';
    case ROLE_INSTRUCTOR = 'instructor';

    public static function toArray(): array
    {
        $array = [];

        foreach (self::cases() as $case) {
            $array[$case->name] = $case->value;
        }

        return $array;
    }

    public static function getValues(): array
    {
        $array = [];

        foreach (self::cases() as $case) {
            array_push($array, $case->value);
        }

        return $array;
    }
}
