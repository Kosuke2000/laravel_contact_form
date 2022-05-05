<?php

namespace App\Services;

class CheckFormData
{

    public static function checkGender($contact)
    {
        if ($contact->gender === 0) {
            $gender = '男性';
        }
        if ($contact->gender === 1) {
            $gender = '女性';
        }

        return $gender;
    }

    public static function checkAge($contact)
    {
        if ($contact->age === 1) {
            $age = '10代';
        }
        if ($contact->age === 2) {
            $age = '20代';
        }
        if ($contact->age === 3) {
            $age = '30代';
        }
        if ($contact->age === 4) {
            $age = '40代';
        }
        if ($contact->age === 5) {
            $age = '50代';
        }
        if ($contact->age === 6) {
            $age = '60代';
        }

        return $age;
    }
}
