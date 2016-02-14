<?php namespace Appbundle\Utils;

class Slugger
{
    public function sluggify($string)
    {
        return preg_replace(
            '/[^a-z0-9]/',
            '-',
            strtolower(trim(strip_tags($string)))
        );
    }
}
