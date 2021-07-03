<?

namespace Sens\Impact\Utils;

class Strings
{

  /**
   * Возвращает правильное склонение по числу
   * @param int $number
   * @param array $titles
   * @return mixed
   * @example
   * number = 1;
   * $number2 = 2;
   * $number3 = 5;
   * $iNumber = 1; // 1 день | 2 дня | 5 дня
   * $arTitles = ['день', 'дня', 'дней'];
   * $sDays = "$iNumber " . Strings::number($iNumber, $arTitles);
   * echo $sDays; // 1 день
   */
  public static function number(int $number, array $titles): string
  {
    return $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][min($number % 10, 5)]];
  }

}
