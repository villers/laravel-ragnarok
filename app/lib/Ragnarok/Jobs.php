<?php
/**
 * Created by IntelliJ IDEA.
 * User: mickaelvillers
 * Date: 16/07/2017
 * Time: 17:28
 */

namespace App\Lib\Ragnarok;


class Jobs
{
    static function get($id)
    {
        $jobs = [
            // 1st Job
            0 => "Novice",
            1 => "Swordman",
            2 => "Mage",
            3 => "Archer",
            4 => "Acolyte",
            5 => "Merchant",
            6 => "Thief",

            // 2nd Job
            7 => "Knight",
            8 => "Priest",
            9 => "Wizard",
            10 => "Blacksmith",
            11 => "Hunter",
            12 => "Assassin",
            14 => "Crusader",
            15 => "Monk",
            16 => "Sage",
            17 => "Rogue",
            18 => "Alchemist",
            19 => "Bard",
            20 => "Dancer",

            //Advanced 1st Job
            4001 => "High Novice",
            4002 => "High Swordman",
            4003 => "High Mage",
            4004 => "High Archer",
            4005 => "High Acolyte",
            4006 => "High Merchant",
            4007 => "High Thief",

            // Advanced 2nd Job
            4008 => "Lord Knight",
            4009 => "High Priest",
            4010 => "High Wizard",
            4011 => "Whitesmith",
            4012 => "Sniper",
            4013 => "Assassin Cross",
            4015 => "Paladin",
            4016 => "Champion",
            4017 => "Professor",
            4018 => "Stalker",
            4019 => "Creator",
            4020 => "Clown",
            4021 => "Gypsy",

            // Expanded Classes
            23 => "Super Novice",
            24 => "Gunslinger",
            25 => "Ninja",
            4045 => "Super Baby",
            4046 => "Taekwon",
            4047 => "Star Gladiator",
            4049 => "Soul Linker",
        ];

        if (array_key_exists($id, $jobs)) {
            return $jobs[$id];
        }

        return null;
    }
}