<?php
/**
 * Created by: skiv
 * Date: 03.07.11
 * Time: 1:23
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Translit
{
  public static function rus2lat($s)
  {
    // Функция обратимой перекодировки кириллицы в транслит.
    // Сначала всё переводим в верхний регистр, причём не с помощью глючной strtoupper
    self::UpLow($s);
    //а потом только кириллицу в нижний

    $s = str_replace("ЫА", "yha", $s);
    $s = str_replace("ЫО", "yho", $s);
    $s = str_replace("ЫУ", "yhu", $s);
    $s = str_replace("Ё", "yo", $s);
    $s = str_replace("Ж", "zh", $s);
    $rus = "АБВГДЕЗИЙКЛМНОПРСТУФХЦ";
    $lat = "abvgdezijklmnoprstufxc";

    $transtable = array(
      'А' => 'a',
      'Б' => 'b',
      'В' => 'v',
      'Г' => 'g',
      'Д' => 'd',
      'Е' => 'e',
      'З' => 'z',
      'И' => 'i',
      'Й' => 'j',
      'К' => 'k',
      'Л' => 'l',
      'М' => 'm',
      'Н' => 'n',
      'О' => 'o',
      'П' => 'p',
      'Р' => 'r',
      'С' => 's',
      'Т' => 't',
      'У' => 'u',
      'Ф' => 'f',
      'Х' => 'h',
      'Ц' => 'ts',
    );

    $s = strtr($s, $transtable);

    $s = str_replace("Ч", "ch", $s);
    $s = str_replace("Ш", "sh", $s);
    $s = str_replace("Щ", "shh", $s);
    $s = str_replace("Ъ", "qh", $s);
    $s = str_replace("Ы", "y", $s);
    $s = str_replace("Ь", "q", $s);
    $s = str_replace("Э", "eh", $s);
    $s = str_replace("Ю", "yu", $s);
    $s = str_replace("Я", "ya", $s);
    $s = str_replace(" ", "_", $s); // сохраняем пробел от перехода в %20
    $s = str_replace(",", "_", $s); // сохраняем запятую
    $s = str_replace('"', "&quot;", $s); // сохраняем кавычки
    $s = rawurlencode($s); // Разрешённые символы URL - латинские буквы, точка, минус и подчёркивание
    return $s;
  } // function rus2lat($s)

  public static function UpLow(&$string, $registr = 'up')
  {
    $upper = 'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $lower = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяabcdefghijklmnopqrstuvwxyz';

    if ($registr == 'up') $string = strtr($string, $lower, $upper);
    else $string = strtr($string, $upper, $lower);

  } //function UpLow(&$string,$registr='up')

  public static function LowUp(&$string, $registr = 'up')
  {
    $upper = 'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $lower = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяabcdefghijklmnopqrstuvwxyz';

    if ($registr == 'up') $string = strtr($string, $lower, $upper);
    else $string = strtr($string, $upper, $lower);

  } //function UpLow(&$string,$registr='up')
}

?>