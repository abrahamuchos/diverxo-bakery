<?php
/**
 * Created by PhpStorm.
 * User: abraham
 * Date: 2020-05-12
 * Time: 17:02
 */

namespace App\Helpers;


class Miscellaneous
{
  /**
   * Convert a text string into slug
   * @param $text
   * @return bool|false|string|string[]|void|null
   */
  public static function slugify($text)
  {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }
}