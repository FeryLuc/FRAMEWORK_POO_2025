<?php

namespace Core\Helpers;

function truncate(string $string, int $lg_max = 150): string{
    if(strlen($string) > $lg_max):
        $string = substr($string, 0, $lg_max);
        $last_space = strrpos($string, ' ');
        return substr($string, 0, $last_space) . '...';
    endif;
    return $string;
}

function slugify(String $text):string{
    // Strip html tags
    $text=strip_tags($text);
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate
    setlocale(LC_ALL, 'en_US.utf8');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim
    $text = trim($text, '-');
    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
    // Lowercase
    $text = strtolower($text);
    // Check if it is empty
    if (empty($text)) { return 'n-a'; }
    // Return result
    return $text;
}

function formatDate(string $str): string{
    return date("d/m/Y", strtotime($str));
}