<?php

namespace App\Enums;


enum CourseStatusEnum: string {
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case REJECTED = 'rejected';
    case PENDING = 'pending';

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
